<?php
if( !defined( 'MEDIAWIKI' ) ) {
    echo "This is MediaWiki extension and cannot be used standalone.\n";
    exit( 1 ) ;
}

class RebuildLocalisationCacheTask extends BatchTask {
	public $mType;
	public $mVisible;
	public $mData;
	public $mParams;
	
	/**
	 * Contructor
	 * 
	 * @access public
         */
	public function  __construct() {
		$this->mType = "rebuild_localisation_cache";
		$this->mVisible = true;
		parent::__construct();
	}
	/**
	 * execute
	 * 
	 * Main entry point. TaskManagerExecutor runs this method.
	 * 
	 * @param mixed $params the data for a particular task
	 * @return boolean true on success
	 * @access public
	 */
	public function execute( $params = null ) {
		$this->mData = $params;
		$this->log( 'RebuildLocalisationCacheTask started.' );
		$out = wfShellExec(
			"pdsh -g all_web touch /tmp/l10n-rebuild"
		/*
			'pdsh -g all_web -f5 \'SERVER_ID=4036 php '
			. '/usr/wikia/source/wiki/maintenance/rebuildLocalisationCache.php '
			. '--force --conf /usr/wikia/conf/current/wiki.factory/LocalSettings.php\''
		*/
		);
		$this->log( $out );
		$this->log( 'RebuildLocalisationCacheTask completed.' );
		return true;
	}
	/**
	 * getForm
	 * 
	 * Does nothing.  We don't need that.  Created just for the sake of compatibility.
	 * 
	 * @access public
	 * @param $title mixed - Title object
	 * @param $data array default null - unserialized arguments for task
	 * @return boolean false
	 */
	public function getForm( $title, $data = null ) {
		return '<form id="task-form" action="'
			. $title->getLocalUrl( 'action=save' )
			. '" method="post">'
			. '<input type="hidden" name="wpType" value="'
			. $this->mType
			. '" /><fieldset>'
			. '<legend>Add Rebuild Localisation Cache task</legend>'
			. '<div style="text-align: center;">'
			. '<input type="submit" name="wpSubmit" value="Add task to queue" />'
			. '</div></fieldset></form>';
	}
	/**
	 * getType
	 * 
	 * Returns the type of the task.
	 * 
	 * @return string the type of the task
	 * @access public
	 */
	function getType() {
		return $this->mType;
	}
	/**
	 * isVisible
	 * 
	 * Returns visibility of the task.
	 * 
	 * @return boolean visibility of the task
	 * @access public 
	 */
	function isVisible() {
		return $this->mVisible;
	}
	/**
	 * submitForm
	 * 
	 * Creates the corresponding entry in the TaskManager queue.
	 * 
	 * @return boolean true
	 * @access public
	 */
	function submitForm() {
		global $wgOut, $wgUser;
		$this->mTaskID = $this->createTask( array() );
		$wgOut->addHTML( Wikia::successbox( 'Task added' ) );
		return true;
        }
};
