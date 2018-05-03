<?php

//php获取字符串中最长的连续数字字符串

$a = 'abcd12345ed125ss123456789';

function getMaxLengthNumberStr($str){

    $len = strlen($str);
    $maxLengthStr = '';//将最大长度的数字字符串初始化为空

    for($i=0;$i<$len;$i++){
        if(!is_numeric($str[$i]) && is_numeric($str[$i+1])){
            $numberStr = '';//将要寻找的数字字符串初始化为空
            $numberStr .= $str[$i+1];//如果字符串当前的字符不是数字并且下一个字符是数字，则从下一个字符串开始记录此数字字符串
        }elseif(is_numeric($str[$i]) && is_numeric($str[$i+1])){
            $numberStr .= $str[$i+1];//如果字符串当前的字符是数字并且下一个字符也是数字，则将下一个字符串也记入此数字字符串
        }elseif(is_numeric($str[$i]) && !is_numeric($str[$i+1])){

        	//如果字符串当前的字符是数字但下一个字符不是数字，则将此数字字符串记录终止
            //如果该字符串的长度大于以往的最长数字字符串的长度，则它就是新的最长字符串否则为之前的字符串
            $maxLengthStr = (strlen($numberStr)>strlen($maxLengthStr)) ? $numberStr : $maxLengthStr;
        }else{//如果字符串当前和下一个字符都不是数字，则将此数字字符串为空
            $maxLengthStr = $maxLengthStr;
        }
    }
    return $maxLengthStr;
}

$b = getMaxLengthNumberStr($a);
var_dump($b); //123456789


?>