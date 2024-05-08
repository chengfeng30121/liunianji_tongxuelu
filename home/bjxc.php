<?php
require_once('../common.php');
require_once('head.php');
$p=is_numeric($_GET['p'])?$_GET['p']:'1';
$pp=$p+8;
$pagesize=24;
$start=($p-1)*$pagesize;

  $pages=ceil(get_count('xc','1=1','id')/$pagesize);
  $ids=$db->get_results("select * from ".C('DB_PREFIX')."xc order by id desc limit $start,$pagesize");

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

<link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/assets/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/assets/css/plugins/blueimp/css/blueimp-gallery.min.css" rel="stylesheet">

    <link href="/assets/css/animate.min.css" rel="stylesheet">
    <link href="/assets/css/style.min.css?" rel="stylesheet">
<style>
        .lightBoxGallery img {
            margin: 5px;
            width: 160px;
        }
    </style>
<body class="gray-bg">
    <div class="wrapper wrapper-content">
        <div class="row">
         <div class="col-sm-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                      <h5>班级相册 <small style="color:black" class="m-l-sm">点击图片放大，在点击一下图片有惊喜哦！</small></h5>
                                    </div>
                                    <div class="panel-body">
                                                         <div class="lightBoxGallery">
                      <?php if($ids){foreach($ids as $id){?>
                            <a href="<?=$id['dz']?>" title="图片" data-gallery=""><img src="<?=$id['dz']?>"></a>
                            <?php }}?>
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
                            <div id="blueimp-gallery" class="blueimp-gallery">
                                <div class="slides"></div>
                                <h3 class="title"></h3>
                                <a class="prev">‹</a>
                                <a class="next">›</a>
                                <a class="close">×</a>
                                <a class="play-pause"></a>
                                <ol class="indicator"></ol>
                            </div>
                        </div>
                                    </div>
                                </div>
                            </div>
      
        </div>
    </div>
    
<script src="/assets/js/jquery.min.js?v=2.1.4"></script>
    <script src="/assets/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/assets/js/content.min.js?v=1.0.0"></script>
    <script src="/assets/js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
<?php
require_once('foot.php');
?>