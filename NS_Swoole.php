<?php
namespace Swoole;

class Server extends \swoole_server
{

}

class Client extends \swoole_client
{

}


class Timer
{
    /**
     * @param int $ms
     * @param callable $callback
     */
    static function tick(int $ms, callable $callback)
    {

    }

    /**
     * @param int $ms
     * @param callable $callback
     */
    static function after(int $ms, callable $callback)
    {

    }

    /**
     * @param int $ms
     * @param callable $callback
     */
    static function clear(int $timerId)
    {

    }
}

class Buffer extends \swoole_buffer
{

}

class Atomic extends \swoole_atomic
{

}