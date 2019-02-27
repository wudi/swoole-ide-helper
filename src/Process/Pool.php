<?php
/**
 * Created by PhpStorm.
 * User: ZhangSir
 * Date: 2018/12/10
 * Time: 11:45
 */

namespace Swoole\Process;

/**
 * Class Pool
 * @package Swoole\Process
 */
class Pool
{
    /**
     * Pool constructor.
     * 进程池介绍 https://wiki.swoole.com/wiki/page/901.html
     *
     * @param int $worker_num
     * @param int $ipc_type
     * @param int $msgqueue_key
     */
    public function __construct($worker_num, $ipc_type = 0, $msgqueue_key = 0)
    {

    }

    /**
     * @param string $event
     * @param callable $callback
     */
    public function on($event, $callback)
    {

    }

    /**
     * @param string $host
     * @param int $port
     * @param int $backlog
     * @return bool
     */
    public function listen($host, $port = 0, $backlog = 2048)
    {

    }

    /**
     * @param string $data
     */
    public function write($data)
    {

    }

    /**
     * @return bool
     */
    public function start()
    {

    }

    /**
     * @return Pool
     */
    public function getProcess()
    {

    }
}
