<?php

class Produit {
	
	private $idProduit;
	private $Designation;
	private $prixHT;
	private $tauxTVA;
	
	
	public function getIdProduit() {
		return $this->idProduit;
	}
	
	
	public function getDesignation() {
		return $this->Designation;
	}
	public function setDesignation($Designation) {
		$this->Designation = $Designation;
		return $this;
	}
	
	
	public function getPrixHT() {
		return $this->prixHT;
	}
	public function setPrixHT($prixHT) {
		$this->prixHT = $prixHT;
		return $this;
	}
	
	
	public function getTauxTVA() {
		return $this->tauxTVA;
	}
	public function setTauxTVA($tauxTVA) {
		$this->tauxTVA = $tauxTVA;
		return $this;
	}
	
}