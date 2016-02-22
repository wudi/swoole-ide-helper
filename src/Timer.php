<?php
/**
 * swoole-ide-helper.
 *
 * Author: wudi <wudi23@baidu.com>
 * Date: 2016/02/17
 */

namespace Swoole;

/**
 * Class Timer
 *
 * 异步定时器
 *
 * @package Swoole
 */
class Timer
{
    /**
     * @param int $ms
     * @param callable $callback
     */
    static function tick($ms, callable $callback)
    {

    }

    /**
     * 在指定的时间后执行函数，需要swoole-1.7.7以上版本
     *
     * @param int $ms 指定时间，单位为毫秒
     * @param callable $callback 时间到期后所执行的函数，必须是可以调用的。callback函数不接受任何参数
     */
    static function after($ms, callable $callback)
    {

    }

    /**
     * 使用定时器ID来删除定时器
     *
     * @param int $timerId 定时器ID，调用swoole_timer_add/swoole_timer_after 后会返回一个整数的ID
     */
    static function clear($timerId)
    {

    }
}