/**
* @name DataService Services pour la gestion des clés du localStorage
* @author IDeaFactory (dev-team@ideafactory.fr)
* @package Services
* @version 0.1.0
*/
export class DataService {
    
     /*
     *  Objet du localStorage contenant un éventuel utilisateur
     */  
    private _user: any = {};


    public constructor(){
        this._setUser();
    }
    
    /**
     * Récupère l'objet utilisateur du localstorage
     */
    public getUser(): any {
        return this._user;
    }
    
    
    /**
     * Récupère un élément user du localstorage
     * @return void
     */
    private _setUser(): void{
        let user: any = localStorage.getItem('user');
    
        if(!user === null){
            this._user = JSON.parse(user);
        }
    }
    
    
}