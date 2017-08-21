<?php
include 'cliente.class.php';

$c = new Cliente();

$c->setIdCliente(1);
$c->setNome('Thiago');
$c->setRG(1234567891);
$c->setIdade(33);

echo '<p>Código '.$c->getIdCliente().
     '<br>Nome '.$c->getNome().
     '<br>RG '.$c->getRG().
     '<br>Idade '.$c->getIdade().
     '<br>Idade em meses '.$c->calcularIdadeMeses().'</p>';
?>
