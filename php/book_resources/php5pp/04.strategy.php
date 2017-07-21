<?php
/***************************************************************************
 *
 * Copyright (c)2017
 *
 **************************************************************************/

/**
 * @file 04.strategy.php
 * @synopsis
 * @author zhengwenli, zhengwenli@moyi365.com
 * @date 2017-07-18 10:01
 * @version 1.0
 **/

abstract class FileNamingStrategy {

    abstract function createLinkName($filename);
}

class ZipFileNamingStrategy extends FileNamingStrategy {

    function createLinkName($filename) {
        return "$filename.zip";
    }
}

class TarGzFileNamingStrategy extends FileNamingStrategy {

    function createLinkName($filename) {
        return "$filename.tar.gz";
    }
}

if(strstr($_SERVER["HTTP_USER_AGENT"], "Win")) {
    $fileNamingObj = new ZipFileNamingStrategy();
}
else {
    $fileNamingObj = new TarGzFileNamingStrategy();
}

$calc_filename = $fileNamingObj->createLinkName("Calc101");
$stat_filename = $fileNamingObj->createLinkName("Stat2000");
