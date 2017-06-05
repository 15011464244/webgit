

function addDivLayer()
{
	if(jQuery('#sysMessageWin').height()){
		return false;
	}
	var winW = jQuery(window).width();
	var winH = jQuery(window).height();
	var html = "";
	var style = 'width:'+winW+'px;height:'+winH+'px;';
	html = '<div class="divLayer" style="'+style+'"></div>';
	jQuery('body').append(html);
}


function showMessageNote(msg){
	addDivLayer();
	var winW = jQuery(window).width();
	var winH = jQuery(window).height();
	var scrlTop = jQuery(window).scrollTop();
	var left = (winW-433)/2;
	var top = scrlTop;
	if(jQuery('#sysMessageWin').height()){
		top = (winH-parseInt(jQuery("#sysMessageWin").height()))/2
		jQuery("#sysMessageWin").css({"top":top+'px'});
		return false;
	}
	var style = "";
	style = "left:"+left+"px;top:"+top+"px;z-index: 100000000;_position:absolute;";
	var html = "";
	html += '<div class="popWindow" id="sysMessageWin" style="'+style+'">';
	html += '<div id="countdown-hide" style="display:none;"></div>';
	html += '<div class="popHeader"><span class="close" title="鍏抽棴" onclick="jQuery(\'#sysMessageWin\').remove();removeDivLayer();"></span></div>';
	html += '<div class="content">';
	html += '<div class="lcMsgNote">';
	if(msg!=undefined)html += msg;
	html += '</div>';
	html += '</div>';
	html += '<div class="popFooter"></div>';
	html += '</div>  ';
	jQuery('body').append(html);
	top = (winH-parseInt(jQuery("#sysMessageWin").height()))/2
	jQuery("#sysMessageWin").css({"top":top+'px'}).show();
	
	//3绉掑悗鑷姩鍏抽棴
	var shortly = new Date(); 
	shortly.setSeconds(shortly.getSeconds() + 2.9); 
	jQuery("#countdown-hide").countdown({until: shortly,onExpiry: function(){jQuery('#sysMessageWin').remove();removeDivLayer();}, onTick: function(){}});
//	jQuery("#countdown-hide").countdown('pause');
//	setTimeout(function(){
//		jQuery("#countdown-hide").countdown('resume');						
//	},800);
}