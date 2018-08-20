<?php
require_once __DIR__ . '/gateio.php';

$gate = new Gateio(12345,'server.ping', ["ETH_USDT", "BTC_USDT"]);

$gate = new Gateio(rand(10,100000),'server.ping',[]);
//$gate = new Gateio(rand(10,100000),'server.time',[]);
//$gate = new Gateio(rand(10,100000),'ticker.query',["EOS_USDT",86400]);
//$gate = new Gateio(rand(10,100000),'ticker.subscribe',["BOT_USDT"]);
//$gate = new Gateio(rand(10,100000),'ticker.unsubscribe',[]);

//$gate = new Gateio(rand(10,100000),'trade.query',["EOS_USDT",2,7177813]);

//$gate = new Gateio(rand(10,100000),'trades.subscribe',["ETH_USDT","BTC_USDT"]);
//$gate = new Gateio(rand(10,100000),'trades.unsubscribe',[]);
//$gate = new Gateio(rand(10,100000),'depth.query',["EOS_USDT",5,"0.0001"]);
//$gate = new Gateio(rand(10,100000),'depth.subscribe',["ETH_USDT",5,"0.0001"]);
//$gate = new Gateio(rand(10,100000),'depth.unsubscribe',[]);
//$gate = new Gateio(rand(10,100000),'kline.query',["BTC_USDT",1,1516951219,1800]);
//$gate = new Gateio(rand(10,100000),'kline.subscribe',["BTC_USDT",1800]);
//$gate = new Gateio(rand(10,100000),'kline.unsubscribe',[]);

//$gate = new Gateio(rand(10,100000),'kline.update',[1492358400,"7000.00","8000.0","8100.00","6800.00","1000.00","123456.00","BTC_USDT"]);

//$gate = new Gateio(rand(10,100000),'server.sign',[]);		
//$gate = new Gateio(rand(10,100000),'order.query',["BTC_USDT",0,10]);	
//$gate = new Gateio(rand(10,100000),'order.subscribe',["BTC_USDT"]);
//$gate = new Gateio(rand(10,100000),'order.update',[2,"12345654654"]);
//$gate = new Gateio(rand(10,100000),'order.unsubscribe',[]);
//$gate = new Gateio(rand(10,100000),'balance.query',["BTC"]);
//$gate = new Gateio(rand(10,100000),'balance.subscribe',["BTC"]);
//$gate = new Gateio(rand(10,100000),'balance.update',[]);
//$gate = new Gateio(rand(10,100000),'balance.unsubscribe',[]);

$gate->request(function($data) {
	var_dump($data);
});

