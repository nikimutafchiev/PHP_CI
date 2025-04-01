<?php

function checkValueInArray($arr, $val)
{
    if ($val == null) {
        return 'maybe';
    }
    foreach ($arr as $elem) {
        if ($elem == $val) {
            return true;
        }
    }

    return false;
}
