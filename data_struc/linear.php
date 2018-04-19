<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/19 0019
 * Time: 下午 3:18
 */
//---------------------------------------
//              常用数据结构-线性表
//线性表是最基本最常用的数据结构。 例如： 1,2,3,4,5......N
//顺序表示,链表表示
//---------------------------------------
//线性表的删除(数组实现)
function delete_array_element($arr,$pos){
    $length = count($arr);
    if($pos<1 || $pos>$length){
        return "删除位置出错!";
    }
    for($i=$pos-1;$i<$length-1;$i++){
        $arr[$i] = $arr[$i+1];
    }
    array_pop($arr);
    return $arr;

}
$arr = array(3,5,8,4,9,6,1,7,2,99);
$pos = 3;
echo "<br/>除第{$pos}位置上的元素后：";
echo implode(' ',delete_array_element($arr,$pos))."<br/>";