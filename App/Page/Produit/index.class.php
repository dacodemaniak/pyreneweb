<?php
/**
 * @name index.class.php Contrôleur de la page d'accueil par défaut de l'application
 * @author web-Projet.com (panier@web-projet.com) - Juil 2016
 * @package App/Default/Index
 * @version 1.0
**/
namespace App\Page\Produit;

use \wp\wp as framework;
use \wp\Controller\controller as Controller;
use \wp\Http\Request\requestData as Request;
use \App\Page\Panier\Panier\panier as Panier;

class index extends \wp\Controller\controller {
	/**
	 * Instance de la catégorie courante
	 * @var \App\Mappers\Menu\categoriesActiveRecord
	 */
	private $category;
    
	/**
	 * Insancie le contrôleur par défaut
	 * @param Request $data
	 */
	public function __construct(Request $data){

	    $this->requestData($data);
	    
		$this->name = "produit";

		$this->pageClass = "produit";

		$this->template();

		$this->process();
	}

	/**
	 * Retourne l'instance de la catégorie courante
	 * @return \categoriesActiveRecord
	 */
	public function getCategory(){
		return $this->category;
	}
    
	/**
	 * Coeur du contrôleur
	 * 	- Instancie le module d'affichage des grands thèmes définis
	 **/
	protected function process(){
		$categories = new \App\Mappers\Menu\categoriesStore();
		
		// Ajoute une clause de restriction sur le slug passé en paramètre (WHERE slug=?)
		$data = $categories->get("slug");
		$data->searchValue($this->requestData()->slug);
		$clause = new \wp\Database\Mapper\clause($data);
		$clause->type("equal");
		$categories->addClause($clause);

		// Dans ce contexte, on joint à gauche (LEFT JOIN) pour ne pas tenir compte des articles
		$categories->joinType(1);
		
		$select = new \wp\Database\Query\select($categories);
		
		if($select->nbRows() > 0){
			// Récupère la catégorie courante
			$datas = $select->select()->fetch();
			$this->category = new \App\Mappers\Menu\categoriesActiveRecord($categories);
			foreach($categories->getCollection() as $data){
				$name = $data->selectName();
				$this->category->{$name} = $datas->$name;
			}
			$this->category->getChildren(); // Récupère tous les enfants de la catégorie
			$this->category->ancestors(); // Récupère tous les ancêtres de la catégorie
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
	}
}
