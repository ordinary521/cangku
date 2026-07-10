<?php
// 使用__DIR__常量获取当前脚本所在目录，并拼接文件路径
$filename = __DIR__. '/img.txt';
if (!file_exists($filename)) {
    die('文件不存在');
}

// 打开文件并检查是否成功
$fs = fopen($filename, "r");
if (!$fs) {
    die('无法打开文件');
}

// 从文本获取链接
$pics = [];
while (!feof($fs)) {
    $line = trim(fgets($fs));
    if ($line!== '') {
        array_push($pics, $line);
    }
}
fclose($fs);

// 从数组随机获取链接
$pic = $pics[array_rand($pics)];

// 获取type参数
$type = isset($_GET['type'])? $_GET['type'] : '';

switch ($type) {
    // JSON返回
    case 'json':
        header('Content - type:text/json');
        die(json_encode(['pic' => $pic]));
    default:
        // 验证链接是否合法
        if (!filter_var($pic, FILTER_VALIDATE_URL)) {
            die('无效的图片链接');
        }
        die(header("Location: $pic"));
}