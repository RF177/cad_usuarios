<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

/**
 * @Entity
 * @Table(name="usuario")
 */
class Usuario {
    
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", nullable=false)
     */
    protected $id;
    
    /**
     * @Column(type="string", length=100, nullable=false)
     */
    protected $nome;
    
    /**
     * @Column(type="string", length=100, nullable=false)
     */
    protected $sobrenome;
    
    /**
     * @Column(type="string", length=100, nullable=false)
     */
    protected $senha;
  
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getSenha() {
        return $this->senha;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

}
