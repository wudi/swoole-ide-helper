<?php
namespace Swoole\Coroutine;

function run(callable $fn, ...$args)
{
    $s = new Scheduler();
    $s->add($fn, ...$args);
    return $s->start();
}
