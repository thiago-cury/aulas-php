<?php
class Cliente{

   //Atributos da Classe
   private $idCliente;
   private $nome;
   private $RG;
   private $idade;
	
   //Métodos acessores
   public function getIdCliente(){
	   return $this->idCliente;
   }
   public function setIdCliente($idCliente){
	   $this->idCliente=$idCliente;
   }
   public function getNome(){
	   return $this->nome;
   }
   public function setNome($nome){
	   $this->nome=$nome;
   }
   public function getRG(){
	   return $this->RG;
   }
   public function setRg($RG){
	   $this->RG=$RG;
   }
   public function getIdade(){
	   return $this->idade;
   }
   public function setIdade($idade){
	   $this->idade = $idade;
   }
   public function calcularIdadeMeses(){
	   return $this->idade * 12;
   }
}
?>
