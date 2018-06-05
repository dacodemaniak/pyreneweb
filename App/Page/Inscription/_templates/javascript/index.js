/**
 * Gestion du formulaire d'identification

$('#login input').on('keyup', function() {
	let validForm = true;
	
	// Contrôle des champs obligatoires
	$('#login input.required').each( function() {
		if ($(this).val() === ''){
			validForm = false;
		}
	});
	
	if (validForm) {
		$('#loginBtn').removeAttr('disabled');
	} else {
		$('#loginBtn').prop('disabled', 'disabled');
	}
});
 */

/**
 * Gestionnaire du formulaire d'inscription

$('#signin input').on('keyup', function() {
	let validForm = true;
	
	let confirmMail = true;
	let confirmPassword = true;
	
	// Contrôle des champs obligatoires
	$('#signin input.required').each( function() {
		if ($(this).val() === ''){
			validForm = false;
		}
	});
	
	
	// Traitement des champs à confirmer
	if($(this).attr('id') === 'confirm-email' || $(this).attr('id') === 'confirm-passphrase'){
		// Saisie dans les champs de confirmation
		let initialFieldId = $(this).attr('id').substring(8);
		let initialField = $('#' + initialFieldId);
		
		
		if(initialField.val() !== ''){
			if($(this).val() === initialField.val()){
				$(this).removeClass('nomatch').addClass('match');
				if($(this).attr('id') === 'confirm-email'){
					confirmMail = true;
				} else {
					confirmPassword = true;
				}
			} else {
				$(this).removeClass('match').addClass('nomatch');
				if($(this).attr('id') === 'confirm-email'){
					confirmMail = false;
				} else {
					confirmPassword = false;
				}
			}
		}
	}
	
	if (validForm && confirmMail && confirmPassword) {
		$('#signinBtn').removeAttr('disabled');
	} else {
		$('#signinBtn').prop('disabled', 'disabled');
	}
});
 */

/**
$('#signin, #login').on('submit', function(event) {
	let errors = [];
	let validForm = true;
	
	let currentForm = '#' + $(this).attr('id');
	
	event.preventDefault();
	
	// Vérification des champs obligatoires
	$(currentForm + ' input.required').each( function() {
		if ($(this).val() === ''){
			validForm = false;
		}
	});
	
	if(validForm){
		if($(this).attr('id') == 'login'){
			// On appelle l'API d'identification
			$.ajax({
				url: 'http://api.pyrene.wrk/Customer',
				method: 'get',
				data: {
					'identifiant': $('#identifiant').val(),
					'password': $('#passField').val()
				},
				dataType: 'json',
				success: function(results){
					let callDatas = results.data;
					if(callDatas.hasOwnProperty('error')){
						// Affiche un toast avec le message d'erreur
						console.log('Affiche un toast');
						$('#identifiant').val('');
						$('#passField').val('');
						
						_doToast(2, callDatas.error, 'danger');
					} else {
						// Un utilisateur a été identifié, on change le menu Customer
						_makeUserMenu();
						
						$('#identifiant').val('');
						$('#passField').val('');
					}
				},
				error: function(xhr, error){
					
				}
			})
		} else {
			// On appelle l'API d'inscription (PUT => pour ajouter des données)
		}
	} else {
		console.log('Formulaire invalide à la soumission');
	}
	
	return false;
});
**/