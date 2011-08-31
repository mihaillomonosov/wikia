<?php

	require_once dirname(__FILE__) . '/../WikiFeatures.setup.php';

	class WikiFeaturesTest extends WikiaBaseTest {
		const TEST_CITY_ID = 79860;
		
		protected $wgWikicitiesReadOnly_org = null;
		protected $wgWikiFeatures_org = null;

		protected function setUpMock($cache_value=null) {
			if(is_null($cache_value)) {
				$mock_cache = $this->getMock('stdClass', array('delete'));
			} else {
				$mock_cache = $this->getMock('stdClass', array('get', 'set', 'delete'));
				$mock_cache->expects($this->any())
							->method('get')
							->will($this->returnValue($cache_value));
				$mock_cache->expects($this->any())
							->method('set');
			}
			$mock_cache->expects($this->any())
						->method('delete');

			$this->mockGlobalVariable('wgMemc', $mock_cache);
			$this->mockGlobalVariable('wgCityId', self::TEST_CITY_ID);

			$this->mockApp();
		}
		
		protected function setUpToggleFeature($is_allow) {
			global $wgWikicitiesReadOnly;
			
			$this->wgWikicitiesReadOnly_org = $wgWikicitiesReadOnly;
			$wgWikicitiesReadOnly = true;

			$mock_log = $this->getMock('LogPage', array('addEntry'), array(), '', false);
			$mock_log->expects($this->any())
						->method('addEntry');
			F::setInstance('LogPage', $mock_log);
			
			$mock_user = $this->getMock('User', array('isAllowed'));
			$mock_user->expects($this->any())
						->method('isAllowed')
						->will($this->returnValue($is_allow));
			
			$this->mockGlobalVariable('wgUser', $mock_user);
			
		}
		
		protected function tearDownToggleFeature() {
			global $wgWikicitiesReadOnly;
			
			$wgWikicitiesReadOnly = $this->wgWikicitiesReadOnly_org;
			F::unsetInstance('LogPage');
		}
		
		protected function setUpGetFeature($feature_type, $wg_wiki_features) {
			global $wgWikiFeatures;
			
			$this->wgWikiFeatures_org = $wgWikiFeatures;
			$wgWikiFeatures = $wg_wiki_features;
			
			if(isset($wg_wiki_features[$feature_type])) {
				foreach ($wg_wiki_features[$feature_type] as $feature) {
					$this->mockGlobalVariable($feature, true);
				}
			}	
		}
		
		protected function tearDownGetFeature() {
			global $wgWikiFeatures;
			
			$wgWikiFeatures = $this->wgWikiFeatures_org;
		}
		
		
		/**
		 * @dataProvider toggleFeatureDataProvider
		 */
		public function testToggleFeature($is_allow, $feature, $enabled, $exp_result, $exp_error) {
			$this->setUpToggleFeature($is_allow);
			$this->setUpMock();

			$response = $this->app->sendRequest('WikiFeaturesSpecialController', 'toggleFeature', array('feature' => $feature, 'enabled' => $enabled));
			
			$response_data = $response->getVal('result');
			$this->assertEquals($exp_result, $response_data);
			
			$response_data = $response->getVal('error');
			$this->assertEquals($exp_error, $response_data);
			
			$this->tearDownToggleFeature();
		}
		
		public function toggleFeatureDataProvider() {
			return array(
				array(false, null, null,'error', wfMsg('wikifeatures-error-permission')),	// permission denied
				array(true, null, null,'error', wfMsg('wikifeatures-error-invalid-parameter')),	// missing params - not pass $feature and $enabled
				array(true, null, 0,'error', wfMsg('wikifeatures-error-invalid-parameter')),	// missing params - not pass $feature
				array(true, 'wgEnableAchievementsExt', null,'error', wfMsg('wikifeatures-error-invalid-parameter')),	// missing params - not pass $enabled
				array(true, 'wgEnableAchievements', 'true','error', wfMsg('wikifeatures-error-invalid-parameter')),	// invalid params - $feature not found
				array(true, 123, 0,'error', wfMsg('wikifeatures-error-invalid-parameter')),	// invalid params - $feature is integer
				array(true, 'wgEnableAchievementsExt', 1,'error', wfMsg('wikifeatures-error-invalid-parameter')),	// invalid params - $enabled > 1
				array(true, 'wgEnableAchievementsExt', -3,'error', wfMsg('wikifeatures-error-invalid-parameter')),	// invalid params - $enabled is negative
				array(true, 'wgEnableAchievementsExt', 'test','error', wfMsg('wikifeatures-error-invalid-parameter')),	// invalid params - $enabled is string
				array(true, 'wgEnableAchievementsExt', '0','error', wfMsg('wikifeatures-error-invalid-parameter')),	// invalid params - $enabled is string

				array(true, 'wgEnableAchievementsExt', 'true','ok', null),	// enable feature
				array(true, 'wgEnableAchievementsExt', 'false','ok', null),	// disable feature
			);
		}

		/**
		 * @dataProvider getFeatureNormalDataProvider
		 */
		public function testGetFeatureNormal($wg_wiki_features, $exp_result) {
			$this->setUpGetFeature('normal', $wg_wiki_features);
			$this->setUpMock();

			$helper = new WikiFeaturesHelper();
			$response = $helper->getFeatureNormal();
			$this->assertEquals($exp_result, $response);

			$this->tearDownGetFeature();
		}
		
		public function getFeatureNormalDataProvider() {
			$wiki_features3 = array(
				'labs' => array('wgEnableChat'),
			);
			$wiki_features4 = array(
				'normal' => array('wgEnableAchievementsExt','wgEnablePageLayoutBuilder')
			);
			$exp4 = array (
				array ('name' => 'wgEnableAchievementsExt', 'enabled' => true),
				array ('name' => 'wgEnablePageLayoutBuilder', 'enabled' => true),
			);
			$wiki_features5 = array_merge($wiki_features3, $wiki_features4);
			
			return array(
				array(null, array()),	// invalid wgWikiFeatures - null
				array(array(), array()),	// invalid wgWikiFeatures - array()
				array($wiki_features3, array()),	// invalid wgWikiFeatures - key does not exist
				array($wiki_features4, $exp4),
				array($wiki_features5, $exp4)
			);
		}

		/**
		 * @dataProvider getFeatureLabsDataProvider
		 */
		public function testGetFeatureLabs($wg_wiki_features, $exp_result, $cache_value=null) {
			$this->setUpGetFeature('labs', $wg_wiki_features);
			$this->setUpMock($cache_value);

			$helper = new WikiFeaturesHelper();
			$response = $helper->getFeatureLabs();
			$this->assertEquals($exp_result, $response);

			$this->tearDownGetFeature();
		}
		
		public function getFeatureLabsDataProvider() {
			$wiki_features3 = array(
				'normal' => array('wgEnableAchievementsExt','wgEnablePageLayoutBuilder')
			);
			$wiki_features4 = array(
				'labs' => array('wgEnableChat'),
			);
			$exp4 = array (
				array ('name' => 'wgEnableChat', 'enabled' => true, 'active' => 500),
			);
			$cache_value4 = '500';
			$wiki_features5 = array_merge($wiki_features3, $wiki_features4);
			$cache_value5 = 500;
			
			return array(
				array(null, array()),	// invalid wgWikiFeatures - null
				array(array(), array()),	// invalid wgWikiFeatures - array()
				array($wiki_features3, array()),	// invalid wgWikiFeatures - key does not exist
				array($wiki_features4, $exp4, $cache_value4),
				array($wiki_features5, $exp4, $cache_value5)
			);
		}
	}