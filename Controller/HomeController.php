<?php
    require "model/UsuarioModel.php";

class HomeController{
    public function Index()
    {
        include "view/index.php";
    }

    public function login(){
        include "view/login.php";
    }

    public function painel(){
        $model = new UsuarioModel();
        $usuario = $model->UsuarioLogado();
        include "view/painel.php";
    }
}