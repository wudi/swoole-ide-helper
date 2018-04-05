<?php
/**
 * swoole-ide-helper
 * Author: Wudi <wudi@51idc.com>
 * Datetime: 20/07/2017
 */

namespace Swoole\Coroutine\Http;

class Client extends \Swoole\Http\Client
{

    public function __construct($host, $port, $ssl = false)
    {
        return $this;
    }

    /**
     * 发起 GET 请求
     *
     * @link https://wiki.swoole.com/wiki/page/582.html
     *
     * @param string $path 设置URL路径，如/index.html，注意这里不能传入http://domain
     */
    public function get($path)
    {

    }

    /**
     * 发起 POST 请求
     *
     * @link https://wiki.swoole.com/wiki/page/583.html
     *
     * @param string $path 设置URL路径，如/index.html，注意这里不能传入http://domain
     * @param mixed $data 请求的包体数据，如果 $data 为数组底层自动会打包为 x-www-form-urlencoded 格式的 POST 内容，
     *                     并设置 Content-Type 为 application/x-www-form-urlencoded
     */
    public function post($path, $data)
    {

    }

    /**
     * 升级为WebSocket连接。
     *
     * 失败返回false，成功返回true
     * 升级成功后可以使用push方法向服务器端推送消息，也可以调用recv接收消息
     * upgrade会产生一次协程调度
     *
     * @param string $path
     */
    public function upgrade($path)
    {

    }

    /**
     * 向WebSocket服务器推送消息。
     *
     * push方法必须在upgrade成功之后才能执行
     * push方法不会产生协程调度，写入发送缓存区后会立即返回
     *
     * 参数
     * $data 要发送的数据内容，默认为UTF-8文本格式，如果为其他格式编码或二进制数据，请使用WEBSOCKET_OPCODE_BINARY
     * $opcode操作类型，默认为WEBSOCKET_OPCODE_TEXT表示发送文本
     * $opcode必须为合法的WebSocket OPCODE，否则会返回失败，并打印错误信息opcode max 10
     *
     * 返回值
     * 发送成功，返回true
     * 连接不存在、已关闭、未完成WebSocket，发送失败返回false
     *
     * 错误码
     * 8502：错误的OPCODE
     * 8503：未连接到服务器或连接已被关闭
     * 8504：握手失败
     *
     * @param string $data
     * @param int $opcode
     * @param bool $finish
     */
    public function push(string $data, int $opcode = WEBSOCKET_OPCODE_TEXT, bool $finish = true)
    {

    }

    /**
     * 延迟收包
     *
     * @param bool $bool
     */
    public function setDefer(bool $bool = true)
    {

    }

    /**
     * 更底层的Http请求方法，需要代码中调用setMethod和setData等接口设置请求的方法和数据。
     *
     * @param string $path
     */
    public function execute(string $path)
    {

    }

    /**
     * 接收消息。与setDefer或upgrade配合使用。
     *
     * $timeout 设置超时，优先使用指定的参数，其次使用set方法中传入的timeout配置
     * 未设置任何超时，将持续等待
     */
    public function recv(float $timeout = -1)
    {

    }

    /**
     * @return bool
     */
    public function close()
    {
        return true;
    }

}