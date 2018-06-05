/**
* @name Signin Service d'identification d'un client
* @author IDea Factory (dev-team@ideafactory.fr) - Mars 2018
* @package Component/Customer
* @version 0.1.0
*/
import * as $ from 'jquery';
import * as Constants from './../../services/constants';

import { Toast } from './../../Modules/Toast/toast';

export class Signin {
    public constructor(){
        console.log('Contrôle du formulaire de connexion');
        
        let _jQueryFormData = $('#login input');
        
        _jQueryFormData.on(
                'keyup',
                (event: any): void => this._inputListener()
         );
        
        let _loginForm = $('#login');
        _loginForm.on(
                'submit',
                (event: any): void => this._authentication(event)
        );
    }
    
    private _inputListener(): void {
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
    }
    
    private _authentication(event: any): void {
        event.preventDefault();
        
        let _url = Constants._PY_API_ROOT_ + Constants._PY_API_USER_;
        
        $.ajax({
            url: _url,
            data: {
                'identifiant': $('#identifiant').val(),
                'password': $('#passField').val()
            },
            dataType: 'json',
            success: function(results){
                $('#identifiant').val('');
                $('#passField').val('');
                
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
                    // Un utilisateur a été identifié, on change le menu Customer
                    console.log('Afficher le menu Utilisateur et le menu Footer');
                    $('.my-account-menu').removeClass('not-active');
                }
            },
            error: function(xhr, error){
                console.log('Erreur lors de l\'appel de l\'API');
                $('#loginBtn').prop('disabled', 'disabled');
            }
        })
        
    }
}