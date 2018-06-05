<?php
/**
 * @name clientsActiveRecord.class.php Service de gestion de l'enregistrement actif Clients
 * @author web-Projet.com (contact@web-projet.com) - Jan. 2018
 * @package App/Common/Mappers/Client
 * @version 0.1.0
 * @see App/Mappers/Client/clientsStore
**/
namespace App\Mappers\Client;

use \wp\wp as framework;
use \wp\Database\dbConnector as dbConnector;
use \App\Mappers\Article\articlesStore as Store;
use \wp\Database\Collection\activeRecord;
use \wp\Database\Query\select as Query;

class clientsActiveRecord extends \wp\Database\Collection\activeRecord {

	/**
	 * Instancie un nouvel objet actif de données Client
	**/
	public function __construct(Store $client){
		$this->store = $client;
	}
	
	/**
	 * Retourne une donnée active du jeu de résultat
	 * @param string $attributeName
	 */
	public function __get($attributeName){
		if(property_exists($this,$attributeName))
			return $this->{$attributeName};
		
		$content = json_decode($this->client_content);
		
		if(property_exists($content,$attributeName)){
			return $this->extract($content->{$attributeName});
		}
		return "/!\\" . $attributeName . "/!\\";
	}
	
	/**
	 * Instance de méthode pour la récupération de données inconsistante
	 * @param string $method Nom de la méthode sous la forme getProperty
	 * @param array $args Arguments à traiter
	 */
	public function __call($method,$args){
		$propertyName = strtolower(substr($method,3,strlen($method)));
		
		$content = json_decode($this->client_content);
		
		if(property_exists($content,$propertyName)){
			$data = $content->{$propertyName};
			
			if(property_exists($data,$args[0])){
				return $this->extract($data->{$args[0]});
			}
		}
		
		if(property_exists($content,$args[0])){
			return $content->{$args[0]};
		}
	}
	
	/**
	 * Définit le contenu courant, sans passer par une requête préalable
	 * @param Object $record
	 */
	public function setRecord($record){
		if($record){
			$this->activeRecord = true;
			foreach($this->store->getCollection() as $data){
				$name = $data->selectName();
				$data->value($record->$name);
				$this->{$name} = $record->$name;
			}
		}
	}
	
	/**
	 * Génère et exécute une requête pour alimenter l'enregistrement produit courant
	 */
	public function query(){
	
		$this->query = new Query($this->store);
		$this->select = $this->query->select();
	
		$record = $this->select->fetch();
	
		if($record){
			$this->activeRecord = true;
			foreach($this->store->getCollection() as $data){
				$name = $data->selectName();
				$data->value($record->$name);
				$this->{$name} = $record->$name;
			}
		}
	}
	
	public function toJSON(){}

}