var AdConfig2Late = function (
	// regular dependencies
	log, window

	// AdProviders
	, adProviderAdDriver2
	, adProviderGamePro
	, adProviderLiftium2Dom
	, adProviderNull
) {
	'use strict';

	var log_group = 'AdConfig2'
		, city_lang = window.wgContentLanguage
		, getProvider
		, fakeLiftium = {}
	;

	getProvider = function(slot) {
		var slotname = slot[0];

		log('getProvider', 5, log_group);
		log(slot, 5, log_group);

		if (slot[2] === 'Liftium2') {
			return adProviderLiftium2Dom;
		}
		if (slot[2] === 'Liftium2Dom') {
			return adProviderLiftium2Dom;
		}

		// First ask GamePro (german lang wiki)
		if (city_lang === 'de') {
			if (slotname === 'PREFOOTER_RIGHT_BOXAD' || slotname === 'LEFT_SKYSCRAPER_3' || slotname === 'TOP_RIGHT_BUTTON') {
				return adProviderNull;
			}
			if (adProviderGamePro.canHandleSlot(slot)) {
				return adProviderGamePro;
			}
		}

		if (adProviderLiftium2Dom.canHandleSlot(slot)) {
			return adProviderLiftium2Dom;
		}

		return adProviderNull;
	};

	return {
		getProvider: getProvider
	};
};
