<?php

namespace Tpfilrouge\skillsBundle\Entity;

use Doctrine\Common\Collections\Collection;


class RecursiveCompetenceIterator implements \RecursiveIterator{

	private $_data;
	
	
	public function __construct(Collection $data){
		$this->_data = $data;
	}
	
	
	public function hasChildren(){
		return (!$this->_data->current()->getChildCompetences()->isEmpty());
	}
	
	
	public function getChildren(){
		return new RecursiveCompetenceIterator($this->_data->current()->getChildCompetences());
	}
	
	public function current(){
		return $this->_data->current();
	}
	
	public function next(){
		$this->_data->next();
	}
	
	public function key(){
		return $this->_data->key();
	}
	
	public function valid(){
		return $this->_data->current()instanceof \Entity\competence;
	}
	
	
	public function rewind(){
		$this->_data->first();
	}
	
	
	

}










