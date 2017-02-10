//文档加载完毕后执行
window.onload = function(){

	//获取dom元素
	var obtn = document.getElementById("btn");

	//获取用户界面的可视高度
	var clientHeight = document.documentElement.clientHeight;

	var timer = null;
	var isTop = true;

	//滑动滚轮触发事件绑定
	window.onscroll = function(){
		//获取滚动条距离顶部的高度
		var osTop = document.documentElement.scrollTop||document.body.scrollTop;

		if(osTop>=clientHeight){
			obtn.style.display='block';
		}else{
			obtn.style.display='none';
		}

		if(!isTop){
			clearInterval(timer);
		}
		isTop = false;
	}

	//点击事件绑定
	obtn.onclick = function(){

		//定时器
		timer = setInterval(function(){
			//获取滚动条距离顶部的高度
			var osTop = document.documentElement.scrollTop||document.body.scrollTop;
			//让回到顶部的速度慢慢变慢
			var ispeed = Math.ceil(osTop/6);

			document.documentElement.scrollTop = document.body.scrollTop = osTop-ispeed;

			//设置boolean值，回到顶部的过程中被打断则停止
			isTop = true;

			//回到顶部的时候关闭定时器
			if(osTop==0){
				clearInterval(timer);
			}
		},30);

		
	};
}

function playVideo(ob,id,sid){

	var height;
	var width = $('#image-cover-'+id).css("width");
	width = width.substring(0,width.indexOf("p"));

		if(width==600){
		height =  Math.round(600/1.793);
		height += 43;
		height = height+"px";
		
	}else{
		height = $('#image-cover-'+id).css("height");
	}
	 	
	//隐藏封面

	$('#image-cover-'+id).hide();  



	//隐藏播放按钮

	$(ob).hide();



	 if(sid != 1){

	 	// var width = $('#image-cover-'+id).css("width");

	 	// var height = $('#image-cover-'+id).css("height");

        //var video = '<object width="100%" height="'+height+'" style=" margin-top:0;" data="http://player.youku.com/player.php/sid/'+sid+'/v.swf" type="application/x-shockwave-flash"><param name="movie" value="http://player.youku.com/player.php/sid/XODI5MjgzMjA0/v.swf"><param value="transparent" name="wmode"><param value="true" name="allowFullScreen"><param value="always" name="allowScriptAccess"><param value="isAutoPlay=true&amp;winType=adshow" name="flashvars"></object>';

     	//var video = '<iframe height="'+height+'" width="100%" src="http://player.youku.com/embed/XMTY1NTk4NDQ3Ng==' frameborder=0 'allowfullscreen'></iframe>  

		var video = '<iframe height=\"'+height+'\" width=\"100%\" src="http://player.youku.com/embed/'+sid+'?autoplay=1" frameborder=0 "allowfullscreen" allowscriptaccess="always" wmode="opaque" allowTransparency="true" type="application/x-shockwave-flash"></iframe>';



        $('#video-'+id).html(video).show();

    } 


}