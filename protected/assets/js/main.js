if(!LAYOUT)
	var LAYOUT = {};

LAYOUT.init = function() {
	LAYOUT.loadHeader();
};

LAYOUT.loadHeader = function() {
	LAYOUT.headerScaledBackgroundObj.css({
		width: document.width,
		left: ($('#content').width() - document.width) / 2
	});
	
};

$(function(){
	//Seletores
	LAYOUT.headerObj 					= $('div#page > div#header');
	LAYOUT.headerSearchContentObj 		= LAYOUT.headerObj.find('div.search-content');
	LAYOUT.headerScaledBackgroundObj 	= LAYOUT.headerObj.find('div.scaled-background');
	
	LAYOUT.init();
});