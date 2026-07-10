<?php
$ch = curl_init("https://v1.apizero.cn/api/wallpaper?category=%E7%BE%8E%E5%A5%B3&resolution=1920x1080&count=1");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer sk_test_6d00a7db9c5649c5847bdba769cf752c3812fd59a1c1c281']);
$response = curl_exec($ch);
curl_close($ch);
echo $response;
