<?php
/**
 * 9. 回文数
 * 判断一个整数是否是回文数。回文数是指正序（从左向右）和倒序（从右向左）读都是一样的整数。
 * 示例 1:
 *   输入: 121
 *   输出: true
 *   示例 2:

 *   输入: -121
 *   输出: false
 *   解释: 从左向右读, 为 -121 。 从右向左读, 为 121- 。因此它不是一个回文数。
 *   示例 3:

 *   输入: 10
 *   输出: false
 *   解释: 从右向左读, 为 01 。因此它不是一个回文数。
 * 你能不将整数转为字符串来解决这个问题吗？
 */
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    // $i = 10;
    public $modArr = array();
    public $result = true;
    function isPalindrome($x) {
        if($x<0){
            return false;
        }
        $modArr = array();
        $mod = $x%10;
        $this->modArr[] = $mod;

        $x = floor($x/10); 
        // echo "余数：".$mod."++整数：".$x."<br/>";
        
        if($x>0){
            $this->isPalindrome($x);
        }else{
            for ($j=0; $j < floor(count($this->modArr)/2); $j++) { 
                if($this->modArr[$j]!=$this->modArr[count($this->modArr)-$j-1]){
                    $this->result = false;
                    break;
                }
            }
        }
        return $this->result;

    }
}