<?php
/*
 * control.php
 * Copyright 2016 Alberto benito
 * library
 * "Biblioteca"
 */
 //require_once("view/php/menuView.php");
 require_once("view/php/loginView.php");
?>
<?php

function control($opt)
{
  # code...

//menu();

switch ($opt) {
    case 0:
       //login;
       printLogin();
       validateLogin();

      break;
    case 1:
       //añadir libro
       //addBook();
       //validateBook();
      break;
    case 2:
      //listar libros
      //listBook();
      break;
    case 3:
      //buscar libro
      //searchBook();
      break;
    case 4:
      //eliminar libro
      //deleteBook();
      break;
}

}

function endHtml()
{
  echo "
  <footer>
  </footer>
  </body>
  </html>";
}

?>
