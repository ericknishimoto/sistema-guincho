<?php

session_start();

function usuarioEstaLogado() {
  return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario() {
  if(!usuarioEstaLogado()) {
     header("Location: index.php?falhaDeSeguranca=true");
     die();
  }
}

function usuarioLogado($email) {
  return $_SESSION["usuario_logado"];
}

function logaUsuario($email,$nome) {
  $_SESSION["usuario_logado"] = $email;
  $_SESSION["usuario_nome"] = $nome;
}

function logout() {
  session_destroy();
}