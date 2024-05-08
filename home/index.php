<?php
require_once('../common.php');
require_once('head.php');

?>

<title>用户中心 - <?=C('webname')?></title>
<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
<?php 
    if (C('sfbfq')==1) {
      require_once('../music.php');
      
    }
  ?> 
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span><img alt="image" class="img-circle" src="http://q1.qlogo.cn/g?b=qq&nk=<?=$userrow['qq']?>&s=160" width="70" height="70" /></span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold"><?=$userrow['user']?></strong></span>
                                <span class="text-muted text-xs block"><?php
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
                                  ?>
                                <b class="caret"></b></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="J_menuItem" href="grzl.php">个人资料</a>
                                </li>
                                <li><a class="J_menuItem" href="xgmm.php">修改密码</a>
                                </li>
                                <li><a class="J_menuItem" href="http://wpa.qq.com/msgrd?v=1&uin=<?=C('webqq')?>&site=houdao.com&menu=yes">联系我们</a>
                                </li>
                                <li><a class="J_menuItem" href="<?=C('gfqq')?>">官方q群</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="/logout.php">安全退出</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element"><?=C('dlzc')?>
                        </div>
                    </li>
                    <li>
                        <a class="J_menuItem" href="home.php"><i class="fa fa-hand-peace-o"></i> <span class="nav-label">班级中心</span></a>
                    </li>
                    <?php
                      if ($userrow['active']==9) {
                      	echo '<li>
                        <a href="#">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">后台管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="/admin/index.php">网站设置</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="/admin/ggsz.php">公告设置</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="/admin/jmgl.php">界面管理</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="/admin/yhgl.php">用户管理</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="/admin/xcgl.php">相册管理</a>
                            </li>
                             
                           
                        </ul>
                    </li>';
                      }
                    ?>
                          <?php
                      if ($userrow['active']==8) {
                      	echo '<li>
                        <a href="#">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">副管后台</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="/admin/index.php">网站设置</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="/admin/ggsz.php">公告设置</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="/admin/jmgl.php">界面管理</a>
                            </li>
                            
                            <li>
                                <a class="J_menuItem" href="/admin/xcgl.php">相册管理</a>
                            </li>
                             
                           
                        </ul>
                    </li>';
}
                    ?>
                     <?php
                      if ($userrow['active']==7) {
                      	echo '<li>
                        <a href="#">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">老师后台</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                
                            </li>
                            <li>
                                <a class="J_menuItem" href="/admin/ggsz.php">公告设置</a>
                            </li>
                           
                            
                                
              
                            <li>
                                <a class="J_menuItem" href="/admin/xcgl.php">相册管理</a>
                            </li>
                             
                           
                        </ul>
                    </li>';
                      }
                    ?>
                     <?php
                      if ($userrow['active']==6) {
                      	echo '<li>
                        <a href="#">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">后台管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                           
                            <li>
                                <a class="J_menuItem" href="/admin/xcgl.php">相册管理</a>
                            </li>
                             
                           
                        </ul>
                    </li>';
                      }
                    ?>
                    <?php
                      if ($userrow['active']==5) {
                      	echo '<li>
                        <a href="#">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">课代表后台</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                           
                            <li>
                                <a class="J_menuItem" href="/admin/xcgl.php">相册管理</a>
                            </li>
							<li>
                                <a class="J_menuItem" href="/admin/zygl.php">布置作业</a>
                            </li>
                             
                           
                        </ul>
                    </li>';
                      }
                    ?>
                    <li>
                        <a class="J_menuItem" href="gg.php"><i class="fa fa-feed"></i> <span class="nav-label">班级公告</span></a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span class="nav-label">个人设置</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="grzl.php">个人资料</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="xgzl.php">修改资料</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="xgmm.php">修改密码</a>
                            </li>
                             
                           
                        </ul>
                    </li>
                   
				    <li>
                        <a href="#">
                            <i class="fa fa-qq"></i>
                            <span class="nav-label">QQ小工具</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="quan.php">拉圈圈99+</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="ch.php">撤回特效</a>
                            </li>
							  <li>
                                <a class="J_menuItem" href="qiu.php">刷棒棒糖</a>
                            </li>
                              <li>
                                <a class="J_menuItem" href="music.php">刷QQ音乐时间</a>
                            </li>
                        </ul>
                    </li>
					 <li>
                        <a href="#">
                           <i class="fa fa-graduation-cap"></i>
                            <span class="nav-label">学习工具</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="zqb.php">酷炫元素周期表</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="wlgs.php">高中物理公式大全</a>
                            </li>
							  
                        </ul>
                    </li>
				  <li>
                        <a href="#">
                            <i class=" fa fa-gamepad"></i>
                            <span class="nav-label">小游戏</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                           
                            
							 
<li>
                                <a class="J_menuItem" href="http://h.4399.com/play/177957.htm">金牌小炮兵（手机）</a>
                            </li>
<li>
                                <a class="J_menuItem" href="http://h.4399.com/play/154247.htm">别踩白块儿（手机）</a>
                            </li>
<li>
                                <a class="J_menuItem" href="<?=C('yx4wl')?>"><?=C('yx3')?></a>
                            </li>
<li>
                                <a class="J_menuItem" href="<?=C('yx4wl')?>"><?=C('yx4')?></a>
                            </li>
                        </ul>
                    </li>	
                    <li>
                        <a class="J_menuItem" href="txl.php"><i class="fa fa-optin-monster
"></i> <span class="nav-label">同学录</span></a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="bjxc.php"><i class="fa fa-picture-o"></i> <span class="nav-label">班级相册</span></a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="lyb.php"><i class="fa fa-cloud"></i><span class="nav-label">留言板</span></a>
                    </li>
                     <li>
                        <a class="J_menuItem" href="/logout.php"><i class="fa fa-times"></i><span class="nav-label">安全退出</span></a>
                    </li>

                   
                   

                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" method="post" action="search_results.html"><br>
                            <p class="font-bold">←点击左边打开或关闭导航栏</p>
                        </form>
                    </div>
                    
                </nav>
            </div>
	                <li class="dropdown hidden-xs">
                            <a class="right-sidebar-toggle" aria-expanded="false">
                                <i class="fa fa-tasks"></i> 主题
                            </a>
                        </li>
            <div class="row content-tabs">
                <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
                </button>
                <nav class="page-tabs J_menuTabs">
                    <div class="page-tabs-content">
                        <a href="javascript:;" class="active J_menuTab" data-id="home.php">班级中心</a>
                    </div>
                </nav>
                <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
                </button>
                <div class="btn-group roll-nav roll-right">
                    <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>

                    </button>
                    <ul role="menu" class="dropdown-menu dropdown-menu-right">
                        <li class="J_tabShowActive"><a>定位当前选项卡</a>
                        </li>
                        <li class="divider"></li>
                        <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                        </li>
                        <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                        </li>
                    </ul>
                </div>
                <a href="loginout.php" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i> 退出</a>
            </div>
            <div class="row J_mainContent" id="content-main">
                <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="home.php" frameborder="0"  seamless data-id="home.php"></iframe>
            </div>
           
        </div>
        <!--右侧部分结束-->
     <!--右侧边栏开始-->
        <div id="right-sidebar">
            <div class="sidebar-container">

                <ul class="nav nav-tabs navs-3">

                    <li class="active">
                        <a data-toggle="tab" href="#tab-1">
                            <i class="fa fa-gear"></i> 主题
                        </a>
                    </li>
                   
                   
                </ul>

                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="sidebar-title">
                            <h3> <i class="fa fa-comments-o"></i> 主题设置</h3>
                            <small><i class="fa fa-tim"></i> 你可以从这里选择和预览主题的布局和样式，这些设置会被保存在本地，下次打开的时候会直接应用这些设置。</small>
                        </div>
                        <div class="skin-setttings">
                            <div class="title">主题设置</div>
                            <div class="setings-item">
                                <span>收起左侧菜单</span>
                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="collapsemenu">
                                        <label class="onoffswitch-label" for="collapsemenu">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                                <span>固定顶部</span>

                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="fixednavbar" class="onoffswitch-checkbox" id="fixednavbar">
                                        <label class="onoffswitch-label" for="fixednavbar">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                                <span>
                        固定宽度
                    </span>

                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="boxedlayout" class="onoffswitch-checkbox" id="boxedlayout">
                                        <label class="onoffswitch-label" for="boxedlayout">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="title">皮肤选择</div>
                            <div class="setings-item default-skin nb">
                                <span class="skin-name ">
                         <a href="#" class="s-skin-0">
                             默认皮肤
                         </a>
                    </span>
                            </div>
                            <div class="setings-item blue-skin nb">
                                <span class="skin-name ">
                        <a href="#" class="s-skin-1">
                            蓝色主题
                        </a>
                    </span>
                            </div>
                            <div class="setings-item yellow-skin nb">
                                <span class="skin-name ">
                        <a href="#" class="s-skin-3">
                            黄色/紫色主题
                        </a>
                    </span>
                            </div>
                        </div>
                    </div>
                    

            </div>
        </div>
        <!--右侧边栏结束-->
        <div class="footer">
                <div class="pull-right">� 2015-2016 <a href="#" target="_blank"><?=C('webbq')?></a>
                </div>
<?php
require_once('foot.php');
?>
