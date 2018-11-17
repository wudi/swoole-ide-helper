<?php
namespace Swoole;
/**
 * Async redis client
 *
 * @method bool bool del(array|string $keys)
 * @method bool dump($key)
 * @method bool exists($key)
 * @method bool expire($key, $seconds)
 * @method bool expireat($key, $timestamp)
 * @method bool keys($pattern)
 * @method bool move($key, $db)
 * @method bool object($subcommand, $key)
 * @method bool persist($key)
 * @method bool pexpire($key, $milliseconds)
 * @method bool pexpireat($key, $timestamp)
 * @method bool pttl($key)
 * @method bool randomkey()
 * @method bool rename($key, $target)
 * @method bool renamenx($key, $target)
 * @method bool scan($cursor, array $options = null)
 * @method bool sort($key, array $options = null)
 * @method bool ttl($key)
 * @method bool type($key)
 * @method bool append($key, $value)
 * @method bool bitcount($key, $start = null, $end = null)
 * @method bool bitop($operation, $destkey, $key)
 * @method bool bitfield($key, $subcommand, ...$subcommandArg)
 * @method bool decr($key)
 * @method bool decrby($key, $decrement)
 * @method bool get($key)
 * @method bool getbit($key, $offset)
 * @method bool getrange($key, $start, $end)
 * @method bool getset($key, $value)
 * @method bool incr($key)
 * @method bool incrby($key, $increment)
 * @method bool incrbyfloat($key, $increment)
 * @method bool mget(array $keys)
 * @method bool mset(array $dictionary)
 * @method bool msetnx(array $dictionary)
 * @method bool psetex($key, $milliseconds, $value)
 * @method bool set($key, $value, $expireResolution = null, $expireTTL = null, $flag = null)
 * @method bool setbit($key, $offset, $value)
 * @method bool setex($key, $seconds, $value)
 * @method bool setnx($key, $value)
 * @method bool setrange($key, $offset, $value)
 * @method bool strlen($key)
 * @method bool hdel($key, array $fields)
 * @method bool hexists($key, $field)
 * @method bool hget($key, $field)
 * @method bool hgetall($key)
 * @method bool hincrby($key, $field, $increment)
 * @method bool hincrbyfloat($key, $field, $increment)
 * @method bool hkeys($key)
 * @method bool hlen($key)
 * @method bool hmget($key, array $fields)
 * @method bool hmset($key, array $dictionary)
 * @method bool hscan($key, $cursor, array $options = null)
 * @method bool hset($key, $field, $value)
 * @method bool hsetnx($key, $field, $value)
 * @method bool hvals($key)
 * @method bool hstrlen($key, $field)
 * @method bool blpop(array|string $keys, $timeout)
 * @method bool brpop(array|string $keys, $timeout)
 * @method bool brpoplpush($source, $destination, $timeout)
 * @method bool lindex($key, $index)
 * @method bool linsert($key, $whence, $pivot, $value)
 * @method bool llen($key)
 * @method bool lpop($key)
 * @method bool lpush($key, array $values)
 * @method bool lpushx($key, $value)
 * @method bool lrange($key, $start, $stop)
 * @method bool lrem($key, $count, $value)
 * @method bool lset($key, $index, $value)
 * @method bool ltrim($key, $start, $stop)
 * @method bool rpop($key)
 * @method bool rpoplpush($source, $destination)
 * @method bool rpush($key, array $values)
 * @method bool rpushx($key, $value)
 * @method bool sadd($key, array $members)
 * @method bool scard($key)
 * @method bool sdiff(array|string $keys)
 * @method bool sdiffstore($destination, array|string $keys)
 * @method bool sinter(array|string $keys)
 * @method bool sinterstore($destination, array|string $keys)
 * @method bool sismember($key, $member)
 * @method bool smembers($key)
 * @method bool smove($source, $destination, $member)
 * @method bool spop($key, $count = null)
 * @method bool srandmember($key, $count = null)
 * @method bool srem($key, $member)
 * @method bool sscan($key, $cursor, array $options = null)
 * @method bool sunion(array|string $keys)
 * @method bool sunionstore($destination, array|string $keys)
 * @method bool zadd($key, array $membersAndScoresDictionary)
 * @method bool zcard($key)
 * @method bool zcount($key, $min, $max)
 * @method bool zincrby($key, $increment, $member)
 * @method bool zinterstore($destination, array|string $keys, array $options = null)
 * @method bool zrange($key, $start, $stop, array $options = null)
 * @method bool zrangebyscore($key, $min, $max, array $options = null)
 * @method bool zrank($key, $member)
 * @method bool zrem($key, $member)
 * @method bool zremrangebyrank($key, $start, $stop)
 * @method bool zremrangebyscore($key, $min, $max)
 * @method bool zrevrange($key, $start, $stop, array $options = null)
 * @method bool zrevrangebyscore($key, $max, $min, array $options = null)
 * @method bool zrevrank($key, $member)
 * @method bool zunionstore($destination, array|string $keys, array $options = null)
 * @method bool zscore($key, $member)
 * @method bool zscan($key, $cursor, array $options = null)
 * @method bool zrangebylex($key, $start, $stop, array $options = null)
 * @method bool zrevrangebylex($key, $start, $stop, array $options = null)
 * @method bool zremrangebylex($key, $min, $max)
 * @method bool zlexcount($key, $min, $max)
 * @method bool pfadd($key, array $elements)
 * @method bool pfmerge($destinationKey, array|string $sourceKeys)
 * @method bool pfcount(array|string $keys)
 * @method bool pubsub($subcommand, $argument)
 * @method bool publish($channel, $message)
 * @method bool discard()
 * @method bool exec()
 * @method bool multi()
 * @method bool unwatch()
 * @method bool watch($key)
 * @method bool eval($script, $numkeys, $keyOrArg1 = null, $keyOrArgN = null)
 * @method bool evalsha($script, $numkeys, $keyOrArg1 = null, $keyOrArgN = null)
 * @method bool script($subcommand, $argument = null)
 * @method bool auth($password)
 * @method bool echo($message)
 * @method bool ping($message = null)
 * @method bool select($database)
 * @method bool bgrewriteaof()
 * @method bool bgsave()
 * @method bool client($subcommand, $argument = null)
 * @method bool config($subcommand, $argument = null)
 * @method bool dbsize()
 * @method bool flushall()
 * @method bool flushdb()
 * @method bool info($section = null)
 * @method bool lastsave()
 * @method bool save()
 * @method bool slaveof($host, $port)
 * @method bool slowlog($subcommand, $argument = null)
 * @method bool time()
 * @method bool command()
 * @method bool geoadd($key, $longitude, $latitude, $member)
 * @method bool geohash($key, array $members)
 * @method bool geopos($key, array $members)
 * @method bool geodist($key, $member1, $member2, $unit = null)
 * @method bool georadius($key, $longitude, $latitude, $radius, $unit, array $options = null)
 * @method bool georadiusbymember($key, $member, $radius, $unit, array $options = null)
 *
 */
class Redis
{
    /**
     * 注册事件回调函数
     * @param $event_name
     * @param callable $callback
     */
    function on($event_name, callable $callback)
    {

    }

    /**
     * 连接到服务器
     * @param string $host
     * @param int $port
     * @param callable $callback
     */
    function connect($host, $port, callback $callback)
    {
    }


    /**
     * 关闭连接
     */
    function close()
    {
    }


    /**
     * Get State
     *
     * @return false|integer
     */
    public function getState()
    {
    }

    /**
     * Execute redis command
     *
     * @param $command
     * @param array $params
     * @return bool
     */
    public function __call($command, array $params)
    {
    }

}