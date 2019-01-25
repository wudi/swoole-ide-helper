<?php
/**
 * swoole-ide-helper
 * Author: Eagle <eaglewudi@gmail.com>
 * Datetime: 20/07/2017
 */

namespace Swoole\Coroutine;


class Client
{
    const MSG_OOB = 1;
    const MSG_PEEK = 2;
    const MSG_DONTWAIT = 128;
    const MSG_WAITALL = 64;
    
    public $errCode;
    public $sock;
    public $type;
    public $setting;
    public $connected;
    
    /**
     * @param $type
     * @return mixed
     */
    public function __construct($type){}
    
    /**
     * 连接到远程服务器
     * connect操作会有一次协程切换开销，connect发起时yield，完成时resume
     * @link https://wiki.swoole.com/wiki/page/588.html
     *
     * @param string $host 远程服务器的地址
     * @param int $port 远程服务器端口
     * @param float $timeout 是网络IO的超时，包括connect/send/recv，单位是s，支持浮点数。默认为0.1s，即100ms，超时发生时，连接会被自动close掉
     * @return bool
     */
    public function connect($host, $port, $timeout = 0.1)
    {
        return true;
    }

    /**
     * 发送数据
     * @link https://wiki.swoole.com/wiki/page/660.html
     *
     * @param string $data 发送的数据，必须为字符串类型，支持二进制数据
     * @return bool
     */
    public function send($data)
    {
        return true;
    }

    /**
     * 从服务器端接收数据
     *
     * 底层会自动yield，等待数据接收完成后自动切换到当前协程。
     * @link https://wiki.swoole.com/wiki/page/661.html
     *
     * @return string
     */
    public function recv($timeout = -1)
    {
        return ;
    }

    /**
     * 向任意IP:PORT的服务器发送数据包，仅支持UDP/UDP6的client
     * @param $ip
     * @param $port
     * @param $data
     * @return bool
     */
    function sendto($ip, $port, $data)
    {

    }

    /**
     * 判断是否连接到服务器
     * @return bool
     */
    public function isConnected()
    {
    }

    /**
     * 获取客户端socket的host:port信息
     * @return bool | array
     */
    public function getsockname()
    {
    }

    /**
     * 获取远端socket的host:port信息，仅用于UDP/UDP6协议
     * UDP发送数据到服务器后，可能会由其他的Server进行回复
     * @return bool | array
     */
    public function getpeername()
    {
    }

    /**
     * 设置客户端参数
     * @param array $setting
     */
    public function set(array $setting)
    {
    }

    /**
     * @param $file string file with path
     * @return bool|mixed false if file not exist
     */
    public function sendfile($file)
    {
    }

    /**
     * 关闭连接
     * 不存在阻塞，会立即返回
     * @link https://wiki.swoole.com/wiki/page/662.html
     *
     * @return bool  执行成功返回true，失败返回false
     */
    public function close()
    {
        return true;
    }

}
