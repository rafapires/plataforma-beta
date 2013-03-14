// JavaScript Document

$(function(){
		   
	$("#search-form").submit(function(){

		//$('.error-group').text('enviando mensagem...');
		//alert($("#group").val());

		$.post("php/process_find_socio.php", {queryString: $('#sfriend').val()}, function(data){
			
			if(data.length > 1) {

			//	$('#results_friends').fadeIn();
				$('#results_friends').hide().html(data).fadeIn();
				//window.setTimeout('_clean()', 1500);
				
				
				$(".button.add").click(function(){

					//alert($('#topgroup').val() + '/' + $(this).siblings("input[type=hidden]").val());
					var member = $(this).siblings("input[type=hidden]").val();
					var group = $("#group").val();
					var subdiv = $(this).parent();
					///alert(group + ' /  '+ member);

					$.post('php/process_add_socio.php', {'socio' : member, 'grupo' : group},

					function(data){
						
						//alert(data);
						
						if(data == 2){
							subdiv.html("<div class='confirm_send'>Convite ao grupo enviado</span>");
						}else if(data == 0){
							subdiv.html("<div class='already_send'>Este convite já foi enviado</span>");	
						}else if(data == 1){
							subdiv.html("<div class='part_send'>Ele já faz parte do grupo</span>");	
						}else{
							subdiv.html("<div class='already_send'>Erro. Tente novamente</span>");		
						}

						}, "json");

				});
				
				//$('#aluno_result').removeClass('load');
				
			} else {
				
				//$('#suggestions').fadeOut();
				
			}
		});
				
		return false;
		
	});
		
});


function _clean(){
	
	//$('.new').removeClass('new', 1500);
	$('#results_friends').fadeOut();
}

//window.setTimeout('_clean()', 1500);


$(function(){
	
	$('#form-invites').submit(function(){
		
		$('.send_button').css("display", "none");
		$('.load_send').css("display", "inline");
		
		$.post('php/process_invite.php', $('#form-invites').serialize(),

		function(data){
			
			alert(data.status);
			$('.send_button').css("display", "inline");
			$('.load_send').css("display", "none");
			
			if(data.status == 1){
				
				$('#smailinfo').text('Usuário já cadastrado');
				
			}else{
				
				$('#smailinfo').text('Convidado!');
				
			}

		}, "json");
		
		return false;
		
	});

	
});



$(function(){
		   
				
		$(".button.add").click(function(){

					//alert($('#topgroup').val() + '/' + $(this).siblings("input[type=hidden]").val());
					var member = $(this).siblings("input[type=hidden]").val();
					var group = $("#group").val();
					var subdiv = $(this).parent();
					//alert(group + ' /  '+ member);
					//subdiv.html("<div class='confirm_send'>Convite ao grupo enviado</span>");
					$.post('php/process_add_socio.php', {'socio' : member, 'grupo' : group},

					function(data){
						
						//alert(data);
						
						if(data == 2){
							
							subdiv.html("<div class='confirm_send'>Convite ao grupo enviado</span>");
							
						}else if(data == 0){
							
							subdiv.html("<div class='already_send'>Este convite já foi enviado</span>");
								
						}else if(data == 1){
							
							subdiv.html("<div class='part_send'>Ele já faz parte do grupo</span>");	
							
						}else{
							
							subdiv.html("<div class='already_send'>Erro. Tente novamente</span>");	
								
						}

						}, "json");
		
		return false;
		
		});
		
});


function validMail(entrada){
	
	
	var formatted = $("#smail").val().replace(/[^a-zA-Z 0-9 @_.-]+/g,'');
	$("#smail").val(formatted);
	
	var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;

	var split = entrada.split("@");
	
	if($('#smail').val() == ''){
		
		$('#smailinfo').text('Digite um e-mail');		
		
	}else if(entrada.indexOf("@") >= 0 && split[1].indexOf(".") >= 0 && filter.test(entrada)){
		
		$('#smailinfo').text('E-mail Válido');
		
	}else if(entrada.indexOf("@") >= 0 && split[1].indexOf(".") >= 0 && filter.test(entrada) == false){
		
		$('#smailinfo').text('E-mail invalido');
		
	}
	
}





