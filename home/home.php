<?php
require_once('../common.php');
require_once('head.php');
?>
<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
   <center> <h2 class="font-bold">这里是班级中心哦！</h2></center>
 <div class="row">
            <div class="col-sm-4">
                <div class="widget-head-color-box navy-bg p-lg text-center">
                    
                    <img src="http://q1.qlogo.cn/g?b=qq&nk=<?=$userrow['qq']?>&s=160" class="img-circle circle-border m-b-md" alt="profile">
                       <div>
                        <h2 class="font-bold no-margins"><?=$userrow['xm']?></h2> 
                    </div>
                    <div>
                        <span><?=$userrow['gxqm']?></span> 
                    </div>

                </div>
                <div class="widget-text-box">
                    <p>用户名:<?=$userrow['user']?></p>
                    <p>权限:
                                    <?php
                                   if ($userrow['active']==9) {
                                   echo "ADMIN-管理员";
                                   }elseif ($userrow['active']==8) {
                                   echo "ADMIN-副管理";
                                   }elseif ($userrow['active']==7) {
                                    echo "老师";
                                    }elseif ($userrow['active']==6) {
                                    echo "班长";
                                   }elseif ($userrow['active']==5) {
                                    echo "课代表";
                                   }else{
                                    echo "普通学生";
                                   }
                                  ?></p>
                    <p>Phone:<?=$userrow['phone']?></p>
                </div>
                 
            </div>
            <div class="col-sm-8">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><?php echo date('m-d') ?>班级作业 <small class="m-l-sm">看看班级都有些什么新鲜事呢！</small></h5>
                    </div>
                    <div class="ibox-content">
                    语文作业：<?=C('ywzy')?><br>
                                        数学作业：<?=C('sxzy')?><br>英语作业：<?=C('yyzy')?><br>
                                        物理作业：<?=C('wlzy')?><br>化学作业：<?=C('hxzy')?><br>历史作业：<?=C('lszy')?><br>政治作业：<?=C('ywzy')?><br>
                                        <br>
<br>
<br> 布置时间：<?=C('bzsj')?>
                    </div>
                </div>
                </div>
                 <div class="col-sm-4">
                 <div class="widget lazur-bg p-lg">
                    <div class="m-b-md">
                        <center><i class="glyphicon glyphicon-tag fa-3x"></i>
                        <h3 class="font-bold no-margins">
                                当前日期
                            </h3>
                            
                            <hr>
                        <h2><?php echo date('m-d') ?></h2></center>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                 <div class="widget blue-bg p-lg">
                    <div class="m-b-md">
                        <center><i class="glyphicon glyphicon-time fa-3x"></i>
                        <h3 class="font-bold no-margins">
                               当前时间
                            </h3>
                            
                            <hr>
                        <center> <h2><?php echo date('H:i:s') ?></h2></center>
                    </div>
                </div>
            </div>

            </div>
        </div>

<?php
require_once('foot.php');
?>

