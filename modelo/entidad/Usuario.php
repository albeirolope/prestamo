<?php

class Usuario
{
    public $idUsuario;
    public $Nombre_completo;
    public $Correo;
    public $Usuario;
    public $rol;
    public $contrasena;

    public function __construct($idUsuario, $Nombre_completo, $Correo, $Usuario, $rol, $contrasena)
    {
        $this->idUsuario = $idUsuario;
        $this->Nombre_completo = $Nombre_completo;
        $this->Correo = $Correo;
        $this->Usuario = $Usuario;
        $this->rol = $rol;
        $this->contrasena = $contrasena;
    }

    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
        return $this;
    }

    public function getNombreCompleto()
    {
        return $this->Nombre_completo;
    }

    public function setNombreCompleto($Nombre_completo)
    {
        $this->Nombre_completo = $Nombre_completo;
        return $this;
    }

    public function getCorreo()
    {
        return $this->Correo;
    }

    public function setCorreo($Correo)
    {
        $this->Correo = $Correo;
        return $this;
    }

    public function getUsuario()
    {
        return $this->Usuario;
    }

    public function setUsuario($Usuario)
    {
        $this->Usuario = $Usuario;
        return $this;
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function setRol($rol)
    {
        $this->rol = $rol;
        return $this;
    }

    public function getContrasena()
    {
        return $this->contrasena;
    }

    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
        return $this;
    }
}
?>