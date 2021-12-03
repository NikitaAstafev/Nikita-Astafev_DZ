<?
function str_in_arr($str){
    $arr= explode(' ', $str);
    return $arr;
}

function days($x, $y){
    return $x - $y;
}

function count_word($arr){
    $str = implode(' ', $arr);
    return count($arr);;
}

function vowels($str){
    $n = '~(?<vowels>[аеёиоуыэюяaeiouy])~iu';
    preg_match_all($n, $str , $a);
    $vowels = count(array_filter($a['vowels']));
    return $vowels;
}
?>