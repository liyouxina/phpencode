<?php
include "wxym.php";
function phpencode($code) {
$code = str_replace(array('<?php','?>','<?PHP'),array('','',''),$code);
$encode = base64_encode(gzdeflate($code));
$encode = '<?php
/*
 PHP Encode by https://wxymw.vip  
*/'."\neval(gzinflate(base64_decode("."'".$encode."'".")));\n?>";
return $encode;
}
?>
<html lang="zh-cn"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="shortcut icon" href="http://mp.qq.com/img/fav.ico" type="image/x-icon" />
<title><?php echo $ini['title']?></title>
<meta name="Keywords" content="<?php echo $ini['keywords']?>" />
<meta name="Description" content="<?php echo $ini['description']?>" />

<link href="https://wxymw.vip/yxjb/php/bootstrap.css" rel="stylesheet">
<script src="https://wxymw.vip/yxjb/php/jquery.min.js"></script>
<script src="https://wxymw.vip/yxjb/php/bootstrap.min.js"></script>
<style>
	body{
		margin: 0 auto;
		text-align: center;
	}
	.container {
	  max-width: 580px;
	  padding: 15px;
	  margin: 0 auto;
	}


</style>
</head>
<body>
<body style="background-image: url(https://wxymw.vip/yxjb/php/1842417170.png);background-attachment: fixed;background-repeat: no-repeat;background-size: cover;-moz-background-size: cover;">
<div class="container">
	<div class="header">
        <ul class="nav nav-pills pull-right" role="tablist">
          <li role="presentation" class="active"><a href="index.php">重置</a></li>
        </ul>
     </div>
	<hr>
<div class="panel panel-primary" style="margin:1% 1% 1% 1%;background: rgba(255, 251, 251, 0.7)">
                <div class="panel-heading bk-bg-primary">
                    <h6><span class="panel-title">无心源码网-PHP文件在线加密</span></h6>
                </div>
                <div class="panel-body">
				<form method='post'>
  <div class="form-group">
    <label>输入你要加密的代码</label>
    <textarea class="form-control" rows="5" name="source"></textarea>
  </div>
      <input class="btn btn-primary btn-block bk-margin-top-10" type="submit" name="btn" value="点击加密"></form>
   <div class="form-group">
    <label>加密后的代码</label>
    <textarea class="form-control" rows="5"><?php
if(!empty($_POST['source'])) {
echo  htmlspecialchars(phpencode(stripcslashes($_POST['source'])));
}
?>
</textarea>
  </div>
<?php
if($_POST['source']==NULL){}else{
echo '<div class="alert alert-success" <span class="glyphicon glyphicon-info-sign"></span> <strong>提示</strong>：加密成功！</div>';
}
?>
<div class="alert alert-warning" ></i> <strong>公告</strong>:本站永久免费提供PHP加密服务</div>
				<hr><div class="container-fluid">
  <button type="button" class="btn btn-info btn-sm" data-toggle="collapse" data-target="#lxkf-1"></span> 客服QQ1842417170</button>
  <a href="http://api.avak.cn/fqq/?qq=1842417170"></span> 反馈</a>
</div>
<p style="text-align:center"><br>&copy;<a href="https://wxymw.vip"> 2023 by 无心源码网 wxymw.vip</p></div>
</body>
</html>