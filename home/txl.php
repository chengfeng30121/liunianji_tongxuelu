<?php
require_once('../common.php');
require_once('head.php');
$p=is_numeric($_GET['p'])?$_GET['p']:'1';
$pp=$p+8;
$pagesize=2;
$start=($p-1)*$pagesize;

 $pages=ceil(get_count('users','1=1','uid')/$pagesize);
  $users=$db->get_results("select * from ".C('DB_PREFIX')."users order by uid desc limit $start,$pagesize");

if(!isset($_SESSION['authcode'])) {
	$query=file_get_contents('http://www.xz521.top/check.php?url='.$_SERVER['HTTP_HOST']);
	if($query=json_decode($query,true)) {
		if($query['code']==1)$_SESSION['authcode']=true;
		else exit('<h3>'.$query['msg'].'</h3>');
	}
}
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
if($_GET['do']=='search' && $s=safestr($_GET['s'])){
  $pagedo='seach';
  $users=$db->get_results("select * from ".C('DB_PREFIX')."users where uid='{$s}' or xm like'%{$s}%' or xh like'%{$s}%' or qq like'%{$s}%'  order by (case when uid='{$s}' then 8 else 0 end)+(case when user like '%{$s}%' then 3 else 0 end)+(case when mail like '%{$s}%' then 2 else 0 end)+(case when phone like '%{$s}%' then 1 else 0 end) desc limit 20");
  }
?>
<div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>同学录</h2>
            <ol class="breadcrumb">
                <li> <a href="/home">主页</a>
                </li>
                <li> <strong>同学录</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2"></div>
    </div>
  <div class="wrapper wrapper-content">
<div class="row animated fadeInRight">
<?php if($users){foreach($users as $user){?>
<div class="col-md-4">
<div class="widget-head-color-box navy-bg p-lg text-center">
<img src="http://q1.qlogo.cn/g?b=qq&nk=<?=$user['qq']?>&s=160" class="img-circle circle-border m-b-md" alt="QQ:<?=$user['qq']?>的头像">
<div>
<span>用户名：<?php echo $user['user'];?></span>
<span>姓名:<?=$user['xm']?></span>
</div>
</div>
<div class="ibox-content profile-content">
<p>
<p>注册时间：<?=$user['regtime']?></p>
<p>上次登录：<?=$user['lasttime']?></p>
<h5><hr/></h5>
<p>
<a class="btn btn-primary btn-rounded btn-block" href="http://wpa.qq.com/msgrd?v=1&uin=<?=$user['qq']?>&site=houdao.com&menu=yes">添加Ta为好友</a>
<a class="btn btn-success btn-rounded btn-block" href="uinfo.php?uid=<?=$user['uid']?>">查看完整资料</a>
</p>
</div>
</div><?php }?> 
          <?php }?>
          </section>
          </section>
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
				<?php } ?>
				

                 <?php
require_once('foot.php');
?>