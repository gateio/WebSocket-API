const moment = require('moment');
const WebSocket = require('ws');
const pako = require('pako');
var querystring = require('querystring');
var crypto = require('crypto');

//const WS_URL = 'wss://ws.gate.io/v3/';
const WS_URL = 'wss://ws.gateio.io/v3/';
// add your key and secret
const KEY  = 'your key';
const SECRET  = 'your secret';

var ws = new WebSocket(WS_URL);

function getSign(str) {
	return crypto.createHmac('sha512', SECRET).update(str).digest().toString('base64');
}

var gateio = {
	gateGet: function(id,method,params) {
		var array = JSON.stringify({
			"id": id,
			"method": method,    
			"params": params
		});
		ws.send(array);
   },
   gateRequest: function(id,method,params) {
	    var nonce = Math.round(new Date().getTime()) ;
		params = [KEY, getSign(nonce+""), nonce];
		var array = JSON.stringify({
			"id": id,
			"method": method,    
			"params": params
		});
		ws.send(array);
   },
}

var methods;

module.exports = {
  wsGet:function(id,method,params){
	  
		ws.onopen = function() {    
		console.log('open');
		methods = method;
		if(method == 'server.sign')
			gateio.gateRequest(id,method,params);
		else if(method == 'order.query' || method == 'order.subscribe' || method == 'order.update' ||
		method == 'order.unsubscribe' || method == 'balance.query' || method == 'balance.subscribe' ||
		method == 'balance.update'  || method == 'balance.unsubscribe'){
			gateio.gateRequest(id,'server.sign',[]);
			methods = 'server.sign';
			setTimeout(() => {
            gateio.gateGet(id,method,params);
			methods = "";
        }, 1000)
		}
		else
			gateio.gateGet(id,method,params);
		};    
			  
		ws.onmessage = function (evt) {     
			console.log(evt.data);
			if(methods != 'server.sign')
				ws.close();	
		};    
			  
		ws.onclose = function() {    
			console.log('close');
		};    
			  
		ws.onerror = function(err) {    
			console.log('error', err);
		};
	}
}
