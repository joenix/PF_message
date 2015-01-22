<div class="markdown">

	<h1>BLANK PAGE DEMO</h1>

	<section id="Index">
		<h2>索引链接</h2>
		<ul>
			<li><a href="#Weixin">微信接口</a></li>
			<li><a href="#Preset">预置</a></li>
			<li><a href="#Manifest">配置项</a></li>
			<li><a href="#Template">模板引擎</a></li>
			<li><a href="#Animate">动画类</a></li>
			<li><a href="#Button">按钮</a></li>
			<li><a href="#Icon">按钮</a></li>
		</ul>
	</section>

	<hr />

	<section id="Weixin">
		<h2>微信接口</h2>
		<ol>
			<li>
				<label>Application ID:</label>
				<div>
					<bdo>wxc81bc3d270e46d21</bdo>
				</div>
			</li>
			<li>
				<label>WeixinApi (来自 https://github.com/zxlie/WeixinApi/):</label>
				<div>
					<label>官方示例</label>
					<div>
<div class="pre">
/* !!
 * JS SDK 使用步骤
 * ** *** **** ***** **** *** ** *
 */

/* Step 1: 绑定域名 */

先登录<a target="_blank" href="http://mp.weixin.qq.com">微信公众平台</a>进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。
备注：登录后可在“开发者中心”可查看对应的接口权限。 

/* Step 2: 引入JS文件 */

在需要调用JS接口的页面引入如下JS文件，（支持https）：<a target="_blank" href="http://res.wx.qq.com/open/js/jweixin-1.0.0.js">jweixin-1.0.0.js</a>
备注：支持使用 AMD/CMD 标准模块加载方法加载 

/* Step 3: 通过config接口注入权限验证配置 */
<code>所有需要使用JS-SDK的页面必须先注入配置信息，否则将无法调用（同一个url仅需调用一次，对于变化url的SPA的web app可在每次url变化时进行调用）。</code>
<pre>
wx.config({
	// 调试模式：调用api时，返回值会在客户端被alert；若要查看传入的参数，可在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
	debug: true,
	// 必填，公众号的唯一标识
	appId: '',
	// 必填，生成签名的时间戳
	timestamp: ,
	// 必填，生成签名的随机串
	nonceStr: '',
	// 必填，签名，见附录1
	signature: '',
	// 必填，需要使用的JS接口列表，所有JS接口列表见附录2
	jsApiList: []
});
</pre>

/* Step 4: 通过ready接口处理成功验证 */
<pre>
wx.ready(function(){

	// config信息验证后会执行ready方法，所有接口调用都必须在config接口获得结果之后，config是一个客户端的异步操作，所以如果需要在页面加载时就调用相关接口，则须把相关接口放在ready函数中调用来确保正确执行。对于用户触发时才调用的接口，则可以直接调用，不需要放在ready函数中。

});
</pre>

/* Step 5: 通过error接口处理失败验证 */
<pre>
wx.error(function(res){

	// config信息验证失败会执行error函数，如签名过期导致验证失败，具体错误信息可以打开config的debug模式查看，也可以在返回的res参数中查看，对于SPA可以在这里更新签名。

});
</pre>


PS: 详尽接口说明，访问：<a target="_blank" href="http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html#.E6.AD.A5.E9.AA.A4.E4.BA.8C.EF.BC.9A.E5.BC.95.E5.85.A5JS.E6.96.87.E4.BB.B6">官方：微信JS-SDK说明文档</a>
</div>
					</div>
				</div>
			</li>
		</ol>
	</section>

	<hr />

	<section id="Preset">
		<h2>预置</h2>
		<ol>
			<li>
				<label>变量</label>
				<ul>
					<li>
						<label>根路径: $.root</label>
						<code>$.root</code>
					</li>
					<li>
						<label>路由: $.path</label>
						<code>$.path</code>
					</li>
					<li>
						<label>参数: $.param</label>
						<code>$.param</code>
					</li>
					<li>
						<label>版本: $.version</label>
						<code>$.version</code>
					</li>
					<li>
						<label>来源: $.referrer</label>
						<code>$.referrer</code>
					</li>
					<li>
						<label>环境: $.env</label>
						<code>$.env</code>
					</li>
					<li>
						<label>Token: $.token ($.clientToken)</label>
						<code>$.token</code>
					</li>
					<li>
						<label>Session ID: $.session_id</label>
						<code>$.session_id</code>
					</li>
					<li>
						<label>User ID: $.user_id</label>
						<code>$.user_id</code>
					</li>
					<li>
						<label>Target ID: $.target_id</label>
						<code>$.target_id</code>
					</li>
					<li>
						<label>性别: $.gender</label>
						<code>$.gender</code>
					</li>
				</ul>
			</li>
			<li>
				<label>环境检测</label>
				<ul>
					<li>
						<label>当前环境: $.monitor()</label>
						<code>$.monitor()</code>
					</li>
					<li>
						<label>是否Ipad: $.isIpad</label>
						<code>$.isIpad</code>
					</li>
					<li>
						<label>是否Mac: $.isMac</label>
						<code>$.isMac</code>
					</li>
					<li>
						<label>是否Android: $.isAndroid</label>
						<code>$.isAndroid</code>
					</li>
					<li>
						<label>是否Winphone: $.isWinphone</label>
						<code>$.isWinphone</code>
					</li>
					<li>
						<label>是否Mobile: $.isMobile</label>
						<code>$.isMobile</code>
					</li>
					<li>
						<label>是否Internet Explorer: $.isMsie</label>
						<code>$.isMsie</code>
					</li>
					<li>
						<label>是否Firefox: $.isFirefox</label>
						<code>$.isFirefox</code>
					</li>
					<li>
						<label>是否Chrome: $.isChrome</label>
						<code>$.isChrome</code>
					</li>
					<li>
						<label>是否Safari: $.isSafari</label>
						<code>$.isSafari</code>
					</li>
					<li>
						<label>是否Opera: $.isOpera</label>
						<code>$.isOpera</code>
					</li>
					<li>
						<label>是否Iphone: $.isIphone</label>
						<code>$.isIphone</code>
					</li>
					<li>
						<label>是否微信: $.isWeixin</label>
						<code>$.isWeixin</code>
					</li>
					<li>
						<label>是否友加: $.isUplus</label>
						<code>$.isUplus</code>
					</li>
				</ul>
			</li>
		</ol>
	</section>

	<hr />

	<section id="Manifest">
		<h2>配置项</h2>
		<ol>
			<li>
				<label>css:</label>
				<ul>
					<li>使用less编程</li>
					<li>仓库: /library/stylesheet/stylesheet.less</li>
					<li>自定义: /resource/css/style.less</li>
				</ul>
			</li>
			<li>
				<label>js:</label>
				<ul>
					<li>基于jQuery框架编程</li>
					<li>默认加载jQuery 2.x</li>
					<li>仓库: /library, ps: 如需加载插件, 请将源文件拷贝至此目录</li>
					<li>自定义: /resource/js/x.js, ps: 于页面底部manifest(数组)加载引用</li>
				</ul>
			</li>
			<li>
				<label>资源加载 (含图片、音频、视频等):</label>
				<ul>
					<li>使用preload加载资源</li>
					<li>仓库: /library/one/require.js, ps: 默认加载项在js文件内部</li>
					<li>自定义: 页面底部manifest(数组)</li>
				</ul>
			</li>
		</ol>
	</section>

	<hr />

	<section id="Template">
		<h2>模板引擎</h2>
		<ol>
			<li>
				<label>EJS (来自 https://github.com/tj/ejs/):</label>
				<div>
					<label>调用示例:</label>
					<div id="dot-use">
<pre>
/* 原始调用 */
element.html(
	ejs.render( text, json )
);

/* 便捷封装 */
$.renderEjs( element, json, true ); // 第三个参数为缓存, 默认绑定data: renderEjs
</pre>
					</div>
				</div>
				<div>
					<label>效果示例:</label>
					<div id="dot-database">
						<label>Demo - Database</label>
<textarea>{
	name: 'joenix',
	sex: 'boy',
	age: '18',
	iq: 160
}</textarea>
					</div>
					<div id="dot-html">
						<label>Demo - HTML</label>
<textarea>
<li>name: <%= name %></li>
<li>sex:  <%= sex  %></li>
<li>age:  <%= age  %></li>
<li>iq:   <%= iq   %></li>
</textarea>
					</div>
					<div id="dot-interface">
						<label>Demo - Interface</label>
						<ul></ul>
					</div>
				</div>
			</li>
		</ol>
	</section>

	<section id="Animate">
		<h2>动画类</h2>
		<ol>
			<li>
				<label>animate.less (来自 http://daneden.github.io/animate.css/):</label>
				<div>

					<div id="animate-sandbox">Animate World</div>

					<select id="animate-select" multiple>

						<optgroup label="Attention Seekers">
							<option value="bounce">bounce</option>
							<option value="flash">flash</option>
							<option value="pulse">pulse</option>
							<option value="rubberBand">rubberBand</option>
							<option value="shake">shake</option>
							<option value="swing">swing</option>
							<option value="tada">tada</option>
							<option value="wobble">wobble</option>
						</optgroup>

						<optgroup label="Bouncing Entrances">
							<option value="bounceIn">bounceIn</option>
							<option value="bounceInDown">bounceInDown</option>
							<option value="bounceInLeft">bounceInLeft</option>
							<option value="bounceInRight">bounceInRight</option>
							<option value="bounceInUp">bounceInUp</option>
						</optgroup>

						<optgroup label="Bouncing Exits">
							<option value="bounceOut">bounceOut</option>
							<option value="bounceOutDown">bounceOutDown</option>
							<option value="bounceOutLeft">bounceOutLeft</option>
							<option value="bounceOutRight">bounceOutRight</option>
							<option value="bounceOutUp">bounceOutUp</option>
						</optgroup>

						<optgroup label="Fading Entrances">
							<option value="fadeIn">fadeIn</option>
							<option value="fadeInDown">fadeInDown</option>
							<option value="fadeInDownBig">fadeInDownBig</option>
							<option value="fadeInLeft">fadeInLeft</option>
							<option value="fadeInLeftBig">fadeInLeftBig</option>
							<option value="fadeInRight">fadeInRight</option>
							<option value="fadeInRightBig">fadeInRightBig</option>
							<option value="fadeInUp">fadeInUp</option>
							<option value="fadeInUpBig">fadeInUpBig</option>
						</optgroup>

						<optgroup label="Fading Exits">
							<option value="fadeOut">fadeOut</option>
							<option value="fadeOutDown">fadeOutDown</option>
							<option value="fadeOutDownBig">fadeOutDownBig</option>
							<option value="fadeOutLeft">fadeOutLeft</option>
							<option value="fadeOutLeftBig">fadeOutLeftBig</option>
							<option value="fadeOutRight">fadeOutRight</option>
							<option value="fadeOutRightBig">fadeOutRightBig</option>
							<option value="fadeOutUp">fadeOutUp</option>
							<option value="fadeOutUpBig">fadeOutUpBig</option>
						</optgroup>

						<optgroup label="Flippers">
							<option value="flip">flip</option>
							<option value="flipInX">flipInX</option>
							<option value="flipInY">flipInY</option>
							<option value="flipOutX">flipOutX</option>
							<option value="flipOutY">flipOutY</option>
						</optgroup>

						<optgroup label="Lightspeed">
							<option value="lightSpeedIn">lightSpeedIn</option>
							<option value="lightSpeedOut">lightSpeedOut</option>
						</optgroup>

						<optgroup label="Rotating Entrances">
							<option value="rotateIn">rotateIn</option>
							<option value="rotateInDownLeft">rotateInDownLeft</option>
							<option value="rotateInDownRight">rotateInDownRight</option>
							<option value="rotateInUpLeft">rotateInUpLeft</option>
							<option value="rotateInUpRight">rotateInUpRight</option>
						</optgroup>

						<optgroup label="Rotating Exits">
							<option value="rotateOut">rotateOut</option>
							<option value="rotateOutDownLeft">rotateOutDownLeft</option>
							<option value="rotateOutDownRight">rotateOutDownRight</option>
							<option value="rotateOutUpLeft">rotateOutUpLeft</option>
							<option value="rotateOutUpRight">rotateOutUpRight</option>
						</optgroup>

						<optgroup label="Specials">
							<option value="hinge">hinge</option>
							<option value="rollIn">rollIn</option>
							<option value="rollOut">rollOut</option>
						</optgroup>

						<optgroup label="Zoom Entrances">
							<option value="zoomIn">zoomIn</option>
							<option value="zoomInDown">zoomInDown</option>
							<option value="zoomInLeft">zoomInLeft</option>
							<option value="zoomInRight">zoomInRight</option>
							<option value="zoomInUp">zoomInUp</option>
						</optgroup>

						<optgroup label="Zoom Exits">
							<option value="zoomOut">zoomOut</option>
							<option value="zoomOutDown">zoomOutDown</option>
							<option value="zoomOutLeft">zoomOutLeft</option>
							<option value="zoomOutRight">zoomOutRight</option>
							<option value="zoomOutUp">zoomOutUp</option>
						</optgroup>

					</select>

				</div>
			</li>
		</ol>
	</section>

	<hr />

	<section id="Button">
		<h2>按钮</h2>
		<ol>
			<li>
				<label>button.less (来自 http://unicorn-ui.com/buttons/showcase/css/buttons.css):</label>

				<ul>
					<li>
						<label>形状和大小</label>
						<div class="button-show-size">
							<p>
								<button class="button button-tiny">Go</button>
								<button class="button button-rounded button-tiny">Go</button>
								<button class="button button-pill button-tiny">Go</button>
								<button class="button button-square button-tiny"></button>
								<button class="button button-box button-tiny"></button>
								<button class="button button-circle button-tiny"></button>
							</p>
							<p>
								<button class="button button-primary button-small">Go</button>
								<button class="button button-primary button-rounded button-small">Go</button>
								<button class="button button-primary button-pill button-small">Go</button>
								<button class="button button-primary button-square button-small"></button>
								<button class="button button-primary button-box button-small"></button>
								<button class="button button-primary button-circle button-small"></button>
							</p>
							<p>
								<button class="button button-action">Go</button>
								<button class="button button-action button-rounded">Go</button>
								<button class="button button-action button-pill">Go</button>
								<button class="button button-action button-square"></button>
								<button class="button button-action button-box"></button>
								<button class="button button-action button-circle"></button>
							</p>
							<p>
								<button class="button button-highlight button-large">Go</button>
								<button class="button button-highlight button-rounded button-large">Go</button>
								<button class="button button-highlight button-pill button-large">Go</button>
								<button class="button button-highlight button-square button-large"></button>
								<button class="button button-highlight button-box button-large"></button>
								<button class="button button-highlight button-circle button-large"></button>
							</p>
							<p>
								<button class="button button-caution button-jumbo">Go</button>
								<button class="button button-caution button-rounded button-jumbo">Go</button>
								<button class="button button-caution button-pill button-jumbo">Go</button>
								<button class="button button-caution button-square button-jumbo"></button>
								<button class="button button-caution button-box button-jumbo"></button>
								<button class="button button-caution button-circle button-jumbo"></button>
							</p>
							<p>
								<button class="button button-royal button-giant">Go</button>
								<button class="button button-royal button-rounded button-giant">Go</button>
								<button class="button button-royal button-pill button-giant">Go</button>
								<button class="button button-royal button-square button-giant"></button>
								<button class="button button-royal button-box button-giant"></button>
								<button class="button button-royal button-circle button-giant"></button>
							</p>
						</div>
					</li>
					<li>
						<label>边框线按钮</label>
						<div class="button-show-border">
							<p>
								<button class="button button-large button-plain button-border button-circle"></button>
								<button class="button button-large button-plain button-border button-circle"></button>
								<button class="button button-large button-plain button-border button-circle"></button>
								<button class="button button-large button-plain button-border button-pill">The Circle Button</button>
							</p>
							<p>
								<button class="button button-large button-plain button-border button-box"></button>
								<button class="button button-large button-plain button-border button-box"></button>
								<button class="button button-large button-plain button-border button-box"></button>
								<button class="button button-large button-plain button-border button-rounded">The Rounded Button</button>
							</p>
							<p>
								<button class="button button-large button-plain button-border button-square"></button>
								<button class="button button-large button-plain button-border button-square"></button>
								<button class="button button-large button-plain button-border button-square"></button>
								<button class="button button-large button-plain button-border">The Square Button</button>
							</p>
							<p>
								( 隐形按钮 )
								<button class="button button-large button-plain button-borderless"></button>
								<button class="button button-large button-plain button-borderless"></button>
								<button class="button button-large button-plain button-borderless"></button>
								<button class="button button-large button-plain button-borderless"></button>
							</p>
						</div>
					</li>
					<li>
						<label>3D按钮</label>
						<div class="button-show-3d">
							<p>
								<button class="button button-3d button-box button-jumbo"></button>
								<button class="button button-3d button-primary button-rounded">3D Button Rounded</button>
								<button class="button button-3d button-action button-pill">3D Button Pill</button>
								<button class="button button-3d button-action button-circle button-jumbo"></button>
								<button class="button button-3d button-caution">Caution</button>
								<button class="button button-3d button-royal">Royal</button>
							</p>
						</div>
					</li>
					<li>
						<label>高光按钮</label>
						<div class="button-show-raised">
							<p>
								<button class="button button-raised button-primary button-pill">Joenix.com !!</button>
								<button class="button button-raised button-action button-circle button-jumbo"></button>
								<button class="button button-raised button-caution">Go Go Go</button>
								<button class="button button-raised button-royal">Hello World !</button>
								<button class="button button-raised button-pill button-inverse">Hi, Joenix ~</button>
							</p>
						</div>
					</li>
					<li>
						<label>阴影按钮</label>
						<div class="button-show-shadow">
							<p>
								<button class="button button-primary button-box button-giant button-longshadow-right"></button>
								<button class="button button-caution button-box button-raised button-giant button-longshadow"></button>
								<button class="button button-action button-box button-giant button-longshadow-left"></button>
								<button class="button button-highlight button-box button-giant button-longshadow-right button-longshadow-expand"></button>
								<button class="button button-primary button-circle button-giant button-longshadow"></button>
							</p>
						</div>
					</li>
					<li>
						<label>发光按钮</label>
						<div class="button-show-glowing">
							<p>
								<button class="button button-glow button-rounded button-raised button-primary">Go</button>
								<button class="button button-glow button-border button-rounded button-primary">Go</button>
								<button class="button button-glow button-circle button-action button-jumbo">Go</button>
								<button class="button button-glow button-rounded button-highlight">Go</button>
								<button class="button button-glow button-rounded button-caution">Go</button>
								<button class="button button-glow button-rounded button-royal">Go</button>
							</p>
						</div>
					</li>
					<li>
						<label>下拉按钮</label>
						<div class="button-show-dropdown">
							<span class="button-dropdown" data-buttons="dropdown">
								<button class="button button-rounded">Select Me</button>
								<ul class="button-dropdown-list">
									<li>Option Link 1</li>
									<li>Option Link 2</li>
									<li class="button-dropdown-divider">Option Link 3</li>
								</ul>
							</span>
							<span class="button-dropdown button-dropdown-primary" data-buttons="dropdown">
								<button class="button button-primary button-large">Select Me</button>
								<ul class="button-dropdown-list is-below">
									<li>Option Link 1</li>
									<li>Option Link 2</li>
									<li class="button-dropdown-divider">Option Link 3</li>
								</ul>
							</span>
							<span class="button-dropdown button-dropdown-action" data-buttons="dropdown">
								<button class="button button-action button-jumbo">Select Me</button>
								<ul class="button-dropdown-list is-above">
									<li>Option Link 1</li>
									<li>Option Link 2</li>
									<li class="button-dropdown-divider">Option Link 3</li>
								</ul>
							</span>
							<span class="button-dropdown button-dropdown-plain" data-buttons="dropdown">
								<button class="button button-caution button-pill">Select Me</button>
								<ul class="button-dropdown-list">
									<li>Option Link 1</li>
									<li class="button-dropdown-divider">Option Link 2</li>
									<li>Option Link 3</li>
								</ul>
							</span>
							<span class="button-dropdown button-dropdown-inverse" data-buttons="dropdown">
								<button class="button button-inverse">Select Me</button>
								<ul class="button-dropdown-list is-below">
									<li>Option Link 1</li>
									<li class="button-dropdown-divider">Option Link 2</li>
									<li>Option Link 3</li>
								</ul>
							</span>
						</div>
					</li>
					<li>
						<label>按钮组</label>
						<div class="button-show-group">
							<p>	
								<div class="button-group">
									<button class="button button-primary" type="button">Option 1</button>
									<button class="button button-primary" type="button">Option 2</button>
									<button class="button button-primary" type="button">Option 3</button>
									<!-- DROPDOWN MENU -->
									<span data-buttons="dropdown" class="button-dropdown button-dropdown-primary">
										<button class="button button-primary">Select Me</button>
										<ul class="button-dropdown-list is-below">
											<li>Option Link 1</li>
											<li>Option Link 2</li>
											<li class="button-dropdown-divider">Option Link 3</li>
										</ul>
									</span>
								</div>
							</p>
							<p>
								<div class="button-group">
									<button class="button button-pill button-action" type="button">Option 1</button>
									<button class="button button-pill button-action" type="button">Option 2</button>
									<button class="button button-pill button-action" type="button">Option 3</button>
								</div>
							</p>
							<p>
								<div class="button-group">
									<button class="button button-royal button-rounded button-raised" type="button">Option 1</button>
									<button class="button button-royal button-rounded button-raised" type="button">Option 2</button>
									<button class="button button-royal button-rounded button-raised" type="button">Option 3</button>
								</div>
							</p>
						</div>
					</li>
					<li>
						<label>通栏按钮</label>
						<div class="butotn-show-stacked">
							<p>
								<a class="button button-block button-rounded button-large">Default</a>
							</p>
							<p>
								<a class="button button-block button-rounded button-primary button-large">Primary</a>
							</p>
							<p>
								<a class="button button-block button-rounded button-action button-large">Action</a>
							</p>
							<p>
								<a class="button button-block button-rounded button-highlight button-large">High Light</a>
							</p>
							<p>
								<a class="button button-block button-rounded button-caution button-large">Caution</a>
							</p>
							<p>
								<a class="button button-block button-rounded button-royal button-large">Royal</a>
							</p>
						</div>
					</li>
					<li>
						<label>环形按钮</label>
						<div class="button-show-wrapper">
							<p>
								<span class="button-wrap">
									<button class="button button-circle"></button>
								</span>
								<span class="button-wrap">
									<button class="button button-circle button-raised button-primary"></button>
								</span>
								<span class="button-wrap">
									<button class="button button-pill ">Go</button>
								</span>
								<span class="button-wrap">
									<button class="button button-pill button-raised button-primary">Go</button>
								</span>
							</p>
						</div>
					</li>
					<li>
						<label>表单按钮</label>
						<div class="button-show-form">
							<p>
								<input value="input submit" class="button button-pill button-primary" type="submit">
								<button class="button button-pill button-primary">button</button>

								<!-- DISABLED BUTTONS -->
								<input disabled="" value="input button disabled" class="button button-pill button-primary" type="button">
								<button disabled="" class="button  button-pill button-primary">button disabled</button>
								<button disabled="" class="button button-pill button-flat-primary">button flat disabled</button>
								<a href="javascript:void(0);" class="button disabled button-pill button-primary">link button</a>
							</p>
						</div>
					</li>
					<li>
						<label>按钮文字</label>
						<div class="button-show-tyographic">
							<p>
								大写:
								<a href="javascript:void(0);" class="button button-uppercase button-primary">uppercase</a>
							</p>
							<p>
								小写:
								<a href="javascript:void(0);" class="button button-lowercase button-primary ">lowercase</a>
							</p>
							<p>
								首字母大写:
								<a href="javascript:void(0);" class="button button-capitalize button-primary">capitalize</a>
							</p>
							<p>
								打印字体:
								<a href="javascript:void(0);" class="button button-small-caps button-primary">small caps</a>
							</p>
						</div>
					</li>
				</ul>
			</li>
		</ol>
	</section>

	<hr />

	<section id="Icon">
		<h2>Icon(无图)</h2>
		<ol>
			<li>
				<div class="font-show-list">
					<ul>
						<li>
							<span class="glyphicon glyphicon-asterisk"></span>
							<span class="glyphicon-class">glyphicon glyphicon-asterisk</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-plus"></span>
							<span class="glyphicon-class">glyphicon glyphicon-plus</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-euro"></span>
							<span class="glyphicon-class">glyphicon glyphicon-euro</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-minus"></span>
							<span class="glyphicon-class">glyphicon glyphicon-minus</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-cloud"></span>
							<span class="glyphicon-class">glyphicon glyphicon-cloud</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-envelope"></span>
							<span class="glyphicon-class">glyphicon glyphicon-envelope</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-pencil"></span>
							<span class="glyphicon-class">glyphicon glyphicon-pencil</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-glass"></span>
							<span class="glyphicon-class">glyphicon glyphicon-glass</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-music"></span>
							<span class="glyphicon-class">glyphicon glyphicon-music</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-search"></span>
							<span class="glyphicon-class">glyphicon glyphicon-search</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-heart"></span>
							<span class="glyphicon-class">glyphicon glyphicon-heart</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon-class">glyphicon glyphicon-star</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-star-empty"></span>
							<span class="glyphicon-class">glyphicon glyphicon-star-empty</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-user"></span>
							<span class="glyphicon-class">glyphicon glyphicon-user</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-film"></span>
							<span class="glyphicon-class">glyphicon glyphicon-film</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-th-large"></span>
							<span class="glyphicon-class">glyphicon glyphicon-th-large</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-th"></span>
							<span class="glyphicon-class">glyphicon glyphicon-th</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-th-list"></span>
							<span class="glyphicon-class">glyphicon glyphicon-th-list</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-ok"></span>
							<span class="glyphicon-class">glyphicon glyphicon-ok</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-remove"></span>
							<span class="glyphicon-class">glyphicon glyphicon-remove</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-zoom-in"></span>
							<span class="glyphicon-class">glyphicon glyphicon-zoom-in</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-zoom-out"></span>
							<span class="glyphicon-class">glyphicon glyphicon-zoom-out</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-off"></span>
							<span class="glyphicon-class">glyphicon glyphicon-off</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-signal"></span>
							<span class="glyphicon-class">glyphicon glyphicon-signal</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-cog"></span>
							<span class="glyphicon-class">glyphicon glyphicon-cog</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-trash"></span>
							<span class="glyphicon-class">glyphicon glyphicon-trash</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-home"></span>
							<span class="glyphicon-class">glyphicon glyphicon-home</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-file"></span>
							<span class="glyphicon-class">glyphicon glyphicon-file</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-time"></span>
							<span class="glyphicon-class">glyphicon glyphicon-time</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-road"></span>
							<span class="glyphicon-class">glyphicon glyphicon-road</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-download-alt"></span>
							<span class="glyphicon-class">glyphicon glyphicon-download-alt</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-download"></span>
							<span class="glyphicon-class">glyphicon glyphicon-download</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-upload"></span>
							<span class="glyphicon-class">glyphicon glyphicon-upload</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-inbox"></span>
							<span class="glyphicon-class">glyphicon glyphicon-inbox</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-play-circle"></span>
							<span class="glyphicon-class">glyphicon glyphicon-play-circle</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-repeat"></span>
							<span class="glyphicon-class">glyphicon glyphicon-repeat</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-refresh"></span>
							<span class="glyphicon-class">glyphicon glyphicon-refresh</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-list-alt"></span>
							<span class="glyphicon-class">glyphicon glyphicon-list-alt</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-lock"></span>
							<span class="glyphicon-class">glyphicon glyphicon-lock</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-flag"></span>
							<span class="glyphicon-class">glyphicon glyphicon-flag</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-headphones"></span>
							<span class="glyphicon-class">glyphicon glyphicon-headphones</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-volume-off"></span>
							<span class="glyphicon-class">glyphicon glyphicon-volume-off</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-volume-down"></span>
							<span class="glyphicon-class">glyphicon glyphicon-volume-down</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-volume-up"></span>
							<span class="glyphicon-class">glyphicon glyphicon-volume-up</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-qrcode"></span>
							<span class="glyphicon-class">glyphicon glyphicon-qrcode</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-barcode"></span>
							<span class="glyphicon-class">glyphicon glyphicon-barcode</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-tag"></span>
							<span class="glyphicon-class">glyphicon glyphicon-tag</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-tags"></span>
							<span class="glyphicon-class">glyphicon glyphicon-tags</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-book"></span>
							<span class="glyphicon-class">glyphicon glyphicon-book</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-bookmark"></span>
							<span class="glyphicon-class">glyphicon glyphicon-bookmark</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-print"></span>
							<span class="glyphicon-class">glyphicon glyphicon-print</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-camera"></span>
							<span class="glyphicon-class">glyphicon glyphicon-camera</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-font"></span>
							<span class="glyphicon-class">glyphicon glyphicon-font</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-bold"></span>
							<span class="glyphicon-class">glyphicon glyphicon-bold</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-italic"></span>
							<span class="glyphicon-class">glyphicon glyphicon-italic</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-text-height"></span>
							<span class="glyphicon-class">glyphicon glyphicon-text-height</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-text-width"></span>
							<span class="glyphicon-class">glyphicon glyphicon-text-width</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-align-left"></span>
							<span class="glyphicon-class">glyphicon glyphicon-align-left</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-align-center"></span>
							<span class="glyphicon-class">glyphicon glyphicon-align-center</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-align-right"></span>
							<span class="glyphicon-class">glyphicon glyphicon-align-right</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-align-justify"></span>
							<span class="glyphicon-class">glyphicon glyphicon-align-justify</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-list"></span>
							<span class="glyphicon-class">glyphicon glyphicon-list</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-indent-left"></span>
							<span class="glyphicon-class">glyphicon glyphicon-indent-left</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-indent-right"></span>
							<span class="glyphicon-class">glyphicon glyphicon-indent-right</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-facetime-video"></span>
							<span class="glyphicon-class">glyphicon glyphicon-facetime-video</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-picture"></span>
							<span class="glyphicon-class">glyphicon glyphicon-picture</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-map-marker"></span>
							<span class="glyphicon-class">glyphicon glyphicon-map-marker</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-adjust"></span>
							<span class="glyphicon-class">glyphicon glyphicon-adjust</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-tint"></span>
							<span class="glyphicon-class">glyphicon glyphicon-tint</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-edit"></span>
							<span class="glyphicon-class">glyphicon glyphicon-edit</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-share"></span>
							<span class="glyphicon-class">glyphicon glyphicon-share</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-check"></span>
							<span class="glyphicon-class">glyphicon glyphicon-check</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-move"></span>
							<span class="glyphicon-class">glyphicon glyphicon-move</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-step-backward"></span>
							<span class="glyphicon-class">glyphicon glyphicon-step-backward</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-fast-backward"></span>
							<span class="glyphicon-class">glyphicon glyphicon-fast-backward</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-backward"></span>
							<span class="glyphicon-class">glyphicon glyphicon-backward</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-play"></span>
							<span class="glyphicon-class">glyphicon glyphicon-play</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-pause"></span>
							<span class="glyphicon-class">glyphicon glyphicon-pause</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-stop"></span>
							<span class="glyphicon-class">glyphicon glyphicon-stop</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-forward"></span>
							<span class="glyphicon-class">glyphicon glyphicon-forward</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-fast-forward"></span>
							<span class="glyphicon-class">glyphicon glyphicon-fast-forward</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-step-forward"></span>
							<span class="glyphicon-class">glyphicon glyphicon-step-forward</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-eject"></span>
							<span class="glyphicon-class">glyphicon glyphicon-eject</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="glyphicon-class">glyphicon glyphicon-chevron-left</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="glyphicon-class">glyphicon glyphicon-chevron-right</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-plus-sign"></span>
							<span class="glyphicon-class">glyphicon glyphicon-plus-sign</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-minus-sign"></span>
							<span class="glyphicon-class">glyphicon glyphicon-minus-sign</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-remove-sign"></span>
							<span class="glyphicon-class">glyphicon glyphicon-remove-sign</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-ok-sign"></span>
							<span class="glyphicon-class">glyphicon glyphicon-ok-sign</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-question-sign"></span>
							<span class="glyphicon-class">glyphicon glyphicon-question-sign</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-info-sign"></span>
							<span class="glyphicon-class">glyphicon glyphicon-info-sign</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-screenshot"></span>
							<span class="glyphicon-class">glyphicon glyphicon-screenshot</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-remove-circle"></span>
							<span class="glyphicon-class">glyphicon glyphicon-remove-circle</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-ok-circle"></span>
							<span class="glyphicon-class">glyphicon glyphicon-ok-circle</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-ban-circle"></span>
							<span class="glyphicon-class">glyphicon glyphicon-ban-circle</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-arrow-left"></span>
							<span class="glyphicon-class">glyphicon glyphicon-arrow-left</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-arrow-right"></span>
							<span class="glyphicon-class">glyphicon glyphicon-arrow-right</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-arrow-up"></span>
							<span class="glyphicon-class">glyphicon glyphicon-arrow-up</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-arrow-down"></span>
							<span class="glyphicon-class">glyphicon glyphicon-arrow-down</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-share-alt"></span>
							<span class="glyphicon-class">glyphicon glyphicon-share-alt</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-resize-full"></span>
							<span class="glyphicon-class">glyphicon glyphicon-resize-full</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-resize-small"></span>
							<span class="glyphicon-class">glyphicon glyphicon-resize-small</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-exclamation-sign"></span>
							<span class="glyphicon-class">glyphicon glyphicon-exclamation-sign</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-gift"></span>
							<span class="glyphicon-class">glyphicon glyphicon-gift</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-leaf"></span>
							<span class="glyphicon-class">glyphicon glyphicon-leaf</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-fire"></span>
							<span class="glyphicon-class">glyphicon glyphicon-fire</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-eye-open"></span>
							<span class="glyphicon-class">glyphicon glyphicon-eye-open</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-eye-close"></span>
							<span class="glyphicon-class">glyphicon glyphicon-eye-close</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-warning-sign"></span>
							<span class="glyphicon-class">glyphicon glyphicon-warning-sign</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-plane"></span>
							<span class="glyphicon-class">glyphicon glyphicon-plane</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-calendar"></span>
							<span class="glyphicon-class">glyphicon glyphicon-calendar</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-random"></span>
							<span class="glyphicon-class">glyphicon glyphicon-random</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-comment"></span>
							<span class="glyphicon-class">glyphicon glyphicon-comment</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-magnet"></span>
							<span class="glyphicon-class">glyphicon glyphicon-magnet</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-chevron-up"></span>
							<span class="glyphicon-class">glyphicon glyphicon-chevron-up</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-chevron-down"></span>
							<span class="glyphicon-class">glyphicon glyphicon-chevron-down</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-retweet"></span>
							<span class="glyphicon-class">glyphicon glyphicon-retweet</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-shopping-cart"></span>
							<span class="glyphicon-class">glyphicon glyphicon-shopping-cart</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-folder-close"></span>
							<span class="glyphicon-class">glyphicon glyphicon-folder-close</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-folder-open"></span>
							<span class="glyphicon-class">glyphicon glyphicon-folder-open</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-resize-vertical"></span>
							<span class="glyphicon-class">glyphicon glyphicon-resize-vertical</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-resize-horizontal"></span>
							<span class="glyphicon-class">glyphicon glyphicon-resize-horizontal</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-hdd"></span>
							<span class="glyphicon-class">glyphicon glyphicon-hdd</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-bullhorn"></span>
							<span class="glyphicon-class">glyphicon glyphicon-bullhorn</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-bell"></span>
							<span class="glyphicon-class">glyphicon glyphicon-bell</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-certificate"></span>
							<span class="glyphicon-class">glyphicon glyphicon-certificate</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-thumbs-up"></span>
							<span class="glyphicon-class">glyphicon glyphicon-thumbs-up</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-thumbs-down"></span>
							<span class="glyphicon-class">glyphicon glyphicon-thumbs-down</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-hand-right"></span>
							<span class="glyphicon-class">glyphicon glyphicon-hand-right</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-hand-left"></span>
							<span class="glyphicon-class">glyphicon glyphicon-hand-left</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-hand-up"></span>
							<span class="glyphicon-class">glyphicon glyphicon-hand-up</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-hand-down"></span>
							<span class="glyphicon-class">glyphicon glyphicon-hand-down</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-circle-arrow-right"></span>
							<span class="glyphicon-class">glyphicon glyphicon-circle-arrow-right</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-circle-arrow-left"></span>
							<span class="glyphicon-class">glyphicon glyphicon-circle-arrow-left</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-circle-arrow-up"></span>
							<span class="glyphicon-class">glyphicon glyphicon-circle-arrow-up</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-circle-arrow-down"></span>
							<span class="glyphicon-class">glyphicon glyphicon-circle-arrow-down</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-globe"></span>
							<span class="glyphicon-class">glyphicon glyphicon-globe</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-wrench"></span>
							<span class="glyphicon-class">glyphicon glyphicon-wrench</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-tasks"></span>
							<span class="glyphicon-class">glyphicon glyphicon-tasks</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-filter"></span>
							<span class="glyphicon-class">glyphicon glyphicon-filter</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-briefcase"></span>
							<span class="glyphicon-class">glyphicon glyphicon-briefcase</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-fullscreen"></span>
							<span class="glyphicon-class">glyphicon glyphicon-fullscreen</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-dashboard"></span>
							<span class="glyphicon-class">glyphicon glyphicon-dashboard</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-paperclip"></span>
							<span class="glyphicon-class">glyphicon glyphicon-paperclip</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-heart-empty"></span>
							<span class="glyphicon-class">glyphicon glyphicon-heart-empty</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-link"></span>
							<span class="glyphicon-class">glyphicon glyphicon-link</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-phone"></span>
							<span class="glyphicon-class">glyphicon glyphicon-phone</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-pushpin"></span>
							<span class="glyphicon-class">glyphicon glyphicon-pushpin</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-usd"></span>
							<span class="glyphicon-class">glyphicon glyphicon-usd</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-gbp"></span>
							<span class="glyphicon-class">glyphicon glyphicon-gbp</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-sort"></span>
							<span class="glyphicon-class">glyphicon glyphicon-sort</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-sort-by-alphabet"></span>
							<span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-sort-by-alphabet-alt"></span>
							<span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet-alt</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-sort-by-order"></span>
							<span class="glyphicon-class">glyphicon glyphicon-sort-by-order</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-sort-by-order-alt"></span>
							<span class="glyphicon-class">glyphicon glyphicon-sort-by-order-alt</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-sort-by-attributes"></span>
							<span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-sort-by-attributes-alt"></span>
							<span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes-alt</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-unchecked"></span>
							<span class="glyphicon-class">glyphicon glyphicon-unchecked</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-expand"></span>
							<span class="glyphicon-class">glyphicon glyphicon-expand</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-collapse-down"></span>
							<span class="glyphicon-class">glyphicon glyphicon-collapse-down</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-collapse-up"></span>
							<span class="glyphicon-class">glyphicon glyphicon-collapse-up</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-log-in"></span>
							<span class="glyphicon-class">glyphicon glyphicon-log-in</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-flash"></span>
							<span class="glyphicon-class">glyphicon glyphicon-flash</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-log-out"></span>
							<span class="glyphicon-class">glyphicon glyphicon-log-out</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-new-window"></span>
							<span class="glyphicon-class">glyphicon glyphicon-new-window</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-record"></span>
							<span class="glyphicon-class">glyphicon glyphicon-record</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-save"></span>
							<span class="glyphicon-class">glyphicon glyphicon-save</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-open"></span>
							<span class="glyphicon-class">glyphicon glyphicon-open</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-saved"></span>
							<span class="glyphicon-class">glyphicon glyphicon-saved</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-import"></span>
							<span class="glyphicon-class">glyphicon glyphicon-import</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-export"></span>
							<span class="glyphicon-class">glyphicon glyphicon-export</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-send"></span>
							<span class="glyphicon-class">glyphicon glyphicon-send</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-floppy-disk"></span>
							<span class="glyphicon-class">glyphicon glyphicon-floppy-disk</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-floppy-saved"></span>
							<span class="glyphicon-class">glyphicon glyphicon-floppy-saved</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-floppy-remove"></span>
							<span class="glyphicon-class">glyphicon glyphicon-floppy-remove</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-floppy-save"></span>
							<span class="glyphicon-class">glyphicon glyphicon-floppy-save</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-floppy-open"></span>
							<span class="glyphicon-class">glyphicon glyphicon-floppy-open</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-credit-card"></span>
							<span class="glyphicon-class">glyphicon glyphicon-credit-card</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-transfer"></span>
							<span class="glyphicon-class">glyphicon glyphicon-transfer</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-cutlery"></span>
							<span class="glyphicon-class">glyphicon glyphicon-cutlery</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-header"></span>
							<span class="glyphicon-class">glyphicon glyphicon-header</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-compressed"></span>
							<span class="glyphicon-class">glyphicon glyphicon-compressed</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-earphone"></span>
							<span class="glyphicon-class">glyphicon glyphicon-earphone</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-phone-alt"></span>
							<span class="glyphicon-class">glyphicon glyphicon-phone-alt</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-tower"></span>
							<span class="glyphicon-class">glyphicon glyphicon-tower</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-stats"></span>
							<span class="glyphicon-class">glyphicon glyphicon-stats</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-sd-video"></span>
							<span class="glyphicon-class">glyphicon glyphicon-sd-video</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-hd-video"></span>
							<span class="glyphicon-class">glyphicon glyphicon-hd-video</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-subtitles"></span>
							<span class="glyphicon-class">glyphicon glyphicon-subtitles</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-sound-stereo"></span>
							<span class="glyphicon-class">glyphicon glyphicon-sound-stereo</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-sound-dolby"></span>
							<span class="glyphicon-class">glyphicon glyphicon-sound-dolby</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-sound-5-1"></span>
							<span class="glyphicon-class">glyphicon glyphicon-sound-5-1</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-sound-6-1"></span>
							<span class="glyphicon-class">glyphicon glyphicon-sound-6-1</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-sound-7-1"></span>
							<span class="glyphicon-class">glyphicon glyphicon-sound-7-1</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-copyright-mark"></span>
							<span class="glyphicon-class">glyphicon glyphicon-copyright-mark</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-registration-mark"></span>
							<span class="glyphicon-class">glyphicon glyphicon-registration-mark</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-cloud-download"></span>
							<span class="glyphicon-class">glyphicon glyphicon-cloud-download</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-cloud-upload"></span>
							<span class="glyphicon-class">glyphicon glyphicon-cloud-upload</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-tree-conifer"></span>
							<span class="glyphicon-class">glyphicon glyphicon-tree-conifer</span>
						</li>
						<li>
							<span class="glyphicon glyphicon-tree-deciduous"></span>
							<span class="glyphicon-class">glyphicon glyphicon-tree-deciduous</span>
						</li>
					</ul>
   				</div>
			</li>
		</ol>
	</section>

	<hr />

	<section id="Color">
		<h2>计算机色</h2>
		<ol>
			<li>
				<label>赤</label>
				<div>
					<ul>
						<li>
							<span>#800000</span>
							<em style="background: maroon;"></em>
						</li>
						<li>
							<span>#8b0000</span>
							<em style="background: darkred;"></em>
						</li>
						<li>
							<span>#a52a2a</span>
							<em style="background: brown;"></em>
						</li>
						<li>
							<span>#b22222</span>
							<em style="background: firebrick;"></em>
						</li>
						<li>
							<span>#dc143c</span>
							<em style="background: crimson;"></em>
						</li>
						<li>
							<span>#ff0000</span>
							<em style="background: red;"></em>
						</li>
					</ul>
				</div>
			</li>
			<li>
				<label>粉</label>
				<div>
					<ul>
						<li>
							<span>#c71585</span>
							<em style="background: mediumvioletred;"></em>
						</li>
						<li>
							<span>#d87093</span>
							<em style="background: palevioletred;"></em>
						</li>
						<li>
							<span>#ff1493</span>
							<em style="background: deeppink;"></em>
						</li>
						<li>
							<span>#ff00ff</span>
							<em style="background: fuchsia;"></em>
						</li>
						<li>
							<span>#ff00ff</span>
							<em style="background: magenta;"></em>
						</li>
						<li>
							<span>#ff69b4</span>
							<em style="background: hotpink;"></em>
						</li>
						<li>
							<span>#ffc0cb</span>
							<em style="background: pink;"></em>
						</li>
						<li>
							<span>#ffb6c1</span>
							<em style="background: lightpink;"></em>
						</li>
						<li>
							<span>#ffe4e1</span>
							<em style="background: mistyrose;"></em>
						</li>
						<li>
							<span>#fff0f5</span>
							<em style="background: lavenderblush;"></em>
						</li>
					</ul>
				</div>
			</li>
			<li>
				<label>紫</label>
				<div>
					<ul>
						<li>
							<span>#4b0082</span>
							<em style="background: indigo;"></em>
						</li>
						<li>
							<span>#800080</span>
							<em style="background: purple;"></em>
						</li>
						<li>
							<span>#8b008b</span>
							<em style="background: darkmagenta;"></em>
						</li>
						<li>
							<span>#9932cc</span>
							<em style="background: darkorchid;"></em>
						</li>
						<li>
							<span>#8a2be2</span>
							<em style="background: blueviolet;"></em>
						</li>
						<li>
							<span>#9400d3</span>
							<em style="background: darkviolet;"></em>
						</li>
						<li>
							<span>#6a5acd</span>
							<em style="background: slateblue;"></em>
						</li>
						<li>
							<span>#9370db</span>
							<em style="background: mediumpurple;"></em>
						</li>
						<li>
							<span>#7b68ee</span>
							<em style="background: mediumslateblue;"></em>
						</li>
						<li>
							<span>#ba55d3</span>
							<em style="background: mediumorchid;"></em>
						</li>
						<li>
							<span>#ee82ee</span>
							<em style="background: violet;"></em>
						</li>
						<li>
							<span>#dda0dd</span>
							<em style="background: plum;"></em>
						</li>
						<li>
							<span>#d8bfd8</span>
							<em style="background: thistle;"></em>
						</li>
						<li>
							<span>#e6e6fa</span>
							<em style="background: lavender;"></em>
						</li>
					</ul>
				</div>
			</li>
			<li>
				<label>橙</label>
				<div>
					<ul>
						<li>
							<span>#8b4513</span>
							<em style="background: saddlebrown;"></em>
						</li>
						<li>
							<span>#a0522d</span>
							<em style="background: sienna;"></em>
						</li>
						<li>
							<span>#d2691e</span>
							<em style="background: chocolate;"></em>
						</li>
						<li>
							<span>#cd5c5c</span>
							<em style="background: indianred;"></em>
						</li>
						<li>
							<span>#bc8f8f</span>
							<em style="background: rosybrown;"></em>
						</li>
						<li>
							<span>#f08080</span>
							<em style="background: lightcorol;"></em>
						</li>
						<li>
							<span>#fa8072</span>
							<em style="background: salmon;"></em>
						</li>
						<li>
							<span>#ffa07a</span>
							<em style="background: lightsalmon;"></em>
						</li>
						<li>
							<span>#ff4500</span>
							<em style="background: orangered;"></em>
						</li>
						<li>
							<span>#ff6347</span>
							<em style="background: tomato;"></em>
						</li>
						<li>
							<span>#ff7f50</span>
							<em style="background: coral;"></em>
						</li>
						<li>
							<span>#ff8c00</span>
							<em style="background: darkorange;"></em>
						</li>
						<li>
							<span>#f4a460</span>
							<em style="background: sandybrown;"></em>
						</li>
						<li>
							<span>#cd853f</span>
							<em style="background: peru;"></em>
						</li>
						<li>
							<span>#d2b48c</span>
							<em style="background: tan;"></em>
						</li>
						<li>
							<span>#deb887</span>
							<em style="background: burlywood;"></em>
						</li>
						<li>
							<span>#f5deb3</span>
							<em style="background: wheat;"></em>
						</li>
						<li>
							<span>#ffe4b5</span>
							<em style="background: moccasin;"></em>
						</li>
						<li>
							<span>#ffdead</span>
							<em style="background: navajowhite;"></em>
						</li>
						<li>
							<span>#ffdab9</span>
							<em style="background: peachpuff;"></em>
						</li>
						<li>
							<span>#ffe4c4</span>
							<em style="background: bisque;"></em>
						</li>
						<li>
							<span>#faebd7</span>
							<em style="background: antiquewhite;"></em>
						</li>
						<li>
							<span>#ffefd5</span>
							<em style="background: papayawhip;"></em>
						</li>
						<li>
							<span>#fff8dc</span>
							<em style="background: cornsilk;"></em>
						</li>
						<li>
							<span>#fdf5e6</span>
							<em style="background: oldlace;"></em>
						</li>
						<li>
							<span>#faf0e6</span>
							<em style="background: linen;"></em>
						</li>
						<li>
							<span>#fff5ee</span>
							<em style="background: seashell;"></em>
						</li>
						<li>
							<span>#fffafa</span>
							<em style="background: snow;"></em>
						</li>
						<li>
							<span>#fffaf0</span>
							<em style="background: floralwhite;"></em>
						</li>
						<li>
							<span>#fffff0</span>
							<em style="background: ivory;"></em>
						</li>
						<li>
							<span>#f5fffa</span>
							<em style="background: mintcream;"></em>
						</li>
					</ul>
				</div>
			</li>
			<li>
				<label>金</label>
				<div>
					<ul>
						<li>
							<span>#b8860b</span>
							<em style="background: darkgoldenrod;"></em>
						</li>
						<li>
							<span>#daa520</span>
							<em style="background: goldenrod;"></em>
						</li>
						<li>
							<span>#ffd700</span>
							<em style="background: gold;"></em>
						</li>
						<li>
							<span>#ffff00</span>
							<em style="background: yellow;"></em>
						</li>
						<li>
							<span>#bdb76b</span>
							<em style="background: darkkhaki;"></em>
						</li>
						<li>
							<span>#f0e68c</span>
							<em style="background: khaki;"></em>
						</li>
						<li>
							<span>#eee8aa</span>
							<em style="background: palegoldenrod;"></em>
						</li>
						<li>
							<span>#f5f5dc</span>
							<em style="background: beige;"></em>
						</li>
						<li>
							<span>#fffacd</span>
							<em style="background: lemonchiffon;"></em>
						</li>
						<li>
							<span>#fafad2</span>
							<em style="background: lightgoldenrodyellow;"></em>
						</li>
						<li>
							<span>#ffffe0</span>
							<em style="background: lightyellow;"></em>
						</li>
					</ul>
				</div>
			</li>
			<li>
				<label>绿</label>
				<div>
					<ul>
						<li>
							<span>#2f4f4f</span>
							<em style="background: darkslategray;"></em>
						</li>
						<li>
							<span>#556b2f</span>
							<em style="background: darkolivegreen;"></em>
						</li>
						<li>
							<span>#808000</span>
							<em style="background: olive;"></em>
						</li>
						<li>
							<span>#006400</span>
							<em style="background: darkgreen;"></em>
						</li>
						<li>
							<span>#228b22</span>
							<em style="background: forestgreen;"></em>
						</li>
						<li>
							<span>#2e8b57</span>
							<em style="background: seagreen;"></em>
						</li>
						<li>
							<span>#008080</span>
							<em style="background: green;"></em>
						</li>
						<li>
							<span>#008080</span>
							<em style="background: teal;"></em>
						</li>
						<li>
							<span>#20b2aa</span>
							<em style="background: lightseagreen;"></em>
						</li>
						<li>
							<span>#66cdaa</span>
							<em style="background: mediumaquamarine;"></em>
						</li>
						<li>
							<span>#3cb371</span>
							<em style="background: mediumseagreen;"></em>
						</li>
						<li>
							<span>#8fbc8f</span>
							<em style="background: darkseagreen;"></em>
						</li>
						<li>
							<span>#9acd32</span>
							<em style="background: yellowgreen;"></em>
						</li>
						<li>
							<span>#32cd32</span>
							<em style="background: limegreen;"></em>
						</li>
						<li>
							<span>#00ff00</span>
							<em style="background: lime;"></em>
						</li>
						<li>
							<span>#7fff00</span>
							<em style="background: chartreuse;"></em>
						</li>
						<li>
							<span>#7cfc00</span>
							<em style="background: lawngreen;"></em>
						</li>
						<li>
							<span>#adff2f</span>
							<em style="background: greenyellow;"></em>
						</li>
						<li>
							<span>#00fa9a</span>
							<em style="background: mediumspringgreen;"></em>
						</li>
						<li>
							<span>#00ff7f</span>
							<em style="background: springgreen;"></em>
						</li>
						<li>
							<span>#90ee90</span>
							<em style="background: lightgreen;"></em>
						</li>
						<li>
							<span>#98f898</span>
							<em style="background: palegreen;"></em>
						</li>
						<li>
							<span>#7fffd4</span>
							<em style="background: aquamarine;"></em>
						</li>
						<li>
							<span>#f0fff0</span>
							<em style="background: honeydew;"></em>
						</li>
					</ul>
				</div>
			</li>
			<li>
				<label>蓝</label>
				<div>
					<ul>
						<li>
							<span>#191970</span>
							<em style="background: midnightblue;"></em>
						</li>
						<li>
							<span>#000080</span>
							<em style="background: navy;"></em>
						</li>
						<li>
							<span>#00008b</span>
							<em style="background: darkblue;"></em>
						</li>
						<li>
							<span>#483d8b</span>
							<em style="background: darkslateblue;"></em>
						</li>
						<li>
							<span>#0000cd</span>
							<em style="background: mediumblue;"></em>
						</li>
						<li>
							<span>#4169e1</span>
							<em style="background: royalblue;"></em>
						</li>
						<li>
							<span>#1e90ff</span>
							<em style="background: dodgerblue;"></em>
						</li>
						<li>
							<span>#6495ed</span>
							<em style="background: cornflowerblue;"></em>
						</li>
						<li>
							<span>#00bfff</span>
							<em style="background: deepskyblue;"></em>
						</li>
						<li>
							<span>#87cefa</span>
							<em style="background: lightskyblue;"></em>
						</li>
						<li>
							<span>#b0c4de</span>
							<em style="background: lightsteelblue;"></em>
						</li>
						<li>
							<span>#add8e6</span>
							<em style="background: lightblue;"></em>
						</li>
						<li>
							<span>#4682b4</span>
							<em style="background: steelblue;"></em>
						</li>
						<li>
							<span>#008b8b</span>
							<em style="background: darkcyan;"></em>
						</li>
						<li>
							<span>#5f9ea0</span>
							<em style="background: cadetblue;"></em>
						</li>
						<li>
							<span>#00ced1</span>
							<em style="background: darkturquoise;"></em>
						</li>
						<li>
							<span>#48d1cc</span>
							<em style="background: mediumturquoise;"></em>
						</li>
						<li>
							<span>#40e0d0</span>
							<em style="background: turquoise;"></em>
						</li>
						<li>
							<span>#87cecb</span>
							<em style="background: skyblue;"></em>
						</li>
						<li>
							<span>#b0e0e6</span>
							<em style="background: powderblue;"></em>
						</li>
						<li>
							<span>#afeeee</span>
							<em style="background: paleturquoise;"></em>
						</li>
						<li>
							<span>#e0ffff</span>
							<em style="background: lightcyan;"></em>
						</li>
						<li>
							<span>#f0ffff</span>
							<em style="background: azure;"></em>
						</li>
						<li>
							<span>#f0f8ff</span>
							<em style="background: aliceblue;"></em>
						</li>
						<li>
							<span>#00ffff</span>
							<em style="background: aqua;"></em>
						</li>
						<li>
							<span>#00ffff</span>
							<em style="background: cyan;"></em>
						</li>
					</ul>
				</div>
			</li>
			<li>
				<label>黑/白/灰</label>
				<div>
					<ul>
						<li>
							<span>#000000</span>
							<em style="background: black;"></em>
						</li>
						<li>
							<span>#696969</span>
							<em style="background: dimgray;"></em>
						</li>
						<li>
							<span>#808080</span>
							<em style="background: gray;"></em>
						</li>
						<li>
							<span>#708090</span>
							<em style="background: slategray;"></em>
						</li>
						<li>
							<span>#778899</span>
							<em style="background: lightslategray;"></em>
						</li>
						<li>
							<span>#a9a9a9</span>
							<em style="background: darkgray;"></em>
						</li>
						<li>
							<span>#c0c0c0</span>
							<em style="background: silver;"></em>
						</li>
						<li>
							<span>#d3d3d3</span>
							<em style="background: lightgray;"></em>
						</li>
						<li>
							<span>#dcdcdc</span>
							<em style="background: gainsboro;"></em>
						</li>
						<li>
							<span>#f5f5f5</span>
							<em style="background: whitesmoke;"></em>
						</li>
						<li>
							<span>#f8f8ff</span>
							<em style="background: ghostwhite;"></em>
						</li>
						<li>
							<span>#ffffff</span>
							<em style="background: white;"></em>
						</li>
					</ul>
				</div>
			</li>
		</ol>
	</section>

	<section id="Extend">
		<h2>jQuery Extend</h2>
		<ol>
			<li>
				<label>弹出层</label>
				<div>
					<ul>
						<li>
							<span>调用方式: </span>
<pre>
/* javascript调用 */
$.popup({
	title: 'The Popup Title',
	content: 'The Popup Content',
	size: {
		x: 640,
		y: 480
	},
	mode: 'default',
	speed: 600,
	mask: true,
	submit: function(){
		// Do Something After Click Submit Button
	},
	cancel: true,
	callback: function(){
		// Do Something Replace Submit Function
	}
});

/* render模式 */
$.renderPopup( $('[data-popup]') );
ps: 使用渲染模式, 只需在按钮上添加'data-'前缀的参数, 即等同于js传参 ^.^
</pre>
						</li>
						<li>
							<span>案例: </span>
							<p>
								<button class="button button-primary button-rounded button-small" data-popup="default">默认弹出层</button>
							</p>
							<p>
								<button class="button button-primary button-rounded button-small" data-popup="fade">渐入式加载</button>
							</p>
							<p>
								<button class="button button-primary button-rounded button-small" data-popup="default" data-mode="top">自上而下</button>
							</p>
							<p>
								<button class="button button-primary button-rounded button-small" data-popup="default" data-mode="bottom">自下而上</button>
							</p>
							<p>
								<button class="button button-primary button-rounded button-small" data-popup="default" data-mode="left">由左向右</button>
							</p>
							<p>
								<button class="button button-primary button-rounded button-small" data-popup="default" data-mode="right">由右向左</button>
							</p>
							<p>
								<button class="button button-primary button-rounded button-small" data-popup="fade" data-speed="2000">速度 ( 2000 )</button>
							</p>
							<p>
								<button class="button button-primary button-rounded button-small" data-popup="fade" data-size="{w:400, h:300}">尺寸 ( 400 * 300 )</button>
							</p>
							<p>
								<button class="button button-primary button-rounded button-small" data-popup="fade" data-title="The Popup Title" data-content="The Popup Content">标题与内容</button>
							</p>
						</li>
					</ul>
				</div>
			</li>
		</ol>
	</section>

</div>

<script type="text/javascript">
var
manifest = [
	{ src: root + '/library/swiper/idangerous.swiper.min.js' }
]
// , loader = false
;
</script>