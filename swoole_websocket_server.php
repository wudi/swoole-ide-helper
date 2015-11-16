<?php

/**
 * Class swoole_websocket_server
 */
class swoole_websocket_server extends swoole_http_server
{
    /**
     * 向某个WebSocket客户端连接推送数据
     * @param      $fd
     * @param      $data
     * @param bool $binary_data
     * @param bool $finish
     */
    public function push($fd, $data, $binary_data = false, $finish = true) {}
}
