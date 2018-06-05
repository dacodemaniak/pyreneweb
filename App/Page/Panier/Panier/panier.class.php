<?php
/**
* @name panier.class.php Service pour la récupératioarticlesrticles de la section A propos
* @author web-Projet.com (panier@web-projet.com) Juil. 2017
* @package App\Defaut\Index\panier
* @version 1.0
**/
namespace App\Page\Panier\Panier;

use \wp\wp as framework;
use \App\Mappers\Menu\categoriesStore as Categories;
use \wp\Collections\collection as Collection;
use \wp\Collections\item as Item;

class panier {
	/**
	 * Collection des catégories à afficher
	 * @var Collection
	 */
	private $collection;

	/**
	 * Nom de la vue à charger
	 * @var string
	 */
	private $template;

	private $bootstrapCols = [
		"lg" => 12,
		"md" => 12,
		"sm" => 12,
		"xs" => 12
	];

	/**
	 * Insancie le contrôleur par défaut
	 */
	public function __construct(){

		$this->template();

		// Instancie une nouvelle collection
		$this->collection = new Collection();

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
	 * Retourne la collection des articles à traiter
	 * @return \wp\Collections\collection
	 */
	public function getCollection(){
		return $this->collection;
	}

	/**
	 * Retourne la répartition de colonnes Bootstrap
	 * @param string $media
	 * @return number
	 */
	public function getBootstrapCols($media){
		return $this->bootstrapCols[$media];
	}

	/**
	 * Coeur du contrôleur
	 * 	- Instancie le module de gestion des tuiles de réservations
	 * 	- Récupère les articles de la page d'accueil (pavés descriptifs)
	 **/
	protected function process(){


		// Article Nouveautés
		$panier = new \App\Mappers\Article\articlesStore();
		$data = $panier->get("slug");
		$data->searchValue("panier");
		$clause = new \wp\Database\Mapper\clause($data);
		$clause->type("equal");
		$panier->addClause($clause);

		$select = new \wp\Database\Query\select($panier);

		$activeRecord = new \App\Mappers\Article\articlesActiveRecord($panier);

		if($select->nbRows() > 0){
			$datas = $select->select();
			$activeData = $datas->fetch();
			$activeRecord->setRecord($activeData);
			$item = new Item($this->collection);
			$item->id($activeRecord->article_slug)
				->value($activeRecord)
				->hydrate();
		}


		/**
		$this->bootstrapCols["lg"] = 12 / $this->collection->length();
		$this->bootstrapCols["md"] = 12 / $this->collection->length();
		**/
		
	}

	/**
	 * Définit le nom de la vue à charger
	 * La vue est stockée dans le dossier _templates du dossier courant
	 **/
	protected function template(){
		$classParts = explode("\\",__CLASS__);
		$class = array_pop($classParts);
		$templateName = "panier" . \App\appLoader::$tpl->extension();
		$templateFilePath = str_replace("\\","/",__NAMESPACE__) . "/../_templates/" . $templateName;

		if(file_exists(framework::getWp()->getPathes()->getRootPath("App").$templateFilePath)){
			//$this->template = "file:/" . framework::getWp()->getPathes()->getRootPath("App") . $templateFilePath;
			$this->template = \App\appLoader::wp()->templateEngine()->absolutePath($templateFilePath);
		} else {
			die("Le template : " . $templateFilePath . " n'a pas pu être trouvé !");
			parent::template();
		}
	}
}
