/**
 * Geo-location utility used mainly for advertisement (e.g. Meebo, AdConfig)
 */

/*global define*/
(function (context) {
	'use strict';

	/**
	 * @private
	 */
	function geo(cookies) {
		var cookieName = 'Geo',
			geoData = false;

		/**
		 * @public
		 *
		 * @return {Object}
		 */
		function getGeoData() {
			if (geoData === false) {
				var jsonData = decodeURIComponent(cookies.get(cookieName));
				geoData = JSON.parse(jsonData) || {};
			}

			return geoData;
		}

		return {
			getGeoData: getGeoData
		};
	}

	//namespace, window.Geo is legacy support for Meebo, see /extensions/wikia/Geo/geo.js
	//this depends on cookies.js and will fail if window.Wikia.Cookies is not defined
	context.Geo = context.Wikia.geo = geo(context.Wikia.Cookies);

	if (define && define.amd) {
		//AMD
		define('geo', function () {
			return context.Wikia.geo;
		});
	}
}(this));
