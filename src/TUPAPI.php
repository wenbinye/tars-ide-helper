<?php

class TUPAPI
{

    /**
     * @param Int $iVersion
     * @param Int $iRequestId
     * @param String $servantName
     * @param String $funcName
     * @param Int $cPacketType
     * @param Int $iMessageType
     * @param Int $iTimeout
     * @param array $contexts
     * @param array $statuses
     * @param array $inbuf_arr
     * @return string
     */
    public static function encode(
        $iVersion,
        $iRequestId,
        $servantName,
        $funcName,
        $cPacketType,
        $iMessageType,
        $iTimeout,
        $contexts,
        $statuses,
        $inbuf_arr
    ) {
    }

    /**
     * @param String $respBuffer
     * @return array
     */
    public static function decode($respBuffer)
    {
    }

    /**
     * @param  string $name
     * @param  $clazz [expect object]
     * @return string
     */
    public static function putStruct($name, $clazz)
    {
    }

    /**
     * @param string $name
     * @param $clazz [expect object]
     * @param string $buf
     * @return array
     */
    public static function getStruct($name, $clazz, $buf)
    {
    }

    /**
     * @param string $name
     * @param $value
     * @return string
     */
    public static function putBool($name, $value)
    {
    }

    /**
     * @param $name
     * @param $buf
     * @return bool
     */
    public static function getBool($name, &$buf)
    {
    }

    /**
     * @param $name
     * @param $value
     * @return string
     */
    public static function putChar($name, $value)
    {
    }

    /**
     * @param $name
     * @param $buf
     * @return string
     */
    public static function getChar($name, &$buf)
    {
    }

    /**
     * @param $name
     * @param $value
     * @return string
     */
    public static function putUInt8($name, $value)
    {
    }

    /**
     * @param $name
     * @param $buf
     * @return int
     */
    public static function getUInt8($name, &$buf)
    {
    }

    /**
     * @param $name
     * @param $value
     * @return string
     */
    public static function putShort($name, $value)
    {
    }

    /**
     * @param $name
     * @param $buf
     * @return int
     */
    public static function getShort($name, &$buf)
    {
    }

    /**
     * @param $name
     * @param $value
     * @return string
     */
    public static function putUInt16($name, $value)
    {
    }

    /**
     * @param $name
     * @param $buf
     * @return int
     */
    public static function getUInt16($name, &$buf)
    {
    }

    /**
     * @param $name
     * @param $value
     * @return string
     */
    public static function putInt32($name, $value)
    {
    }

    /**
     * @param $name
     * @param $buf
     * @return int
     */
    public static function getInt32($name, &$buf)
    {
    }

    /**
     * @param $name
     * @param $value
     * @return string
     */
    public static function putUInt32($name, $value)
    {
    }

    /**
     * @param $name
     * @param $buf
     * @return int
     */
    public static function getUInt32($name, &$buf)
    {
    }

    /**
     * @param $name
     * @param $value
     * @return string
     */
    public static function putInt64($name, $value)
    {
    }

    /**
     * @param $name
     * @param $buf
     * @return int
     */
    public static function getInt64($name, &$buf)
    {
    }

    /**
     * @param $name
     * @param $value
     * @return string
     */
    public static function putDouble($name, $value)
    {
    }

    /**
     * @param $name
     * @param $buf
     * @return double
     */
    public static function getDouble($name, &$buf)
    {
    }

    /**
     * @param $name
     * @param $value
     * @return mixed
     */
    public static function putFloat($name, $value)
    {
    }

    /**
     * @param $name
     * @param $buf
     * @return double
     */
    public static function getFloat($name, &$buf)
    {
    }

    /**
     * @param $name
     * @param $value
     * @return mixed
     */
    public static function putString($name, $value)
    {
    }

    /**
     * @param $name
     * @param $buf
     * @return string
     */
    public static function getString($name, &$buf)
    {
    }

    /**
     * @param $name
     * @param TARS_Vector $clazz
     * @return string
     */
    public static function putVector($name, TARS_Vector $clazz)
    {
    }

    /**
     * @param $name
     * @param TARS_Vector $clazz
     * @param $buf
     * @return mixed
     */
    public static function getVector($name, TARS_Vector $clazz, &$buf)
    {
    }

    /**
     * @param $name
     * @param TARS_Map $clazz
     * @return string
     */
    public static function putMap($name, TARS_Map $clazz)
    {
    }

    /**
     * @param $name
     * @param TARS_Map $clazz
     * @param $buf
     * @return array
     */
    public static function getMap($name, TARS_Map $clazz, &$buf)
    {
    }
}
