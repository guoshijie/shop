<?php
    function redirect($url,$text="")	//ÖØ¶¨Ïò
    {
        echo "<p>$text</p>";
        echo "<script>window.location.href='$url';</script>";
    }
?>