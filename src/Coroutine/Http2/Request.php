<?php
/**
 * Copyright: Swoole
 * Author: Twosee <twose@qq.com>
 * Date: 2018/4/5 下午9:13
 */

namespace Swoole\Coroutine\Http;

class Request
{
    /**
     * Swoole\Coroutine\Http2\Request对象没有任何方法，通过设置对象属性来写入请求相关的信息。
     *
     * headers 数组，HTTP头
     * method 字符串，设置请求方法，如GET、POST
     * path 字符串，设置URL路径，如/index.php?a=1&b=2，必须以/作为开始
     * cookies 数组，设置COOKIES
     * data 设置请求的body，如果为字符串时将直接作为RAW form-data进行发送
     * data 为数组时，底层自动会打包为x-www-form-urlencoded格式的POST内容，并设置Content-Type为application/x-www-form-urlencoded
     * pipeline 布尔型，如果设置为true，发送完$request后，不关闭stream，可以继续写入数据内容
     *
     * PIPELINE
     * 默认send方法在发送请求之后，会结束当前的Http2 Stream，启用PIPELINE后，底层会保持stream流，可以多次调用write方法，向服务器发送数据帧，请参考write方法。
     */

    public $method = 'GET';
    public $header = [];
    public $path = '';
    public $cookies = [];
    /**@var string|array */
    public $data = '';
    public $pipeline = false;
    public $files = null;

}