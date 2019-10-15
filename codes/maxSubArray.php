<?php 
class Solution {
	private $sum = 0;
	private $_index = 0;
	private $max = 0;

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
    	$num_len = count($nums);
    	if($num_len==0){
    		return 0;
    	}
        if($num_len==1){
            return $nums[0];
        }
        
        for($i=1;$i<$num_len;$i++)
            $nums[$i] = $nums[$i]+$nums[$i-1] > $nums[$i] ? $nums[$i]+$nums[$i-1] : $nums[$i];

        return max($nums);


    }
}

$array = [-2,1,-3,4,-1,2,1,-5,4];//结果6
$clas = new Solution;
$data = $clas->maxSubArray($array);
var_dump($data);

