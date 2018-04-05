<?php
/**
 * Copyright: Swoole
 * Author: Twosee <twose@qq.com>
 * Date: 2018/4/5 下午9:21
 */

namespace Swoole\Http2;

class Response
{
    /**
     * cookie 服务器设置的COOKIE信息
     * header 服务器发送的Header信息
     * server 底层连接与协议相关的信息
     * body 服务器发送的响应包体
     * statusCode 服务器发送的Http状态码，如200、502等
     */

    public $errCode = 0;
    public $statusCode = 0;
    public $body = '';
    public $streamId = 0;
    public $header = [];
    public $server = [];
    public $cookie = [];

}