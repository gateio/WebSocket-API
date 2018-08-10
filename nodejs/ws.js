var gate = require('./lib/gate');

function fun1(){
     gate.wsGet(Math.round(Math.random()*1000),'server.ping',[]);
	// gate.wsGet(Math.round(Math.random()*1000),'server.time',[]);
	// gate.wsGet(Math.round(Math.random()*1000),'ticker.query', ["EOS_USDT", 86400]);
	// gate.wsGet(Math.round(Math.random()*1000),'ticker.subscribe', ["BOT_USDT"]);
	// gate.wsGet(Math.round(Math.random()*1000),'ticker.unsubscribe', []);
	
	// gate.wsGet(Math.round(Math.random()*1000),'trade.query', ["EOS_USDT", 2, 7177813]);
	
	// gate.wsGet(Math.round(Math.random()*1000),'trades.subscribe', ["ETH_USDT", "BTC_USDT"]);
	//  gate.wsGet(Math.round(Math.random()*1000),'trades.unsubscribe', []);
	// gate.wsGet(Math.round(Math.random()*1000),'depth.query', ["EOS_USDT", 5, "0.0001"]);
	// gate.wsGet(Math.round(Math.random()*1000),'depth.subscribe', ["ETH_USDT", 5, "0.0001"]);
	// gate.wsGet(Math.round(Math.random()*1000),'depth.unsubscribe', []);
	// gate.wsGet(Math.round(Math.random()*1000),'kline.query', ["BTC_USDT", 1, 1516951219, 1800]);
	// gate.wsGet(Math.round(Math.random()*1000),'kline.subscribe', ["BTC_USDT", 1800]);
	// gate.wsGet(Math.round(Math.random()*1000),'kline.unsubscribe', []);
	
	// gate.wsGet(Math.round(Math.random()*1000),'kline.update', [ 1492358400, "7000.00","8000.0","8100.00","6800.00", "1000.00","123456.00","BTC_USDT"]);
	
	//	gate.wsGet(Math.round(Math.random()*1000),'server.sign', []);		
	//  gate.wsGet(Math.round(Math.random()*1000),'order.query', ["BTC_USDT", 0, 10]);	
	//	gate.wsGet(Math.round(Math.random()*1000),'order.subscribe', ["BTC_USDT"]);
	//	gate.wsGet(Math.round(Math.random()*1000),'order.update', [2, "12345654654"]);
	//	gate.wsGet(Math.round(Math.random()*1000),'order.unsubscribe', []);
	//  gate.wsGet(Math.round(Math.random()*1000),'balance.query', ["BTC"]);
	//  gate.wsGet(Math.round(Math.random()*1000),'balance.subscribe', ["BTC"]);
	//	gate.wsGet(Math.round(Math.random()*1000),'balance.update', [{'EOS': {'available': '96.765323611874', 'freeze': '11'}}]);
	//	gate.wsGet(Math.round(Math.random()*1000),'balance.unsubscribe' ,[]);
}

fun1();