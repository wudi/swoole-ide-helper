<?php

/**
 * Class swoole_http_server
 *
 *  内置 Websocket 服务器
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
    function push($fd, $data, $binary_data = false, $finish = true)
    {
    }

    /**
     * @param $data
     * @param $opcode
     * @param bool $finish
     * @param bool $mask
     * @return string
     */
    static function pack($data, $opcode = WEBSOCKET_OPCODE_TEXT, $finish = true, $mask = false)
    {
    }
}
