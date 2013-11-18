if(!LAYOUT)
	var LAYOUT = {};

LAYOUT.init = function() {
	LAYOUT.scaleWidth();
};

LAYOUT.scaleWidth = function() {
	LAYOUT.scaledObj.css({
		width: document.width,
		left: (LAYOUT.contentObj - document.width) / 2
	});
	
};

$(function(){
	//Seletores
	LAYOUT.contentObj					= $('#content').width();
	LAYOUT.headerObj 					= $('div#page > header');
	LAYOUT.headerSearchContentObj 		= LAYOUT.headerObj.find('div.search-content');
	LAYOUT.scaledObj					= $('div.scaled-background');
	
	LAYOUT.init();
});