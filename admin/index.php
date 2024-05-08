<?php
require_once('common.php');
require_once('head.php');
//************************执行代码开始*************************

if($do=$_POST['do']){
	foreach($_POST as $k=> $value){
		$db->query("insert into ".C('DB_PREFIX')."webconfigs set vkey='".safestr($k)."',value='".safestr($value)."' on duplicate key update value='".safestr($value)."'");
	}
	if($rows=$db->get_results("select * from ".C('DB_PREFIX')."webconfigs")){
		foreach($rows as $row){
			$webconfig[$row['vkey']]=$row['value'];
		}
		C($webconfig);
	}

	echo"<script language='javascript'>alert('保存成功！');</script>";
}





//**************************执行代码开始*******************************
?>
<!--main content start-->
  <body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
		  <div class="row">
            
                  <div class="col-lg-12">
                  <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        班级公告
                                    </div>
                        <div class="panel-body">
				<form action="?xz=set" class="form-horizontal" method="post">
	                
					 <input type="hidden" name="do" value="set">
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">网站前缀</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" value="<?=C('name')?>">
                    </div>
                  </div>
				  <div class="line line-dashed line-lg pull-in"></div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">网站标题</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="webname" value="<?=C('webname')?>">
                    </div>
                  </div>
 <div class="line line-dashed line-lg pull-in"></div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">网站版权</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="webbq" value="<?=C('webbq')?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">班级密匙</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="bjmm" value="<?=C('bjmm')?>">
                    </div>
                  </div>
  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">QQ加群链接</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="gfqq" value="<?=C('gfqq')?>">
                    </div>
                  </div>
  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">游戏3名称</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="yx3" value="<?=C('yx3')?>">
                    </div>
                  </div>
  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">游戏3外链</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="yx3wl" value="<?=C('yx3wl')?>">
                    </div>
                  </div>
  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">游戏4名称</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="yx4" value="<?=C('yx4')?>">
                    </div>
                  </div>
  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">游戏4外链</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="yx4wl" value="<?=C('yx4wl')?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">腾讯视频vid</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="spvid" value="<?=C('spvid')?>">
                    </div>
                  </div>
  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">登录注册页面主显文字</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="dlzc" value="<?=C('dlzc')?>">
                    </div>
                  </div>
				  <div class="line line-dashed line-lg pull-in"></div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">站长QQ</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="webqq" value="<?=C('webqq')?>">
                    </div>
                  </div>
				  <div class="line line-dashed line-lg pull-in"></div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">站长邮箱</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="webmail" value="<?=C('webmail')?>">
                    </div>
                  </div>
 <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">站长电话</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="webphone" value="<?=C('webphone')?>">
                    </div>
                  </div>
				  <div class="line line-dashed line-lg pull-in"></div>
				  
                  <div class="form-group">
          <label class="col-sm-2 control-label">是否开起绚丽播放器</label>
          <div class="col-sm-10">
            <label class="radio-inline">
												<input type="radio" name="sfbfq" value="1" checked="">开启
											</label>
											<label class="radio-inline">
												<input type="radio" name="sfbfq" value="0" <?php if(C('sfbfq')==0) echo 'checked=""';?>>
												<font>关闭</font>
											</label>
          </div>
        </div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">绚丽播放器KEY</label>
                    <div class="col-sm-10">
                       <input type="text" class="form-control" name="zxyy" value="<?=C('zxyy')?>">
                       <a href="http://myhk.xlch520.cn/" class="btn btn-danger"  target="_black">获取KEY</a>
                       <a href="http://bbs.xlch520.cn/forum.php?mod=viewthread&tid=18"  target="_black" class="btn btn-danger">使用教程</a>注：当手机浏览时会自动不播放！
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">拉圈圈接口</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="qqjk" value="<?=C('qqjk')?>">
                    </div>
                  </div>
 <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">刷棒棒糖接口</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="sqq" value="<?=C('sqq')?>">
                    </div>
                  </div>
      
        <div class="line line-dashed line-lg pull-in"></div>
          <div class="form-group">
          <label class="col-sm-2 control-label">是否开启开放注册</label>
          <div class="col-sm-10">
            <label class="radio-inline">
                        <input type="radio" name="zc" value="1" checked="">开启
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="zc" value="0" <?php if(C('zc')==0) echo 'checked=""';?>>
                        <font>关闭</font>
                      </label>
          </div>
        </div>

		
                  <div class="form-group">
                    <div align="center">
                      <button type="submit" class="btn btn-primary">确定修改</button>
                    </div>
                  </div>
                </form>
              </div>
<?php
require_once('foot.php');
?>
  </body>
</html>
