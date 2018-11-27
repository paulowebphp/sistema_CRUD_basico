<?php

function getConexao(){
	$conexao = new \PDO("mysql:host=localhost;dbname=db_php_pratica","root","");

	return $conexao;
}