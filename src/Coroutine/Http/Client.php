<?php
/**
 * swoole-ide-helper
 * Author: Wudi <wudi@51idc.com>
 * Datetime: 20/07/2017
 */

namespace Swoole\Coroutine\Http;


class Client extends \Swoole\Http\Client
{

    /**
     * @var 主机ip地址
     */
    public $host;

    /**
     * @var bool 是否为ssl连接
     */
    public $ssl = false;

    /**
     * @var array
     */
    public $redirect_headers;

    /**
     * @var bool 记录是否使用了延迟收包
     */
    public $defer = false;

    /**
     * @var string[] 请求头
     */
    public $requestHeaders;

    /**
     * @var string[] 存储上次请求返回的set-cookie头
     */
    public $set_cookie_headers;

    /**
     * 存储上次请求的返回包体
     *
     * @link https://wiki.swoole.com/wiki/page/578.html
     *
     * @var string
     */
    public $body;

    /**
     * 错误码
     *
     * @link https://wiki.swoole.com/wiki/page/578.html
     *
     * @var integer
     */
    public $errCode;

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
     * 延迟收包
     *
     * @param bool $bool
     */
    public function setDefer(bool $bool = true)
    {

    }

    /**
     * 收包
     */
    public function recv()
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