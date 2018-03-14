<?php

header("Expires: ".gmdate("D, d M Y H:i:s", time() + 100)." GMT");
echo 'new content',random_int(1,100);
