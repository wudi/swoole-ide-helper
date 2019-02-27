<?php

namespace PHPSTORM_META {

    /**
     * swoole 支持的 Socket 类型
     * @link https://wiki.swoole.com/wiki/page/16.html
     */
    registerArgumentsSet('swoole_sock_type',
        SWOOLE_SOCK_TCP, SWOOLE_SOCK_TCP6,
        SWOOLE_SOCK_UDP, SWOOLE_SOCK_UDP6,
        SWOOLE_SOCK_UNIX_DGRAM,
        SWOOLE_SOCK_UNIX_STREAM
    );

    expectedArguments(\Swoole\Server::__construct(), 2, SWOOLE_BASE, SWOOLE_PROCESS);

    expectedArguments(\Swoole\Server::__construct(), 3, argumentsSet('swoole_sock_type'));
    expectedArguments(\Swoole\Server::listen(), 2, argumentsSet('swoole_sock_type'));
    expectedArguments(\Swoole\Server::addListener(), 2, argumentsSet('swoole_sock_type'));

    expectedArguments(\Swoole\Client::__construct(), 0, argumentsSet('swoole_sock_type'));
    expectedArguments(\Swoole\Client::__construct(), 1, SWOOLE_SOCK_SYNC, SWOOLE_SOCK_ASYNC);

    expectedArguments(\Swoole\Lock::__construct(), 0,
        SWOOLE_FILELOCK,
        SWOOLE_MUTEX,
        SWOOLE_SEM,
        SWOOLE_RWLOCK,
        SWOOLE_SPINLOCK
    );

    expectedArguments(\Swoole\Process\Pool::__construct(), 1, SWOOLE_IPC_MSGQUEUE, SWOOLE_IPC_SOCKET);
}
