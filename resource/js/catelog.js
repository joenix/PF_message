;(function(_, $, undefined){

// Nav
(function( menus ){
	var index = 0;

	switch( $.path[0] ){
		case 'catelog':
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

// Get Catlog Datebase
$.ajax({
	type: 'GET',
	url: '/catelog',
	data: 'mode=SELECT&type=all',
	/*
	data: {
		mode: 'SELECT',
		type: 'all'
	},
	*/
	success: function( page ){
		$('.catlog-all').html( page );

		var grid = $('.cat-grid');

		$.each( grid.find('td[data-audit]'), function(x, o){

			!function( data ){

				var audit = Number(data.audit), id = Number(data.id);

				$(o).append('<button type="button" data-id="' + id + '" data-audit="' + audit + '" class="button button-raised button-raised button-tiny ' + (audit ? '' : 'button-primary') + '">' + (audit ? '下' : '上') + '架</button>');

			}( $.dataget( o ) );
		});

		grid.delegate('button[data-audit]', $.evt.click, function(){
			var it = $(this),
				data = $.dataget( it );

			$.ajax({
				type: 'post',
				data: 'audit=' + [1, 0][data.audit] + '&id=' + data.id,
				url: '/catelog',
				success: function( result ){
					Number(data.audit) ?
						( it.addClass('button-primary').text('上架').attr('data-audit', 0) ):
						( it.removeClass('button-primary').text('下架').attr('data-audit', 1) );
				}
			});
		});
	}
});


})(window, jQuery);
