<?php
require_once('../common.php');
require_once('head.php');
if($do=$_POST['do']){
	if($do=='update'){
		$vip=is_numeric($_POST['vip'])?$_POST['vip']:'0';
		$peie=is_numeric($_POST['peie'])?$_POST['peie']:'0';
		$set="vip='{$vip}',peie='{$peie}',vipend='{$vipend}'";
		if($_POST['pwd']){
			$pwd=md5(md5($_POST['pwd']).md5('815856515'));
			$set.=",pwd='{$pwd}'";
		}
		if($db->get_row("select * from ".C('DB_PREFIX')."users where' and uid!='{$userrow['uid']}' limit 1")){
			echo"";
		}else{
			$db->query("update ".C('DB_PREFIX')."users set {$set} where uid='{$userrow['uid']}'");
			echo"<script language='javascript'>alert('修改成功,请重新登陆！');window.location.href='xgmm.php';</script>";
		}
	}
	$userrow=$db->get_row("select * from ".C('DB_PREFIX')."users where uid='{$userrow['uid']}' limit 1");
}
?>
<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
    <div class="col-sm-12">
    <div class="panel panel-info">
                                    <div class="panel-heading">
                                       <i class=""></i>修改说明
                                    </div>
                                    <div class="panel-body">
                                        <p style="color:red">修改成功以后请点击左边的安全退出，即修改生效<br>
                                          

                                        </p>
                                    </div>

                                </div>
     <div class="col-sm-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        修改密码
                                    </div>
                                    <div class="panel-body">
                                        <form action="?uid=<?=$uid?>&xz=update" class="form-horizontal" method="post">
								<input type="hidden" name="do" value="update">
						<div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">修改密码</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="pwd" placeholder="请输入新密码">
                    </div>
                  </div>
				  <div class="line line-dashed line-lg pull-in"></div>
				  <div class="form-group">
                    <div align="center">
                      <button type="submit" class="btn btn-primary">确定修改</button>
                                    </div>
                                </div>
                            </div>
    <?php
require_once('foot.php');
?>