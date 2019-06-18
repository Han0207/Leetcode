<?php
/**
 * 7. 整数反转
 * 给出一个 32 位的有符号整数，你需要将这个整数中每位上的数字进行反转。
 * 示例 1:

    输入: 123
    输出: 321
    示例 2:

    输入: -123
    输出: -321
    示例 3:

    输入: 120
    输出: 21
    注意:

    假设我们的环境只能存储得下 32 位的有符号整数，则其数值范围为 [−231,  231 − 1]。请根据这个假设，如果反转后整数溢出那么就返回 0。
 */
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $sign = '';
        $start = 0;
        $flag=true;

        if($x==0){
            return 0;
        }
        if(substr($x, -1)=='0'){
            $flag=false;
            $x = substr($x, 0, -1);
            return $this->reverse($x);
        }

        if(substr($x, 0,1)=='-'){
            $start = 1;
            $sign='-';
        }
        if($flag){
            $result = strrev(substr($x, $start));
            if($result>2147483647){//超出32未整数范围
                return 0;
            }else{
                return $sign.$result;
            }
        }
    }
}