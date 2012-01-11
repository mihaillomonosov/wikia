var Geo = {
	cookieName : 'Geo',
	geoData : {}
}

Geo.getGeoData = function () {
	if ($.isEmptyObject(Geo.geoData)) {
		var jsonData = decodeURIComponent($.cookies.get(Geo.cookieName));
		Geo.geoData = JSON.parse(jsonData);
	}
	return Geo.geoData;
}

