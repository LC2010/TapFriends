<?php
preg_match('/\.(\w+)$/', strtolower(empty($_GET['name']) ? '.png' : $_GET['name']), $p);
$type = $p[1];
if($type && ($type === 'png'|| $type === 'jpg'|| $type === 'gif'|| $type === 'jpeg')){
	$img = file_get_contents("php://input");
	if(!$img){
		echo 'error';
		die();
	}
	$path = './dapic/';
	$filename = rand() . time() . '.png';
	$file = $path . $filename;
	$handle = fopen($file, 'w');
	if ($handle) {
		fwrite($handle, $img);
		fclose($handle);
		echo $filename;
	} else {
		echo 'error';
	}	
} else {
	echo 'error';
	die();
}
