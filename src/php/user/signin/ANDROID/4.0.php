<?php
    $key = $_GET["_key"];
    $cat_id = $_GET["cat_id"];
    print_r(file_get_contents("http://floor.huluxia.com/user/signin/ANDROID/4.0?_key=".$key."&cat_id=".$cat_id));
?>