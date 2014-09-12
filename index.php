<?php
/* 
Copyright [2014] [Lucas Vasconcelos]

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
*/
$_index=true;                                  //Todas as páginas que serão incluídas necessitam de verificação para serem incorporadas, caso o arquivo 
                                               //seja acessado diretamente a variável $_index será nula e a execução não prosseguirá.

require_once "inc_pages/header.php";           //Incluírá o cabeçalho padrão

if($_GET){                                     //Se a variável $_GET foi definida ele irá executar o switch
  switch($_GET['p']){                          //Irá verificar os valores atribuído a 'p' no $_GET. Ex: 'index.php?p=cachorro', o valor de $_GET['p'] será "cachorro".
    case "home":                               //Caso não haja correspondência na cadeia de switch's, o conteúdo de 'default' será executado.
      require_once "inc_pages/home.php";
      break;
    case "fbconnect":
      require_once "inc_pages/fb.connect.api.php";
      break;    
    case "sobre":
      require_once "inc_pages/sobre.php";
      break;    
    case "policy":
      require_once "inc_pages/policy.php";    
      break;
    case "filas":
      require_once "inc_pages/filas.php";
      break;
    case "amigos":
      require_once "inc_pages/amigos.php";
      break;
    case "checkin":
      require_once "inc_pages/checkin.php";
      break;
    default:
      require_once "inc_pages/404.php";
      break;
  }
}
else{                                           //Será executado caso $_GET não esteja definido
  require_once "inc_pages/home.php";
}

require_once "inc_pages/footer.php";            //Inclui rodapé padrão
?>