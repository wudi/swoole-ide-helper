<?php
/**
 * swoole-ide-helper
 *
 * Author: Eagle <eaglewudi@gmail.com>
 * Datetime: 2018/10/10 10:19
 */

namespace Swoole\Coroutine;


/**
 * Class Socket
 *
 * @since 2.2.0
 * @package Swoole\Coroutine
 */
class Socket
{

    /**
     * Socket constructor.
     *
     * 构造方法会调用socket系统调用创建一个socket句柄。
     * 调用失败时会抛出Swoole\Coroutine\Socket\Exception异常。
     * 并设置$socket->errCode属性。可根据该属性的值得到系统调用失败的原因。
     *
     * @link https://wiki.swoole.com/wiki/page/913.html
     *
     * @param int $domain 协议域，可使用AF_INET、AF_INET6、AF_UNIX
     * @param int $type 类型，可使用SOCK_STREAM、SOCK_DGRAM、SOCK_RAW
     * @param int $protocol 协议，IPPROTO_TCP、IPPROTO_UDP、IPPROTO_STCP、IPPROTO_TIPC，可设置为0
     */
    public function __construct($domain, $type, $protocol)
    {

    }

    /**
     * 绑定地址和端口。
     * 此方法没有IO操作，不会引起协程切换
     *
     * @link https://wiki.swoole.com/wiki/page/914.html
     * @param string $address 绑定的地址，如0.0.0.0、127.0.0.1
     * @param int $port 绑定的端口，默认为0，系统会随机绑定一个可用端口，可使用getsockname方法得到系统分配的port
     * @return bool
     */
    public function bind($address, $port = 0)
    {

    }

    /**
     * 监听Socket
     *
     * 此方法没有IO操作，不会引起协程切换
     *
     * @link https://wiki.swoole.com/wiki/page/915.html
     * @param int $backlog 监听队列的长度，默认为0，系统底层使用epoll实现了异步IO，不存在阻塞，因此backlog的重要程度并不高
     * @return bool
     */
    public function listen($backlog = 0)
    {

    }

    /**
     * 接受客户端发起的连接
     *
     * 调用此方法会立即挂起当前协程，并加入EventLoop监听可读事件。
     * 当Socket可读有到来的连接时自动唤醒该协程。并返回对应客户端连接的Socket对象。
     *
     * 该方法必须在使用listen方法后使用，适用于Server端。
     *
     * 超时或accept系统调用报错时返回false，可使用errCode属性获取错误码，其中超时错误码为ETIMEDOUT
     * 成功返回客户端连接的socket，类型同样为Swoole\Coroutine\Socket对象。可对其执行send、recv、close等操作
     *
     * @link https://wiki.swoole.com/wiki/page/916.html
     * @param double $timeout 设置超时，默认为-1表示永不超时。设置超时参数后，底层会设置定时器，在规定的时间没有客户端连接到来，accept方法将返回false
     * @return Coroutine\Socket|false
     */
    public function accept($timeout = -1)
    {

    }

    /**
     * 连接到目标服务器
     *
     * 调用此方法会发起异步的connect系统调用，并挂起当前协程，底层会监听可写，当连接完成或失败后，恢复该协程。
     * 该方法适用于Client端，支持IPv4、IPv6、UnixSocket。
     *
     * @link https://wiki.swoole.com/wiki/page/917.html
     * @param string $host
     * @param int $port
     * @param double $timeout
     * @return bool
     */
    public function connect($host, $port = 0, $timeout = -1)
    {

    }

    /**
     * 向对端发送数据
     *
     * send方法会立即执行send系统调用发送数据，当send系统调用返回错误EAGAIN时，
     * 底层将自动监听可写事件，并挂起当前协程，等待可写事件触发时，重新执行send系统调用发送数据。并唤醒该协程。
     *
     * @link https://wiki.swoole.com/wiki/page/918.html
     * @param string $data 要发送的数据内容，可以为文本或二进制数据
     * @param double $timeout 设置超时时间，默认为-1表示永不超时
     * @return int|false
     */
    public function send($data, $timeout = -1)
    {

    }

    /**
     * 向对端发送数据
     *
     * 与send方法不同的是, sendAll会尽可能完整地发送数据, 直到成功发送全部数据或遇到错误中止。
     *
     * @since 4.3.0
     * @link https://wiki.swoole.com/wiki/page/1069.html
     * @param string $data 要发送的数据内容，可以为文本或二进制数据
     * @param double $timeout 设置超时时间，默认为-1表示永不超时
     * @return int|false
     */
    public function sendAll($data, $timeout = - 1)
    {
        
    }

    /**
     * 接收数据
     *
     * @link https://wiki.swoole.com/wiki/page/919.html
     * @param int $length 接收数据的预期长度，返回值长度不一定等于预期长度
     * @param double $timeout 设置超时时间，默认为-1表示永不超时
     * @return string|false
     */
    public function recv($length = 65535, $timeout = -1)
    {

    }

    /**
     * 接收数据
     * 与recv不同的是, recvAll会尽可能完整地接收响应长度的数据, 直到接收完成或遇到错误失败。
     *
     * @since 4.3.0
     * @link https://wiki.swoole.com/wiki/page/1070.html
     * @param int $length 需要接收的长度
     * @param double $timeout 设置超时时间，默认为-1表示永不超时
     * @return string|false
     */
    public function recvAll($length = 65535, $timeout = -1)
    {
        
    }

    /**
     * 向指定的地址和端口发送数据。用于SOCK_DGRAM类型的socket
     *
     * 此方法没有协程调度，底层会立即调用sendto向目标主机发送数据。
     * 此方法不会监听可写，sendto可能会因为缓存区已满而返会false，需要自行处理。或者使用send方法
     *
     * @link https://wiki.swoole.com/wiki/page/921.html
     * @param string $address
     * @param int $port
     * @param string $data
     * @return int|false
     */
    public function sendto($address, $port, $data)
    {

    }

    /**
     * 接收数据，并设置来源主机的地址和端口。用于SOCK_DGRAM类型的socket。
     *
     * @link https://wiki.swoole.com/wiki/page/922.html
     * @param array $peer
     * @param double $timeout
     * @return string|false
     */
    public function recvfrom(array &$peer, $timeout = -1)
    {

    }

    /**
     * 获取socket的地址和端口信息。此方法没有协程调度开销。
     *
     * 调用成功返回，包含address和port的数组
     * 调用失败返回false，并设置errCode属性
     *
     * @link https://wiki.swoole.com/wiki/page/923.html
     * @return array
     */
    public function getsockname()
    {

    }

    /**
     * 获取socket的对端地址和端口信息，仅用于SOCK_STREAM类型有连接的socket。此方法没有协程调度开销。
     *
     * 调用成功返回，包含address和port的数组
     * 调用失败返回false，并设置errCode属性
     *
     * @link https://wiki.swoole.com/wiki/page/924.html
     * @return array
     */
    public function getpeername()
    {

    }

    /**
     * 关闭Socket
     * Co\Socket 对象析构时如果会自动执行 close
     *
     * @link https://wiki.swoole.com/wiki/page/920.html
     * @return bool
     */
    public function close()
    {

    }

}
