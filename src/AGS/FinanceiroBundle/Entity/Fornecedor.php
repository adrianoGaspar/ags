<?php

namespace AGS\FinanceiroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fornecedor
 *
 * @ORM\Table(name="fornecedor", indexes={@ORM\Index(name="fk_fornecedores_lav_pj1_idx", columns={"pj_id"})})
 * @ORM\Entity
 */
class Fornecedor
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
     * @var integer
     *
     * @ORM\Column(name="status_fornecedor", type="integer", nullable=false)
     */
    private $statusFornecedor = '1';

    /**
     * @var \Pj
     *
     * @ORM\ManyToOne(targetEntity="Pj")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pj_id", referencedColumnName="id")
     * })
     */
    private $pj;


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
     * Set statusFornecedor
     *
     * @param integer $statusFornecedor
     * @return Fornecedor
     */
    public function setStatusFornecedor($statusFornecedor)
    {
        $this->statusFornecedor = $statusFornecedor;

        return $this;
    }

    /**
     * Get statusFornecedor
     *
     * @return integer 
     */
    public function getStatusFornecedor()
    {
        return $this->statusFornecedor;
    }

    /**
     * Set pj
     *
     * @param \AGS\FinanceiroBundle\Entity\Pj $pj
     * @return Fornecedor
     */
    public function setPj(\AGS\FinanceiroBundle\Entity\Pj $pj = null)
    {
        $this->pj = $pj;

        return $this;
    }

    /**
     * Get pj
     *
     * @return \AGS\FinanceiroBundle\Entity\Pj 
     */
    public function getPj()
    {
        return $this->pj;
    }
}
