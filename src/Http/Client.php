<?php

namespace Swoole\Http;

/**
 * swoole_http_client
 *
 * Author: EagleWu <eaglewudi@gmail.com>
 * Date: 2016/02/17
 */
class Client
{
    public $host;
    public $port;
    public $type;
    public $setting;
    public $cookies;
    public $headers;
    /**
     * 存储上次请求的返回包体
     *
     * @link https://wiki.swoole.com/wiki/page/578.html
     *
     * @var string
     */
    public $body;
    public $uploadFiles;

    public $requestMehod;
    public $requestHeaders;
    public $requestBody;

    public $statusCode; // -1 连接服务器超时 -2 服务器响应超时
    public $set_headers;
    public $connected = false;

    /**
     * 错误码
     *
     * @link https://wiki.swoole.com/wiki/page/578.html
     *
     * @var integer
     */
    public $errCode = 0;

    /**
     * @var string[] 存储上次请求返回的set-cookie头
     */
    public $set_cookie_headers;


    /**
     * swoole_http_client constructor.
     * @param string $host
     * @param integer $port
     */
    public function __construct($host, $port)
    {

    }

    /**
     * @param $setting
     * @return true
     */
    public function set($setting)
    {
    }

    /**
     * @param string $method
     */
    public function setMethod(string $method)
    {

    }

    /**
     * @param $headers
     * @return true
     */
    public function setHeaders($headers)
    {

    }

    /**
     * @param $cookies
     * @return true
     */
    public function setCookies($cookies)
    {

    }

    /**
     * @param $data
     * @return true
     */
    public function setData($data)
    {

    }

    /**
     * 更底层的Http请求方法，需要代码中调用setMethod和setData等接口设置请求的方法和数据。
     *
     * @param string $path
     * @param callable $callback
     */
    public function execute(string $path, callable $callback)
    {

    }

    /**
     * @param     $data
     * @param int $opcode
     * @param int $fin
     */
    public function push($data, $opcode = WEBSOCKET_OPCODE_TEXT, $fin = 1)
    {

    }

    /**
     * @return boolean
     */
    public function isConnected()
    {

    }

    /**
     * @return bool
     */
    public function close()
    {

    }

    /**
     * @param string $name
     * @param mixed $callback
     */
    public function on($name, $callback)
    {

    }

    /**
     * @param string $uri
     * @param mixed $finish
     */
    public function get($uri, $finish)
    {

    }

    /**
     * @param string $uri
     * @param mixed $post
     * @param mixed $finish
     */
    public function post($uri, $post, $finish)
    {

    }

    /**
     * @param string $uri
     * @param mixed $finish
     */
    public function upgrade($uri, $finish)
    {

    }

    /**
     * 添加POST文件
     *
     * $path 文件的路径，必选参数，不能为空文件或者不存在的文件
     * $name 表单的名称，必选参数，FILES参数中的key
     * $filename 文件名称，可选参数，默认为basename($path)
     * $mimeType 文件的MIME格式，可选参数，底层会根据文件的扩展名自动推断
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
        string $filename = null,
        string $mimeType = null,
        int $offset = 0,
        int $length = 0
    ) {

    }

    public function __destruct()
    {

    }
}