<?php
/**
 * swoole-ide-helper
 *
 * Author: Eagle <eaglewudi@gmail.com>
 * Datetime: 2018/10/10 10:47
 */

namespace Swoole;


class Runtime
{

    /**
     * 运行时动态将基于php_stream实现的扩展、PHP网络客户端代码一键协程化
     *
     * @since 4.1.0
     *
     * 4.1 版本仅支持tcp和 unix两种stream类型
     * 4.2 版本增加了对 udp、udg、unix、ssl、tls 类型的支持
     *
     * @link https://wiki.swoole.com/wiki/page/965.html
     * @param bool $enable
     * @param int $flags
     */
    public static function enableCoroutine($enable = true, $flags = SWOOLE_HOOK_ALL)
    {

    }

}