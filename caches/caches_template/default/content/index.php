<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<!-- main -->
	<a href="javascript:;" id="btn" title="回到顶部"></a>
	<div class="index-body public-container" style="display: block;">

		  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=bf61248e65f8dda00e6d7f21aebfa859&action=lists&catid=17&num=6&order=listorder+ASC%2Cid+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'17','order'=>'listorder ASC,id DESC','limit'=>'6',));}?>

			 <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>

		<div class="item"> 


				<div class="video-pic video-address">

					<div id="image-cover-<?php echo $val['id'];?>">

						<img src="<?php echo $val['thumb'];?>" alt="">

					</div>

					<div class="play-button" style="cursor: pointer;" onclick="playVideo(this,<?php echo $val['id'];?>,'<?php echo $val['sid'];?>')">

						<div class="play-button1"><img src="<?php echo IMG_PATH;?>mp2/video-play-border.png" alt=""></div>

						<div class="play-button2"><img src="<?php echo IMG_PATH;?>mp2/video-play.png" alt=""></div>

					</div>

					<div class="video-<?php echo $val['id'];?>" id="video-<?php echo $val['id'];?>" style="width: 100%;max-width: 100%;display:none;"></div>

				</div>

			<div class="video-title">

				<a href=<?php echo $val['url'];?>>
				<h3>
				<?php echo $val['title'];?>

				</h3>
				</a>
									<!-- test git -->
			</div>

			<div class="video-author">

				<h4>制片:<?php echo $val['producer'];?>/导演:<?php echo $val['director'];?>/摄影:<?php echo $val['photographer'];?>/后期:<?php echo $val['post_production'];?></h4>

			</div>

			<div class="video-share clearfloat">

				<div id="share">

						<div class="bdsharebuttonbox">

							<a href="#" value1="<?php echo $val['url'];?>" value2='<?php echo $val['title'];?>'  class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>

							<a href="#" value1="<?php echo $val['url'];?>" value2='<?php echo $val['title'];?>'  class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>

						</div>
				</div>
			</div>			
			<span class="index-line"></span>
		</div>
			 <?php $n++;}unset($n); ?>

			<div class="index-more-item">
				<p class="text-more">
					<i class="line line-l"></i>
				<a  class="more" value="0" href="javascript:;">更多</a>
					<i class="line line-r"></i>
				</p>
			</div>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	</div>

	<!-- photo body部分 -->

	<div class="photo-body public-container" style="display: none;">

		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=698f017385124f223d9616d04142e948&action=lists&catid=10&num=6&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'10','order'=>'id DESC','limit'=>'6',));}?>

			<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>

		<div class="item">

			<div class="photo-pic">

				<img src="<?php echo $val['thumb'];?>" alt="">

			</div>

			<div class="photo-title">

				<h3><?php echo $val['title'];?></h3>

			</div>

			<div class="photo-author">

				<h4>摄影：<?php echo $val['photographer'];?></h4>

			</div>

			<span class="photo-line"></span>

		</div>
		<?php $n++;}unset($n); ?>
		<div class="photo-more-item">
			<p class="text-more">
					<i class="line line-l"></i>
				<a class="more" value="0" href="javascript:;">更多</a>
					<i class="line line-r"></i>
				</p>
		</div>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	</div>

	<!-- about body部分 -->
	<div class="about-body public-container"  style="display: none;">

		<div class="about-info">

			<p class="text-info"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=617c85586d76ce251071b21d3d6e866b&action=lists&catid=12&num=1&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'12','order'=>'id DESC','limit'=>'1',));}?>

				<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
						<?php echo $val['description'];?>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

			</p>
			<span class="about-line"></span>

		</div>

	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8749afcb7fcad4a44599cfcbc9dccda8&action=lists&catid=16&num=6&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'16','order'=>'listorder ASC','limit'=>'6',));}?>

	<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>

		<div class="item clearfloat">

			<div class="item-member member-pic">

				<div class="circle">

					<img src="<?php echo $val['thumb'];?>" alt="">
				</div>
			</div>

			<div class="item-member member-info">

				<h3><?php echo $val['name'];?></h3>

				<p><?php echo $val['description'];?></p>

			</div>

			<span class="about-line"></span>

		</div>

	<?php $n++;}unset($n); ?>

		<div class="about-more-item">
					<p class="text-more">
					<i class="line line-l"></i>
				<a class="more" value="0" href="javascript:;">更多</a>
					<i class="line line-r"></i>
				</p>				
		</div>

		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	</div>
	<foot>
		<script type="text/javascript">
		//分享的url
		var shareUrl;
		//分享的文章标题
		var shareTitle;

		// 隐藏&&显示相关元素

	$(document).ready(function(){

				//添加更多（视频）

				$(".index-more-item .text-more .more").click(function(){

					var count = $(".index-more-item .text-more .more").attr("value");
					var bind =$(".bdsharebuttonbox").attr("data-bd-bind");
					
				var url = "server.php?type=moreVideo&count="+count;

				var data={};

				 $.get(url, data, function(res) {

                    

                    var jsonObj = eval("(" + res + ")");

                    var html="";

                    for(var i=0;i<jsonObj.length;i++){
                 	

                    		html = "<div class=\"item\"> <div class=\"video-pic video-address\"><div id=\"image-cover-"+jsonObj[i].id+"\"><img src=\""+jsonObj[i].thumb+"\" alt=\"\"></div><div class=\"play-button\" style=\"cursor: pointer;\" onclick=\"playVideo(this,"+jsonObj[i].id+",'"+jsonObj[i].sid+"')\">						<div class=\"play-button1\"><img src=\"<?php echo IMG_PATH;?>mp2/video-play-border.png\" alt=\"\"></div>	<div class=\"play-button2\"><img src=\"<?php echo IMG_PATH;?>mp2/video-play.png\" alt=\"\"></div>					</div>	<div class=\"video-"+jsonObj[i].id+"\" id=\"video-"+jsonObj[i].id+"\" style=\"width: 100%;max-width: 100%;display:none;\"></div>	</div><div class=\"video-title\"><a href="+jsonObj[i].url+"><h3>"+jsonObj[i].title+"</h3></a>			</div>	<div class=\"video-author\"><h4>制片："+jsonObj[i].poducer+"/导演："+jsonObj[i].director+"/摄影："+jsonObj[i].photographer+"</h4></div><div class=\"video-share clearfloat\"><div id=\"share\"><div class=\"bdsharebuttonbox bdshare-button-style0-24\" data-bd-bind=\""+bind+"\"><a href=\"javascript:;\" class=\"bds_weixin\" data-cmd=\"weixin\" value1=\""+jsonObj[i].url+"\" value2=\""+jsonObj[i].title+"\" title=\"分享到微信\"></a>	<a href=\"#\" class=\"bds_tsina\" value1=\""+jsonObj[i].url+"\" value2=\""+jsonObj[i].title+"\" data-cmd=\"tsina\" title=\"分享到新浪微博\"></a></div></div></div><span class=\"index-line\"></span></div>";

                   	 $(".index-more-item").before(html);
                   	 _bd_share_main.init();
                    }
                    	 $(".bdsharebuttonbox a").bind("mouseover",function () {
                shareUrl = $(this).attr("value1");
                shareTitle = $(this).attr("value2");
                
            });

                     //如果查询数据条数小于6条就会隐藏加载更多按钮

                   	 if(jsonObj.length<6){

                   	 	$(".index-more-item .text-more ").css("visibility","hidden");

                   	 }     

				});

				 	count++;

				 	$(".index-more-item .text-more .more").attr("value",count);
				 	

			});

				//添加更多（图片）

				$(".photo-more-item .text-more .more").click(function(){

					var count = $(".photo-more-item .text-more .more").attr("value");

				var url = "server.php?type=morePhoto&count="+count;

				var data={};

				 $.get(url, data, function(res) {

                    var jsonObj = eval("(" + res + ")");

                    var html="";

                   for(var i=0;i<jsonObj.length;i++){

                   		html="<div class=\"item\"><div class=\"photo-pic\">	<img src=\" "+jsonObj[i].thumb+"\" alt=\"\"></div><div class=\"photo-title\"><h3>"+jsonObj[i].title+"</h3></div><div class=\"photo-author\">	<h4>摄影："+jsonObj[i].photographer+"</h4>	</div><span class=\"photo-line\"></span></div>";

                   		$(".photo-more-item").before(html);

                   }

                   //如果查询数据条数小于6条就会隐藏加载更多按钮

                   	 if(jsonObj.length<6){                	 	

                   	 	$(".photo-more-item .text-more ").css("visibility","hidden");

                   	 }
        
				});
				 		count++;

                   	$(".photo-more-item .text-more .more").attr("value",count);
			});

				//添加更多（成员介绍）

				$(".about-more-item .text-more .more").click(function(){

					var count = $(".about-more-item .text-more .more").attr("value");

				var url = "server.php?type=moreAbout&count="+count;

				var data={};

				 $.get(url, data, function(res) {                 

                    var jsonObj = eval("(" + res + ")");

                    var html="";

                  for(var i=0;i<jsonObj.length;i++){

                   	html="<div class=\"item clearfloat\">	<div class=\"item-member member-pic\"><div class=\"circle\">	<img src=\""+jsonObj[i].thumb+"\" alt=\"\"></div></div><div class=\"item-member member-info\"><h3>"+jsonObj[i].name+"</h3><p>"+jsonObj[i].description+"</p></div><span class=\"about-line\"></span></div>";

                   	$(".about-more-item").before(html);

                   }

                   //如果查询数据条数小于6条就会隐藏加载更多按钮

                   	 if(jsonObj.length<6){

                   	 	$(".about-more-item .text-more ").css("visibility","hidden");

                   	 }

				});

			 count++;

				 $(".about-more-item .text-more .more").attr("value",count);

			});

			// 定义三个变量

			var video = $(".index-body");
			var photo = $(".photo-body");
			var about = $(".about-body");
			var video_nav = $(".public-header .nav li .video-a .bar-yellow");
			var photo_nav = $(".public-header .nav li .photo-a .bar-yellow");
			var about_nav = $(".public-header .nav li .about-a .bar-yellow");

			$(".video > a").click( function(){

			if(video.css("display")=="block"){
			}else{

				//控制三个栏目的显示和隐藏
				video.css("display","block");
				photo.css("display","none");
				about.css("display","none");
				//把隐藏的image-cover显示出来，把显示出来的视频删除
				$(".video-pic div[id^='image-cover-']").show();
				$(".video-pic .play-button").show();
				$(".video-pic div[class^='video-']").html('').hide();
				//nav滚动条
				video_nav.css("display","block");
				photo_nav.css("display","none");
				about_nav.css("display","none");

			}
			return false;
		} );

		$(".photo > a").click( function(){

			if(photo.css("display")=="block"){

			}else{

				//隐藏视频

				$(".video-pic div[class^='video-']").html('').hide();

				photo.css("display","block");
				video.css("display","none");
				about.css("display","none");
				photo_nav.css("display","block");
				video_nav.css("display","none");
				about_nav.css("display","none");

			}

			return false;
		} );

		$(".about > a").click( function(){

			if(about.css("display")=="block"){}else{

				//隐藏视频

				$(".video-pic div[class^='video-']").html('').hide();

				about.css("display","block");
				photo.css("display","none");
				video.css("display","none");
				about_nav.css("display","block");
				photo_nav.css("display","none");
				video_nav.css("display","none");

			}
			return false;
		} );
	}
		);

		//绑定所有分享按钮所在A标签的鼠标移入事件，从而获取动态ID
        $(function () {
            $(".bdsharebuttonbox a").mouseover(function () {
                shareUrl = $(this).attr("value1");
                shareTitle = $(this).attr("value2");
            });

           
        });

        /* 
        * 动态设置百度分享URL的函数,具体参数
        * cmd为分享目标id,此id指的是插件中分析按钮的ID
        *，我们自己的文章ID要通过全局变量获取
        * config为当前设置，返回值为更新后的设置。
        */
        function SetShareUrl(cmd, config) {            
            if (shareUrl) {
                config.bdUrl = shareUrl;    
            }
            if (shareTitle){

            	config.bdText = document.title+" "+shareTitle;
            	config.bdDesc = document.title+" "+shareTitle;
            }
            return config;
        }

         //插件的配置部分，注意要记得设置onBeforeClick事件，主要用于获取动态的文章url
        window._bd_share_config = {
            "common": {
                onBeforeClick:SetShareUrl,bdText:'',"bdSnsKey":{},"bdMini":"2"
                ,"bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"
            }, "share": {}
        };

		//插件的JS加载部分

		with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
	</script>
	</foot>
</body>
</html>