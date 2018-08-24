<?php

namespace App;

class StringUtil
{
    public static function convertToYoutubeUrl($url) {
        return str_replace("watch?v=","embed/",$url);
    }
}