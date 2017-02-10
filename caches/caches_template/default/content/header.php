<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<meta http-equiv="X-UA-compatible"  content="IE=edge">

	<meta name="viewport" content="width=device-width" initial-scale="1">

	<title>MP2工作室</title>

	<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>mp2/reset.css">

	<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>mp2/common.css">

	<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>mp2/index.css">

	<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>mp2/photo.css">

	<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>mp2/about.css">

	<link rel="shortcut icon" type="image/x-icon" href="<?php echo IMG_PATH;?>mp2/favicon.ico" />

	<style>

				/*修改百度分享自带的图标*/

#share a{

				width: 45px;

				height: 45px;

				padding: 0;

				/*margin: 6px;*/

			}



			#share a.bds_weixin{

				

				width: 27px;

				height: 21px;

				margin: 0;

				background-position: 0 0;

				background-image: url('<?php echo IMG_PATH;?>mp2/wechat.png');

			}



		

			#share a.bds_tsina{



				width: 27px;

				height: 21px;

				margin: 0 0 0 11px;

				background-position: 0 0;

				background-image: url('<?php echo IMG_PATH;?>mp2/weibo.png');

			}



@media (max-width: 1000px){

			#share a{

				width: 37px;

				height: 37px;

				padding: 0;

				margin: 6px;

			}



			#share a.bds_weixin{

				

				width: 37px;

				height: 29px;

				margin: 0;

				background-position: 0 0;

				background-image: url('<?php echo IMG_PATH;?>mp2/wechat-1000.png');

			}



		

			#share a.bds_tsina{



				width: 37px;

				height: 29px;

				margin: 0 0 0 18px;

				background-position: 0 0;

				background-image: url('<?php echo IMG_PATH;?>mp2/weibo-1000.png');

			}

}



@media (max-width: 800px){

				#share a{

				width: 28px;

				height: 28px;

				padding: 0;

				/*margin: 6px;*/

			}



			#share a.bds_weixin{

				

				width: 28px;

				height: 22px;

				margin: 0;

				background-position: 0 0;

				background-image: url('<?php echo IMG_PATH;?>mp2/wechat-800.png');

			}



		

			#share a.bds_tsina{



				width: 28px;

				height: 22px;

				margin: 0 0 0 14px;

				background-position: 0 0;

				background-image: url('<?php echo IMG_PATH;?>mp2/weibo-800.png');

			}

}







@media (max-width: 600px){

			#share a{

				width: 25px;

				height: 25px;

				padding: 0;

				/*margin: 6px;*/

			}



			#share a.bds_weixin{

				width: 25px;

				height: 20px;

				margin: 0;

				background-position: 0 0;

				background-image: url('<?php echo IMG_PATH;?>mp2/wechat-600.png');

			}

			#share a.bds_tsina{

				width: 25px;

				height: 20px;

				margin: 0 0 0 12px;

				background-position: 0 0;

				background-image: url('<?php echo IMG_PATH;?>mp2/weibo-600.png');

			}

}

@media (max-width: 400px){

			#share a{

				width: 15px;

				height: 15px;

				padding: 0;

				/*margin: 6px;*/

			}

			#share a.bds_weixin{

				

				width: 15px;

				height: 12px;

				margin: 0;

				background-position: 0 0;

				background-image: url('<?php echo IMG_PATH;?>mp2/wechat-400.png');

			}


			#share a.bds_tsina{



				width: 15px;

				height: 12px;

				margin: 0 0 0 7px;

				background-position: 0 0;

				background-image: url('<?php echo IMG_PATH;?>mp2/weibo-400.png');

			}

}

@media (min-width: 1000px){
	#btn {width:40px; height:40px; position:fixed; right:265px; bottom:60px; display:none;
		 background:url('<?php echo IMG_PATH;?>mp2/top_bg.png') no-repeat left top;}	
#btn:hover {background:url('<?php echo IMG_PATH;?>mp2/top_bg.png') no-repeat 0 -39px;}
.bg {width:1190px; margin:0 auto;}
}


	</style>



	<script src="http://apps.bdimg.com/libs/jquery/1.11.1/jquery.js"></script>



	<script type="text/javascript" src="<?php echo JS_PATH;?>mp2/mp2.js"></script>



</head>

<body>

	<div class="public-header public-container">

		

			<div class="header-logo">

				<a href="<?php echo WEB_PATH;?>"><img src="<?php echo IMG_PATH;?>mp2/mp2-logo.jpg" alt=""></a>

			</div>

			<div class="nav">

				<ul class="header-nav clearfolat">



					<li class="video">

						 <a href="#" class="video-a"><img class="video-pic" src="<?php echo IMG_PATH;?>mp2/nav-video.png" alt="" ><span class="bar-yellow" style="display: block;"></span></a>

					</li>

					

					<li class="photo">

					 	<a href="#" class="photo-a"><img class="photo-pic" src="<?php echo IMG_PATH;?>mp2/nav-photo.png" alt="" ><span class="bar-yellow" style="display: none;"></a>

					 </li>

					

					<li class="about"> 

						<a href="#" class="about-a"><img class="about-pic" src="<?php echo IMG_PATH;?>mp2/nav-about.png" alt="" ><span class="bar-yellow" style="display: none;"></a>

					</li>

				</ul> 

			</div>

	

		<div class="header-nav-bar public-container">

			<span class="bar-gray"></span>

			

		</div>

	</div>