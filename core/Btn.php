<?php

class Btn extends Tag
{

    const TAG_CLASS = "btn";

    const PREFIX = "btn-";

    const SIZE_LG = "lg";
    const SIZE_SM = "sm";
    const SIZE_XS = "xs";

    const BLOCK = "block";

    const TYPE_DEFAULT = "default";
    const TYPE_PRIMARY = "primary";
    const TYPE_SUCCESS = "success";
    const TYPE_INFO = "info";
    const TYPE_DANGER = "danger";
    const TYPE_LINK = "link";

    public static function button($text, $type = "default", $size = false, $isBlock = false, $isA = false, $disabled = false, $attrs = [])
    {
        echo self::start($isA ? "a" : "button", [
            "class" => implode(" ", [
                self::TAG_CLASS,
                self::PREFIX . $type,
                !$size ?:
            ])
        ]);
        echo $text;
        echo self::close($isA ? "a" : "button");
    }
    public static function primary($text, $size = "", $isBlock = false, $isA = false, $attrs = [])
    {
        echo self::start("button", [

        ]);
        echo $text;
        echo self::close("button");
    }

}