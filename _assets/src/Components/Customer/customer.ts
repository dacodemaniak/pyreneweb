import * as $ from 'jquery';
//import 'jqueryui';
//import './../../Modules/jquery-ext';
//import './../../Modules/jquery-ui-ext';

import { DataService } from './../../Services/dataservice';
import { TemplateLoader } from './../../Services/templateloader';
import { UrlParser } from './../../Services/urlparser';
import { Signin } from './signin';
import { Signup } from './signup';

import * as Constants from './../../services/constants';
import * as moment from 'moment';

export class Customer {
    
    private _id: number;
    //private _lastConnexion: moment;
    private _name: string;
    private _forname: string;
    private _phone: string;
    private _civility: string;
    private _active: boolean;

    public constructor(){
        
        let dataservice = new DataService();
        
        let user: any = dataservice.getUser();
        
        console.log('Instanciation de la classe Customer');
        
        if(!user === null){
            // Un utilisateur a déjà été identifié
            this._hydrate(user.id).then((datas) => {
                this._id = user.id;
                this._name = datas.nom;
                this._forname = datas.prenom;
                this._phone = datas.telephone;
                this._civility = datas.civilite;
                this._active = datas.statut === 1 ? true : false;
                console.log('Bienvenue ' + this._name);
            });
        } else {
            // Pas encore d'utilisateur identifié
            let loader = new TemplateLoader();
            
            let customer = $('[customer]');
            loader.load('Customer', 'signin').then((template) => {
                //console.log('Template : ' + template.html() + ' => ' + content.html());
                template.appendTo(customer);
            });
            
            let basket = $('[basket]');
            loader.load('Customer', 'basket').then((template) => {
                //console.log('Template : ' + template.html() + ' => ' + content.html());
                template.appendTo(basket);
            });            
        }
        
        // Définit les gestionnaires d'événements
        this._setListeners();
        
    }
    
    private _setListeners(): void {
        let parser = new UrlParser();
        
        console.log('Route courante : ' + parser.getRoute());
        if(parser.getRoute() === 'inscription'){
            let signin: Signin = new Signin();
            let signup: Signup = new Signup();
        }
    }
    
    private _hydrate(id: number): Promise<any>{
        return new Promise((resolve) => {
            let _url = Constants._PY_API_ROOT_ + Constants._PY_API_USER_ + '/' + id;
            
            $.ajax({
                url: _url,
                method: 'get',
                dataType: 'json',
                success: (datas: any) => {
                    let returnedDatas: any = datas.data;
                    if(datas.statut === 0){
                        // Erreur lors de la récupération du compte
                        console.log('Something went wrong... Sorry !');
                    } else {
                        // Okay, on alimente l'objet courant
                        resolve(returnedDatas);
                    }
                },
                error: (xhr: any, error: any) => {
                    console.log('Erreur lors de l\'appel de l\'API !');
                }
            })
        });
    }
}