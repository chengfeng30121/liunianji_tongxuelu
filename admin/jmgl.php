<?php
require_once('common.php');
require_once('head.php');
?>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
          
<table style="width:100%;" cellpadding="2" cellspacing="0" border="1" bordercolor="#000000">
	<tbody>
		<tr>
			<td>
				模板1首页背景
			</td>
			<td>
				<form name="form1" method="post" action="sc.php" enctype="multipart/form-data">
          <input type="hidden" name="name" value="hero1.jpg">
										<input type="file" name="file1" size="20" class="tx1" value="">
								<input type="submit" name="submit" value="上传背景" class="btn btn-primary btn-block">
								</form>
			</td>
		</tr>
		<tr>
			<td>
				默认模板首页背景
			</td>
			<td>
				<form name="form1" method="post" action="sc.php" enctype="multipart/form-data">
          <input type="hidden" name="name" value="hero2.jpg">
										<input type="file" name="file1" size="20" class="tx1" value="">
								<input type="submit" name="submit" value="上传背景" class="btn btn-primary btn-block">
								</form>
			</td>
		</tr>
		<tr>
			<td>
				登陆页背景
			</td>
			<td>
				<form name="form1" method="post" action="sc.php" enctype="multipart/form-data">
          <input type="hidden" name="name" value="hero3.jpg">
										<input type="file" name="file1" size="20" class="tx1" value="">
								<input type="submit" name="submit" value="上传背景" class="btn btn-primary btn-block">
								</form>
			</td>
		</tr>
		<tr>
			<td>
				注册页背景
			</td>
			<td>
				<form name="form1" method="post" action="sc.php" enctype="multipart/form-data">
          <input type="hidden" name="name" value="hero4.jpg">
										<input type="file" name="file1" size="20" class="tx1" value="">
								<input type="submit" name="submit" value="上传背景" class="btn btn-primary btn-block">
								</form>
			</td>
		</tr>
	</tbody>
</table>
<br />
<?php
require_once('foot.php');
?>
