/**
 * @name app.js Gestion des pages de l'application
 * @author web-Projet.com (contact@web-projet.com)
 * @package _assets/javascript/app/1.0
 * @version 1.0
 */

(function( $ ) {
	// Comptabilise le nombre de lignes
	var lines = $('.box-items ul li').length;

	// Récupère les lignes dans un tableau
	var activities = $('.box-items ul li');

	// Initialise le compteur de parcours
	var counter = 0;

	var sliding = setInterval(
		animateSlider,
		5000
	);


	function animateSlider(){

		var activeLine = $(activities[counter]);
		var activeContent = $('#' + activeLine.data('rel'));

		var effect = 'drop';
		var options = {};


		activeContent.hide(effect, options, 500);
		activeLine.removeClass('active').addClass('unactive');

		// Incrémente le compteur
		counter++;
		if(counter > (lines - 1)){
			counter = 0;
		}
		var nextLine = $(activities[counter]);
		var nextContent = $('#' + nextLine.data('rel'));

		nextLine.removeClass('unactive').addClass('active');

		nextContent.show(effect, options, 200);

	}
})( jQuery );

/**
 * Au chargement, définition du menu Customer
 */
$(document).ready(function(){
	_checkStorage().then((data) => {
		console.log('Données : ' + JSON.stringify(data));
		if(data){
			
		} else {
			_makeIdentification();
		}
	});
});


function homePage(){
	 document.location.href="/";
}

$('ul#menu li').on('click',function(){
	// Masquer les sous-menus ouverts
	$('.sous-menu').hide();
	
	// Ouvre le sous-menu concerné par la ligne sélectionnée
	var _ssMenu=$(this).attr('data-children');
	var _openMenu=$('#'+_ssMenu);
	_openMenu.show();
});

$('.addToBasket').on('click',function(){
	var _basket=$('.quantite');
	var initVal= parseInt($(_basket).attr('data-content'));
	var numVal= initVal + 1;
	console.log('Valeur incrémentée : ' + numVal);
	_basket.html('('+ numVal +')');
	_basket.attr('data-content', numVal);
});

/**
* Fonctions spécifiques privées
* _checkStorage() Vérifie le localStorage pour identification du Client
**/
function _checkStorage(){
	return new Promise((resolve) => {
		let storage = localStorage.getItem('customer');
		
		if(storage){
			let datas = JSON.parse(storage);
			$.get(
				'http://api.pyrene.wrk/Customer/' + datas.id,
				function(results){
					let callDatas = results.data;
					
					if(!callDatas.hasOwnProperty('error')){
						// L'utilisateur a été identifié
						if(callDatas.statut == 1){
							resolve(callDatas);
						} else {
							resolve(false);
						}
					} else {
						resolve(false);
					}
				}
			).failed(function() { resolve(false) });
		} else {
			resolve(false);
		}
	});
}

function _makeIdentification(){
	let customerMenu = $('ul li#customer-menu');
	let customerBasket = $('ul li#customer-basket');
	
	return false;
	
	// Lien d'identification proprement dit
	let link = $('<a>');
	link.attr('href', '/inscription')
		.attr('title', 'Identification ou Inscription');
	link.html('<i class="fa fa-user-times"></i> Identifiez-vous');
	link.appendTo(customerMenu);
	
	// Panier courant
	let basket = $('<a>');
	basket.attr('href', '/')
		.attr('title', 'Votre panier est vide');
	basket.html('<i class="fa fa-shopping-basket"></i> Mon panier (<span class="basket-quantity">0</span>)');
	basket.appendTo(customerBasket);	
}

/**
 * @todo Récupérer les options de menu à partir de l'API pour plus de facilité
 * @param datas
 * @returns
 */
function _makeUserMenu(){
	let options = new Map();
	options.set('Customers/Orders', {title: "Mes commandes"});
	options.set('Customers/Details', {title: "Mes informations"});
	options.set('Customers/Avoirs', {title: "Mes avoirs"});
	
	let customerMenu = $('ul li#customer-menu');
	customerMenu.html(''); // Vide le menu
	
	let btnGroup = $('<div>');
	btnGroup.addClass('btn-group');
	
	let userButton = $('<button>');
	userButton.attr('type', 'button')
		.attr('aria-haspopup', 'true')
		.attr('data-toggle', 'dropdown')
		.attr('aria-expanded', 'false')
		.addClass('btn')
		.addClass('btn-default')
		.addClass('dropdown-toggle')
		.html('<i class="fa fa_user"></i> ' + datas.prenom + ' ' + datas.nom + ' <span class="caret"></span>');
	// Ajoute le bouton au groupe
	userButton.appendTo(btnGroup);
	
	// Construit la liste des options
	let optionsList = $('<ul>');
	optionsList.addClass('dropdown-menu');
	
	// Alimente les options du menu Mon Compte
	for(let [route, object] of options){
		let newLine = $('<li>');
		let link = $('<a>');
		link.attr('href', '/' + route + '/')
			.html(object.title);
		link.appendTo(newLine);
		newLine.appendTo(optionsList);
	}
	
	// Ajoute un séparateur
	let separator = $('<li>');
	separator.attr('role', 'separator').addClass('divider');
	separator.appendTo(optionsList);
	
	// Option de déconnexion
	let disconnect = $('<li>');
	let link = $('<a>');
	link.attr('href', '#')
		.addClass('disconnect')
		.html('Déconnexion');
	link.appendTo(disconnect);
	disconnect.appendTo(optionsList);
	
	// Ajoute la liste au groupe
	optionsList.appendTo(btnGroup);
	
	// Ajoute le groupe à la ligne courante
	btnGroup.appendTo(customerMenu);
	
	return;
}

/**
function _doToast(duration, message, type){
	
	let toast = $('<div>');
	toast
		.addClass('alert')
		.addClass('alert-' + type)
		.addClass('toast')
		.addClass('animated')
		.addClass('lightSpeedIn')
		.attr('role', 'alert')
		.html('<strong>' + message + '</strong>');
	toast.appendTo($('body'));
	console.log('toast ajouté');
	setTimeout(function() {
		toast.removeClass('lightSpeedIn')
			.addClass('lightSpeedOut');
		setTimeout(function() { toast.remove() }, 1500);
			
		},
		duration * 1000
	);
}
**/