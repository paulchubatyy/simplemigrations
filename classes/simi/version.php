<?php
/**
 * 
 * @author: xobb
 * Date: 10/19/11
 * Time: 11:03 PM 
 */
 
class Simi_Version {

	protected $name;

	protected $migrator;

	protected $migrations = array();



	public function __get($key)
	{
		if (property_exists($this, $key))
			return $this->$key;
		return null;
	}

	public function get_migration_names()
	{
		$result = array();
		foreach ($this->migrations as $migration) {
			$result[$migration->get_name()] = $migration;
		}
		return $result;
	}
}
