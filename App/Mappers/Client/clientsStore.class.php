<?php
/**
 * @name clientsStore.class.php Service de mapping de données sur la table "clients"
 * @author web-Projet.com (contact@web-projet.com) - Sept. 2016
 * @package App\Mappers\Client
 * @version 0.1.0
**/
namespace App\Mappers\Client;

use wp\Database\Mapper\dataStoreMapper as Store;
use wp\Database\Mapper\dataMapper as Data;

class clientsStore extends \wp\Database\Mapper\dataStoreMapper {

	/**
	 * Instancie un nouveau Mapper de données
	 */
	public function __construct(){
		// Détermine le nom du Store à partir du nom de la classe elle-même
		$storeName = $this->name();
	
		$this->scheme();
	}
	/**
	 * Expose la méthode alias parente
	 * @param unknown $alias
	 */
	public function alias($alias=null){
		return parent::alias($alias);
	}
	
	/**
	 * Retourne un objet de stockage de données par son nom ou alias
	 * @param string $column
	 */
	public function get($column){
	
	}
	
	/**
	 * Définit les éléments de stockage du Store
	 */
	private function scheme(){
		$column = new Data($this);
		$column->name("id")
		->primary(true)
		->type("int")
		->maxLength(64)
		->alias("client_id")
		->hydrate();

		$column = new Data($this);
		$column->name("login")
		->primary(false)
		->type("varchar")
		->maxLength(75)
		->alias("client_login")
		->hydrate();

		$column = new Data($this);
		$column->name("password")
		->primary(false)
		->type("varchar")
		->maxLength(32)
		->alias("client_password")
		->hydrate();

		$column = new Data($this);
		$column->name("salt")
		->primary(false)
		->type("varchar")
		->maxLength(8)
		->alias("client_salt")
		->hydrate();

		$column = new Data($this);
		$column->name("statut")
		->primary(false)
		->type("tinyint")
		->alias("client_statut")
		->hydrate();

		$column = new Data($this);
		$column->name("date_inscription")
		->primary(false)
		->type("date")
		->alias("client_date_inscription")
		->hydrate();

		$column = new Data($this);
		$column->name("validation_inscription")
		->primary(false)
		->type("date")
		->alias("client_validation_inscription")
		->hydrate();

		$column = new Data($this);
		$column->name("derniere_connexion")
		->primary(false)
		->type("datetime")
		->alias("client_derniere_inscription")
		->hydrate();
		
		$column = new Data($this);
		$column->name("content")
		->primary(false)
		->type("text/json")
		->alias("client_content")
		->hydrate();
	}
}