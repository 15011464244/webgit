var duanZi_html='';//段子模板
$.ajax({
    url:'http://iu.snssdk.com/neihan/stream/mix/v1/?mpic=1&webp=1&essence=1&content_type=-104&message_cursor=-1&am_longitude=110&am_latitude=120&am_city=%E5%8C%97%E4%BA%AC%E5%B8%82&am_loc_time=1463225362814&count=30&min_time=1489143837&screen_width=1450&do00le_col_mode=0&iid=3216590132&device_id=32613520945&ac=wifi&channel=360&aid=7&app_name=joke_essay&version_code=612&version_name=6.1.2&device_platform=android&ssmix=a&device_type=sansung&device_brand=xiaomi&os_api=28&os_version=6.10.1&uuid=326135942187625&openudid=3dg6s95rhg2a3dg5&manifest_version_code=612&resolution=1450*2800&dpi=620&update_version_code=6120',
    data:{},
    dataType:'jsonp',
    success:function(data){
        var duanZi=data.data.data;
        console.log(duanZi)
        var duanZi_length=duanZi.length;//段子视频总数
        for(var i=0;i<duanZi_length;i++){
            if(i==3||i==11||i==19){
                continue;
            }
            var duanZi_username=duanZi[i].group.user.name;//发布人名字
            var duanZi_userimg=duanZi[i].group.user.avatar_url;//发布人头像
            var duanZi_title=duanZi[i].group.content;//标题
            console.log(duanZi[i].group.mp4_url);
            var duanZi_mp4=duanZi[i].group.mp4_url;
            // origin_video.url_list[0].url;//视频地址
            var duanZi_share=duanZi[i].group.share_count;//转发数量
            var duanZi_play=duanZi[i].group.play_count;//播放次数
            var duanZi_digg=duanZi[i].group.digg_count;//点赞数量
            var duanZi_bury=duanZi[i].group.bury_count;//不顶次数
            var duanZi_time=duanZi[i].group.duration;//播放时长
            duanZi_html+=`
                            <div class="video">
                                <video src="${duanZi_mp4}"></video>
                            </div>
                        `
        }
        $('#duanzi').append(duanZi_html);
    }
})
// 控制视频播放
window.onload=function(){
    var play=document.getElementsByTagName('video');
    var play_length=play.length;
    var flag=true;
    for(var j=0;j<play_length;j++){
        if(flag==true){
            touch.on(play[j],'tap',function(){
                this.play();
                flag=false;
            })
        }else{
            touch.on(play[j],'tap',function(){
                this.pause();
                flag=true;
            })
        }
        
    }
}
