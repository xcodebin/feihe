<?php
function sort_array($array, $keys, $arder = 'ASC')
{
    $sorttabel = array();
    if (is_array($array) && count($array) > 0) {
        foreach ($array as $k => $v) {
            $sorttabel[$k] = $v[$keys];
        }
    } else {
        return false;
    }
    if ($arder == 'ASC') {
        asort($sorttabel);
    } else {
        arsort($sorttabel);
    }
    $new_sorttable = array();
    foreach ($sorttabel as $k => $v) {
        $new_sorttable[$k] = $array[$k];
    }
//    echo $new_sorttable;
//    exit;
    return $new_sorttable;
}

//$c = sort_array($products, 'hot');
//var_dump($c);