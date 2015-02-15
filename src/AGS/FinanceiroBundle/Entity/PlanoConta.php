<?php

namespace AGS\FinanceiroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanoConta
 *
 * @ORM\Table(name="plano_conta", indexes={@ORM\Index(name="fk_lav_plano_contas_lav_plano_contas1_idx", columns={"id_pai"})})
 * @ORM\Entity
 */
class PlanoConta
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
     * @ORM\Column(name="nome", type="string", length=45, nullable=false)
     */
    private $nome;

    /**
     * @var \PlanoConta
     *
     * @ORM\ManyToOne(targetEntity="PlanoConta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pai", referencedColumnName="id")
     * })
     */
    private $idPai;



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
     * Set nome
     *
     * @param string $nome
     * @return PlanoConta
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
     * Set idPai
     *
     * @param \AGS\FinanceiroBundle\Entity\PlanoConta $idPai
     * @return PlanoConta
     */
    public function setIdPai(\AGS\FinanceiroBundle\Entity\PlanoConta $idPai = null)
    {
        $this->idPai = $idPai;

        return $this;
    }

    /**
     * Get idPai
     *
     * @return \AGS\FinanceiroBundle\Entity\PlanoConta 
     */
    public function getIdPai()
    {
        return $this->idPai;
    }

    /**
     * __toString
     *
     * @return nome
     */
    public function __toString()
    {
        return $this->nome;
    }

    
}
