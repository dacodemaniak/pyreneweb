<?php
/**
 * @name menuController.class.php Service d'affichage du menu principal
 * @author web-Projet.com (contact@web-projet.com) - Sept. 2016
 * @package App\Common\Menu
 * @version 1.0
 */
namespace App\Common\Footer;

use \wp\wp as framework;
use \wp\Controller\controller as Controller;
use \wp\Http\Request\requestData as Request;
use \wp\Http\Response\htmlResponse as Response;
use \App\Common\Footer\Information as Information;
use \App\Common\Footer\MonCompte as MonCompte;
use \App\Common\Footer\AboutFooter as AboutFooter;

class FooterController extends \wp\Controller\controller {

	/**
	 * Options du menu principal de l'application
	 * @var array
	 */
	private $options;

	/**
	 * Instance d'un objet de type articlesActiveRecord
	 * @var \App\Mappers\Article\articlesActiveRecord
	 */
	private $adresse;

	public function __construct(){
		$this->name = "footer";
		$this->region = "_main_footer";

		$this->template();

		$this->process();

	}
	/**
	 * Instance de la classe du menu Information
	 * @var \Menu
	 */
	private $information;
	/**
	 * Instance de la classe du menu Mon Compte
	 * @var \Menu
	 */
	private $monCompte;
	/**
	 * Instance de la classe du menu Qui sommes-nous
	 * @var \Menu
	 */
	private $menuQui;
	/**
	 * Retourne l'état des options du menu
	 * @return boolean
	 */
	/**
	 * Retourne l'enregistrement article spécifique à l'adresse
	 */
	public function adresse(){
		return $this->adresse;
	}
	
	public function getFooterInfo(){
	    return $this->information;
	}
	
	public function getMenuCompte(){
	    return $this->monCompte;
	}
	
	public function getMenuQui(){
	    return $this->menuQui;
	}
	/**
	 * Coeur du contrôleur
	 **/
	protected function process(){
	    
		$this->information = new Information();
	    
	    $this->monCompte = new MonCompte();
	    
	    $this->menuQui = new AboutFooter();   
		
	}

	/**
	 * Définit le nom de la vue à charger
	 * La vue est stockée dans le dossier _templates du dossier courant
	 **/
	protected function template(){
		$classParts = explode("\\",__CLASS__);
		$class = array_pop($classParts);
		$templateName = substr($class,0,strpos($class,"Controller")) . \App\appLoader::$tpl->extension();
		$templateFilePath = str_replace("\\","/",__NAMESPACE__) . "/_templates/" . $templateName;

		if(file_exists(framework::getWp()->getPathes()->getRootPath("App").$templateFilePath)){
			//$this->template = "file:/" . framework::getWp()->getPathes()->getRootPath("App") . $templateFilePath;
			$this->template = \App\appLoader::wp()->templateEngine()->absolutePath($templateFilePath);
		} else {
			parent::template();
		}
	}
}
