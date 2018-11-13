<?php
/**
 * swoole-ide-helper
 *
 * Author: Eagle <eaglewudi@gmail.com>
 * Datetime: 2018/10/10 10:49
 */

namespace Swoole\Coroutine;


class PostgreSQL
{

    /**
     * 建立postgresql 非阻塞的协程连接
     *
     * @link https://wiki.swoole.com/wiki/page/884.html
     * @param string $connection_string
     * @return resource
     */
    public function connect(string $connection_string)
    {

    }

    /**
     * 发送异步非阻塞 协程命令
     *
     * @param resource $connection
     * @return $this
     */
    public function query($connection)
    {

    }

    /**
     * 提取结果中所有行作为一个数组
     *
     * @link https://wiki.swoole.com/wiki/page/886.html
     * @param resource $query
     * @return array
     */
    public function fetchAll($query)
    {

    }

    /**
     * 返回受影响的记录数目
     *
     * @link https://wiki.swoole.com/wiki/page/887.html
     * @param resource $queryResult
     * @return int
     */
    public function affectedRows($queryResult)
    {

    }

    /**
     * 返回行的数目
     *
     * @link https://wiki.swoole.com/wiki/page/888.html
     * @param resource $queryResult
     * @return int
     */
    public function numRows($queryResult)
    {

    }

    /**
     * 提取一行作为对象
     *
     * @link https://wiki.swoole.com/wiki/page/889.html
     * @param resource $queryResult
     * @param int $row
     * @return object
     */
    public function fetchObject($queryResult, $row = 0)
    {

    }

    /**
     * 提取一行作为关联数组
     *
     * @link https://wiki.swoole.com/wiki/page/890.html
     * @param resource $queryResult
     * @param int $row
     * @return array
     */
    public function fetchAssoc($queryResult, $row = 0)
    {

    }

    /**
     * 提取一行作为数组
     *
     * @link https://wiki.swoole.com/wiki/page/891.html
     * @param resource $queryResult
     * @param int $row
     * @return array
     */
    public function fetchArray($queryResult, $row = 0)
    {

    }

    /**
     * 根据指定的 result 资源提取一行数据（记录）作为数组返回
     *
     * @link https://wiki.swoole.com/wiki/page/892.html
     * @param resource $queryResult
     * @param int $row
     * @return array
     */
    public function fetchRow($queryResult, $row = 0)
    {

    }

    /**
     * 查看表的元数据 异步非阻塞协程版
     *
     * @link https://wiki.swoole.com/wiki/page/893.html
     * @param string $tableName
     * @return array
     */
    public function metaData($tableName)
    {

    }

}