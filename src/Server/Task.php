<?php

namespace Swoole\Server;


/**
 * Class Task
 * @package Swoole\Server
 * @since 4.2.12
 * @see https://wiki.swoole.com/wiki/page/54.html
 * @see https://wiki.swoole.com/wiki/page/1032.html
 */
class Task
{

    /**
     * @var int 来自哪个Worker进程
     */
    public $worker_id;

    /**
     * @var int 任务的编号
     */
    public $id;

    /**
     * @var int 任务的类型 taskwait, task, taskCo, taskWaitMulti 可能使用不同的 flags
     */
    public $flags;

    /**
     * @var mixed 任务的数据
     */
    public $data;

    /**
     * @param mixed 完成任务，结束并返回数据
     */
    public function finish($data)
    {

    }
}
