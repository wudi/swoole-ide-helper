<?php
/**
 * Copyright: Swoole
 * Author: Twosee <twose@qq.com>
 * Date: 2018/3/10 下午5:27
 */

namespace Swoole\Coroutine\Mysql;

Class Statement
{

    /** @var string MySQL服务器返回的错误信息 */
    public $error;
    /** @var integer MySQL服务器返回的错误代码 */
    public $errno;

    /** @var integer 影响的行数 */
    public $affected_rows;

    /** @var  integer 最后一个插入的记录id */
    public $insert_id;

    /**
     * 向MySQL服务器发送SQL预处理数据参数。
     * execute必须与prepare配合使用，调用execute之前必须先调用prepare发起预处理请求。
     * execute方法可以重复调用。
     *
     * $params 预处理数据参数，必须与prepare语句的参数个数相同。
     * $params必须为数字索引的数组，参数的顺序与prepare语句相同
     *
     * @param array $params
     *
     * @param float $timeout 执行超时时间
     *
     * 成功返回数据集数组
     * 失败返回false，可检查$db->error和$db->errno判断错误原因
     *
     * @return bool|array
     */
    function execute(array $params = [], float $timeout = -1)
    {
        return [];
    }

}