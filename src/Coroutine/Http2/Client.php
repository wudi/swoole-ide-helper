<?php
/**
 * Copyright: Swoole
 * Author: Twosee <twose@qq.com>
 * Date: 2018/4/5 下午9:06
 */

namespace Swoole\Coroutine\Http2;

/**
 * Class Client
 * @package Swoole\Coroutine\Http2
 *
 * 实例
 *   use Swoole\Coroutine as co;
 *   co::create(function ()
 *   {
 *     $cli = new co\Http2\Client('127.0.0.1', 9518);
 *     $cli->set([ 'timeout' => 1]);
 *     $cli->connect();
 *
 *     $req = new co\Http2\Request;
 *     $req->path = "/index.html";
 *     $req->headers = [
 *       'host' => "localhost",
 *       "user-agent" => 'Chrome/49.0.2587.3',
 *       'accept' => 'text/html,application/xhtml+xml,application/xml',
 *       'accept-encoding' => 'gzip',
 *     ];
 *     $req->cookies = ['name' => 'rango', 'email' => '1234@qq.com'];
 *     var_dump($cli->send($req));
 *     $resp = $cli->recv();
 *     var_dump($resp);
 * });
 */
class Client
{

    /**
     * $host 目标主机的IP地址，$host如果为域名底层需要进行一次DNS查询
     * $port 目标端口，Http一般为80端口，Https一般为443端口
     * $ssl 是否开启TLS/SSL隧道加密，https网站必须设置为true
     * 默认超时时间为500ms，如果你需要请求外网URL请修改timeout为更大的数值
     * $ssl需要依赖openssl，必须在编译swoole时启用--enable-openssl
     *
     * @param string $host
     * @param int $port
     * @param bool $ssl
     */
    public function __construct(string $host, int $port, bool $ssl = false) { }

    /**
     * 设置客户端参数
     *
     * @link https://wiki.swoole.com/wiki/page/p-client_setting.html
     * @param array $options
     */
    public function set(array $options) { }

    /**
     * 连接到目标服务器。此方法没有任何参数。
     * 发起connect后，底层会自动进行协程调度，当连接成功或失败时connect会返回。
     * 连接建立后可以调用send方法向服务器发送请求。
     *
     * 连接成功，返回true
     * 连接失败，返回false，请检查errCode属性获取错误码
     *
     * @return bool
     */
    public function connect(): bool { }

    /**
     * 向服务器发送请求，底层会自动建立一个Http2的stream。可以同时发起多个请求。
     *
     * 接受Swoole\Coroutine\Http2\Request类的对象作为参数
     * 成功返回流的编号，编号为从1开始自增的奇数
     * 失败返回false
     *
     * @param Request $request
     * @return int|false
     */
    public function send(\Swoole\Coroutine\Http2\Request $request) { }

    /**
     * 向服务器发送更多数据帧，可以多次调用write向同一个stream写入数据帧。
     *
     * $streamId 流编号，由send方法返回
     * $data数据帧的内容，可以为字符串或数组
     * $end 是否关闭流
     *
     * 注意事项
     * 如果要使用write分段发送数据帧，必须在send请求时将$request->pipeline设置为true
     * 当发送end为true的数据帧之后，流将关闭。之后不能再调用write向此stream发送数据
     *
     * @param int $streamId
     * @param mixed $data
     * @param bool $end
     */
    public function write(int $streamId, mixed $data, bool $end = false) { }

    /**
     * 接受请求，调用此方法时会yield让出协程控制权，服务器返回响应内容后resume当前协程。
     *
     * 成功后返回 Http2\Response 对象。
     *
     * @return Response
     */
    public function recv(): \Swoole\Http2\Response { }

    /**
     * 关闭连接
     */
    public function close() { }
}