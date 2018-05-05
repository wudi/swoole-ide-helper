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
     * max_coroutine
     * 设置最大协程数，超过限制后底层将无法创建新的协程。
     *
     * stack_size
     * 设置单个协程初始栈的内存尺寸，默认为8192
     *
     * @param array $options
     */
    public static function set(array $options)
    {

    }

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

    /**
     * 协程方式读取文件。
     *
     * 需要2.1.2或更高版本
     *
     * 参数
     * $filename文件名
     * 返回值
     * 读取成功返回字符串内容，读取失败返回false
     * readFile方法没有尺寸限制，读取的内容会存放在内存中，因此读取超大文件时可能会占用过多内存
     *
     * @param string $filename
     *
     * @return string|bool
     */
    public static function readFile(string $filename): string
    {
    }

    /**
     * 协程方式写入文件。
     *
     * 需要2.1.2或更高版本
     *
     * 参数
     * $filename为文件的名称，必须有可写权限，文件不存在会自动创建。打开文件失败会立即返回false
     * $fileContent为要写入到文件的内容，最大可写入4M
     * $flags为写入的选项，可以使用FILE_APPEND表示追加到文件末尾，默认会清空当前文件内容
     *
     * 返回值
     * 写入成功返回true，写入失败返回false
     *
     * @param string $filename
     * @param string $fileContent
     * @param int $flags
     * @return bool
     */
    public static function writeFile(string $filename, string $fileContent, int $flags): bool
    {

    }

    /**
     * 执行一条shell指令。底层自动进行协程调度。
     *
     * 参数
     * $cmd 要执行的shell指令
     *
     * 返回值
     * 执行失败返回false，执行成功返回数组，包含了进程退出的状态码、信号、输出内容。
     *
     * array(
     *   'code' => 0,
     *   'signal' => 0,
     *   'output' => '',
     * );
     * 使用实例
     * go(function() {
     *   $ret = Co::exec("md5sum ".__FILE__);
     * });
     *
     * @param string $cmd
     * @return array|bool
     */
    public static function exec(string $cmd): array
    {

    }

    /**
     *
     * 进行DNS解析，查询域名对应的IP地址，与gethostbyname不同，getaddrinfo支持更多参数设置，而且会返回多个IP结果。
     *
     * $domain 域名，如www.baidu.com
     * $family 默认为AF_INET表示返回IPv4地址，使用AF_INET6时返回IPv6地址
     * 其他参数设置请参考man getaddrinfo 文档
     * 成功返回多个IP地址组成的数组，失败返回false
     *
     * @param string $domain
     * @param int $family
     * @param int $socktype
     * @param int $protocol
     * @param string|null $service
     * @return array|bool
     */
    public static function getAddrInfo(
        string $domain,
        int $family = AF_INET,
        int $socktype = SOCK_STREAM,
        int $protocol = STREAM_IPPROTO_TCP,
        string $service = null
    ): array {

    }

}