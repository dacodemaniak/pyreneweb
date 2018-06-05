/**
* @name TemplateLoader Service de chargement de vues jQuery
* @author IDea Factory (dev-team@ideafactory.fr) - Mars 2018
* @package Services
* @version 0.1.0
*/

import * as $ from 'jquery';
//import './../../Modules/jquery-ext';

export class TemplateLoader {
    
    public constructor(){}
    
    public load(from: string, template: string): Promise<any>{
        return new Promise((resolve) => {
            
            let viewSrc = './_assets/src/Components/' + from + '/' + template + '.html';
            
            //console.log('Charge la vue : ' + url);
            
            $.ajax({
                url: viewSrc,
                method: 'get',
                success: (template) => {
                    resolve($(template));
                },
                error: (xhr, errorText) => {
                    console.log(errorText);
                    resolve(false);
                }
            })
        });
    }
}

