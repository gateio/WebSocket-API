# -*- coding: utf-8 -*-
#author: か壞尐孩キ

from Gateio import GateWs
import random

gate=GateWs("wss://ws.gate.io/v3/", "your key", "your secret.")

##Check server connectivity.
#print(gate.gateRequest(random.randint(0,99999),'server.ping',[]))

##Acquire server time.
#print(gate.gateRequest(random.randint(0,99999),'server.time',[]))

##Query ticker of specified market, including price, deal volume etc in certain period.
#print(gate.gateRequest(random.randint(0,99999),'ticker.query',["EOS_USDT",86400]))

##Subscribe market ticker.
#print(gate.gateRequest(random.randint(0,99999),'ticker.subscribe',["BOT_USDT"]))

##Unsubscribe market ticker.
#print(gate.gateRequest(random.randint(0,99999),'ticker.unsubscribe',[]))
	
##Query latest trades information, including time, price, amount, type and so on.
#print(gate.gateRequest(random.randint(0,99999),'trade.query',["EOS_USDT",2,7177813]))

##Subscribe trades update notification.
#print(gate.gateRequest(random.randint(0,99999),'trades.subscribe',["ETH_USDT","BTC_USDT"]))

##Unsubscribe trades update notification.
#print(gate.gateRequest(random.randint(0,99999),'trades.unsubscribe',[]))

##Query specified market depth.
#print(gate.gateRequest(random.randint(0,99999),'depth.query',["EOS_USDT",5,"0.0001"]))

##Subscribe depth.
#print(gate.gateRequest(random.randint(0,99999),'depth.subscribe',["ETH_USDT",5,"0.0001"]))

##Unsbscribe specified market depth.
#print(gate.gateRequest(random.randint(0,99999),'depth.unsubscribe',[]))

##Query specified market kline information
#print(gate.gateRequest(random.randint(0,99999),'kline.query',["BTC_USDT",1,1516951219,1800]))

##Subscribe specified market kline information.
#print(gate.gateRequest(random.randint(0,99999),'kline.subscribe',["BTC_USDT",1800]))

##Unsubsribe specified market kline information.
#print(gate.gateRequest(random.randint(0,99999),'kline.unsubscribe',[]))

##Notify kline information of subscribed market.
#print(gate.gateRequest(random.randint(0,99999),'kline.update',[1492358400,"7000.00","8000.0","8100.00","6800.00","1000.00","123456.00","BTC_USDT"]))

##Signature based authorization.
#print(gate.gateRequest(random.randint(0,99999),'server.sign',[]))		

##Query user unexecuted orders
#print(gate.gateRequest(random.randint(0,99999),'order.query',["BTC_USDT",0,10]))	

##Subscribe user orders update
#print(gate.gateRequest(random.randint(0,99999),'order.subscribe',["BTC_USDT"]))

##Notify user orders information when an order is put, updated or finished.
#print(gate.gateRequest(random.randint(0,99999),'order.update',[2,"12345654654"]))

##Unubscribe user orders update notification, for all markets.
#print(gate.gateRequest(random.randint(0,99999),'order.unsubscribe',[]))

##Acquire user balance information of specified asset or assets.
#print(gate.gateRequest(random.randint(0,99999),'balance.query',["BTC"]))

##Subscribe for user balance update.
#print(gate.gateRequest(random.randint(0,99999),'balance.subscribe',["BTC"]))

##Notify user balance update.
#print(gate.gateRequest(random.randint(0,99999),'balance.update',[{'EOS':{'available':'96.765323611874','freeze':'11'}}]))

##Unsubscribe user balance update.
##print(gate.gateRequest(random.randint(0,99999),'balance.unsubscribe',[]))
