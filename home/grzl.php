<?php
require_once('../common.php');
require_once('head.php');

?>
 <body class="gray-bg">
<div class="wrapper wrapper-content">
     <div class="row animated fadeInRight">
            <div class="col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>个人资料</h5>
                    </div>
                    <div>
                        <div class="ibox-content no-padding border-left-right">
                            <img alt="image" class="img-responsive" src="/img/zlbj.jpg">
                        </div>
                        <div class="ibox-content profile-content">
                            <h4><strong><?=$userrow['xm']?></strong></h4>
                            <p><i class="fa fa-map-marker"></i> <?=$userrow['zz']?></p>
                            <h5>用户名:</h5><p> <?=$userrow['user']?></p>
                                 
                               
                            
                            <h5>
                                    个性签名:
                                </h5>
                                <p>
                                <?=$userrow['gxqm']?>
                            </p>
                             </div>
                    </div>
                </div>
                             </div>
                             <br>
                            <div class="col-sm-8">
                             <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        我的资料
                                    </div>
                                    <div class="panel-body">
                                        <p><table class="table">
                              <tbody>
                              <tr>
                                  <td>姓名：<?=$userrow['xm']?></td>
                                  <td>性别：<?php 
                                  if ($userrow['xb']==1) {
                                  	echo "男";
                                  }
                                  elseif ($userrow['xb']==2) {
                                  	echo "女";
                                  }
                                  else{
                                  	echo "未知道";
                                  }
                                  

                                  

                                     ?></td>
                              </tr>
                              <tr>
                                  <td>学号：<?=$userrow['xh']?></td>
                                  <td>绰号：<?=$userrow['ch']?></td>
                                  
                                 
                              </tr>
                              <tr>
                              <td>生日：<?=$userrow['sr']?></td>
                               <td>住址：<?=$userrow['zz']?></td>
                              </tr>
                              <tr>
                              <td>电话：<?=$userrow['phone']?></td>
                               <td>邮箱：<?=$userrow['mail']?></td>
                              </tr>
                              <tr>
                              <td>QQ：<?=$userrow['qq']?></td>
                               <td>职位：<?=$userrow['zw']?></td>
                              </tr>
                              <tr>
                              <td>星座：<?php
                                if ($userrow['xz']==1) {
                                    echo "白羊座";
                                  }
                                  elseif ($userrow['xz']==2) {
                                    echo "金牛座";
                                  }
                                  elseif ($userrow['xz']==3) {
                                    echo "双子座";
                                  }
                                  elseif ($userrow['xz']==4) {
                                    echo "巨蟹座";
                                  }
                                  elseif ($userrow['xz']==5) {
                                    echo "狮子座";
                                  }
                                  elseif ($userrow['xz']==6) {
                                    echo "处女座";
                                  }
                                  elseif ($userrow['xz']==7) {
                                    echo "天秤座";
                                  }
                                  elseif ($userrow['xz']==8) {
                                    echo "天蝎座";
                                  }
                                  elseif ($userrow['xz']==9) {
                                    echo "射手座";
                                  }
                                  elseif ($userrow['xz']==10) {
                                    echo "摩羯座";
                                  }
                                  elseif ($userrow['xz']==11) {
                                    echo "水瓶座";
                                  }
                                  elseif ($userrow['xz']==12) {
                                    echo "双鱼座";
                                  }
                                 
                                ?></td>
                               <td>爱好：<?=$userrow['ah']?></td>
                               
                              </tr>
                              <tr>
                              <td>特长：<?=$userrow['tc']?></td>
                               <td>口头禅：<?=$userrow['ktc']?></td>
                              </tr>

                              
                              </tbody>
                          </table>
                          <h5>如果你想修改资料可以点击下面的按钮！</h5>
                          <a href="xgzl.php" class="btn btn-block btn-outline btn-primary">前往修改</a></button></p>
                                    </div>
                                </div>
                           
                 </div> 
                       
           
    <?php
require_once('foot.php');
?>