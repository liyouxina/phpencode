<?php
//==================================================
//$key='// wxymw.vip';
$key='版本 2022 Powered by 无心源码网 wxymw.vip 勿改';
//==================================================
error_reporting(0);
ini_set('date.timezone','Asia/Shanghai');
date_default_timezone_set ( 'PRC' );//时区
header("Content-type:text/html;charset=utf-8");
$gmcode = 'wxymw.vip';  //GM码
$AM_CONFIG = array(
    "gmkey"	=>"d7641fcc796cef825e05102917982d13",
    "sa" => "%E7%89%88%E6%9C%AC%2B2022%2BPowered%2Bby%2B%E6%97%A0%E5%BF%83%E6%BA%90%E7%A0%81%E7%BD%91+wxymw.vip+%E5%8B%BF%E6%94%B9",
    "db_host" => "127.0.0.1",          //数据库IP
    "db_username" => "root",			//数据库帐号
    "db_password" => "wxymw.vip",		//数据库密码
    "dbport" => 3306,
    "dbgame" => "gamedata"    //数据库
);
$user_IP = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
$user_IP = ($user_IP) ? $user_IP : $_SERVER["REMOTE_ADDR"];
$checknum =	$_POST['checknum'];
$qu  = $_POST['qu'];
$date=date('Y-m-d H:i:s');
if(isset($_POST['submit'])){
    if(md5($key)==$AM_CONFIG['gmkey']){ if($checknum==$gmcode){
        if(empty($qu)){
            echo "<script>alert('请选择分区');history.go(-1)</script>";
            exit;
        }
        $mysqli=new mysqli($AM_CONFIG['db_host'],$AM_CONFIG['db_username'],$AM_CONFIG['db_password'],$AM_CONFIG['dbgame'],$AM_CONFIG['dbport']);
        if($mysqli->connect_error){
            exit("数据库连接失败,请检查配置是否正确!");
        }
        if (!$mysqli->set_charset("Latin1")) {
            printf("设置数据库编码Latin1错误: %s\n", $mysqli->error);
            exit();
        }
        $name=trim($_POST['name']);
        $chargenum = $_POST['chargenum'];
        if(empty($chargenum)){
            echo "<script>alert('数量为空');history.go(-1)</script>";
            exit;
        }
        $log='charge'.date('Y-m-d').'.log';
        $sql1 = "select ActiveParam,AwardCodeType,AwardCode from awardcodes where AwardCode = CONVERT(unhex(HEX(CONVERT(CONVERT(unhex('".bin2hex($name)."') USING utf8) USING gbk))) USING latin1)";
        $result1 = $mysqli->query($sql1);
        if(!$result1)
        {
            exit("执行sql失败:1");
        }else{
            if($result1->num_rows==0){
                $sql = "INSERT INTO awardcodes (AwardCode,AwardCodeType,ActiveParam) VALUES (CONVERT(unhex(HEX(CONVERT(CONVERT( unhex('".bin2hex($name)."') USING utf8) USING gbk))) USING latin1),".$chargenum.",1)";
            }else{
                $row=mysqli_fetch_assoc($result1);
                if($row['ActiveParam']=="-1"){
                    $sql = "UPDATE awardcodes SET AwardCodeType = ".$chargenum.",ActiveParam=1 WHERE AwardCode = CONVERT(unhex(HEX(CONVERT(CONVERT( unhex('".bin2hex($name)."') USING utf8) USING gbk))) USING latin1)";
                }else{
                    $sql = "UPDATE awardcodes SET AwardCodeType =AwardCodeType+".$chargenum." WHERE AwardCode = CONVERT(unhex(HEX(CONVERT(CONVERT( unhex('".bin2hex($name)."') USING utf8) USING gbk))) USING latin1)";
                }
            }
            $result = $mysqli->query($sql);
            if(!$result)
            {
                exit("执行sql失败:2");
            }else{
                file_put_contents($log,$date."\t".$qu."区 \t"."玩家:".$name."\t".$chargenum."\t"."充值成功\t".$user_IP.PHP_EOL,FILE_APPEND);
                echo "<script>alert('充值成功');history.go(-1)</script>" ;
                exit;
            }
        }
    }
        echo   "<script>alert('GM码错误');history.go(-1)</script>" ;
        exit;
    }
    $eff = urldecode($AM_CONFIG['sa']);
    echo "<script>alert('$eff');history.go(-1)</script>" ;
    exit;
}
?>