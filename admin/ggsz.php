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
                   <div class="col-lg-12">
                         <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        公告设置
                                    </div>
                          <div class="panel-body"> 
                          <p><form action="?xz=set" class="form-horizontal" method="post">
           <input type="hidden" name="do" value="set">
           
          
              <div class="form-group">
                  <label class="col-sm-2 control-label">网站公告</label>
                  <textarea class="form-control" name="wzgg" rows="3" value=""><?=C('wzgg')?></textarea>
                </div>
        <div class="line line-dashed line-lg pull-in"></div>
        <div class="form-group">
                  <label class="col-sm-2 control-label">班级公告</label>
                  <textarea class="form-control" name="bjgg" rows="3" value=""><?=C('bjgg')?></textarea>
                </div>
        
        <div class="line line-dashed line-lg pull-in"></div>
        <div class="form-group">
                  <label class="col-sm-2 control-label">班级要事</label>
                  <textarea class="form-control" name="bjys" rows="3" value=""><?=C('bjys')?></textarea>
                </div>
        <div class="line line-dashed line-lg pull-in"></div>
        
        <div class="form-group">
                  <label class="col-sm-2 control-label">重要事项</label>
                  <textarea class="form-control" name="bjss" rows="3" value=""><?=C('bjss')?></textarea>
                </div>
        <div class="line line-dashed line-lg pull-in"></div>
        <div class="form-group">
                  <label class="col-sm-2 control-label">班级活动</label>
                  <textarea class="form-control" name="bjhd" rows="3" value=""><?=C('bjhd')?></textarea>
                </div>
        <div class="line line-dashed line-lg pull-in"></div>
        <div class="form-group">
                  <label class="col-sm-2 control-label">聚会活动</label>
                  <textarea class="form-control" name="jhhd" rows="3" value=""><?=C('jhhd')?></textarea>
                </div>
        <div class="line line-dashed line-lg pull-in"></div>

        <div class="line line-dashed b-b line-lg pull-in"></div>
                  <div class="form-group">
                    <div align="center">
                      <button type="submit" class="btn btn-primary">确定修改</button></p>             
              </div>
                <?php
require_once('foot.php');
?>
  </body>
</html>