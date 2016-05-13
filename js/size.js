// Javascript Document
var windowSize = '';
var windowWidth = 0;
var actualSize = 0; 

$(document).ready(function(){

	checkBrowserSize();
	// setInterval('checkBrowserSize()', 1000); 

});

function checkBrowserSize() {

	windowWidth =  window.outerWidth; 
	var contentWidth = $('body').width();
	var sizeDiff = windowWidth - contentWidth; 
	actualSize = windowWidth - sizeDiff; 


	if(actualSize > 500 ) {newWindowSize = 'large';}
	if (actualSize <= 500) {newWindowSize = 'small';}

// $('h1').html(windowWidth+' ('+contentWidth+'+'+sizeDiff+')'+' is '+newWindowSize);

if(windowSize != newWindowSize){
	windowSize = newWindowSize; 
	loadHero();
	} 
	// else{
	// 	$('h1').append(' -- no change'); 
	// }


}

function loadHero(){

	if(windowSize == 'large'){
		// $('body').load("../index.html"); 

	}
	if(windowSize == 'small'){
		$('body').load('../indexsmall.html'); 
	}

}