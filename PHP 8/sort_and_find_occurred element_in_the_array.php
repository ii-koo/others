<?php
    $arr = array(5, 100, 12, 4, 5, 2, 12, 13);
    $data[]=null;
    $check="";
    $i=0;
    for($j=0;$j<count($arr);$j++)
    {
        $indexing=array_search($arr[$j],$data);
        if($indexing == "")
        {    
            $data[$i]=$arr[$j];
            $i++;
        }
    }

    // jalankan fungsi cari
    search($arr, $data);
    

    // fungsi cari nilai yang sama
    function search($arr, $arr2)
    {
        
        for($K=0;$K<count($arr2);$K++)
        {    
            echo $arr2[$K]." ".result($arr,$arr2[$K])."x"."<br/>";
        }
    }
    
    // fungsi hitung nilai yg sama
    function result($arr,$dupval) {
        $counter= 0;
        foreach($arr as $key => $val)
        if ($val==$dupval) $counter++;
        return $counter;
    }    
?>