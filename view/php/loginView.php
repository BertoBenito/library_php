<?php

function printLogin()
{

  echo "<section>

    <h1>TITULO DEL EJERCICIO</h1>

  <form action='' method='post'>

    <label for=''>user</label>
    <br/>
    <input type='text' name='user' value=''/>
    <br/>

    <label for=''>Contraseña</label>
    <br/>
    <input type='password' name='pass' value='' />
    <br/>

    <br/>

    <input id ='button' type='submit' name='Enviar' value='Enviar'/>
  </form>
  <section>";
}

function validateLogin()
{
    if (isset($_POST['Enviar'])) {

      //values
      $user = $_POST['user'];
      $pass = $_POST['pass'];


      if ($user != null && $pass != null){



      } else {
        echo "value/s empty";
      }

    }
    echo "</section>
    </section>" ;
}

 ?>
