<?php

    function autenticarUsuario($correo, $cotrasena){
        require_once(__DIR__."/../../modelo/dao/usuarioDAO.php");
        $dao=new UsuarioDAO();
        $usuario = $dao->autenticarUsuario($correo, $cotrasena);
        return $usuario;
    }

    function buscarUsuarioPorId($id){
        require_once(__DIR__."/../../modelo/dao/usuarioDAO.php");
        $dao=new UsuarioDAO();
        $usuario = $dao->buscarUsuarioPorId( $id);
        return $usuario;
    }

    function leerUsuarios(){
        require_once(__DIR__."/../../modelo/dao/usuarioDAO.php");
        $dao=new UsuarioDAO();
        $usuarios = $dao->leerUsuarios();
        return $usuarios;
    }


    function insertarUsuario($usuario){
        require_once(__DIR__."/../../modelo/dao/usuarioDAO.php");
        $dao=new UsuarioDAO();
        $resultado=$dao->insertarUsuario($usuario);
        return $resultado;
    }

    function modificarUsuario($usuario){
        require_once(__DIR__."/../../modelo/dao/usuarioDAO.phpp");
        $dao=new UsuarioDAO();
        $resultado=$dao->modificarUsuario($usuario);
        return $resultado;
    }

    function borrarUsuario($id){
        require_once(__DIR__."/../../modelo/dao/usuarioDAO.php");
        $dao = new UsuarioDAO();
        $res=$dao->borrarUsuario($id);
        return $res;
    }     