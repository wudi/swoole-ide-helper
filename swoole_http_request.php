<?php
/**
 * Http请求对象
 * Class swoole_http_request
 */
class swoole_http_request
{
    /**
     * @var array
     */
    public $get;

    /**
     * @var array
     */
    public $post;

    /**
     * @var array
     */
    public $header;

    /**
     * @var array
     */
    public $server;

    /**
     * @var array
     */
    public $cookie;

    /**
     * @var array
     */
    public $files;

    /**
     * @var int
     */
    public $fd;

    /**
     * 获取非urlencode-form表单的POST原始数据
     * @return string
     */
    public function rawContent() {}
}
