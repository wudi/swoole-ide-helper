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
     *
     * @return bool
     */
    public function upgrade($path): bool
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
     *
     * @return bool
     */
    public function push(string $data, int $opcode = WEBSOCKET_OPCODE_TEXT, bool $finish = true): bool
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
     * 添加POST文件 (注意,此方法参数3,4位置与async-http-client不同
     *
     * $path 文件的路径，必选参数，不能为空文件或者不存在的文件
     * $name 表单的名称，必选参数，FILES参数中的key
     * $mimeType 文件的MIME格式，可选参数，底层会根据文件的扩展名自动推断
     * $filename 文件名称，可选参数，默认为basename($path)
     * $offset 上传文件的偏移量，可以指定从文件的中间部分开始传输数据。此特性可用于支持断点续传。
     * $length 发送数据的尺寸，默认为整个文件的尺寸
     * 使用addFile会自动将POST的Content-Type将变更为form-data。addFile底层基于sendfile，可支持异步发送超大文件。
     *
     * addFile在1.8.9或更高版本可用
     * $offset, $length 参数在1.9.11或更高版本可用
     *
     * @param $file
     */
    public function addFile(
        string $path,
        string $name,
        string $mimeType = null,
        string $filename = null,
        int $offset = 0,
        int $length = -1
    ) {

    }

    /**
     * 接收消息。与setDefer或upgrade配合使用。
     *
     * $timeout 设置超时，优先使用指定的参数，其次使用set方法中传入的timeout配置
     * 未设置任何超时，将持续等待
     *
     * @return string|bool|\Swoole\WebSocket\Frame
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