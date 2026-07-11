<?php
// 读取图片链接文本
$txt = file_get_contents('img.txt');
// 按行分割成数组
$imgList = explode("\n", $txt);
// 清除空行
$imgList = array_filter($imgList);
// 随机选一张
$randImg = $imgList[array_rand($imgList)];
// 跳转到随机图片（OK影视识别格式）
header("Location: ".$randImg);
exit;
?>