<?php

namespace AGS\FinanceiroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoCobrancaPagamento
 *
 * @ORM\Table(name="tipo_cobranca_pagamento")
 * @ORM\Entity
 */
class TipoCobrancaPagamento
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
     * @ORM\Column(name="tipo_cobranca_pagamento", type="string", length=45, nullable=false)
     */
    private $tipoCobrancaPagamento;



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
     * Set tipoCobrancaPagamento
     *
     * @param string $tipoCobrancaPagamento
     * @return TipoCobrancaPagamento
     */
    public function setTipoCobrancaPagamento($tipoCobrancaPagamento)
    {
        $this->tipoCobrancaPagamento = $tipoCobrancaPagamento;

        return $this;
    }

    /**
     * Get tipoCobrancaPagamento
     *
     * @return string 
     */
    public function getTipoCobrancaPagamento()
    {
        return $this->tipoCobrancaPagamento;
    }
    
    /**
     * 
     * @return string
     */
    public function __toString()
    {
        return $this->tipoCobrancaPagamento;
    }
}
