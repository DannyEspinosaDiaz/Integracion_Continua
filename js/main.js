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
			if(respuesta.type = 'Administrador'){
				location.href = 'admin/admin.php';

			}else if(respuesta.type = 'Usuario'){
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
	let edit = false;
	console.log('Jquery is Working');

	//Buscar Usuarios
	fetchUsers();
	$('#search-result').hide();
	$('#search').keyup(function(e) {
		if ($('#search').val()) {
			let search = $('#search').val();
			$.ajax({
				url: '../../php/admin/user-search.php',
				type: 'POST',
				data: {search},
				success: function(response) {
					let searchs = JSON.parse(response);
					let template = '';
					searchs.forEach(searchs => {
						template += 
						`<tr>
							<th>${searchs.nº}</th>
							<td>${searchs.id}</td>
							<td>${searchs.fullname}</td>
							<td>${searchs.typebike}</td>
							<td>${searchs.serialbike}</td>
							<td><buttton class="btn btn-danger">Eliminar</button></td>
						</tr>
						`
					});
					$('#container').html(template);
					$('#search-result').show();
				}
			});
		}
	});

	//Crear usuarios
	$('#user-form').submit(function(e){
		const postData = {
			fullname: $('#fullname').val(),
			typeid: $('#typeid').val(),
			id: $('#id').val(),
			typebike: $('#typebike').val(),
			serialbike: $('#serialbike').val(),
			numberphone: $('#numberphone').val(),
			pass: $('#pass').val(),
			typeuser: $('#typeuser').val()
		};
		let url = edit === false ? 'user-add.php' : 'user-edit.php';
		console.log(url);

		$.post(url, postData, function (response){
			alert(response);
			fetchUsers();
			$('#user-form').trigger('reset');
		});
		e.preventDefault();
	});

	//Listar usuarios
	function fetchUsers() {
		$.ajax({
			url: '../../php/admin/user-list.php',
			type: 'GET',
			success: function (response) {
				let users = JSON.parse(response);
				let template = '';
					users.forEach(users => {
						template += 
						`<tr  userId="${users.id}">
							<th>${users.nº}</th>
							<td>${users.id}</td>
							<!--<td>
								<a href="#" class="user-item">${users.fullname}</a>
							</td>-->
							<td>${users.fullname}</td>
							<td>${users.typebike}</td>
							<td>${users.serialbike}</td>
							<td><buttton class="user-delete btn btn-danger">Eliminar</button></td>
							<td><a class="user-item btn btn-warning" data-toggle="modal" data-target="#creatUser" >${users.fullname}Editar</a></td>
						</tr>
						`
					});
					
	
					$('#container').html(template);
					$('#search-result').show();
			}
		});
	}

	$(document).on('click', '.user-delete', function () {
		 if (confirm('¿Estas seguro de eliminar el usuario?')) {
			let element = $(this)[0].parentElement.parentElement;
			let id = $(element).attr('userId');
			$.post('user-delete.php', {id}, function (response) {
			   fetchUsers();
			   console.log(response);
			})
		 }
	});
	$(document).on('click', '.user-item', function(){
		let element = $(this)[0].parentElement.parentElement;
		let id = $(element).attr('userId');
		$.post('user-single.php', {id}, function (response) {
			const user = JSON.parse(response);
			$('#fullname').val(user.fullname);
			$('#typeid').val(user.typeid);
			$('#id').val(user.id);
			$('#typebike').val(user.typebike);
			$('#serialbike').val(user.serialbike);
			$('#numberphone').val(user.numberphone);
			$('#pass').val(user.pass);
			$('#typebike').val(user.typeuser);
			let edit = true;
		})
	});
});
