<?php

namespace AGS\FinanceiroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lancamento
 *
 * @ORM\Table(name="lancamento", indexes={@ORM\Index(name="fk_lav_lancamentos_lav_plano_contas1_idx", columns={"plano_conta_id"}), @ORM\Index(name="fk_lav_lancamentos_lav_tipo_cobranca_pagamento1_idx", columns={"tipo_cobranca_pagamento_id"}), @ORM\Index(name="fk_lav_lancamentos_roll1_idx", columns={"os_id"})})
 * @ORM\Entity
 */
class Lancamento
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
     * @var \DateTime
     *
     * @ORM\Column(name="data_vencimento", type="date", nullable=false)
     */
    private $dataVencimento;

    /**
     * @var integer
     *
     * @ORM\Column(name="situacao", type="integer", nullable=false)
     */
    private $situacao;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=45, nullable=false)
     */
    private $tipo;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=12, scale=2, nullable=false)
     */
    private $valor;

    /**
     * @var string
     *
     * @ORM\Column(name="obs", type="text", nullable=true)
     */
    private $obs;

    /**
     * @var \PlanoConta
     *
     * @ORM\ManyToOne(targetEntity="PlanoConta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="plano_conta_id", referencedColumnName="id")
     * })
     */
    private $planoConta;

    /**
     * @var \TipoCobrancaPagamento
     *
     * @ORM\ManyToOne(targetEntity="TipoCobrancaPagamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_cobranca_pagamento_id", referencedColumnName="id")
     * })
     */
    private $tipoCobrancaPagamento;

    /**
     * @var \Os
     *
     * @ORM\ManyToOne(targetEntity="Os")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="os_id", referencedColumnName="id")
     * })
     */
    private $os;



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
     * Set dataVencimento
     *
     * @param \DateTime $dataVencimento
     * @return Lancamento
     */
    public function setDataVencimento($dataVencimento)
    {
        $this->dataVencimento = $dataVencimento;

        return $this;
    }

    /**
     * Get dataVencimento
     *
     * @return \DateTime 
     */
    public function getDataVencimento()
    {
        return $this->dataVencimento;
    }

    /**
     * Set situacao
     *
     * @param integer $situacao
     * @return Lancamento
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;

        return $this;
    }

    /**
     * Get situacao
     *
     * @return integer 
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Lancamento
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set valor
     *
     * @param float $valor
     * @return Lancamento
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return float 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set obs
     *
     * @param string $obs
     * @return Lancamento
     */
    public function setObs($obs)
    {
        $this->obs = $obs;

        return $this;
    }

    /**
     * Get obs
     *
     * @return string 
     */
    public function getObs()
    {
        return $this->obs;
    }

    /**
     * Set planoConta
     *
     * @param \AGS\FinanceiroBundle\Entity\PlanoConta $planoConta
     * @return Lancamento
     */
    public function setPlanoConta(\AGS\FinanceiroBundle\Entity\PlanoConta $planoConta = null)
    {
        $this->planoConta = $planoConta;

        return $this;
    }

    /**
     * Get planoConta
     *
     * @return \AGS\FinanceiroBundle\Entity\PlanoConta 
     */
    public function getPlanoConta()
    {
        return $this->planoConta;
    }

    /**
     * Set tipoCobrancaPagamento
     *
     * @param \AGS\FinanceiroBundle\Entity\TipoCobrancaPagamento $tipoCobrancaPagamento
     * @return Lancamento
     */
    public function setTipoCobrancaPagamento(\AGS\FinanceiroBundle\Entity\TipoCobrancaPagamento $tipoCobrancaPagamento = null)
    {
        $this->tipoCobrancaPagamento = $tipoCobrancaPagamento;

        return $this;
    }

    /**
     * Get tipoCobrancaPagamento
     *
     * @return \AGS\FinanceiroBundle\Entity\TipoCobrancaPagamento 
     */
    public function getTipoCobrancaPagamento()
    {
        return $this->tipoCobrancaPagamento;
    }

    /**
     * Set os
     *
     * @param \AGS\FinanceiroBundle\Entity\Os $os
     * @return Lancamento
     */
    public function setOs(\AGS\FinanceiroBundle\Entity\Os $os = null)
    {
        $this->os = $os;

        return $this;
    }

    /**
     * Get os
     *
     * @return \AGS\FinanceiroBundle\Entity\Os 
     */
    public function getOs()
    {
        return $this->os;
    }
}
