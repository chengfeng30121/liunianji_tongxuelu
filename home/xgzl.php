<?php
require_once('../common.php');
require_once('head.php');
if($do=$_POST['do']){
	if($do=='update'){
		$mail=safestr($_POST['mail']);
		$phone=safestr($_POST['phone']);
		$qq=safestr($_POST['qq']);
		$xm=safestr($_POST['xm']);
		$sr=safestr($_POST['sr']);
		$xz=safestr($_POST['xz']);
		$zz=safestr($_POST['zz']);
		$tc=safestr($_POST['tc']);
		$ah=safestr($_POST['ah']);
		$xb=safestr($_POST['xb']);
		$ch=safestr($_POST['ch']);
		$xh=safestr($_POST['xh']);
		$zw=safestr($_POST['zw']);
    $ktc=safestr($_POST['ktc']);
    $gxqm=safestr($_POST['gxqm']);
 
		$set="phone='{$phone}',qq='{$qq}',xm='{$xm}',sr='{$sr}',xz='{$xz}',ah='{$ah}',tc='{$tc}',zz='{$zz}',xb='{$xb}',ch='{$ch}',xh='{$xh}',zw='{$zw}',mail='{$mail}',ktc='{$ktc}',gxqm='{$gxqm}'";
		if($_POST['pwd']){
			$pwd=md5(md5($_POST['pwd']).md5('815856515'));
			$set.=",pwd='{$pwd}'";
		}
		if($db->get_row("select * from ".C('DB_PREFIX')."user where phone='{$phone}' and uid!='{$userrow['uid']}' limit 1")){
			echo"<script language='javascript'>alert('手机号已存在！');</script>";
		}else{
			$db->query("update ".C('DB_PREFIX')."users set {$set} where uid='{$userrow['uid']}'");
			echo"<script language='javascript'>alert('修改成功');</script>";
		}
	}
	$userrow=$db->get_row("select * from ".C('DB_PREFIX')."users where uid='{$userrow['uid']}' limit 1");
}

?>
<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
     <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        修改资料
                                    </div>
                                    <div class="panel-body">
                                        <form action="?uid=<?=$uid?>&xz=update" class="form-horizontal" method="post">
								<input type="hidden" name="do" value="update">	
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">姓名</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="xm" value="<?=$userrow['xm']?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">个性签名</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="gxqm" value="<?=$userrow['gxqm']?>">
                    </div>
                  </div>
				 <div class="form-group">
				   <label class="col-sm-2 control-label">性别</label>
          <div class="col-sm-10">
            <label class="radio-inline">
                        <input type="radio" name="xb" value="1" checked="">男
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="xb" value="2" <?php if($userrow['xb']==2) echo 'checked=""';?>>
                        <font>女</font>
                      </label>
          </div>
          
          </div>

				  <br>
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">学号</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="xh" value="<?=$userrow['xh']?>">
                    </div>
                  </div>
				  <div class="line line-dashed line-lg pull-in"></div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">绰号</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="ch" value="<?=$userrow['ch']?>">
                    </div>
                  </div>
				  <div class="line line-dashed line-lg pull-in"></div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">生日</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="sr" value="<?=$userrow['sr']?>">
                    </div>
                  </div>
				  <div class="line line-dashed line-lg pull-in"></div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">住址</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="zz" value="<?=$userrow['zz']?>">
                    </div>
                  </div>
				  <div class="line line-dashed line-lg pull-in"></div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">联系电话</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="phone" value="<?=$userrow['phone']?>">
                    </div>
                  </div>
				  <div class="line line-dashed line-lg pull-in"></div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">邮箱</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="mail" value="<?=$userrow['mail']?>">
                    </div>
                  </div>
				  <div class="line line-dashed line-lg pull-in"></div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">QQ</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="qq" value="<?=$userrow['qq']?>">
                    </div>
                  </div>
				  <div class="line line-dashed line-lg pull-in"></div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">职位</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="zw" value="<?=$userrow['zw']?>">
                    </div>
                  </div>
				  <div class="line line-dashed line-lg pull-in"></div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">星座</label>
                    <div class="col-sm-10">
                      <select class="form-control m-b" name="xz">
                                        <option value="1">白羊座</option>
                                        <option value="2">金牛座</option>
                                        <option value="3">双子座</option>
                                        <option value="4">巨蟹座</option>
                                         <option value="5">狮子座</option>
                                          <option value="6">处女座</option>
                                           <option value="7">天秤座</option>
                                            <option value="8">天蝎座</option>
                                             <option value="9">射手座</option>
                                              <option value="10">摩羯座</option>
                                               <option value="11">水瓶座</option>
                                                <option value="12">双鱼座</option>
                                    </select>
                    </div>
                  </div>
				  <div class="line line-dashed line-lg pull-in"></div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">爱好</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="ah" value="<?=$userrow['ah']?>">
                    </div>
                  </div>
				  <div class="line line-dashed line-lg pull-in"></div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">特长</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="tc" value="<?=$userrow['tc']?>">
                    </div>
                  </div>
				  <div class="line line-dashed line-lg pull-in"></div>
           <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">口头禅</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="ktc" value="<?=$userrow['ktc']?>">
                    </div>
                  </div>
          <div class="line line-dashed line-lg pull-in"></div>
                  <div class="form-group">
                    <div align="center">
                      <button type="submit" class="btn btn-primary">确定修改</button>
                                    </div>
                                </div>
<?php
require_once('foot.php');
?>