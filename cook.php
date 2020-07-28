<?php

/**
 * 全局函数
 */

/**
 * 打印值 dump可传入多个参数
 */
function dump(){
    $str = '';
    $argList=func_get_args();
    for($i=0;$i<func_num_args();$i++) {
        $str .='<pre>'.\yii\helpers\VarDumper::dumpAsString($argList[$i]).'</pre>';
    }
    echo $str;

}
function dumpExit(){
    dump(func_get_args());
    exit;
};