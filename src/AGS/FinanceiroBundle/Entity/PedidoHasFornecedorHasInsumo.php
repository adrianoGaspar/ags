<?php

namespace AGS\FinanceiroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PedidoHasFornecedorHasInsumo
 *
 * @ORM\Table(name="pedido_has_fornecedor_has_insumo", indexes={@ORM\Index(name="fk_pedidos_has_fornecedores_has_insumos_fornecedores_has_in_idx", columns={"fornecedor_has_insumo_id"}), @ORM\Index(name="fk_pedidos_has_fornecedores_has_insumos_pedidos1_idx", columns={"pedidos_id"})})
 * @ORM\Entity
 */
class PedidoHasFornecedorHasInsumo
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
     * @ORM\Column(name="valor_praticado", type="string", length=45, nullable=false)
     */
    private $valorPraticado;

    /**
     * @var integer
     *
     * @ORM\Column(name="qtd", type="integer", nullable=false)
     */
    private $qtd;

    /**
     * @var \FornecedorHasInsumo
     *
     * @ORM\ManyToOne(targetEntity="FornecedorHasInsumo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fornecedor_has_insumo_id", referencedColumnName="id")
     * })
     */
    private $fornecedorHasInsumo;

    /**
     * @var \Pedido
     *
     * @ORM\ManyToOne(targetEntity="Pedido")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pedidos_id", referencedColumnName="id")
     * })
     */
    private $pedidos;



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
     * Set valorPraticado
     *
     * @param string $valorPraticado
     * @return PedidoHasFornecedorHasInsumo
     */
    public function setValorPraticado($valorPraticado)
    {
        $this->valorPraticado = $valorPraticado;

        return $this;
    }

    /**
     * Get valorPraticado
     *
     * @return string 
     */
    public function getValorPraticado()
    {
        return $this->valorPraticado;
    }

    /**
     * Set qtd
     *
     * @param integer $qtd
     * @return PedidoHasFornecedorHasInsumo
     */
    public function setQtd($qtd)
    {
        $this->qtd = $qtd;

        return $this;
    }

    /**
     * Get qtd
     *
     * @return integer 
     */
    public function getQtd()
    {
        return $this->qtd;
    }

    /**
     * Set fornecedorHasInsumo
     *
     * @param \AGS\FinanceiroBundle\Entity\FornecedorHasInsumo $fornecedorHasInsumo
     * @return PedidoHasFornecedorHasInsumo
     */
    public function setFornecedorHasInsumo(\AGS\FinanceiroBundle\Entity\FornecedorHasInsumo $fornecedorHasInsumo = null)
    {
        $this->fornecedorHasInsumo = $fornecedorHasInsumo;

        return $this;
    }

    /**
     * Get fornecedorHasInsumo
     *
     * @return \AGS\FinanceiroBundle\Entity\FornecedorHasInsumo 
     */
    public function getFornecedorHasInsumo()
    {
        return $this->fornecedorHasInsumo;
    }

    /**
     * Set pedidos
     *
     * @param \AGS\FinanceiroBundle\Entity\Pedido $pedidos
     * @return PedidoHasFornecedorHasInsumo
     */
    public function setPedidos(\AGS\FinanceiroBundle\Entity\Pedido $pedidos = null)
    {
        $this->pedidos = $pedidos;

        return $this;
    }

    /**
     * Get pedidos
     *
     * @return \AGS\FinanceiroBundle\Entity\Pedido 
     */
    public function getPedidos()
    {
        return $this->pedidos;
    }
}
