<?php
require_once __DIR__ . '/bootstrap.php';
require_once __DIR__ . '/paginas/header.php';

$route = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$path = $route['path'];
$path = explode('/', $path);
$pagina = $path[1];
$permission = array('vizualizarCliente', 'index.php', 'home');

if(empty($pagina)){
    require_once __DIR__ . '/paginas/visualizar.php';
}elseif($pagina == 'visualizarCliente'){
    require_once __DIR__ . '/paginas/paginadocliente.php';
    
 }elseif($pagina == 'home'){
    require_once __DIR__ . '/paginas/visualizar.php';   
    
}elseif(isset($pagina ) && in_array($pagina,$permission)!= $permission){
    require_once __DIR__ . '/paginas/404.php';
}else{
    require_once __DIR__ . '/paginas/visualizar.php';
}

require_once __DIR__ . '/paginas/footer.php';