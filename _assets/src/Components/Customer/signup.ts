/**
* @name SignUp Services pour la gestion du formulaire de création de compte
* @author IDea Factory (dev-team@ideafactory.fr) - Mars 2018
* @package Components\Customer
* @version 0.1.0
*/

import * as $ from 'jquery';
import * as Constants from './../../services/constants';

import { Toast } from './../../Modules/Toast/toast';

export class Signup {

    public constructor(){
        console.log('Contrôle du formulaire d\'inscription');
        
        let _jQueryFormData = $('#signin input');
        
        _jQueryFormData.on(
                'keyup',
                (event: any): void => this._inputListener(event)
         );
        
        let _form = $('#signin');
        _form.on(
                'submit',
                (event: any): void => this._createAccount(event)
        );
    }
    
    private _inputListener(event: any): void {
        let theField: JQuery = $(event.target);
    
        console.log('Check du champ : ' + theField.attr('id'));
        
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
        if (theField.attr('id') === 'confirm-email' || 
            theField.attr('id') === 'confirm-passphrase' ||
            theField.attr('id') === 'email' ||
            theField.attr('id') === 'passphrase'){
            
            // Saisie dans les champs de confirmation
            let initialFieldId: string = '';
            let initialField: JQuery = null;
            let confirmField: JQuery = null;
        
            if(theField.attr('id').substring(0, 7) !== 'confirm'){
                initialFieldId = 'confirm-' + theField.attr('id');
                initialField = $('#' + initialFieldId);
                confirmField = initialField;
            } else {
                initialFieldId = theField.attr('id').substring(8);
                initialField = $('#' + initialFieldId);
                confirmField = theField;
            }
            
            if(initialField.val() !== ''){
                if(theField.val() === initialField.val()){
                    confirmField.removeClass('nomatch').addClass('match');
                    if(confirmField.attr('id') === 'confirm-email'){
                        confirmMail = true;
                    } else {
                        confirmPassword = true;
                    }
                } else {
                    confirmField.removeClass('match').addClass('nomatch');
                    if(confirmField.attr('id') === 'confirm-email'){
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
    }
    
    private _createAccount(event: any): void{
        event.preventDefault();
        
        // Définit l'URI de l'API
        let _url = Constants._PY_API_ROOT_ + Constants._PY_API_USER_;
        
        // Construit l'objet JSON à transmettre à l'API
        let form = $('#signin input');
        
        let datas: any = {};
        let content: any = {};
        
        form.each( function() {
            if ($(this).data('property') !== null){
                let property: string = $(this).data('property');
                content[property] = $(this).val();
            }
            
            if ($(this).data('mapping') !== null){
                let property: string = $(this).data('mapping');
                datas[property] = $(this).val();
            }
        });
        
        datas.content = content;
        
        $.ajax({
            url: _url,
            method: 'put',
            data: datas,
            dataType: 'json',
            success: function(results){
                // Effacer l'ensemble des champs
                $(':input','#signin')
                    .not(':button, :submit, :reset, :hidden')
                    .val('');
                
                $('input[name^=confirm-]').removeClass('match').addClass('no-match');
                
                let callDatas = results.data;
                if(callDatas.hasOwnProperty('error')){
                    // Affiche un toast avec le message d'erreur
                    let _toast = new Toast({
                        duration: 2,
                        subAlertClass: 'alert-danger',
                        mainAnimatedClass: 'animated',
                        animatedClass: 'lightSpeedIn',
                        animatedOutClass: 'lightSpeedOut',
                        content: callDatas.error
                    });
                    // Désactive le bouton de validation
                    $('#loginBtn').prop('disabled', 'disabled');
                } else {
                    // Un utilisateur a été créé, affiche un toast pour validation
                    console.log('Afficher le menu Utilisateur et le menu Footer');
                    let _toast = new Toast({
                        duration: 2.5,
                        subAlertClass: 'alert-success',
                        mainAnimatedClass: 'animated',
                        animatedClass: 'lightSpeedIn',
                        animatedOutClass: 'lightSpeedOut',
                        content: callDatas.content
                    });
                }
            },
            error: function(xhr, error){
                console.log('Erreur lors de l\'appel de l\'API');
                $('#signinBtn').prop('disabled', 'disabled');
            }
        })        
    }
    
}