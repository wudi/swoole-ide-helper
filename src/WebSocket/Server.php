<?php
namespace Swoole\WebSocket;
/**
 * Class swoole_http_server
 *
 *  内置 Websocket 服务器
 */
class Server extends \Swoole\Http\Server
{
    /**
     * 向某个WebSocket客户端连接推送数据
     * @param      $fd
     * @param      $data
     * @param bool $binary_data
     * @param bool $finish
     * @return bool
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

    /**
     * 主动向websocket客户端发送关闭帧并关闭该连接
     * @param int $fd
     * @param int $code 关闭连接的状态码，根据RFC6455，对于应用程序关闭连接状态码，取值范围为1000或4000-4999之间
     * @param string $reason  关闭连接的原因，utf-8格式字符串，字节长度不超过125
     * @return bool
     */
    public function disconnect($fd, $code, $reason)
    {
    }

    /**
     * 检查连接是否为有效的WebSocket客户端连接
     * @param $fd
     * @return bool
     */
    public function isEstablished($fd)
    {
    }
}
