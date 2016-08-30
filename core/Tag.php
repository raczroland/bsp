<?php

class Tag
{

    private static function convertAttributes($attributes)
    {
        if (is_array($attributes) && count($attributes)>0) {
            $ret = "";
            foreach ($attributes as $key => $value) {
                $ret .= " " . $key . "=\"" . $value . "\"";
            }
            return $ret;
        } else {
            return "";
        }
    }

    public static function start($tagName, $attributes = [])
    {
        return "<$tagName". self::convertAttributes($attributes) .">";
    }

    public static function close($tagName)
    {
        return "</$tagName>";
    }

    public static function void($tagName, $attributes = [])
    {
        return "<$tagName". self::convertAttributes($attributes) ."/>";
    }

}