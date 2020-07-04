<?php


namespace Swoole\Coroutine\Http;


/**
 * 完全协程化的 HTTP 服务器实现，Co\Http\Server 由于 HTTP 解析性能原因使用 C++ 编写，因此并非由 PHP 编写的 Co\Server 的子类。
 * HTTP server completely implemented by coroutine, due to the reason of HTTP performance, Co\Http\Server is written in C++,
 * thus not the children class of Co\Server written in PHP
 * Class Server
 * @package Swoole\Coroutine\Http
 */
class Server
{
    /**
     * Server constructor.
     * @param $host
     * @param int $port
     * @param int $ssl
     * @param int $reuse_port
     */
    public function __construct($host, $port =0, $ssl =0, $reuse_port=0)
    {
    }

    /**
     * 设置server参数
     * apply settings to the server
     * @param array $settings
     * @return bool
     */
    public function set(array $settings=[]){

    }


    /**
     * 设置路由和回调函数
     * Set routing rules with the callback function
     * @param $pattern
     * @param callable|null $callback
     */
    public function handle($pattern, callable $callback=null){

    }

    /**
     * 启动运行
     * start the server
     */
    public function start(){

    }

    /**
     * 停止运行状态，关闭socket
     * 断开所有client连接
     * stop running, closing the socket
     * close all the connections between clients
     */
    public function shutdown(){
    }

    /**
     * 建立连接时执行
     * jobs when connection on Accepted
     */
    public function onAccept(){

    }

    /**
     * 自带析构函数
     * default destructor
     */
    public function __destruct()
    {
    }
}