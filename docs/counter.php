<?php
    //$five,$four 等变量表示零的个数，放在数字前边构成6位
    function Counter()
    {                                   //定义函数
        $five = "00000";                                      //声明变量
        $four = "0000";
        $three = "000";
        $two = "00";
        $one = "0";
        $counter = dirname(__FILE__).'/record.txt';                      //存放访问数的目的文件，.dat格式
        if(!file_exists($counter))                    //判断文件是否存在
        {
            $counter = fopen($counter,"w");
            fputs($counter,"0");                      //写入文件
            fclose($counter);
        }
        else
        {
            $fp = fopen($counter,"r");
            $num = fgets($fp,"1024");                //如果文件存在则读出文件，并加 1
            $num = $num + 1;
            if($num < 10)
                print "$five"."$num";
            elseif($num < 100)
                print "$four"."$num";
            elseif($num < 1000)
                print "$three"."$num";
            elseif($num < 10000)
                print "$two"."$num";
            elseif($num < 100000)
                print "$one"."$num";
            else
                print "$num";
        }
        $fp = fopen($counter,"w");
        fputs($fp,"$num");
        fclose($fp);
    }
?>