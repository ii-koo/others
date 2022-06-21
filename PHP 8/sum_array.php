<?php 
    $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    function summ($arr){
        $flag = 0;
        for ($i=0;$i<=count($arr);$i++){
            $flag = $flag + $i;
        }
        echo $flag;
    }

    // run function
    summ($arr);
?>


