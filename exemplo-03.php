<?php

require_once("config.php");


echo session_id();

 /*Está é a funcionalidade da verificação de ID. não foi necessario fazer o session_star pis mais uma vez está sendo requirido da peagina config.php.
Apenas lembrando que para dar o star da função desta configuração 3 é necessario acessar a pagina exemplo-01 da pasta session no localhost e depois acessar a o exemplo-03. mesmo que estivermos na pagina 03 e darmos o recaregar o ID não vai ser mudado por é em relação a sessão que está aberta. */
?>