<?php

class TUPAPI
{
    /**
     * @param int    $iVersion
     * @param int    $iRequestId
     * @param string $servantName
     * @param string $funcName
     * @param int    $cPacketType
     * @param int    $iMessageType
     * @param int    $iTimeout
     * @param array  $contexts
     * @param array  $statuses
     * @param array  $bufs
     *
     * @return string
     */
    public static function encode($iVersion,
        $iRequestId,
        $servantName,
        $funcName,
        $cPacketType,
        $iMessageType,
        $iTimeout,
        array $contexts,
        array $statuses,
        array $bufs)
    {
    }

    /**
     * @param string $respBuffer
     * @param int    $version
     *
     * @return array
     */
    public static function decode($respBuffer, $version = 3)
    {
    }

    /**
     * @param int    $iVersion
     * @param int    $cPacketType
     * @param int    $iMessageType
     * @param int    $iRequestId
     * @param int    $iRet
     * @param string $sResultDesc
     * @param array  $bufs
     * @param array  $statuses
     *
     * @return string
     */
    public static function encodeRspPacket(
                         $iVersion,
                         $cPacketType,
                         $iMessageType,
                         $iRequestId,
                         $iRet,
                         $sResultDesc,
                         array $bufs,
                         array $statuses = [])
    {
    }

    /**
     * @param string $reqBuffer
     *
     * @return array
     */
    public static function decodeReqPacket($reqBuffer)
    {
    }

    /**
     * @param string $name
     * @param object $clazz
     * @param int    $iVersion
     *
     * @return string
     */
    public static function putStruct($name, $clazz, $iVersion = null)
    {
    }

    /**
     * @param string $name
     * @param object $clazz
     * @param string $buf
     * @param bool   $is_require
     * @param int    $iVersion
     *
     * @return array
     */
    public static function getStruct($name, $clazz, &$buf, $is_require = null, $iVersion = null)
    {
    }

    /**
     * @param string $name
     * @param bool   $value
     * @param int    $iVersion
     *
     * @return string
     */
    public static function putBool($name, $value, $iVersion = null)
    {
    }

    /**
     * @param string $name
     * @param string $buf
     * @param bool   $is_require
     * @param int    $iVersion
     *
     * @return bool
     */
    public static function getBool($name, &$buf, $is_require = null, $iVersion = null)
    {
    }

    /**
     * @param string $name
     * @param string $value
     * @param int    $iVersion
     *
     * @return string
     */
    public static function putChar($name, $value, $iVersion = null)
    {
    }

    /**
     * @param string $name
     * @param string $buf
     * @param bool   $is_require
     * @param int    $iVersion
     *
     * @return string
     */
    public static function getChar($name, &$buf, $is_require = null, $iVersion = null)
    {
    }

    /**
     * @param string $name
     * @param int    $value
     * @param int    $iVersion
     *
     * @return string
     */
    public static function putUInt8($name, $value, $iVersion = null)
    {
    }

    /**
     * @param string $name
     * @param string $buf
     * @param bool   $is_require
     * @param int    $iVersion
     *
     * @return int
     */
    public static function getUInt8($name, &$buf, $is_require = null, $iVersion = null)
    {
    }

    /**
     * @param string $name
     * @param int    $value
     * @param int    $iVersion
     *
     * @return string
     */
    public static function putShort($name, $value, $iVersion = null)
    {
    }

    /**
     * @param string $name
     * @param string $buf
     * @param bool   $is_require
     * @param int    $iVersion
     *
     * @return int
     */
    public static function getShort($name, &$buf, $is_require = null, $iVersion = null)
    {
    }

    /**
     * @param string $name
     * @param int    $value
     * @param int    $iVersion
     *
     * @return string
     */
    public static function putUInt16($name, $value, $iVersion = null)
    {
    }

    /**
     * @param string $name
     * @param string $buf
     * @param bool   $is_require
     * @param int    $iVersion
     *
     * @return int
     */
    public static function getUInt16($name, &$buf, $is_require = null, $iVersion = null)
    {
    }

    /**
     * @param string $name
     * @param int    $value
     * @param int    $iVersion
     *
     * @return string
     */
    public static function putInt32($name, $value, $iVersion = null)
    {
    }

    /**
     * @param string $name
     * @param string $buf
     * @param bool   $is_require
     * @param int    $iVersion
     *
     * @return int
     */
    public static function getInt32($name, &$buf, $is_require = null, $iVersion = null)
    {
    }

    /**
     * @param string $name
     * @param int    $value
     * @param int    $iVersion
     *
     * @return string
     */
    public static function putUInt32($name, $value, $iVersion = null)
    {
    }

    /**
     * @param string $name
     * @param string $buf
     * @param bool   $is_require
     * @param int    $iVersion
     *
     * @return int
     */
    public static function getUInt32($name, &$buf, $is_require = null, $iVersion = null)
    {
    }

    /**
     * @param string $name
     * @param int    $value
     * @param int    $iVersion
     *
     * @return string
     */
    public static function putInt64($name, $value, $iVersion = null)
    {
    }

    /**
     * @param string $name
     * @param string $buf
     * @param bool   $is_require
     * @param int    $iVersion
     *
     * @return int
     */
    public static function getInt64($name, &$buf, $is_require = null, $iVersion = null)
    {
    }

    /**
     * @param string $name
     * @param float  $value
     * @param int    $iVersion
     *
     * @return string
     */
    public static function putDouble($name, $value, $iVersion = null)
    {
    }

    /**
     * @param string $name
     * @param string $buf
     * @param bool   $is_require
     * @param int    $iVersion
     *
     * @return float
     */
    public static function getDouble($name, &$buf, $is_require = null, $iVersion = null)
    {
    }

    /**
     * @param string $name
     * @param float  $value
     * @param int    $iVersion
     *
     * @return string
     */
    public static function putFloat($name, $value, $iVersion = null)
    {
    }

    /**
     * @param string $name
     * @param string $buf
     * @param bool   $is_require
     * @param int    $iVersion
     *
     * @return float
     */
    public static function getFloat($name, &$buf, $is_require = null, $iVersion = null)
    {
    }

    /**
     * @param string $name
     * @param string $value
     * @param int    $iVersion
     *
     * @return string
     */
    public static function putString($name, $value, $iVersion = null)
    {
    }

    /**
     * @param string $name
     * @param string $buf
     * @param bool   $is_require
     * @param int    $iVersion
     *
     * @return string
     */
    public static function getString($name, &$buf, $is_require = null, $iVersion = null)
    {
    }

    /**
     * @param string       $name
     * @param \TARS_Vector $clazz
     * @param int          $iVersion
     *
     * @return string
     */
    public static function putVector($name, \TARS_Vector $clazz, $iVersion = null)
    {
    }

    /**
     * @param string       $name
     * @param \TARS_Vector $clazz
     * @param string       $buf
     * @param bool         $is_require
     * @param int          $iVersion
     *
     * @return array
     */
    public static function getVector($name, \TARS_Vector $clazz, &$buf, $is_require = null, $iVersion = null)
    {
    }

    /**
     * @param string   $name
     * @param TARS_Map $clazz
     * @param int      $iVersion
     *
     * @return string
     */
    public static function putMap($name, TARS_Map $clazz, $iVersion = null)
    {
    }

    /**
     * @param string   $name
     * @param TARS_Map $clazz
     * @param string   $buf
     * @param bool     $is_require
     * @param int      $iVersion
     *
     * @return array
     */
    public static function getMap($name, TARS_Map $clazz, &$buf, $is_require = null, $iVersion = null)
    {
    }
}
