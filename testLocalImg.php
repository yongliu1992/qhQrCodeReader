<?php
/**
 * Created by PhpStorm.
 * User: yongLiu
 * Date: 2018/5/15
 * Time: 18:09
 */
require "MGQrCodeReader/MGQrCodeReader.php";
$MGQrCodeReader = new \MGQrCodeReader\MGQrCodeReader();
echo $MGQrCodeReader->readImg('qr201805151803.png');
