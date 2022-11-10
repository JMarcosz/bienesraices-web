<?php
require 'app.php';
function incluirTemplate($nombre, $inicio = false)
{
    include TEMPLATES_URL . "/${nombre}.php";
}

function sesionUsuario()
{
    function revisarAutenticacion(): bool
    {
        session_start();
        $auth = $_SESSION['login'];
        if ($auth) {
            return true;
        }
        return false;
    }

    function expulsarUsuario($auth)
    {
        if (!$auth) {
            header('Location: /');
        }
    }
    $auth = revisarAutenticacion();
    expulsarUsuario($auth);
}
