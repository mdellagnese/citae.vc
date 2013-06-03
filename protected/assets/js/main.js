if(!LAYOUT)
	var LAYOUT = {};

LAYOUT.init = function() {
	LAYOUT.loadHeader();
};

LAYOUT.loadHeader = function() {
	LAYOUT.headerScaledBackgroundObj.css({
		width: document.width,
		left: (LAYOUT.contentObj - document.width) / 2
	});
	
};

$(function(){
	//Seletores
	LAYOUT.contentObj					= $('#content').width();
	LAYOUT.headerObj 					= $('div#page > header');
	LAYOUT.headerSearchContentObj 		= LAYOUT.headerObj.find('div.search-content');
	LAYOUT.headerScaledBackgroundObj 	= LAYOUT.headerObj.find('div.scaled-background');
	
	LAYOUT.init();
});