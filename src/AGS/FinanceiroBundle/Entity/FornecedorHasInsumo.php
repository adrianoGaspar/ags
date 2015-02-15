<?php

namespace AGS\FinanceiroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FornecedorHasInsumo
 *
 * @ORM\Table(name="fornecedor_has_insumo", indexes={@ORM\Index(name="fk_fornecedores_has_insumos_insumos1_idx", columns={"insumo_id"}), @ORM\Index(name="fk_fornecedores_has_insumos_fornecedores1_idx", columns={"fornecedor_id"})})
 * @ORM\Entity
 */
class FornecedorHasInsumo
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
     * @var float
     *
     * @ORM\Column(name="valor_tabela", type="float", precision=12, scale=2, nullable=true)
     */
    private $valorTabela = '0.00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false)
     */
    private $data = 'CURRENT_TIMESTAMP';

    /**
     * @var \Fornecedor
     *
     * @ORM\ManyToOne(targetEntity="Fornecedor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fornecedor_id", referencedColumnName="id")
     * })
     */
    private $fornecedor;

    /**
     * @var \Insumo
     *
     * @ORM\ManyToOne(targetEntity="Insumo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="insumo_id", referencedColumnName="id")
     * })
     */
    private $insumo;



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
     * Set valorTabela
     *
     * @param float $valorTabela
     * @return FornecedorHasInsumo
     */
    public function setValorTabela($valorTabela)
    {
        $this->valorTabela = $valorTabela;

        return $this;
    }

    /**
     * Get valorTabela
     *
     * @return float 
     */
    public function getValorTabela()
    {
        return $this->valorTabela;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     * @return FornecedorHasInsumo
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set fornecedor
     *
     * @param \AGS\FinanceiroBundle\Entity\Fornecedor $fornecedor
     * @return FornecedorHasInsumo
     */
    public function setFornecedor(\AGS\FinanceiroBundle\Entity\Fornecedor $fornecedor = null)
    {
        $this->fornecedor = $fornecedor;

        return $this;
    }

    /**
     * Get fornecedor
     *
     * @return \AGS\FinanceiroBundle\Entity\Fornecedor 
     */
    public function getFornecedor()
    {
        return $this->fornecedor;
    }

    /**
     * Set insumo
     *
     * @param \AGS\FinanceiroBundle\Entity\Insumo $insumo
     * @return FornecedorHasInsumo
     */
    public function setInsumo(\AGS\FinanceiroBundle\Entity\Insumo $insumo = null)
    {
        $this->insumo = $insumo;

        return $this;
    }

    /**
     * Get insumo
     *
     * @return \AGS\FinanceiroBundle\Entity\Insumo 
     */
    public function getInsumo()
    {
        return $this->insumo;
    }
}
