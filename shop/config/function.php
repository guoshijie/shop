<?php
    function redirect($url,$text="")	//�ض���
    {
        echo "<p>$text</p>";
        echo "<script>window.location.href='$url';</script>";
    }
?>