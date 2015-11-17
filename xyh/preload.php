<!DOCTYPE html>
<html>
  <head>
    <div style="margin: 0 auto;display: none;">
	<img src="metronic/media/image/120px.png" />
    </div>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />
    <link rel="shortcut icon" type="image/x-icon" href="http://nn33ztwwxwq.sinaapp.com/xyh/metronic/media/image/favicon.ico" media="screen" />
	
  </head>
  <body>
	<?php include 'config.php' ?>
    <script type="text/javascript">
      var ua = navigator.userAgent.toLowerCase();
      var isWeixin = ua.indexOf('micromessenger') != -1;
      if (isWeixin) {
                     document.head.innerHTML = '<title>出错了 QAQ！</title><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0"><link rel="stylesheet" type="text/css" href="../xyh/metronic/media/css/redirect.css">';
                     document.body.innerHTML = '<div class="page_msg"><div class="inner"><span class="msg_icon_wrp"><i class="icon81_wrong"></i></span><div class="msg_content"><h4>微信内置浏览器执行效率差，页面访问将明显卡顿。请使用其他浏览器访问。</h4></div><div style=" width:100%; text-align:center"><hr style=" width:100%; display:inline-block" /><h4>请点击右上角“在浏览器中打开”</h4></div></div></div>';
                     };
      if (!isWeixin) {
                      window.setTimeout("window.location='../xyh.php?id=main'",5000);
                      document.head.innerHTML = '<title>小团团欢迎你！OvO</title><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0"><link rel="stylesheet" type="text/css" href="../xyh/metronic/media/css/redirect.css">';
                      document.body.innerHTML = '<div class="page_msg"><div class="inner"><span class="msg_icon_wrp"><i class="icon80_smile"></i></span><div class="msg_content"><h4>浏览器检查通过，即将访问校运会成绩页面，请耐心等待</h4></div><div style=" width:100%; text-align:center"><hr style=" width:100%; display:inline-block" /><h4>5秒后跳转到页面...</h4></div></div></div>';
                      }
    </script>
  </body>
</html>
