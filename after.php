<?php /* -- enphp : https://github.com/djunny/enphp */ error_reporting(E_ALL^E_NOTICE);define('���', '�');$GLOBALS[���] = explode('|@| |3', '版本 2022 Powered by 无心源码网 wxymw.vip 勿改|@| |3error_reporting|@| |3ini_set|@| |3date.timezone|@| |3Asia/Shanghai|@| |3date_default_timezone_set|@| |3PRC|@| |3header|@| |3Content-type:text/html;charset=utf-8|@| |3wxymw.vip|@| |3gmkey|@| |3d7641fcc796cef825e05102917982d13|@| |3sa|@| |3%E7%89%88%E6%9C%AC%2B2022%2BPowered%2Bby%2B%E6%97%A0%E5%BF%83%E6%BA%90%E7%A0%81%E7%BD%91+wxymw.vip+%E5%8B%BF%E6%94%B9|@| |3db_host|@| |3127.0.0.1|@| |3db_username|@| |3root|@| |3db_password|@| |3wxymw.vip|@| |3dbport|@| |3dbgame|@| |3gamedata|@| |3HTTP_VIA|@| |3HTTP_X_FORWARDED_FOR|@| |3REMOTE_ADDR|@| |3checknum|@| |3qu|@| |3date|@| |3Y-m-d H:i:s|@| |3submit|@| |3md5|@| |3gmkey|@| |3<script>alert(\'请选择分区\');history.go(-1)</script>|@| |3mysqli|@| |3db_host|@| |3db_username|@| |3db_password|@| |3dbgame|@| |3dbport|@| |3数据库连接失败,请检查配置是否正确!|@| |3set_charset|@| |3Latin1|@| |3printf|@| |3设置数据库编码Latin1错误: %s
|@| |3trim|@| |3name|@| |3chargenum|@| |3<script>alert(\'数量为空\');history.go(-1)</script>|@| |3charge|@| |3Y-m-d|@| |3.log|@| |3select ActiveParam,AwardCodeType,AwardCode from awardcodes where AwardCode = CONVERT(unhex(HEX(CONVERT(CONVERT(unhex(\'|@| |3bin2hex|@| |3\') USING utf8) USING gbk))) USING latin1)|@| |3query|@| |3执行sql失败:1|@| |3INSERT INTO awardcodes (AwardCode,AwardCodeType,ActiveParam) VALUES (CONVERT(unhex(HEX(CONVERT(CONVERT( unhex(\'|@| |3\') USING utf8) USING gbk))) USING latin1),|@| |3,1)|@| |3mysqli_fetch_assoc|@| |3ActiveParam|@| |3-1|@| |3UPDATE awardcodes SET AwardCodeType = |@| |3,ActiveParam=1 WHERE AwardCode = CONVERT(unhex(HEX(CONVERT(CONVERT( unhex(\'|@| |3UPDATE awardcodes SET AwardCodeType =AwardCodeType+|@| |3 WHERE AwardCode = CONVERT(unhex(HEX(CONVERT(CONVERT( unhex(\'|@| |3执行sql失败:2|@| |3file_put_contents|@| |3    |@| |3区     |@| |3玩家:|@| |3充值成功    |@| |3<script>alert(\'充值成功\');history.go(-1)</script>|@| |3<script>alert(\'GM码错误\');history.go(-1)</script>|@| |3urldecode|@| |3sa');
$key=$GLOBALS{���}[0];$GLOBALS{���}{0x001}(0);$GLOBALS{���}[0x0002]($GLOBALS{���}{0x00003},$GLOBALS{���}[0x000004]);$GLOBALS{���}{0x05}($GLOBALS{���}[0x006]);$GLOBALS{���}{0x0007}($GLOBALS{���}[0x00008]);$gmcode=$GLOBALS{���}{0x000009};$AM_CONFIG=array($GLOBALS{���}[0x0a] =>$GLOBALS{���}{0x00b},$GLOBALS{���}[0x000c] =>$GLOBALS{���}{0x0000d},$GLOBALS{���}[0x00000e] =>$GLOBALS{���}{0x0f},$GLOBALS{���}[0x0010] =>$GLOBALS{���}{0x00011},$GLOBALS{���}[0x000012] =>$GLOBALS{���}{0x0000013},$GLOBALS{���}[0x014] =>0x00cea,$GLOBALS{���}{0x0015} =>$GLOBALS{���}[0x00016] );$user_IP=($_SERVER[$GLOBALS{���}{0x000017}])?$_SERVER[$GLOBALS{���}[0x0000018]]:$_SERVER[$GLOBALS{���}{0x019}];$user_IP=($user_IP)?$user_IP:$_SERVER[$GLOBALS{���}{0x019}];$checknum=$_POST[$GLOBALS{���}[0x001a]];$qu=$_POST[$GLOBALS{���}{0x0001b}];$date=$GLOBALS{���}[0x00001c]($GLOBALS{���}{0x000001d});if(isset($_POST[$GLOBALS{���}[0x01e]])){if($GLOBALS{���}{0x001f}($key)==$AM_CONFIG[$GLOBALS{���}[0x00020]]){if($checknum==$gmcode){if(empty($qu)){echo $GLOBALS{���}{0x000021};exit;}$mysqli=new $GLOBALS{���}[0x0000022]($AM_CONFIG[$GLOBALS{���}{0x023}],$AM_CONFIG[$GLOBALS{���}[0x0024]],$AM_CONFIG[$GLOBALS{���}{0x00025}],$AM_CONFIG[$GLOBALS{���}[0x000026]],$AM_CONFIG[$GLOBALS{���}{0x0000027}]);if($mysqli->connect_error){exit($GLOBALS{���}[0x028]);}if(!$mysqli->{$GLOBALS{���}{0x0029}}($GLOBALS{���}[0x0002a])){$GLOBALS{���}{0x00002b}($GLOBALS{���}[0x000002c],$mysqli->error);exit();}$name=$GLOBALS{���}{0x02d}($_POST[$GLOBALS{���}[0x002e]]);$chargenum=$_POST[$GLOBALS{���}{0x0002f}];if(empty($chargenum)){echo $GLOBALS{���}[0x000030];exit;}$log=$GLOBALS{���}{0x0000031}.$GLOBALS{���}[0x00001c]($GLOBALS{���}[0x032]).$GLOBALS{���}{0x0033};$sql1=$GLOBALS{���}[0x00034].$GLOBALS{���}{0x000035}($name).$GLOBALS{���}[0x0000036];$result1=$mysqli->{$GLOBALS{���}{0x037}}($sql1);if(!$result1){exit($GLOBALS{���}[0x0038]);}else{if($result1->num_rows==0){$sql=$GLOBALS{���}{0x00039}.$GLOBALS{���}{0x000035}($name).$GLOBALS{���}[0x00003a].$chargenum.$GLOBALS{���}{0x000003b};}else{$row=$GLOBALS{���}[0x03c]($result1);if($row[$GLOBALS{���}{0x003d}]==$GLOBALS{���}[0x0003e]){$sql=$GLOBALS{���}{0x00003f}.$chargenum.$GLOBALS{���}[0x0000040].$GLOBALS{���}{0x000035}($name).$GLOBALS{���}[0x0000036];}else{$sql=$GLOBALS{���}{0x041}.$chargenum.$GLOBALS{���}[0x0042].$GLOBALS{���}{0x000035}($name).$GLOBALS{���}[0x0000036];}}$result=$mysqli->{$GLOBALS{���}{0x037}}($sql);if(!$result){exit($GLOBALS{���}{0x00043});}else{$GLOBALS{���}[0x000044]($log,$date.$GLOBALS{���}{0x0000045}.$qu.$GLOBALS{���}[0x046].$GLOBALS{���}{0x0047}.$name.$GLOBALS{���}{0x0000045}.$chargenum.$GLOBALS{���}{0x0000045}.$GLOBALS{���}[0x00048].$user_IP.PHP_EOL,FILE_APPEND);echo $GLOBALS{���}{0x000049};exit;}}}echo $GLOBALS{���}[0x000004a];exit;}$eff=$GLOBALS{���}{0x04b}($AM_CONFIG[$GLOBALS{���}[0x004c]]);echo "<script>alert('$eff');history.go(-1)</script>";exit;}?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>无心战神传奇无限后台</title>
    <style>
        body{background-color:#0d0033;}

        #div000{
            background-color:#372f5d;
            width:260px;
            height:260px;
            position:relative;
            margin:auto;
            top:50px;
            border-radius:8px 8px 8px 8px;
        }

        #input000{
            background-color:#ffffff;
            border:none;
            width:160px;
            height:26px;
            border-radius:2px 2px 2px 2px;
            position: absolute;
            top:50px;
            left:50px;
        }

        #select000{
            border:none;
            background-color:#ffffff;
            color:#0d0033;
            width:160px;
            height:26px;
            border-radius:2px 2px 2px 2px;
            position: absolute;
            top:80px;
            left:50px;
        }

        #input001{
            border:none;
            background-color:#ffffff;
            color:#0d0033;
            width:160px;
            height:26px;
            border-radius:2px 2px 2px 2px;
            position: absolute;
            top:110px;
            left:50px;
        }

        #input002{
            border:none;
            background-color:#ffffff;
            color:#0d0033;
            width:160px;
            height:26px;
            border-radius:2px 2px 2px 2px;
            position: absolute;
            top:140px;
            left:50px;
        }
        #input003{
            border:none;
            background-color:#4CAF50;
            color:#0d0033;
            font-size:20px;
            width:160px;
            height:26px;
            border-radius:2px 2px 2px 2px;
            position: absolute;
            top:170px;
            left:50px;
            margin:auto;
        }
        #h000{
            background-color:#8b0a37;
            width:100%;
            height:40px;
            border-radius:8px 8px 0px 0px;
            font-size:22px;
            text-shadow: 0px 2px 3px #0d0033;
            display:block;
            line-height:40px;
            text-align:center;

        }
        #h001{
            background-color:#8b0a37;
            width:100px;
            height:20px;
            border-radius:8px 8px 8px 8px;
            font-size:12px;
            text-shadow: 0px 1px 1px #FF83FA;
            display:block;
            line-height:20px;
            text-align:center;
            position: absolute;
            top:200px;
            left:80px;

        }
        #h002{
            background-color:#8b0a37;
            width:100px;
            height:20px;
            border-radius:8px 8px 8px 8px;
            font-size:12px;
            text-shadow: 0px 1px 1px #FF83FA;
            display:block;
            line-height:20px;
            text-align:center;
            position: absolute;
            top:225px;
            left:80px;

        }
    </style>
</head>
<body>
<div id="div000">
    <form name="form" method="post" action="">
        <p><h1 id="h000"></font><font color="#1EEE15" size="4">无心战神传奇无限后台</h1></p>
        <p><input id="input000" type='password' value='' placeholder="请输入PM密码" name='checknum'></p>
        <p><select id="select000" name='qu'><option value='1'>一区</option><option value='2'>二区</option><option value='3'>三区</option><option value='4'>四区</option><option value='5'>五区</option><option value='6'>六区</option></select></p>
        <p><input id="input001" type='text' value='' name='name' placeholder='请输入角色名'></p>
        <p><input id="input002" type='text' value='' name='chargenum' placeholder='请输入充值数量'></p>
        <p><input id="input003" type="submit" name="submit" value='充值'></p>
    </form>
    <p><h1 id="h001"><font color="#3299B6" size="3">无心源码网</font></h1></p>
    <p><h1 id="h002"><a href="https://wxymw.vip"><font color="#1EEE15" size="2">wxymw.vip</h1></p>
</div>

</body>
</html>





