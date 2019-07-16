<?php

namespace Swoole\Http;
/**
 * Http响应对象
 * Class swoole_http_response
 */
class Response
{
    /**
     * 结束Http响应，发送HTML内容
     * @param string $html
     */
    public function end($html = '')
    {
    }

    /**
     * 启用Http-Chunk分段向浏览器发送数据
     * @param $html
     */
    public function write($html)
    {
    }

    /**
     * 设置Http头信息
     * @param string $key
     * @param string $value
     * @param bool $ucfirst
     */
    public function header($key, $value, $ucfirst = true)
    {
    }

    /**
     * 设置Cookie
     *
     * @param string $key
     * @param string $value
     * @param int $expire
     * @param string $path
     * @param string $domain
     * @param bool $secure
     * @param bool $httponly
     */
    public function cookie($key, $value, $expire = 0, $path = '/', $domain = '', $secure = false, $httponly = false)
    {
    }

    /**
     * 设置HttpCode，如404, 501, 200
     * @param $code
     */
    public function status($code)
    {

    }

    /**
     * 设置Http压缩格式
     * @param int $level
     */
    function gzip($level = 1)
    {

    }

    /**
     * @param $filename
     * @param int $offset
     * @param null $length
     */
    public function sendFile( $filename,  $offset = 0,  $length = null)
    {
    }

    /**
     * 跳转
     *
     * @param string $url
     * @param integer $httpCode
     * @return void
     */
    public function redirect($url, $httpCode = 302)
    {
    }
}