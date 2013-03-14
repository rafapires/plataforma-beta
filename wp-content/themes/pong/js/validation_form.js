// JavaScript Document
$(document).ready(function(){
	//global vars
	var form = $("#cad_form");
	var name = $("#cad_nm");
	var nameInfo = $("#nmInfo");
	var sname = $("#cad_sn");
	var snameInfo = $("#snInfo");
	
	var pass1 = $('#cad_pw');
	var pass2 = $('#cad_pass');
	
	var dia = $("#cad_dy");
	var mes = $("#cad_ms");
	var ano = $("#cad_yr");
	
	var dataInfo = $("#cad_dtInfo");
	
	var genre = $("#cad_sx");
	var genreInfo = $("#cad_sxInfo");

	var pass1 = $('#cad_pw');
	var pass2 = $('#cad_pass');
	
	var email = $("#email");
	var emailInfo = $("#emailInfo");


	//On blur
	name.blur(validateName);
	email.blur(validateEmail);

	
	name.keyup(validateName);
	
	var bpos = "";
	var perc = 0;
	var minperc = 0;
	
	$('#cad_pw').css( {backgroundPosition: "0 0"});

	$('#cad_pw').keyup(function(){
		$('#result').html(passwordStrength($('#cad_pw').val(),$('#cad_nn').val())) ; 
		perc = passwordStrengthPercent($('#cad_pw').val(),$('#cad_nn').val());
		
		bpos=" $('#colorbar').css( {backgroundPosition: \"0px -" ;
		bpos = bpos + perc + "px";
		bpos = bpos + "\" } );";
		bpos=bpos +" $('#colorbar').css( {width: \"" ;
		bpos = bpos + (perc * 2) + "px";
		bpos = bpos + "\" } );";
		eval(bpos);
	    	$('#percent').html(" " + perc  + "% ");
	});

	//On Submitting
	form.submit(function(){
		
		if(validateName() && validateGenre() && validateBirth() &&  validateEmail() && validatePass()){					   

			return true;
		
		}else {
			
			$("#loaderup").html("<div class='checks'>Existem erros em alguns campos. Por favor verifique.</div>");
			window.setTimeout("$('#loaderup').fadeOut()", 2000);
			return false;
		
		}
		
	});
	
	$('#cad_es').change(function(){

			if( $(this).val() ) {
				//alert($(this).val());
			$('#cad_ci').hide();
			$('.carregando').show();

			$.getJSON('php/cidades_ajax.php', {'cod_estados' : $(this).val()}, getdata); 	
				//	$('.carregando').hide();

			} ///else {
			///	$('#at_ci').html('<option value="">-- Escolha um estado --</option>');
		//}
		});
		
	$('#loader').hide();
	
	
	function validateName(){
		//if it's NOT valid
		if(name.val().length < 2){
			name.addClass("error");
			nameInfo.text("Minimo de 2 letras");
			nameInfo.addClass("error");
			return false;
		}
		else if(name.val() == ""){
			name.addClass("error");
			nameInfo.text("Qual seu nome?");
			nameInfo.addClass("error");
			return false;	
		}
		//if it's valid
		else{
			name.removeClass("error");
			nameInfo.removeClass("error");
			nameInfo.text("");
			name.addClass("dones");
			return true;
		}
	}
	
	
	function validateGenre(){
		if(genre.val() == -1){
			genreInfo.text("Selecione uma opcao");
			return false;
		}else{
			genreInfo.text("");	
			return true;
		}
		
	}
	
	function validateBirth(){
		if(dia.val() == -1 || mes.val() == -1 || ano.val() == -1){
			dataInfo.text("Insira sua data de nascimento");
			return false;
		}else{
			dataInfo.text("");	
			return true;
		}
		
		
	}
	
	//validation functions
	function validateEmail(){
		//testing regular expression
		var a = $("#cad_ml").val();
		var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
		//if it's valid email
		if(filter.test(a)){

			return true;
		}
		//if it's NOT valid
		else{
			$('#putsome_mail').css("display", "inline");
			$('#putsome_mail').text('E-mail invalido');
			$('#okay_mail').css("display", "none");
			$('#cad_ml').addClass('error');	
			$('#cad_ml').removeClass('dones');
			return false;
		}
	}


	
	function validatePass(){
		
		if(pass1.val() != pass2 .val() || pass1.val() == '' || pass2.val() == ''){

		$('#pass_check').css("display", "inline");
		$('#pass_valid').css("display", "none");
		$('#cad_pass').addClass('error');	
		$('#cad_pass').removeClass('dones');
		return false;
		
		}else{
			return true;
		}
	}
	

});

function nickVerify(entrada)
{
	
	var formatted = $("#cad_nk").val().replace(/[^a-zA-Z 0-9 _-]+/g,'');
	
	var cleaner = $.trim(formatted);
	
	$("#cad_nk").val(cleaner);
	
	var n = $("#cad_nn").val();
	
	var filter = /[^a-zA-Z 0-9 _-]+/g;

	if($('#cad_nk').val() == '' || entrada.length < 3){
		
			$('#avaibility_nick').css("display", "none");
			$('#error_nick').css("display", "none");
			$('#putsome_nick').css("display", "inline");
			$('#okay_nick').css("display", "none");
			$('#cad_nn').addClass('error');	
			
	}else if(filter.test(n)){

			$('#avaibility_nick').css("display", "none");
			$('#error_nick').css("display", "none");
			$('#putsome_nick').css("display", "inline");
			$('#okay_nick').css("display", "none");
			$('#cad_nn').addClass('error');

	}else{

		$('#avaibility_nick').css("display", "inline");
		$('#putsome_nick').css("display", "none");
		$('#cad_nn').removeClass('error');	

		$.getJSON('php/checkNick.php', {'nick' : escape(entrada)}, 

		function getdata(data) 
		{ 

			if(data == 1){
			
				$('#avaibility_nick').css("display", "none");
				$('#error_nick').css("display", "inline");
				$('#putsome_nick').css("display", "none");
				$('#okay_nick').css("display", "none");
				$('#cad_nn').addClass('error');	
				$('#cad_nn').removeClass('dones');
			
			}else if(data == 0){
			
				$('#avaibility_nick').css("display", "none");
				$('#error_nick').css("display", "none");
				$('#putsome_nick').css("display", "none");
				$('#okay_nick').css("display", "inline");
				$('#cad_nn').addClass('dones');
				$('#cad_nn').removeClass('error');
			
			}
	
		}); 

	}

}

function mailVerify(entrada){
	
	
	var formatted = $("#cad_ml").val().replace(/[^a-zA-Z 0-9 @_.-]+/g,'');
	$("#cad_ml").val(formatted);
	
	var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;

	var split = entrada.split("@");
	
	if($('#cad_ml').val() == ''){
		
		$('#avaibility_mail').css("display", "none");
		$('#error_mail').css("display", "none");
		$('#putsome_mail').css("display", "inline");
		$('#putsome_mail').text('Digite seu e-mail');
		$('#okay_mail').css("display", "none");
		$('#cad_ml').addClass('error');
		
		
	}else if(entrada.indexOf("@") >= 0 && split[1].indexOf(".") >= 0 && filter.test(entrada)){
		
		$('#avaibility_mail').css("display", "inline");
		$('#putsome_mail').css("display", "none");
		$('#cad_ml').removeClass('error');
		
		$.getJSON('php/checkMail.php', {'user_mail' : escape(entrada)}, 

			function getdata(data) 
			{ 

				if(data == 1){

					$('#avaibility_mail').css("display", "none");
					$('#error_mail').css("display", "inline");
					$('#putsome_mail').css("display", "none");
					$('#okay_mail').css("display", "none");
					$('#cad_ml').addClass('error');	
					$('#cad_ml').removeClass('dones');

				}else if(data == 0){

					$('#avaibility_mail').css("display", "none");
					$('#error_mail').css("display", "none");
					$('#putsome_mail').css("display", "none");
					$('#okay_mail').css("display", "inline");
					$('#cad_ml').addClass('dones');
					$('#cad_ml').removeClass('error');

				}

			});
	
	}else if(entrada.indexOf("@") >= 0 && split[1].indexOf(".") >= 0 && filter.test(entrada) == false){
		$('#putsome_mail').css("display", "inline");
		$('#putsome_mail').text('E-mail invalido');
		$('#okay_mail').css("display", "none");
		$('#cad_ml').addClass('error');	
		$('#cad_ml').removeClass('dones');
	}
	
}



function checkPass(confirmPass){
	
	var pass = $('#cad_pw').val();
	var confirm = $('#cad_pass').val();
	
	//alert(pass.length);
	
	if(pass.length < 6 || confirm.length < 6){
		
		$('#pass_check').css("display", "inline");
		$('#pass_valid').css("display", "none");
		$('#pass_check').html(unescape('M&iacutenimo 6 caracteres'));
		$('#cad_pass').addClass('error');	
		$('#cad_pass').removeClass('dones');
		
	}else {
		
		if(pass != confirm){
		
		$('#pass_check').css("display", "inline");
		$('#pass_valid').css("display", "none");
		$('#pass_check').html(unescape('Valores diferentes (confirme a senha acima)'));
		$('#cad_pass').addClass('error');	
		$('#cad_pass').removeClass('dones');
	
		}else{
		
		$('#pass_check').css("display", "none");
		$('#pass_valid').css("display", "inline");
		$('#cad_pass').addClass('dones');	
		$('#cad_pass').removeClass('error');
		//$('#cad_terms').show().find("tr").slideDown();
		$('tr:#cad_terms').fadeIn('slow');
		//$('#cad_terms').css("display", "table-row");
		}
		
	}
	
}


function getdata(data) 
{ 
	//alert(data.length);
	var options = '<option value="">--Escolha sua Cidade--</option>';

	 for(var i = 0 ; i < data.length; i++){

		options += '<option value="' + data[i].cidade + '">' + data[i].name + '</option>'
	 }
	$('.carregando').hide();
	jQuery('#cad_ci').html(options).show();
}



jQuery.noConflict();
