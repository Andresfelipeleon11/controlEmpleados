<?php
namespace entidad;


class empleadoEntidad{
    private $id_empleado;
    private $nombre_empleado;
    private $apellido_empleado;
    private $id_tipo_documento;
    private $numero_documento;
    private $id_genero;
    private $numero_telefono;
    private $contrasena;
    private $id_rol;
    private $id_area;

    /**
     * Get the value of id_empleado
     */ 
    public function getId_empleado()
    {
        return $this->id_empleado;
    }

    /**
     * Set the value of id_empleado
     *
     * @return  self
     */ 
    public function setId_empleado($id_empleado)
    {
        $this->id_empleado = $id_empleado;

        return $this;
    }

    /**
     * Get the value of nombre_empleado
     */ 
    public function getNombre_empleado()
    {
        return $this->nombre_empleado;
    }

    /**
     * Set the value of nombre_empleado
     *
     * @return  self
     */ 
    public function setNombre_empleado($nombre_empleado)
    {
        $this->nombre_empleado = $nombre_empleado;

        return $this;
    }

    /**
     * Get the value of apellido_empleado
     */ 
    public function getApellido_empleado()
    {
        return $this->apellido_empleado;
    }

    /**
     * Set the value of apellido_empleado
     *
     * @return  self
     */ 
    public function setApellido_empleado($apellido_empleado)
    {
        $this->apellido_empleado = $apellido_empleado;

        return $this;
    }

    /**
     * Get the value of id_tipo_documento
     */ 
    public function getId_tipo_documento()
    {
        return $this->id_tipo_documento;
    }

    /**
     * Set the value of id_tipo_documento
     *
     * @return  self
     */ 
    public function setId_tipo_documento($id_tipo_documento)
    {
        $this->id_tipo_documento = $id_tipo_documento;

        return $this;
    }

    /**
     * Get the value of numero_documento
     */ 
    public function getNumero_documento()
    {
        return $this->numero_documento;
    }

    /**
     * Set the value of numero_documento
     *
     * @return  self
     */ 
    public function setNumero_documento($numero_documento)
    {
        $this->numero_documento = $numero_documento;

        return $this;
    }

    /**
     * Get the value of id_genero
     */ 
    public function getId_genero()
    {
        return $this->id_genero;
    }

    /**
     * Set the value of id_genero
     *
     * @return  self
     */ 
    public function setId_genero($id_genero)
    {
        $this->id_genero = $id_genero;

        return $this;
    }

    /**
     * Get the value of numero_telefono
     */ 
    public function getNumero_telefono()
    {
        return $this->numero_telefono;
    }

    /**
     * Set the value of numero_telefono
     *
     * @return  self
     */ 
    public function setNumero_telefono($numero_telefono)
    {
        $this->numero_telefono = $numero_telefono;

        return $this;
    }

    /**
     * Get the value of contrasena
     */ 
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Set the value of contrasena
     *
     * @return  self
     */ 
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;

        return $this;
    }

    /**
     * Get the value of id_rol
     */ 
    public function getId_rol()
    {
        return $this->id_rol;
    }

    /**
     * Set the value of id_rol
     *
     * @return  self
     */ 
    public function setId_rol($id_rol)
    {
        $this->id_rol = $id_rol;

        return $this;
    }

    /**
     * Get the value of id_area
     */ 
    public function getId_area()
    {
        return $this->id_area;
    }

    /**
     * Set the value of id_area
     *
     * @return  self
     */ 
    public function setId_area($id_area)
    {
        $this->id_area = $id_area;

        return $this;
    }
}



?>