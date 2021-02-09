<?php
    function myAutoloader($classname){
        $path = "classes/";
        $ext = ".class.php";
        $fullpath = $path . $classname . $ext;
        include $fullpath;
    }
    spl_autoload_register('myAutoloader');
?>