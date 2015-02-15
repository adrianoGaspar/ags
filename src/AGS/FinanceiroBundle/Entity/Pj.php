<?php

namespace AGS\FinanceiroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pj
 *
 * @ORM\Table(name="pj", indexes={@ORM\Index(name="fk_lav_pj_lav_clientes1_idx", columns={"cliente_id"}), @ORM\Index(name="idx_1", columns={"nome_fantasia", "razao_social"})})
 * @ORM\Entity
 */
class Pj
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
     * @ORM\Column(name="cnpj", type="string", length=45, nullable=true)
     */
    private $cnpj;

    /**
     * @var string
     *
     * @ORM\Column(name="ie", type="string", length=45, nullable=true)
     */
    private $ie;

    /**
     * @var string
     *
     * @ORM\Column(name="im", type="string", length=45, nullable=true)
     */
    private $im;

    /**
     * @var string
     *
     * @ORM\Column(name="razao_social", type="string", length=255, nullable=true)
     */
    private $razaoSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_fantasia", type="string", length=255, nullable=true)
     */
    private $nomeFantasia;

    /**
     * @var \Cliente
     *
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cliente_id", referencedColumnName="id")
     * })
     */
    private $cliente;



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
     * Set cnpj
     *
     * @param string $cnpj
     * @return Pj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get cnpj
     *
     * @return string 
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set ie
     *
     * @param string $ie
     * @return Pj
     */
    public function setIe($ie)
    {
        $this->ie = $ie;

        return $this;
    }

    /**
     * Get ie
     *
     * @return string 
     */
    public function getIe()
    {
        return $this->ie;
    }

    /**
     * Set im
     *
     * @param string $im
     * @return Pj
     */
    public function setIm($im)
    {
        $this->im = $im;

        return $this;
    }

    /**
     * Get im
     *
     * @return string 
     */
    public function getIm()
    {
        return $this->im;
    }

    /**
     * Set razaoSocial
     *
     * @param string $razaoSocial
     * @return Pj
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    /**
     * Get razaoSocial
     *
     * @return string 
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * Set nomeFantasia
     *
     * @param string $nomeFantasia
     * @return Pj
     */
    public function setNomeFantasia($nomeFantasia)
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    /**
     * Get nomeFantasia
     *
     * @return string 
     */
    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }

    /**
     * Set cliente
     *
     * @param \AGS\FinanceiroBundle\Entity\Cliente $cliente
     * @return Pj
     */
    public function setCliente(\AGS\FinanceiroBundle\Entity\Cliente $cliente = null)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \AGS\FinanceiroBundle\Entity\Cliente 
     */
    public function getCliente()
    {
        return $this->cliente;
    }
}
