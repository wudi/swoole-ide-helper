<?php

namespace Swoole\Http;

/**
 * Http响应对象
 * Class swoole_http_response
 */
class Response
{

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
     * @param string $samesite 从 v4.4.6 版本开始支持
     */
    public function cookie($key, $value, $expire = 0, $path = '/', $domain = '', $secure = false, $httponly = false, $samesite = '')
    {
    }
    
    /**
     * 设置rawCookie
     *
     * @param string $key
     * @param string $value
     * @param int $expire
     * @param string $path
     * @param string $domain
     * @param bool $secure
     * @param bool $httponly
     * @param string $samesite 从 v4.4.6 版本开始支持
     */
    public function rawCookie($key, $value, $expire = 0, $path = '/', $domain = '', $secure = false, $httponly = false, $samesite = '')
    {
    }
    
    /**
     * 设置HttpCode，如404, 501, 200
     * @param int $code
     */
    public function status($code)
    {
    }

    /**
     * 设置Http压缩格式
     * @param int $level
     * @deprecated 此方法在 4.1.0 或更高版本中已废弃
     */
    public function gzip($level = 1)
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

    /**
     * 启用Http-Chunk分段向浏览器发送数据
     *
     * @param string $html
     */
    public function write($html)
    {
    }

    /**
     * @param $filename
     * @param int $offset
     * @param int $length
     */
    public function sendFile($filename, $offset = 0, $length = 0)
    {
    }


    /**
     * 结束Http响应，发送HTML内容
     * @param string $html
     */
    public function end($html = '')
    {
    }

    /**
     * 分离响应对象
     * @version 2.2.0
     * @return bool
     */
    public function detach()
    {
    }

    /**
     * 发送WebSocket握手成功信息
     * **仅可用于\Co\Http\Server中**
     */
    public function upgrade()
    {
    }

    /**
     * 接收WebSocket消息。
     * **仅可用于\Co\Http\Server中**
     *
     * @return \Swoole\WebSocket\Frame
     */
    public function recv()
    {
    }

    /**
     * 发送WebSocket数据帧
     * **仅可用于\Co\Http\Server中**
     *
     * @param mixed $data
     * @param integer $opcode
     * @param bool $finish
     */
    public function push($data, $opcode = 1, $finish = true)
    {
    }

    /**
     * 构造新的Http\Response对象
     *
     * @param int $fd
     * @return Response
     */
    public static function create($fd)
    {
    }
}
