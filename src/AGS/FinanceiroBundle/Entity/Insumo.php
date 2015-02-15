<?php

namespace AGS\FinanceiroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Insumo
 *
 * @ORM\Table(name="insumo")
 * @ORM\Entity
 */
class Insumo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="insumo", type="string", length=150, nullable=false)
     */
    private $insumo;

    /**
     * @var string
     *
     * @ORM\Column(name="embalagem", type="string", length=45, nullable=false)
     */
    private $embalagem;

    /**
     * @var string
     *
     * @ORM\Column(name="un", type="string", length=45, nullable=false)
     */
    private $un;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", nullable=true)
     */
    private $descricao;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set insumo
     *
     * @param string $insumo
     * @return Insumo
     */
    public function setInsumo($insumo)
    {
        $this->insumo = $insumo;

        return $this;
    }

    /**
     * Get insumo
     *
     * @return string 
     */
    public function getInsumo()
    {
        return $this->insumo;
    }

    /**
     * Set embalagem
     *
     * @param string $embalagem
     * @return Insumo
     */
    public function setEmbalagem($embalagem)
    {
        $this->embalagem = $embalagem;

        return $this;
    }

    /**
     * Get embalagem
     *
     * @return string 
     */
    public function getEmbalagem()
    {
        return $this->embalagem;
    }

    /**
     * Set un
     *
     * @param string $un
     * @return Insumo
     */
    public function setUn($un)
    {
        $this->un = $un;

        return $this;
    }

    /**
     * Get un
     *
     * @return string 
     */
    public function getUn()
    {
        return $this->un;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return Insumo
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string 
     */
    public function getDescricao()
    {
        return $this->descricao;
    }
}
