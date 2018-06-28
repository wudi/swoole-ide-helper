<?php

namespace Swoole\Coroutine;

/**
 * Class Channel
 * @package Swoole\Coroutine
 * 通道，类似于go语言的chan，支持多生产者协程和多消费者协程
 */
class Channel
{
    /**
     * select
     * 通道读写检测。类似于socket_select和stream_select可以检测channel是否可进行读写。
     * @param array $read 数组引用类型，元素为channel对象，读操作检测，可以为null
     * @param array $write 数组引用类型，元素为channel对象，写操作检测，可以为null
     * @param float $timeout 浮点型，超时设置，单位为秒，最小粒度为0.001秒，即1ms。默认为0，表示永不超时。
     * @return bool 成功返回true，底层会修改$read、$write数组，$read和$write中的元素，即是可读或可写的channel
     * @note 超时或传入的参数错误，如$read和$write中有非channel对象，底层返回false
     */
    public static function select(array &$read, array &$write, float $timeout = 0): bool
    {
    }

    /**
     * @var int $capacity 容量，这个数字一定是正整数
     */
    public $capacity;

    /**
     * Channel constructor.
     * @param int $capacity 容量
     * @note 底层使用PHP引用计数来保存变量，缓存区只需要占用 $capacity * sizeof(zval) 字节的内存
     *      PHP7版本下zval为16字节，如$capacity = 1024时，Channel将占用16K内存
     * @note 当设置为0时，底层将不再设置缓冲区，push和pop操作会立即挂起当前协程
     * @see https://wiki.swoole.com/wiki/page/845.html
     */
    public function __construct(int $capacity = 0)
    {
    }

    /**
     * push
     * 向通道中写入数据
     * @param mixed $data 任意类型的PHP变量，包括匿名函数和资源
     * @return bool 是否执行成功
     * @note 为避免产生歧义，请勿向通道中写入空数据，如0、false、空字符串、null
     * @note 执行成功返回true 通道并关闭时，执行失败返回false
     * @see https://wiki.swoole.com/wiki/page/843.html
     */
    public function push($data): bool
    {
    }

    /**
     * pop
     * 从通道中读取数据
     * @return mixed 可以是任意类型的PHP变量，包括匿名函数和资源
     * @note 通道并关闭时，执行失败返回false
     * @see https://wiki.swoole.com/wiki/page/844.html
     */
    public function pop()
    {
    }

    /**
     * isEmpty
     * 判断当前通道是否为空
     * @return bool 当前通道是否为空
     * @note true表示
     */
    public function isEmpty(): bool
    {
    }

    /**
     * isFull
     * 判断当前通道是否已满
     * @return bool 当前通道是否已满
     */
    public function isFull(): bool
    {
    }

    /**
     * close
     * 关闭通道。并唤醒所有等待读写的协程
     * @return void
     * @note 唤醒所有生产者协程，push方法返回false
     * @note 唤醒所有消费者协程，pop方法返回false
     * @see https://wiki.swoole.com/wiki/page/847.html
     */
    public function close()
    {
    }

    /**
     * stats
     * 获取通道的状态
     * @return array 状态{
     *      consumer_num : 消费者数量，表示当前通道为空，有N个协程正在等待其他协程调用push方法生产数据
     *      producer_num : 生产者数量，表示当前通道已满，有N个协程正在等待其他协程调用pop方法消费数据
     *      queue_num : 通道中的元素数量
     *      queue_bytes : 可能存在, 通道当前占用的内存字节数
     * }
     * @see https://wiki.swoole.com/wiki/page/846.html
     */
    public function stats(): array
    {
    }

    /**
     * length
     * 获取通道中的元素数量
     * @return int 通道中的元素数量
     */
    public function length(): int
    {
    }
}

# end of file
