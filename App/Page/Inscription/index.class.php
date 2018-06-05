<?php
/**
 * @name index.class.php Contrôleur de la page d'accueil par défaut de l'application
 * @author web-Projet.com (panier@web-projet.com) - Juil 2016
 * @package App/Default/Index
 * @version 1.0
**/
namespace App\Page\Inscription;

use \wp\wp as framework;
use \wp\Controller\controller as Controller;
use \wp\Http\Request\requestData as Request;

/**
 @Decorator \App\Page\Inscription\Signin
 */

class index extends \wp\Controller\controller {
	/**
	 * Décorateur pour le contrôleur Instance de la classe Signin
	 * @var \App\Page\Inscription\Signin
	 */
	protected $signin;
	
	/**
	 * Insancie le contrôleur par défaut
	 * @param Request $data
	 */
	public function __construct(Request $request){

		$this->name = "inscription";

		$this->pageClass = "inscription";
		
		// Récupère les données de la requête HTTP
		$this->requestData($request);
		
		$this->template();

		$this->process();
	}

	public function getArticle(){
		return $this->signin;	
	}
	
	/**
	 * Coeur du contrôleur
	 * 	- Traite les formulaires  Inscription ou Identification
	 **/
	protected function process(){
		if ($this->requestData()->signin){
			// Traiter le formulaire d'inscription
		}
	}

	/**
	 * Définit le nom de la vue à charger
	 * La vue est stockée dans le dossier _templates du dossier courant
	 **/
	protected function template(){
		$classParts = explode("\\",__CLASS__);
		$class = array_pop($classParts);
		$templateName = "index" . \App\appLoader::$tpl->extension();
		$templateFilePath = str_replace("\\","/",__NAMESPACE__) . "/_templates/" . $templateName;

		if(file_exists(framework::getWp()->getPathes()->getRootPath("App").$templateFilePath)){
			//$this->template = "file:/" . framework::getWp()->getPathes()->getRootPath("App") . $templateFilePath;
			$this->template = \App\appLoader::wp()->templateEngine()->absolutePath($templateFilePath);
		} else {
			die("Le template : " . $templateFilePath . " n'a pas pu être trouvé !");
			parent::template();
		}
		
		// Ajoute les javascripts potentiellement présents aussi dans le dossier _templates
		if (file_exists(str_replace("\\","/",__NAMESPACE__) . "/_templates/javascript")) {
			$scriptFileName = $class . ".js";
			if (file_exists(str_replace("\\","/",__NAMESPACE__) . "/_templates/javascript/" . $scriptFileName)) {
				$asset = new \wp\Html\Assets\Javascript\javascript();
				
				$asset->path(str_replace("\\","/",__NAMESPACE__) . "/_templates/javascript/")
				->file($scriptFileName)
				->type("javascript")
				->signature();
				
				\App\appLoader::wp()->assets()->add($asset);
			}
		}
	}
}
