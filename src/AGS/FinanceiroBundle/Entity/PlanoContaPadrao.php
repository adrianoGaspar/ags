<?php

namespace AGS\FinanceiroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanoContaPadrao
 *
 * @ORM\Table(name="plano_conta_padrao", indexes={@ORM\Index(name="fk_plano_conta_padrao_lav_plano_contas1_idx", columns={"plano_conta_id_os_venda_pf"}), @ORM\Index(name="fk_plano_conta_padrao_lav_plano_contas2_idx", columns={"plano_conta_id_os_venda_pj"}), @ORM\Index(name="fk_plano_conta_padrao_lav_plano_contas3_idx", columns={"plano_conta_id_pedido_fornecedor"})})
 * @ORM\Entity
 */
class PlanoContaPadrao
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
     * @var \PlanoConta
     *
     * @ORM\ManyToOne(targetEntity="PlanoConta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="plano_conta_id_os_venda_pf", referencedColumnName="id")
     * })
     */
    private $planoContaOsVendaPf;

    /**
     * @var \PlanoConta
     *
     * @ORM\ManyToOne(targetEntity="PlanoConta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="plano_conta_id_os_venda_pj", referencedColumnName="id")
     * })
     */
    private $planoContaOsVendaPj;

    /**
     * @var \PlanoConta
     *
     * @ORM\ManyToOne(targetEntity="PlanoConta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="plano_conta_id_pedido_fornecedor", referencedColumnName="id")
     * })
     */
    private $planoContaPedidoFornecedor;



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
     * Set planoContaOsVendaPf
     *
     * @param \AGS\FinanceiroBundle\Entity\PlanoConta $planoContaOsVendaPf
     * @return PlanoContaPadrao
     */
    public function setPlanoContaOsVendaPf(\AGS\FinanceiroBundle\Entity\PlanoConta $planoContaOsVendaPf = null)
    {
        $this->planoContaOsVendaPf = $planoContaOsVendaPf;

        return $this;
    }

    /**
     * Get planoContaOsVendaPf
     *
     * @return \AGS\FinanceiroBundle\Entity\PlanoConta 
     */
    public function getPlanoContaOsVendaPf()
    {
        return $this->planoContaOsVendaPf;
    }

    /**
     * Set planoContaOsVendaPj
     *
     * @param \AGS\FinanceiroBundle\Entity\PlanoConta $planoContaOsVendaPj
     * @return PlanoContaPadrao
     */
    public function setPlanoContaOsVendaPj(\AGS\FinanceiroBundle\Entity\PlanoConta $planoContaOsVendaPj = null)
    {
        $this->planoContaOsVendaPj = $planoContaOsVendaPj;

        return $this;
    }

    /**
     * Get planoContaOsVendaPj
     *
     * @return \AGS\FinanceiroBundle\Entity\PlanoConta 
     */
    public function getPlanoContaOsVendaPj()
    {
        return $this->planoContaOsVendaPj;
    }

    /**
     * Set planoContaPedidoFornecedor
     *
     * @param \AGS\FinanceiroBundle\Entity\PlanoConta $planoContaPedidoFornecedor
     * @return PlanoContaPadrao
     */
    public function setPlanoContaPedidoFornecedor(\AGS\FinanceiroBundle\Entity\PlanoConta $planoContaPedidoFornecedor = null)
    {
        $this->planoContaPedidoFornecedor = $planoContaPedidoFornecedor;

        return $this;
    }

    /**
     * Get planoContaPedidoFornecedor
     *
     * @return \AGS\FinanceiroBundle\Entity\PlanoConta 
     */
    public function getPlanoContaPedidoFornecedor()
    {
        return $this->planoContaPedidoFornecedor;
    }
}
