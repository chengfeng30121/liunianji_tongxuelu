<?php
require_once('../common.php');
require_once('head.php');

?>
 <body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
     <center> <h2 class="font-bold">公告中心-来看看都有什么新鲜事吧！</h2></center>
      <div class="col-sm-8">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        班级公告
                                    </div>
                                    <div class="panel-body">
                                        <p>
<?=C('bjgg')?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                             <div class="col-sm-4">
                               <div class="panel panel-success">
                                    <div class="panel-heading">
                                         班级作业  布置时间：<?=C('bzsj')?>    
                                    </div>
                                    <div class="panel-body">
                                        <p>语文作业：<?=C('ywzy')?><br>
                                        数学作业：<?=C('sxzy')?><br>英语作业：<?=C('yyzy')?><br>
                                        物理作业：<?=C('wlzy')?><br>化学作业：<?=C('hxzy')?><br>历史作业：<?=C('lszy')?><br>政治作业：<?=C('ywzy')?><br>
                                        <br>
<br>
<br>
</p>
                                    </div>
                                </div>
                            </div> <div class="col-sm-8">
                           <div class="panel panel-info">
                                    <div class="panel-heading">
                                        网站公告
                                    </div>
                                    <div class="panel-body">
                                        <p><?=C('wzgg')?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                            <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        班级要事
                                    </div>
                                    <div class="panel-body">
                                        <p><?=C('bjys')?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                             <div class="panel panel-default">
                                    <div class="panel-heading">
                                        班级作业
                                    </div>
                                    <div class="panel-body">
                                        <p><?=C('bjzy')?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                            <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        重要事项
                                    </div>
                                    <div class="panel-body">
                                        <p><?=C('bjss')?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                            <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        班级活动
                                    </div>
                                    <div class="panel-body">
                                        <p><?=C('bjhd')?></p>
                                    </div>
                                </div>
                            </div>
<?php
require_once('foot.php');
?>