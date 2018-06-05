<?php
/**
* @name About.class.php Service pour la récupération des articles de la section A propos
* @author web-Projet.com (contact@web-projet.com) Juil. 2017
* @package App\Defaut\Index\About
* @version 1.0
**/
namespace App\Page\Inscription;

use \wp\wp as framework;
use \App\Mappers\Menu\categoriesStore as Categories;
use \wp\Collections\collection as Collection;
use \wp\Collections\item as Item;

class Signin {
	/**
	 * Nom de la vue à charger
	 * @var string
	 */
	private $template;

	/**
	 * Instance d'un enregistrement actif de 
	 * @var \App\Mappers\Article\articlesActiveRecord
	 */
	private $activeRecord;
	
	/**
	 * Insancie le contrôleur par défaut
	 */
	public function __construct(){

		$this->template();

		$this->process();
	}

	/**
	 * Retourne le nom du template à utiliser
	 * @return string
	 */
	public function getTemplateName(){
		return $this->template;
	}

	/**
	 * Retourne l'enregistrement actif de l'article
	 * @return \App\Mappers\Article\articlesActiveRecord
	 */
	public function getActiveRecord(){
		return $this->activeRecord;
	}
	
	/**
	 * Coeur du contrôleur
	 **/
	protected function process(){

		// Signin
		$signin = new \App\Mappers\Article\articlesStore();
		$data = $signin->get("slug");
		$data->searchValue("signin");
		$clause = new \wp\Database\Mapper\clause($data);
		$clause->type("equal");
		$signin->addClause($clause);

		$select = new \wp\Database\Query\select($signin);

		$this->activeRecord = new \App\Mappers\Article\articlesActiveRecord($signin);

		if($select->nbRows() > 0){
			$datas = $select->select();
			$activeData = $datas->fetch();
			$this->activeRecord->setRecord($activeData);
		}
	}

	/**
	 * Définit le nom de la vue à charger
	 * La vue est stockée dans le dossier _templates du dossier courant
	 **/
	protected function template(){
		$classParts = explode("\\",__CLASS__);
		$class = strtolower(array_pop($classParts));
		$templateName = $class . \App\appLoader::$tpl->extension();
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
