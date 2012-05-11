/**
 * Loads library file if it's not already loaded and fires callback
 *
 * For "internal" use only. Please use $.loadFooBar() functions in extension code.
 */
$.loadLibrary = function(name, files, typeCheck, callback, failureFn) {
	var dfd = new jQuery.Deferred();

	if (typeCheck === 'undefined') {
		$().log('loading ' + name, 'loadLibrary');

		// cast single string to an array
		files = (typeof files == 'string') ? [files] : files;

		$.getResources(files, function() {
			$().log(name + ' loaded', 'loadLibrary');

			if (typeof callback == 'function') {
				callback();
			}
		},failureFn).
			// implement promise pattern
			then(function() {
				dfd.resolve();
			}).
			fail(function() {
				dfd.reject();
			});
	}
	else {
		$().log(name + ' already loaded', 'loadLibrary');

		if (typeof callback == 'function') {
			callback();
		}

		dfd.resolve();
	}

	return dfd.promise();
};

/**
 * Libraries loader functions follows
 */

// load YUI if not yet loaded
$.loadYUI = (function() {
	var queue = false;

	return function(callback) {
		// we need load YUI and use callbacks queue
		if (typeof YAHOO === 'undefined') {
			if (queue === false) {
				queue = $.getResources([wgYUIPackageURL]);
				$().log('loading on-demand', 'YUI');

				queue.then(function() {
					$().log('loaded', 'YUI');
				});
			}

			// add to queue
			if (typeof callback === 'function') {
				queue.then(callback);
			}

			// return the same deferred object when loading YUI
			return queue;
		}
		else {
			$().log('already loaded', 'YUI');

			// YUI is loaded
			if (typeof callback === 'function') {
				callback();
			}

			// promise is resolved
			var dfd = new jQuery.Deferred();
			dfd.resolve();

			return dfd.promise();
		}
	};
})();

// jquery.wikia.modal.js in now a part of AssetsManager package
$.loadModalJS = function(callback) {
	callback && callback();
};

// load various jQuery libraries (if not yet loaded)
$.loadJQueryUI = function(callback) {
	return $.loadLibrary('jQueryUI',
		stylepath + '/common/jquery/jquery-ui-1.8.14.custom.js',
		typeof jQuery.ui,
		callback
	);
}

$.loadJQueryAutocomplete = function(callback) {
	return $.loadLibrary('jQuery Autocomplete',
		stylepath + '/common/jquery/jquery.autocomplete.js',
		typeof jQuery.fn.pluginAutocomplete,
		callback
	);
};

$.loadWikiaTooltip = function(callback) {
	return $.loadLibrary('Wikia Tooltip',
		[
			stylepath + '/common/jquery/jquery.wikia.tooltip.js',
			$.getSassCommonURL("skins/oasis/css/modules/WikiaTooltip.scss")
		],
		typeof jQuery.fn.wikiaTooltip,
		callback
	);
};

$.loadJQueryAIM = function(callback) {
	return $.loadLibrary('jQuery AIM',
		stylepath + '/common/jquery/jquery.aim.js',
		typeof jQuery.AIM,
		callback
	);
};

$.loadMustache = function(callback) {
	return $.loadLibrary('Mustache',
		stylepath + '/common/jquery/jquery.mustache.js',
		typeof jQuery.mustache,
		callback
	);
};

$.loadGoogleMaps = function(callback) {
	var dfd = new jQuery.Deferred(),
		onLoaded = function() {
			if (typeof callback === 'function') {
				callback();
			}
			dfd.resolve();
		};

	// Google Maps API is loaded
	if (typeof (window.google && google.maps) != 'undefined') {
		onLoaded();
	}
	else {
		window.onGoogleMapsLoaded = function() {
			delete window.onGoogleMapsLoaded;
			onLoaded();
		}

		// load GoogleMaps main JS and provide a name of the callback to be called when API is fully initialized
		$.loadLibrary('GoogleMaps',
			'http://maps.googleapis.com/maps/api/js?sensor=false&callback=onGoogleMapsLoaded',
			typeof (window.google && google.maps)
		).
		// error handling
		fail(function() {
			dfd.reject();
		});
	}

	return dfd.promise();
};

$.loadFacebookAPI = function(callback) {
	return $.loadLibrary('Facebook API',
		window.fbScript || '//connect.facebook.net/en_US/all.js',
		typeof window.FB,
		callback
	);
};

$.loadGooglePlusAPI = function(callback) {
	return $.loadLibrary('Google Plus API',
		'//apis.google.com/js/plusone.js',
		typeof (window.gapi && window.gapi.plusone),
		callback
	);
};

$.loadTwitterAPI = function(callback) {
	return $.loadLibrary('Twitter API',
		'//platform.twitter.com/widgets.js',
		typeof (window.twttr && window.twttr.widgets),
		callback
	);
};