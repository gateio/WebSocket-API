## 环境要求
(php>=5.3.3)
(workerman框架 demo中带的仅供测试)

## 运行  
下载该demo

发送请求
创建youFile.php
<?php
require_once __DIR__ . '/request.php';
request(function($data) {
	var_dump($data);
});

在终端运行 php youFile.php`

##使用前请在gateio.php中填入您的key和secret

##可参考test.php

## 注意
生产环境下推荐利用systemctl等工具进行部署，

