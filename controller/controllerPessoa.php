
<link rel="stylesheet" href="../css/estilo.css" />

<?php

//incluindo os atributos do arquivo pessoa.class.php
include '../model/pessoa.class.php';

//Criando um obj 
$p = new Pessoa();

//Acessando as variaveis do 'Pessoa.class' e setando com os atributos inseridos no forms
$p->setNome($_GET['txtNome'] ); 
$p->setEndereco($_GET['txtEndereco'] ); 
$p->setBairro($_GET['txtBairro'] ); 
$p->setCep($_GET['txtCep'] ); 

//Exibindo dados
echo 'Nome: ' . $p->getNome() . '<hr>';
echo 'Endereço: ' . $p->getEndereco(). '<hr>';
echo 'Bairro: ' . $p->getBairro() . '<hr>';
echo 'Cep: ' . $p->getCep() . '<hr>';


?>