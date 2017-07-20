//    分享
// 首先在新浪开发者中心注册一个appkey
  function postToSina(title,pic,site)
{
   var param = {
    url:site,
    type:'5',
    count:'',
    appkey:'4177348326', 
    title:encodeURI(title+""),
    pic:pic,
    ralateUid:'',
    language:'zh_cn',
    rnd:new Date().valueOf()
    }
    var temp = [];
    var s = window.screen; 
    for( var p in param ){
    temp.push(p + '=' + encodeURIComponent( param[p] || '' ) )
    }
    var url = "http://service.weibo.com/share/share.php?"+temp.join("&");
    window.open(url,"_blank",['toolbar=0,status=0,resizable=1,width=600,height=500,left=',(s.width-440)/2,',top=',(s.height-430)/2].join(''))
}

function postToSina20140214(text,pic,site)
{
   var param = {
    url:site,
    type:'5',
    count:'',
    appkey:'4177348326',
    title: text,
    pic:pic,
    ralateUid:'',
    language:'zh_cn', 
    rnd:new Date().valueOf()
    }
    var temp = [];
    var s = window.screen; 
    for( var p in param ){
    temp.push(p + '=' + encodeURIComponent( param[p] || '' ) )
    }
    var url = "http://service.weibo.com/share/share.php?"+temp.join("&");
    window.open(url,"_blank",['toolbar=0,status=0,resizable=1,width=600,height=500,left=',(s.width-440)/2,',top=',(s.height-430)/2].join(''));
}
function removeDivLayer(){
  jQuery('.divLayer').remove();
}

// function postToQQ(title,pic,site){
//     var p = {
//       url:location.href,
//       showcount:'0',
//       desc:title+"  ",
//       summary:'',
//       title:title,
//       site:encodeURI('fatjie.com'),
//       flash: '',
//       summary:'',
//       pics:pic, 
//       style:'203',
//       width:98,
//       height:22,
//       otype:'share'
//     };
//      var s = window.screen;
//     var param = [];
//     for(var i in p){
//       param.push(i + '=' + encodeURIComponent(p[i]||''));
//     }
    
//     var url = "http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?"+param.join("&");
//     window.open(url,"_blank",['toolbar=0,status=0,resizable=1,width=600,height=500,left=',(s.width-440)/2,',top=',(s.height-430)/2].join(''));
//     jQuery('#postToWin').remove();
//     removeDivLayer();
// }
function postToQQ(title,pic,site){
    var p = {
      url:site,
      showcount:'0',/*鏄惁鏄剧ず鍒嗕韩鎬绘暟,鏄剧ず锛�'1'锛屼笉鏄剧ず锛�'0' */
      desc:title+"  ",/*榛樿鍒嗕韩鐞嗙敱(鍙€�) 鏉ヨ嚜www.iliangcang.com*/
      summary:'',/*鍒嗕韩鎽樿(鍙€�)*/
      title:'',/*鍒嗕韩鏍囬(鍙€�)*/
      site:encodeURI('dasf'),/*鍒嗕韩鏉ユ簮 濡傦細鑵捐缃�(鍙€�)*/
      pics:pic, /*鍒嗕韩鍥剧墖鐨勮矾寰�(鍙€�)*/
      style:'203',
      width:98,
      height:22,
      otype:'share'
    };
     var s = window.screen;
    var param = [];
    for(var i in p){
      param.push(i + '=' + encodeURIComponent(p[i]||''));
    }
    
    var url = "http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?"+param.join("&");
    window.open(url,"_blank",['toolbar=0,status=0,resizable=1,width=600,height=500,left=',(s.width-440)/2,',top=',(s.height-430)/2].join(''));
    jQuery('#postToWin').remove();removeDivLayer();
}


function postToDouban(title,pic,site)
{
  console.log("aa");
    var d=document,
    e=encodeURIComponent,
    s1=window.getSelection,
    s2=d.getSelection,
    s3=d.selection,
    s=s1?s1():s2?s2():s3?s3.createRange().text:'',
    sre = window.screen,
    r='http://www.douban.com/recommend/?url='+e(site)+'&title='+e(title+"")+'&sel='+e(s)+'&v=1',
    x=function(){
      if(!window.open(r,'douban','toolbar=0,resizable=1,scrollbars=yes,status=1,width=450,height=330,left='+(sre.width-440)/2+',top='+(sre.height-430)/2))location.href=r+'&r=1'
    };
    if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}
}

$("b").click(function(){
  postToTQQ('','','');
});

