<?php
require_once('../common.php');
require_once('head.php');

?>
 <body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
           <script async="" src="analytics.js"></script><script>
        function reverse(s){
            return s.split("").reverse().join("");
        }
        function gentext() {
            var name = document.querySelector("input[name=name]").value;
            var suffix = document.querySelector("input[name=suffix]").value;
            suffix = reverse(suffix);

            var output = document.querySelector("#output");
            output.value = name+String.fromCharCode(8238)+suffix +String.fromCharCode(8237);
            // document.write("<h1 style='padding: 100px 100px'>"+name+"‮"+suffix +"‭</h1>")
            output.setSelectionRange(0, output.value.length);
            // output.innerHTML = "+name+"‮"+suffix +"‭
            // output.style.visibility = "visible";
            // document.write("")
        }
    </script>
     <div class="col-md-12">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title" align="center">撤回特效教程</h3>
        </div>
        <div class="panel-body" align="left">
          <p>1、输入你需要的前缀和后缀</p>
          <p>2、点击生成按钮，复制第三个输入框的内容</p>
      <p>3、到QQ群修改群名片处粘贴</p>
          <strong>目前测试IPhone成功几率较小。</strong>
        </div>
      </div>
    </div>
		<div class="col-md-12">
      <div class="ibox-title">
        
      </div>
      <div class="ibox-content">
        <form action="?type=do" role="form" class="form-horizontal" method="get">
                    <div class="list-group-item">
            <div class="input-group">
              <div class="input-group-addon">前缀</div>
              <input type="text" name="name" class="form-control" value="拾年">
            </div>
          </div>
          <div class="list-group-item">
            <div class="input-group">
              <div class="input-group-addon">后缀</div>
              <input type="text" name="suffix" class="form-control" value="并摸了你的胸">
            </div>
            <br>
<button type="button" onclick="gentext();" class="btn btn-block btn-outline btn-primary">生成</button><br>
      <div class="list-group-item">
            <div class="input-group">
              <div class="input-group-addon">结果</div>
      <input onclick="this.setSelectionRange(0, this.value.length);" id="output" class="form-control">
          </div>
      
              </form>
      </div>
    </div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73053793-3', 'auto');
  ga('send', 'pageview');

</script>

     
                    
<?php
require_once('foot.php');
?>
  </body>
</html>
