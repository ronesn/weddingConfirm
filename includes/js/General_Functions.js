
var pageArray=["index.html","explanation.html","page3.html","aqi.html","china.html","cities.html","cities2.html"];

function loadIndex()
{		
	var obj=document.getElementById('index');
	var side=document.getElementsByTagName('aside')[0];
	var nodes=obj.childNodes;
	setTimeout(function(){
			for(var i=1;i<nodes.length; i+=2) 
				nodes[i].style.display = "block";					
			},1000);
	setTimeout(function(){obj.style.left="96px";side.style.display = "block";},3000);
	
	
}
function getPage()
{
		var pathname = window.location.pathname;
	  
	  for(var i=0;i<pageArray.length;i++)
	   {	
			if ( (pathname.indexOf(pageArray[i])) > -1 )
				return i;
	   }
		return -1;
}
			
$(document).keydown(function(e){
	var page=getPage();
    if ((e.keyCode == 39)||(page<pageArray.length)) { 
		window.location = './'+pageArray[page+1];
       return false;
    }
	if ( (e.keyCode == 37)||(page>0) ) { 
		window.location = './'+pageArray[page-1];
       return false;
    }
});
/*37 - left

38 - up

39 - right

40 - down */

$(function(){
	$('.explan').bind('swipe',function(event){
		$(".explan").hide();
	});
});
function myFunction()
{
	$(".explan").hide();
	$("#link").css("display", "block");
}
function loadUrl(newLocation)
{
	window.location.href = newLocation;
}

function load()
{
	
	document.getElementById('wrapperCities').style.backgroundPosition='-760px -1000px';	
	//document.getElementById('wrapperCities').style.up='-920px';
	setTimeout(setleft(-760), 0);
	setTimeout(setDown(-1000), 3000);
	setTimeout(setRight(-1260), 6000);
	setTimeout(setup(-1200), 10000);
	
	//
	//setTimeout(setBgPosition(0), 100);
	
}
function setleft (px)
{
  return function ()
  {
  var pos=px+"px -1000px";
	document.getElementById('wrapperCities').style.backgroundPosition=pos;
	if (px > -1260) 
		setTimeout(setleft(px - 5), 2);
  }
}

function setDown (px)
{
  return function ()
  {
	var pos="-1260px "+px+"px";
	document.getElementById('wrapperCities').style.backgroundPosition=pos;
	if (px >-1200) 
		setTimeout(setDown(px -2), 2);
  }
}
function setRight (px)
{
  return function ()
  {
	var pos=px+"px -1200px";
	document.getElementById('wrapperCities').style.backgroundPosition=pos;
	if (px < -760) 
		setTimeout(setRight(px + 5), 2);
  }
}
function setup (px)
{
  return function ()
  {
	var pos="-760px "+px+"px";
	document.getElementById('wrapperCities').style.backgroundPosition=pos;
	if (px <-1000) 
		setTimeout(setup(px +2), 2);
  }
}
/* 
function go() 
{
	var childNodes = document.getElementById('wrapper').childNodes;
	for(var i=0; i<childNodes.length; i+=2) {
		alert(childNodes[i].childNodes);
		//childNodes[i].childNodes.style.marginLeft="100px";
}
}
*/