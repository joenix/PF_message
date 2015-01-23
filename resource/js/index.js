;(function(_, $, undefined){

// Nav
(function( menus ){
	var index = 0;

	switch( $.path[0] ){
		case 'msg':
			index = 1;
			break;
	}

	menus.eq( index ).addClass('active');
})
( $.dom.body.find('header nav a') );

// Aside Tab Menu
$.tab({
	menus: '[data-menu]'
});

// UMeditor
(function( options, callback ){
	callback( UE.getEditor('editor', options) );
})
(
	{
		autoHeight: true
	},
	function( editor ){
		// Callback Run In Ready
		$.editor = editor, editor.ready(function(){

			$.dom.window
				.on('resize', function(){
					editor.setHeight( $.dom.window.height() - 208 );
				})
				.trigger('resize');
		});
	}
);

// Button
(function( form, button ){
	button.on('click', function(){

		$.esc = function( str ){
			return str.replace(/\'/g, '"');
		}

		var
			id = $.dataget( button ).id,
			text = form.find('input[name=title]').val().split('/'),
			description = $.editor.getContent(),
			options = 'mode=' + ( id ? 'edit' : 'insert' ) + '&' + ( id ? ('id=' + id + '&') : '' ) + 'title=' + $.esc(text[0]) + '&author=' + $.esc(text[1] || '') + '&description=' + $.esc(description);

		if( !text[0].length || !content.length ){
			alert('请先输入标题和内容');
			return;
		}

		$.ajax({
			type: 'POST',
			url: '/msg',
			dataType: 'json',
			data: options,
			/*
			data: {
				mode: 'INSERT',
				type: 'all'
			},
			*/
			success: function( result ){

				alert('保存成功！');
				return;

				try{
					_.reload();
				}
				catch(e){
					_.location.href = _.location.href;
				}

			}
		});
	});
})
( $('.form'), $('.form > button') );

})(window, jQuery);
