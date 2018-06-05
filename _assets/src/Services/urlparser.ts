/**
* @name UrlParser Service de parsing d'URL
* @author IDea Factory (dev-team@ideafactory.fr) - Mars 2018
* @package Services
* @version 0.1.0
*/
export class UrlParser {
    private _hash: string;
    private _host: string;
    private _hostname: string;
    private _href: string;
    private _origin: string;
    private _pathname: string;
    private _port: string;
    private _protocol: string;
    private _search: string;

    public constructor(){
        this._hash = location.hash;
        this._host = location.host;
        this._hostname = location.hostname;
        this._href = location.href;
        this._origin = location.origin;
        this._pathname = location.pathname;
        this._port = location.port;
        this._protocol = location.protocol;
        this._search = location.search;
    }
    
    public getRoute(): string {
        return this._pathname.substring(1).trim();
    }
}