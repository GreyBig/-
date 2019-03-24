<?PHP
include_once './lib/func.php';

require('smarty/libs/Smarty.class.php');

$num = $_GET['phonenumber'];

// 根据号码 获取对应的福源信息
$datas = findeMessage($num);

$con = mysqlInit();

$sql = "SELECT * FROM `nums` WHERE `num` = '{$num}' LIMIT 1";
$obj = $con->query($sql);
$result = $obj->fetch();
if(empty($result)) {
      // 插入数据
    try{
        $sql = "INSERT `nums`(`num`) value('{$num}')";
        $obj = $con->prepare($sql);
        $obj->execute();
    }catch (PDOException $e){
        die('操作失败'.$e->getMessage());
    }

      // 首先需要检测b目录是否存在
    if (!is_dir($num.'/')) {
      mkdir($num.'/');
       // 在检测$num/目录中是否存在$num.php文件
      if (!file_exists($num.'/'.$num.'.html')) { // 如果不存在则创建
        $fp = fopen($num.'/'.$num.'.html', "w");
        $t  = new Smarty;
        $t->assign('datas',$datas);
        $t->assign('num',$num);
        $t->display($num.'/'.$num.'.html');
        $content = $t->fetch("smarty/templates/index.html");
        //这里的 fetch() 就是获取输出内容的函数,现在$content变量里面,就是要显示的内容了
        fwrite($fp, $content);
        fclose($fp);

        header('Location: http://www.intloak.com/'.$num.'/'.$num.'.html');

      }
    }  
    
// 如果c.php不存在则创建，当然还可以使用$file = fopen('b/c.php', 'a+')的方式创建然后用fwrite('d', $file)写入d
} else {
    $id=intval($num);
    header('Location: http://www.intloak.com/'.$id.'/'.$id.'.html');
}

$sql = "SELECT * FROM `datas`";
$obj = $con->query($sql);
//var_dump($obj);die;
$result = $obj->fetch();


