<!doctype html>
<html>
<head>
<title>玩！就现在</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="Edge mode" />
<meta http-equiv="Window-Target" content="_top" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="keywords" content="友加,聊天,交友,聊天交友,视频,语音,图片,秀场,美女,帅哥,app,交友软件,手机交友,手机聊天,android,iphone" />
<meta name="description" content="友加youja.cn-年轻人的聊天交友app软件，最炫酷、最时尚的聊天交友互动体验。友加提供视频、语音、聊天、图片等社交功能在秀场与陌生人快速交友互动。美女帅哥众多、不觉寂寞。来友加，玩！就现在" />
<meta name="author" content="joenix" />
<meta name="robots" content="all" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="icon" href="<?=host?>/resource/ico/favicon.ico" />
<link rel="stylesheet" type="text/css" href="<?=host?>/library/stylesheet/stylesheet.css">
</head>
<body>
<noscript>您需要开启浏览器 JavaScript 功能来帮助您访问 <br/>请设置浏览器开启 JavaScript 功能，然后重试 ~</noscript>

<style type="text/css">
body{
      background: #f8f8f8;
}
h1{
      line-height: 2.8rem;
      font-size: 2.2rem;
}
h2{
      font-size: 1.2rem;
      color: #999;
}
small{
      display: none;
}
section{
      position: static;
      padding: 1rem 0;
      font-size: 1.2rem;
      color: #484848;
}
img{
      max-width: 100%;
}

.wrap{
      padding: 1rem;
}
</style>

<div class="wrap">
      <h1><?php echo $data['title']; ?></h1>
      <h2><?php echo $data['time']; ?><small><?php echo $data['author']; ?></small></h2>
      <section><?php echo $data['description']; ?></section>
</div>

<script type="text/javascript">
;(function( section ){
      section.innerHTML = section.innerHTML.replace(/&lt;/g, '<').replace(/&gt;/g, '>');
})
(
      document.querySelector('section')
);
</script>

</body>
</html>
