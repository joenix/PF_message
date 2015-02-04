<aside>
	<ul>
		<li data-menu="div.msg-mixed">
			<i class="glyphicon glyphicon-th-list"></i>
			图文混排
		</li>
		<!--
		<li data-menu="div.msg-picture">
			<i class="glyphicon glyphicon-picture"></i>
			图片
		</li>
		<li data-menu="div.msg-audio">
			<i class="glyphicon glyphicon-volume-up"></i>
			语音
		</li>
		<li data-menu="div.msg-video">
			<i class="glyphicon glyphicon-film"></i>
			视频
		</li>
		-->
	</ul>
</aside>
<section>

	<!-- Message Mixed -->
	<div class="msg-mixed">
		<div class="form" action="/factory.html" method="post">
			<button type="button" class="button button-raised button-primary button-raised button-tiny" data-id="<?php echo $id; ?>">保存</button>
			<ol>
				<li>
					<label>标题：</label>
					<div>
						<input type="text" name="title" placeholder="标题/作者" value="<?php echo $title; ?>" />
					</div>
				</li>
				<li>
					<label>正文：</label>
					<div>
<script id="editor" name="content" type="text/plain">
<?php echo $description; ?>
</script>
					</div>
				</li>
				<li>
					<label>优派云：</label>
					<div>
						<ul class="drag-image"></ul>
					</div>
				</li>
			</ol>
		</div>
	</div>

	<!-- Message Picture
	<div class="msg-picture">
		The Picture Message !!
	</div>
	-->

	<!-- Message Audio
	<div class="msg-audio">
		The Audio Message !!
	</div>
	-->

	<!-- Message Video
	<div class="msg-video">
		The Video Message !!
	</div>
	-->

</section>

<script type="text/javascript">
window.UEDITOR_HOME_URL = root + '/library/ueditor/';
var
manifest = [
	{ src: root + '/library/ueditor/ueditor.config.js' },
	{ src: root + '/library/ueditor/ueditor.all.min.js' },
	{ src: root + '/library/ueditor/ueditor.parse.min.js' },
	{ src: root + '/library/ueditor/lang/zh-cn/zh-cn.js' }
]
// , loader = false
;
</script>
