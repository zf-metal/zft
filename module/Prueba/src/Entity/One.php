<?php

namespace Prueba\Entity;

/**
 * One
 *
 *
 *
 * @author Cristian Incarnato
 * @license MIT
 * @link
 * @ORM\Table(name="tn_one")
 * @ORM\Entity(repositoryClass="Prueba\Repository\OneRepository")
 */
class One
{

    /**
     * @Annotation\Attributes({"type":"hidden"})
     * @Annotation\Type("Zend\Form\Element\Hidden")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", length=11, unique=false, nullable=false, name="id")
     */
    public $id = null;

    /**
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"name", "description":""})
     * @ORM\Column(type="string", length=200, unique=false, nullable=true, name="name")
     */
    public $name = null;

    /**
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"lastname", "description":""})
     * @ORM\Column(type="string", length=200, unique=false, nullable=true,
     * name="lastname")
     */
    public $lastname = null;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function __toString()
    {
        return  $this->name." ".  $this->lastname;
    }


}

