<?php
require_once('../common.php');
C('webtitle','用户主页');
C('pageid','uinfo');
include_once 'head.php';
$uid=is_numeric($_GET['uid'])?$_GET['uid']:'0';
if(!$uid || !$userrows=$db->get_row("select * from ssnh_users where uid='$uid' limit 1")){
	exit("<script language='javascript'>alert('用户不存在！');location.reload();</script>");
}
?>
<div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2><?=$userrows['user']?></h2>
            <ol class="breadcrumb">
                <li>
                    <span>主页</span>
                </li>
                <li>
                    用户主页
                </li>
				<li>
                    <strong>用户认证</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">
        </div>
    </div>
    <div class="wrapper wrapper-content">
        <div class="row animated fadeInRight">
            <div class="col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><?php if($uid==$userrow[uid]){ echo '我的';}else{ echo '他/她的';} ?>资料</h5>
                    </div>
                    <div>
                        <div class="ibox-content no-padding border-left-right" style="background: url(http://www.mzmp.wang/style/user/img/profile_big.jpg);text-align: center;background-size: cover;">
							<img src="http://q1.qlogo.cn/g?b=qq&amp;nk=<?=$userrows['qq']?>&amp;s=240" class="img-circle circle-border m-b-md" alt="<?=$userrows['user']?>的头像" style="margin-top: 20px;width: 150px;">
                        </div>
                        <div class="ibox-content profile-content">
                            <h4><strong><?=$userrows['user']?></strong></h4>
                            <p><i class="fa fa-map-marker"></i> <?=$userrows['city']?></p>
                            <h5>注册时间:<?=$userrows['regtime']?></h5>
							<h5>最后登陆:<?=$userrows['lasttime']?></h5>
							<p>QQ号码:<?=$userrows['qq']?></p>
							<p>用户等级:<?php if(get_isvip($userrows[vip],$userrows[vipend])){ echo "<font color='red'>VIP用户</font>";}else{echo"<font color='green'>免费用户</font>";}?></p>
                        <h5>姓名：<?=$userrows['xm']?></h5>
						<h5>性别：<?=$userrows['xb']?></h5>
						<h5>星座：<?=$userrows['xz']?></h5>
						<h5>学号：<?=$userrows['xh']?></h5>
						<h5>联系电话：<?=$userrows['phone']?></h5>
						<h5>QQ号码：<?=$userrows['qq']?></h5>
						<h5>邮箱：<?=$userrows['mail']?></h5>
						<h5>生日：<?=$userrows['sr']?></h5>
						<p>职位：<?=$userrows['zw']?></p>
						<span>兴趣爱好：<?=$userrows['ah']?></span>
						</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>最新动态</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="profile.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div>
                            <div class="feed-activity-list">
                                <div class="feed-element">
                                    <a href="#" class="pull-left">
                                        <img alt="image" class="img-circle" src="http://q1.qlogo.cn/g?b=qq&amp;nk=<?=$userrows['qq']?>&amp;s=240">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right text-navy"><?=$userrow['addtime']?></small>
                                        在本站注册成为会员: <strong><?=$userrow['regtime']?></strong>.
                                        <br>
                                        <div class="actions">
                                            <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> 赞 </a>
                                            <a class="btn btn-xs btn-danger"><i class="fa fa-heart"></i> 收藏</a>
                                        </div>
                                    </div>
                                </div>
								                            </div>

                            <button class="btn btn-primary btn-block m"><i class="fa fa-arrow-down"></i> 显示更多</button>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
 <?php
include_once 'foot.php';
?>