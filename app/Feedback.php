<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    var $texto;
    
    function simplifiedText() {
        return substr($texto, 1, 100) . "...";
    }
}
