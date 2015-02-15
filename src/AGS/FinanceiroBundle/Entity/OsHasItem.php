<?php

namespace AGS\FinanceiroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OsHasItem
 *
 * @ORM\Table(name="os_has_item", indexes={@ORM\Index(name="fk_os_has_item_item1_idx", columns={"item_id"}), @ORM\Index(name="fk_os_has_item_os1_idx", columns={"os_id"}), @ORM\Index(name="fk_os_has_item_servico1_idx", columns={"servico_id"})})
 * @ORM\Entity
 */
class OsHasItem
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
     * @ORM\Column(name="qtd", type="integer", nullable=false)
     */
    private $qtd;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=8, scale=2, nullable=false)
     */
    private $valor;

    /**
     * @var string
     *
     * @ORM\Column(name="un", type="string", length=45, nullable=false)
     */
    private $un;

    /**
     * @var \Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="id")
     * })
     */
    private $item;

    /**
     * @var \Os
     *
     * @ORM\ManyToOne(targetEntity="Os", inversedBy="osHasItens")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="os_id", referencedColumnName="id")
     * })
     */
    private $os;

    /**
     * @var \Servico
     *
     * @ORM\ManyToOne(targetEntity="Servico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="servico_id", referencedColumnName="id")
     * })
     */
    private $servico;



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
     * Set qtd
     *
     * @param integer $qtd
     * @return OsHasItem
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
     * Set valor
     *
     * @param float $valor
     * @return OsHasItem
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
     * Set un
     *
     * @param string $un
     * @return OsHasItem
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
     * Set item
     *
     * @param \AGS\FinanceiroBundle\Entity\Item $item
     * @return OsHasItem
     */
    public function setItem(\AGS\FinanceiroBundle\Entity\Item $item = null)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return \AGS\FinanceiroBundle\Entity\Item 
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set os
     *
     * @param \AGS\FinanceiroBundle\Entity\Os $os
     * @return OsHasItem
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

    /**
     * Set servico
     *
     * @param \AGS\FinanceiroBundle\Entity\Servico $servico
     * @return OsHasItem
     */
    public function setServico(\AGS\FinanceiroBundle\Entity\Servico $servico = null)
    {
        $this->servico = $servico;

        return $this;
    }

    /**
     * Get servico
     *
     * @return \AGS\FinanceiroBundle\Entity\Servico 
     */
    public function getServico()
    {
        return $this->servico;
    }

    
    public function addOs(Os $os)
    {
        $this->os = $os;
        return $this->os;
    }

    
    public function __toString()
    {
        return null;
    }
    
    
}
