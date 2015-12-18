

function voiti()
{ 
	var inputlogin = $('#inputlogin').val();
	var inputpassword = $('#inputpassword').val();
	
	$.post('/index.php/ajax/username_taken',
		{ 'username':inputlogin, 'password':inputpassword},

		function(result) {  
			if (result==1){
				window.location.href = "/index.php/admin";


			}else {
				var tmp = $('#bad_username').attr('id');
				if (tmp==undefined){$('.results').after('<div id="bad_username" style="color:red;">' +
					'<p>(Не правильный логиин или пароль!)</p></div>');

			} 
		}
		
		
	});
}
