<?php
class Client {
	
	private $idClient;
	private $nom;
	private $prenom;
	private $adresse;
	private $codePostal;
	private $login;
	private $password;
	private $email;
	
	// LES METHODES
	// ID CLIENT
	public function getIdClient() {
		return $this->idClient;
	}
	
	// NOM
	public function getNom() {
		return $this->nom;
	}
	public function setNom($nom) {
		$this->nom = $nom;
		return $this;
	}
	
	// PRENOM
	public function getPrenom() {
		return $this->prenom;
	}
	public function setPrenom($prenom) {
		$this->prenom = $prenom;
		return $this;
	}
	
	// ADRESSE
	public function getAdresse() {
		return $this->adresse;
	}
	public function setAdresse($adresse) {
		$this->adresse = $adresse;
		return $this;
	}
	
	// CODE POSTAL
	public function getCodePostal() {
		return $this->codePostal;
	}
	public function setCodePostal($codePostal) {
		$this->codePostal = $codePostal;
		return $this;
	}
	
	// LOGIN
	public function getLogin() {
		return $this->login;
	}
	public function setLogin($login) {
		$this->login = $login;
		return $this;
	}
	
	// PASSWORD
	public function getPassword() {
		return $this->password;
	}
	public function setPassword($password) {
		$this->password = $password;
		return $this;
	}
	
	// EMAIL
	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email) {
		$this->email = $email;
		return $this;
	}
	
	
	
}