<?php

namespace Swoole;

/**
 * Class swoole_channel
 */
class Channel
{

    /**
     * 通道构造方法。
     *
     * $capacity，设置容量，默认为0
     * 底层使用PHP引用计数来保存变量，缓存区只需要占用 $capacity * sizeof(zval) 字节的内存
     * PHP7版本下zval为16字节，如$capacity = 1024时，Channel将占用16K内存
     *
     * 无缓冲区
     * 当设置为0时，底层将不再设置缓冲区，push和pop操作会立即挂起当前协程。
     *
     * 缓存数据
     * 当设置大于0的值时，将启用缓冲区。允许队列中缓存$capacity数量的PHP变量。
     * 即使没有任何消费者进行pop，然后可以向通道中写入$capacity次数据。
     * push写入的数据数量超过$capacity时，协程将会被挂起
     *
     * @param int $capacity
     */
    public function __construct(int $capacity = 0)
    {
    }

    /**
     * 向通道中写入数据。
     *
     * $data可以是任意类型的PHP变量，包括匿名函数和资源
     * 执行成功返回true
     * 通道并关闭时，执行失败返回false
     *
     * 通道已满
     * 自动yield当前协程，其他消费者协程pop消费数据后，通道可写，将重新resume当前协程
     * 多个生产者协程同时push时，底层自动进行排队，底层会按照顺序逐个resume这些生产者协程
     *
     * 通道为空
     * 自动唤醒其中一个消费者协程
     * 多个消费者协程同时pop时，底层自动进行排队，按照顺序逐个resume这些消费者协程
     *
     * @param mixed $data
     *
     * @return bool
     */
    public function push($data): bool
    {

    }

    /**
     * 从通道中读取数据。
     *
     * 返回值可以是任意类型的PHP变量，包括匿名函数和资源
     * 通道并关闭时，执行失败返回false
     *
     * 通道已满
     * pop消费数据后，将自动唤醒其中一个生产者协程，让其写入新数据
     * 多个生产者协程同时push时，底层自动进行排队，按照顺序逐个resume这些生产者协程
     *
     * 通道为空
     * 自动yield当前协程，其他生产者协程push生产数据后，通道可读，将重新resume当前协程
     * 多个消费者协程同时pop时，底层自动进行排队，底层会按照顺序逐个resume这些消费者协程
     *
     * @return mixed
     */
    function pop()
    {

    }

    /**
     * 获取通道的状态。
     *
     * 返回一个数组，包括2项信息
     * queue_num 通道中的元素数量
     * queue_bytes 通道当前占用的内存字节数
     * array(
     * "queue_num" => 10,
     * "queue_bytes" => 161,
     * );
     *
     * @return array
     */
    public function stats(): array
    {

    }

    /**
     * 关闭通道。并唤醒所有等待读写的协程。
     *
     * 唤醒所有生产者协程，push方法返回false
     * 唤醒所有消费者协程，pop方法返回false
     */
    public function close()
    {

    }

    /**
     * 通道读写检测。类似于socket_select和stream_select可以检测channel是否可进行读写。
     *
     * 当$read或$write数组中有部分channel对象处于可读或可写状态，select会立即返回，不会产生协程调度。当数组中没有任何channel可读或可写时，将挂起当前协程，并设置定时器。当其中一个通道可读或可写时，将重新唤醒当前协程。
     *
     * select操作只检测channel列表的可读或可写状态，但并不会读写channel，在select调用返回后，可遍历$read和$write数组，执行pop和push方法，完成通道读写操作。
     *
     * 参数
     * $read 数组引用类型，元素为channel对象，读操作检测，可以为null
     * $write 数组引用类型，元素为channel对象，写操作检测，可以为null
     * $timeout 浮点型，超时设置，单位为秒，最小粒度为0.001秒，即1ms。默认为0，表示永不超时。
     *
     * 返回值
     * 成功返回true，底层会修改$read、$write数组，$read和$write中的元素，即是可读或可写的channel
     * 超时或传入的参数错误，如$read和$write中有非channel对象，底层返回false
     *
     * @param array $read
     * @param array $write
     * @param float $timeout
     *
     * @return bool
     */
    public static function select(array &$read, array &$write, float $timeout = 0): bool
    {

    }

}

