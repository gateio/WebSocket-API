<?php
use Workerman\Worker;
use Workerman\Connection\AsyncTcpConnection;
require_once __DIR__ . '/workerman/Autoloader.php';


/*
*请求数据函数
$sub_str type: string e.g market.btcusdt.kline.1min 具体请查看api
$callback type: function 回调函数，当获得数据时会调用
*/
Class Gateio{
	private $key = "your key";
	private $secret = "your secret";

	public $id;
	public $method;
	public $params;

	public $sign;

	function __construct($id,$method,$params){
		$this->id = $id;
		$this->method = $method;
		$this->params = $params;
	}

	function getSign($nonce){
		$sign = hash_hmac('sha512',$nonce,$this->secret,true);
		$ss = base64_encode($sign);
		return $ss;
	}

	function msectime() {
		list($msec, $sec) = explode(' ', microtime());
		$msectime =  (float)sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);
		return $msectime;
	}

	public $flag=false;

	function request() {
		$worker = new Worker();
		$worker->onWorkerStart = function($worker) {
		// ssl需要访问443端口
			$con = new AsyncTcpConnection('ws://ws.gateio.io:443/v3/');

			// 设置以ssl加密方式访问，使之成为wss
			$con->transport = 'ssl';



			$con->onConnect = function($con) {
				if($this->method == 'server.sign' || $this->method == 'order.query' || $this->method == 'order.subscribe' || $this->method == 'order.update' ||
				$this->method == 'order.unsubscribe' || $this->method == 'balance.query' || $this->method == 'balance.subscribe' ||
				$this->method == 'balance.update'  || $this->method == 'balance.unsubscribe'){
					$nonce = $this->msectime();
					$data = json_encode([
						"id" => $this->id,
						"method" => "server.sign",
						"params" => [$this->key, $this->getSign($nonce),$nonce]
					]);
					$this->flag=true;
					$con->send($data);
				}else{

					$data = json_encode([
						"id" => $this->id,
						"method" => $this->method,
						"params" => $this->params
					]);
					$con->send($data);
				}
			};


			$con->onMessage = function($con, $data) {
				echo $data;
				if($this->flag){
					$nonce = $this->msectime();
						$data = json_encode([
							"id" => $this->id,
							"method" => $this->method,
							"params" => $this->params
						]);
					echo "\n";
					$con->send($data);
					$this->flag=false;
				}
			};

			$con->connect();
		};

		Worker::runAll();
	}

}
