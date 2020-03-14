<?php
# obtendo nosso arquivo de configuracões
require_once 'webservice_init.php';
 
# verificando se o método de envio é mesmo  POST.
if( $_SERVER['REQUEST_METHOD'] !== "POST" )
    __output_header__( false, "Método de requisição não aceito.", null );
 
?>