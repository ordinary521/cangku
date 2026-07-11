<?php
$url = "https://v1.apizero.cn/api/wallpaper?" . http_build_query([
    "category" => "美女",
    "resolution" => "1920x1080",
    "count" => "1",
    "key" => "sk_test_6d00a7db9c5649c5847bdba769cf752c3812fd59a1c1c281",
]);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 15);
$body = curl_exec($ch);
curl_close($ch);

$data = json_decode($body, true);
print_r($data);