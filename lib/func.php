<?php

// 连接数据库
function mysqlInit()
{
    try {
        $con = new PDO('mysql:host=localhost;dbname=intloak', 'intloak', 'G8V7f3a6', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); //初始化一个PDO对象
        // 设置 PDO 错误模式，用于抛出异常
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die ("Error!: " . $e->getMessage() . "<br/>");
    }
    return $con;
}

// 根据号码匹配信息
function findeMessage($num) {
    $sum = array_sum(str_split($num));
    $con = mysqlInit();
    if ( 15 < $sum && $sum < 30 ){
        $sql = "SELECT * FROM `datas` where `id` = 1";
        $obj = $con->query($sql);
        $datas = $obj->fetch();
    } else if ( 30 < $sum && $sum < 35 ) {
        $sql = "SELECT * FROM `datas` where `id` = 2";
        $obj = $con->query($sql);
        $datas = $obj->fetch();
    } else {
        $sql = "SELECT * FROM `datas` where `id` = 3";
        $obj = $con->query($sql);
        $datas = $obj->fetch();
    }

    return $datas;
}

