<?php
require_once 'Load.php';
require_once 'DictParser.php';
echo "正在启动字典程序.....\n";
$dict = new Load ();
echo "启动字典成功.....\n";
while ( true ) {
	echo "请输入单词：";
	fscanf ( STDIN, "%s", $word );
	if ("q!" == $word)
		break;
	else {
		$idxarr = IdxParser::getIdx ( $word );
		foreach ( $idxarr as $key => $value ) {
			echo "\n".$value ["ifo"];
			echo getInfo ( $value ["file"], $value ["idx"] ["offset"], $value ["idx"] ["length"] ) . "\n";
		}
	}
}