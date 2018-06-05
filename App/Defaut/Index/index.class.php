<?php
/**
 * @name index.class.php Contrôleur de la page d'accueil par défaut de l'application
 * @author web-Projet.com (contact@web-projet.com) - Juil 2016
 * @package App/Default/Index
 * @version 1.0
**/
namespace App\Defaut\Index;

use \wp\wp as framework;
use \wp\Controller\controller as Controller;
use \wp\Http\Request\requestData as Request;

/** 
 @Decorator \App\Defaut\Index\Activite\Activites 
 @Decorator \App\Defaut\Index\About\About
 @Decorator \App\Defaut\Index\About\Information
 @Decorator \App\Defaut\Index\About\Spotlight
 */
class index extends \wp\Controller\controller {
	/**
	 * Instance des activités
	 * @var \Activites
	 */
	protected $activites;

	/**
	 * Instance d'un objet de type articlesActiveRecord
	 * @var \About
	 */
	protected $about;

	/**
	 * Instance d'un objet de type articlesActiveRecord
	 * @var \spotlight
	 */
	protected $spotlight;

	/**
	 * Instance d'un objet de type articlesActiveRecord
	 * @var \information
	 */
	protected $information;


	/**
	 * Insancie le contrôleur par défaut
	 * @param Request $data
	 */
	public function __construct(){


		$this->name = "index";

		$this->pageClass = "index";

		$this->template();

		$this->process();
	}

	/**
	 * Retourne la collection des objets du slider
	 * @return \wp\Collections\collection
	 */
	public function getCollection(){
		return $this->activites->getCollection();
	}

	/**
	 * Retourne l'objet des activités
	 * @return object|\App\Defaut\Index\App\Defaut\Index\Activite\index
	 */
	public function getActivities(){
		return $this->activites;
	}

	/**
	 * Retourne l'enregistrement article spécifique A propos de
	 */
	public function getAbout(){
		return $this->about;
	}

	/**
	 * Retourne l'enregistrement article spécifique A propos de
	 */
	public function getspotlight(){
		return $this->spotlight;
	}

	/**
	 * Retourne l'enregistrement article spécifique A propos de
	 */
	public function getinformation(){
		return $this->information;
	}


	/**
	 * Coeur du contrôleur
	 * 	- Instancie le module d'affichage des grands thèmes définis
	 **/
	protected function process(){
		//$this->activities = new \App\Defaut\Index\Activite\Activites();

		//$this->about = new \App\Defaut\Index\About\About();

		//$this->spotlight = new \App\Defaut\Index\About\spotlight();

		//$this->information = new \App\Defaut\Index\About\information();
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
	}
}
