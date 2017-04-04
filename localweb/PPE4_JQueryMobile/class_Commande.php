<?php

class Commande {
	
	private $idCommande;
	private $montantCommande;
	private $produitCommande;
	
	// LES METHODES
	public function getIdCommande() {
		return $this->idCommande;
	}
	
	
	public function getMontantCommande() {
		return $this->montantCommande;
	}
	public function setMontantCommande($montantCommande) {
		$this->montantCommande = $montantCommande;
		return $this;
	}
	
	
	public function getProduitCommande() {
		return $this->produitCommande;
	}
	public function setProduitCommande($produitCommande) {
		$this->produitCommande = $produitCommande;
		return $this;
	}
	
}