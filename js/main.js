jQuery(document).on('submit','#formlg', function(event){
	event.preventDefault();

	jQuery.ajax({
		url: 'validation.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function(){
			$('#btnlg').val('Validando...');
		}
	})
	.done(function(respuesta) {
		console.log(respuesta);
		if(!respuesta.error){
			if(respuesta.type = '1'){
				location.href = 'admin/admin.php';

			}else if(respuesta.type = '2'){
				location.href = 'user/user.php';
			}

		}else{
			$('.error').slideDown('slow');
			setTimeout(function(){
				$('.error').slideUp('slow');
			},4000);
			$('#btnlg').val('Iniciar sesión');
		}
	})
	.fail(function(resp) {
		console.log(resp.responseText);
	})
	.always(function() {
		console.log("complete");
	});	
});
$(function(){
	console.log('Jquery is Working');
	//Buscar
	$('#search').keyup(function(e) {
		let search = $('#search').val();
		$.ajax({
			url: '../../php/admin/user-search.php',
			type: 'POST',
			data: {search},
			success: function(response) {
				console.log(response);
			}

		})

	})
});