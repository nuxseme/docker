<?php

$lastModifiedTimeStamp = fileatime('test.html');


if(isset($_SERVER['HTTP_IF_MODIFIED_SINCE'])) {

    $browserCachedCopyTimestamp = strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']);
    if($browserCachedCopyTimestamp == $lastModifiedTimeStamp) {
        header("HTTP/1.0 304 Not Modified");
        exit;
    }
}

header('Last-Modified: '.date('D, d M Y H:i:s \G\M\T', $lastModifiedTimeStamp));
echo 'new  content',random_int(1,100);
echo '<pre>';
print_r($_SERVER);

