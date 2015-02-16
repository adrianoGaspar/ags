<?php

namespace AGS\FinanceiroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pf
 *
 * @ORM\Table(name="pf", indexes={@ORM\Index(name="fk_lav_pf_lav_clientes1_idx", columns={"cliente_id"}), @ORM\Index(name="idx_1", columns={"nome"})})
 * @ORM\Entity
 */
class Pf
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
     * @ORM\Column(name="cpf", type="string", length=25, nullable=true)
     */
    private $cpf;

    /**
     * @var string
     *
     * @ORM\Column(name="rg", type="string", length=45, nullable=true)
     */
    private $rg;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=false)
     */
    private $nome;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="aniversario", type="date", nullable=true)
     */
    private $aniversario;

    /**
     * @var \Cliente
     *
     * @ORM\OneToOne(targetEntity="Cliente", inversedBy="pf", cascade={"persist", "remove"})
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
     * Set cpf
     *
     * @param string $cpf
     * @return Pf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get cpf
     *
     * @return string 
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set rg
     *
     * @param string $rg
     * @return Pf
     */
    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }

    /**
     * Get rg
     *
     * @return string 
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Pf
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set aniversario
     *
     * @param \DateTime $aniversario
     * @return Pf
     */
    public function setAniversario($aniversario)
    {
        $this->aniversario = $aniversario;

        return $this;
    }

    /**
     * Get aniversario
     *
     * @return \DateTime 
     */
    public function getAniversario()
    {
        return $this->aniversario;
    }

    /**
     * Set cliente
     *
     * @param \AGS\FinanceiroBundle\Entity\Cliente $cliente
     * @return Pf
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
