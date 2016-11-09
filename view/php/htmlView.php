<?php

function htmlStart()
{
  $start = "
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset='utf-8'>
      <title> </title>
      <link rel='stylesheet' href='css/master.css' media='screen'>
    </head>
  <body>
  ";
  echo $start;

}

function htmlEnd()
{
  $end = "
  </body>
  </html>
  ";

  echo $end;
}

function header()
{
  $header = "
  <header>
  </header>
  ";
  echo $header;
}

function footer()
{
  $footer = "
  <footer>
  </footer>
  ";
  echo $footer;
}

?>
