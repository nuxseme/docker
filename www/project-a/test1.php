<?php
//防止浏览器的缓存
for($i=0;$i<5;$i++){
        echo $i;
        sleep(1);
        ob_end_flush();//会每隔1s输出一个数字，如果使用ob_flush()则会等待5s一起输出

        
}
