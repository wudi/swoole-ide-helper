<?php

namespace Swoole\Http;

/**
 * Http请求对象
 * Class swoole_http_request
 */
class Request
{
    /**
     * @var array Http请求的GET参数，相当于PHP中的$_GET，格式为数组
     * @note 为防止HASH攻击，GET参数最大不允许超过128个
     */
    public $get;
    /**
     * @var array HTTP POST参数，格式为数组
     * @note POST与Header加起来的尺寸不得超过package_max_length的设置，否则会认为是恶意请求
     * @note POST参数的个数最大不超过128个
     */
    public $post;
    /** @var array Http请求的头部信息。类型为数组，所有key均为小写。 */
    public $header;
    /**
     * @var array Http请求相关的服务器信息，相当于PHP的$_SERVER数组。包含了Http请求的方法，URL路径，客户端IP等信息。
     */
    public $server;
    /** @var array HTTP请求携带的COOKIE信息，与PHP的$_COOKIE相同，格式为数组。 */
    public $cookie;
    public $files;

    public $fd;

    /**
     * 获取非urlencode-form表单的POST原始数据
     * @return string
     */
    public function rawContent()
    {
    }
}