<?php
require_once('../common.php');
require_once('head.php');
if($do=$_POST['do']){
  $info=safestr($_POST['info']);
$time=date("Y-m-d H:i:s");
$qq=$userrow['qq'];
$user=$userrow['xm'];
if ($_POST['info']=="") {
 exit("<script language='javascript'>alert('发布的信息不能为空！！');window.location.href='lyb.php';</script>");
}
if ($db->query("insert into  ".C('DB_PREFIX')."lyb (qq,user,info,time) values ('$qq','$user','$info','$time')")) {
      exit("<script language='javascript'>alert('发布成功！');window.location.href='lyb.php';</script>");
    }else{
      exit("<script language='javascript'>alert('发布失败！');window.location.href='lyb.php';</script>");
    }

}

$p=is_numeric($_GET['p'])?$_GET['p']:'1';
$pp=$p+8;
$pagesize=5;
$start=($p-1)*$pagesize;

  $pages=ceil(get_count('lyb','1=1','id')/$pagesize);
  $ids=$db->get_results("select * from ".C('DB_PREFIX')."lyb order by id desc limit $start,$pagesize");

if($pp>$pages) $pp=$pages;
if($p==1){
  $prev=1;
}else{
  $prev=$p-1;
}
if($p==$pages){
  $next=$p;
}else{
  $next=$p+1;
}
?>
<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
<div class="row m-t-lg">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">

                    <div class="ibox-content">

                        <div>
                            <div class="chat-activity-list">
                            <?php if($ids){foreach($ids as $id){?>
                                <div class="chat-element">
                                    <a href="widgets.html#" class="pull-left">
                                        <img alt="image" class="img-circle" src="http://q1.qlogo.cn/g?b=qq&nk=<?=$id['qq']?>&s=160"">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right text-navy"><?=$id['time']?></small>
                                        <strong><?=$id['user']?></strong>
                                        <p class="m-b-xs">
                                            <?=$id['info']?>
                                        </p>
                                       
                                    </div>
                                </div>
                                  <?php }?> 
          <?php }?>
                            </div>
                            <? if($pagedo!='seach'){?>
      <div class="row" style="text-align:center;">
        <ul class="pagination pagination-lg">
          <li <?php if($p==1){echo'class="disabled"';}?>><a href="?p=1">首页</a></li>
          <li <?php if($prev==$p){echo'class="disabled"';}?>><a href="?p=<?=$prev?>">&laquo;</a></li>
          <?php for($i=$p;$i<=$pp;$i++){?>
          <li <?php if($i==$p){echo'class="active"';}?>><a href="?p=<?=$i?>"><?=$i?></a></li>
          <?php }?>
          <li <?php if($next==$p){echo'class="disabled"';}?>><a href="?p=<?=$next?>">&raquo;</a></li>
          <li <?php if($p==$pages){echo'class="disabled"';}?>><a href="?p=<?=$pages?>">末页</a></li>
        </ul>
      </div>
      <?php } ?>           
                        </div>
                        <div class="chat-form">
                            <form action="?" class="form-horizontal" method="post">
                <input type="hidden" name="do" value="update">
                                <div class="form-group">
                                    <textarea class="form-control" name="info" placeholder="消息内容…" rows="4"></textarea>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-sm btn-primary m-t-n-xs"><strong>发送消息</strong>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
require_once('foot.php');
?>