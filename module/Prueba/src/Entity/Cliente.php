<?php

namespace Prueba\Entity;

/**
 * Cliente
 *
 *
 *
 * @author Cristian Incarnato
 * @license MIT
 * @link
 * @ORM\Table(name="tn_cliente")
 * @ORM\Entity(repositoryClass="Prueba\Repository\ClienteRepository")
 */
class Cliente
{

    /**
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Nombre", "description":""})
     * @ORM\Column(type="string", length=50, unique=false, nullable=true,
     * name="nombre")
     */
    public $Nombre = null;

    /**
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"id", "description":""})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", length=0, unique=false, nullable=false, name="id")
     */
    public $id = null;

    /**
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Apellido", "description":""})
     * @ORM\Column(type="string", length=50, unique=false, nullable=true,
     * name="apellido")
     */
    public $Apellido = null;

    /**
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Telefono", "description":""})
     * @ORM\Column(type="string", length=200, unique=false, nullable=true,
     * name="telefono")
     */
    public $Telefono = null;

    public function getNombre()
    {
        return $this->Nombre;
    }

    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getApellido()
    {
        return $this->Apellido;
    }

    public function setApellido($Apellido)
    {
        $this->Apellido = $Apellido;
    }

    public function getTelefono()
    {
        return $this->Telefono;
    }

    public function setTelefono($Telefono)
    {
        $this->Telefono = $Telefono;
    }

    public function __toString()
    {
return;
    }


}

