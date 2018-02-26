<?php

namespace Swoole;

class Event
{
    /**
     * 将Socket加入到swoole的reactor事件监听中
     *
     * 此函数可以用在Server或Client模式下
     *
     * 参数1为socket的文件描述符；
     * 参数2为回调函数，可以是字符串函数名、对象+方法、类静态方法或匿名函数，当此socket可读是回调制定的函数。
     *
     * Server程序中会增加到server socket的reactor中。
     * Client程序中，如果是第一次调用此函数会自动创建一个reactor，并添加此socket，程序将在此处进行wait。
     * swoole_event_add函数之后的代码不会执行。当调用swoole_event_exit才会停止wait，程序继续向下执行。
     * 第二次调用只增加此socket到reactor中，开始监听事件
     *
     * @param int $sock
     * @param \\is_callable $callback
     * @param $write_callback
     * @param $flag
     * @return bool
     */
    public static function add($sock, $read_callback = null, $write_callback = null, $flag = null)
    {
    }
    /**
     * 修改socket的事件设置
     * 可以修改可读/可写事件的回调设置和监听的事件类型
     *
     * @param $sock
     * @param $read_callback
     * @param null $write_callback
     * @param null $flag
     */
    public static function set($sock, $read_callback = null, $write_callback = null, $flag = null)
    {
    }
    /**
     * 从reactor中移除监听的Socket
     *
     * swoole_event_del应当与 swoole_event_add 成对使用
     *
     * @param int $sock
     * @return bool
     */
    public function del($sock)
    {
    }
    /**
     * 退出事件轮询
     *
     * @return void
     */
    public function exit()
    {
    }
    /**
     * 异步写
     * @param mixed $socket
     * @param string $data
     */
    public function write($socket, $data)
    {
    }
}
