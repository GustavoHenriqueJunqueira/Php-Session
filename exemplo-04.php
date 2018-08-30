<?php

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

/*Utiidanco a função session_regenerate_id toda vez que for dado um recarregar na página o id desta sessão irá mudar, diferente do exemplo-03 que não mudava. */

/*Utilizando o var_dump e adicionando a session é possivel verificar o array super global utilizado e também o id e nome utilizado no ezemplo 01.*/
?>