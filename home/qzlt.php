
<?php
/*
Author:3260742667
Object:Qiu 
*/
include '../common.php';
include'head.php';
if($_GET['url']){
$res=@file_get_contents("http://wpa.qq.com/msgrd?v=1&uin=<?=$_GET['url']?>&site=houdao.com&menu=yes".$_GET['url']);
exit("<script language='javascript'>alert('".$res."');window.location.href='#';</script>");
}else{
}
?>
<div class="col-lg-2"></div>
  </div>
  <div class="wrapper wrapper-content animated fadeInRight">
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title" align="center">教程：</h3>
        </div>
        <div class="panel-body" align="left">
          <p>1、输入你需要刷棒棒糖的邀请链接</p>
          <p>2、确认链接是否正确</p>
		  <p>3、点击“开始刷取“即可</p>
          <strong>注意：每天提交一次即可</strong>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="ibox-title">
        <h5>Qiu Qiu BBT</h5>
      </div>
      <div class="ibox-content">
        <form action="?type=do" role="form" class="form-horizontal" method="get">
                    <div class="list-group-item">
           <div class="input-group">
                    	<span class="input-group-addon">链接：</span><input style="background: rgba(255, 251, 251, 0.7)" name="url" type="text" class="form-control" id="url" size="100" placeholder="请输入邀请链接">
</div>
       <br>
		            
		 <div class="form-group">
                                <div class="col-lg-offset-3 col-lg-8">
                                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit" name="submit" value="1">开始刷取！</button>
                                </div>
              </form>
      </div>
    </div>

<?php
include'foot.php';
?>