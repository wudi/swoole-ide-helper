<?php
/**
 * swoole-ide-helper
 * Author: Wudi <wudi@anchnet.com>
 * Datetime: 09/11/2017
 */

namespace Swoole;

class Coroutine
{
    /**
     * 创建一个新的协程，并立即执行
     *
     * @param callable $function 协程执行的代码
     * @return bool
     */
    public static function create(callable $function)
    {
        return true;
    }

    /**
     * 恢复某个协程，使其继续运行
     * 当前协程处于挂起状态时，另外的协程中可以使用resume再次唤醒当前协程
     * @link https://wiki.swoole.com/wiki/page/772.html
     * @param string $coroutineId 为要恢复的协程ID，在协程内可以使用getuid获取到协程的ID
     */
    public static function resume($coroutineId)
    {

    }

    /**
     * 挂起当前协程
     * @link https://wiki.swoole.com/wiki/page/773.html
     * @param string $corouindId 要挂起协程的ID
     */
    public static function suspend($corouindId)
    {

    }

    /**
     * 获取当前协程的唯一id 返回值： * 成功时返回当前协程ID（int） * 如果当前不在协程环境中，则返回-1
     *
     * @return integer
     */
    public static function getuid()
    {
        return 1;
    }

    /**
     * 协程版反射调用函数
     *
     * @param callable $callback
     * @param array $param_arr
     * @return mixed
     */
    public static function call_user_func_array(callable $callback, array $param_arr)
    {

    }

    /**
     * 协程版反射调用函数
     *
     * @param callable $callback
     * @param null $parameter [optional]
     * @param null $_ [optional]
     * @return mixed
     */
    public static function call_user_func(callable $callback, $parameter = null, $_ = null)
    {

    }

    /**
     * 根据主机名获取IP地址
     *
     * @param string $domain
     * @param int $family
     *
     * @return string
     */
    public static function getHostByName(string $domain, int $family = AF_INET): string
    {
    }

    /**
     * 读文件,从fopen打开的句柄中
     *
     * @param int $fp
     *
     * @return string
     */
    public static function fread(int $fp): string
    {
    }

    /**
     * 协程方式向文件写入数据。
     *
     * $handle文件句柄，必须是fopen打开的文件类型stream资源
     * $data要写入的数据内容，可以是文本或二进制数据
     * $length写入的长度，默认为0，表示写入$data的全部内容，$length必须小于$data的长度
     * @param resource $handle
     * @param string $data
     * @param int $length
     *
     * @return int 写入成功返回数据长度，失败返回false
     */
    public static function fwrite(resource $handle, string $data, int $length = 0): int
    {
    }


    /**
     * 进入等待状态。相当于PHP的sleep函数，
     * 不同的是Coroutine::sleep是协程调度器实现的，
     * 底层会yield当前协程，让出时间片，并添加一个异步定时器，
     * 当超时时间到达时重新resume当前协程，恢复运行。
     * 使用sleep接口可以方便地实现超时等待功能。
     *
     * @param float $seconds 必须大于0，最大不得超过一天时间（86400秒）
     */
    public static function sleep(float $seconds): void
    {
    }

}