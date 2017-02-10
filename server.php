<?php
//设置页面内容是html编码格式是utf-8

	header("Content-Type: text/plain;charset=utf-8"); 
	$count = intval($_GET['count']);
	$type = $_GET['type'];
	$sql="";
	switch ($type) {
		case 'photo':
			$sql = "SELECT * FROM v9_picture order by listorder asc, id desc  LIMIT 0,6";
			break;
		case 'about':
			$sql = "SELECT * FROM v9_member_info order by listorder  asc LIMIT 0,6";
			break;
		case 'moreVideo':
		$sql = "SELECT a.id,a.thumb,a.title,a.description,a.producer,a.director,a.photographer,a.url,a.sid FROM v9_video1 a order by a.listorder asc,a.id desc   LIMIT ".(($count+1)*6).",6 ";
			break;
		case 'morePhoto':
		$sql = "SELECT * FROM v9_picture order by listorder asc, id desc  LIMIT ".(($count+1)*6).",6";
			break;
		case 'moreAbout':
		$sql = "SELECT * FROM v9_member_info order by listorder  asc LIMIT ".(($count+1)*6).",6";
			break;
		default:
			break;
	}
	function get_item(){
			global $sql;
			$link = mysqli_connect("localhost","root","");
			mysqli_select_db($link,"mp2");
			mysqli_query($link, "set names UTF8");
			mysqli_query($link,"set character_set_client=utf8");
			mysqli_query($link,"set character_set_results=utf8");
			$result = mysqli_query($link,$sql);
			$posts = array();
			while($row = mysqli_fetch_array($result)) {
		    $posts[] = $row;
			}
			   echo json_encode($posts);
			   mysqli_free_result($result);
			   mysqli_close($link);
		}

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
			get_item();
		} else{
			return;
		}
	?>