<?php

require_once("config.php");

echo session_save_path();

echo"<br>";

var_dump(session_status());

echo"<br>";

switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "As sessões estiverem desabilitadas.";
		break;
	
	case PHP_SESSION_NONE:
		echo "As sessões estiverem habilitadas, mas nenhuma existir.";
		break;	

	case PHP_SESSION_ACTIVE:	
		echo "As sessões estiverem habilitadas, e uma existir.";
		break;
}



//Este exemplo 05 é apenas para demonstrar a funcionalidade de uma função exclussiva que no caso é a session_save_path. no site do php na parte de documentações há varias outras funções diferentes que podem ser utilizadas de varias formas. esta no casso faz com que sejá exibido na tela o caminho da pasta temporaria da cessão criada ao acessar está pagina.

?>