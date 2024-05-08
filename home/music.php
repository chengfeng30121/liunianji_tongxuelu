<?php
require_once('../common.php');
require_once('head.php');
$sm=C('smusic');
if($_GET['code']){
if ($code="1"){
 exit("<script language='javascript'>alert('提交成功,请静静等待一下！');window.location.href='music.php';</script>");
 }else{
 	 exit("<script language='javascript'>alert('提交失败，刷时长失败');window.location.href='music.php';</script>");
 
}
 

}
?>
<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
    <div class="col-sm-12">
    <div class="panel panel-info">
                                    <div class="panel-heading">
                                       <i class=""></i>使用须知
                                    </div>
                                    <div class="panel-body">
                                        <p>1.本工具不需要提供密码，输入账号可<br>
                                           <p>2.本工具绝非外挂，小伙伴们请放心<br></p>
                                           <p style="color:red">3.请勿恶意提交，否则接口会封ip<br></p>
                                          <p> 4.如果提交后一直没刷，请联系管理员<br></p>
 <p> 5.此工具只能给自己qq刷<br></p>
                                        </p>
                                    </div>

                                </div>
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>刷QQ音乐时长 <small class="m-l-sm">一个可以加快升级的小工具</small></h5>
                    </div>
                    <div class="ibox-content">
                     <form action="?" class="form-horizontal tasi-form" method="get">
               
                          <div class="form-group">
                                      <label class="col-sm-2 control-label">用户名:</label>
                                      <div class="col-sm-10">
                                          <input class="form-control" id="disabledInput" type="text" value="<?=$userrow['user']?>" disabled>
                                      </div>
                                  </div>
                                  
					      <div class="form-group">
                                      <label class="col-sm-2 control-label">要刷的QQ:</label>
                                      <div class="col-sm-10">
                                          <input class="form-control" name="qq" type="text" value="<?=$userrow['qq']?>" >
										  
										 
										  
                                      </div>
                                  </div>
								  
								  
								  
                          <a class="btn btn-block btn-outline btn-primary" href="http://api.qq-admin.cn/?mod=QQMusicJs&qq=<?=$userrow['qq']?>" >开刷!</a>
                    </div>
                    </form>    

<?php
require_once('foot.php');
?>
