<?php

namespace AGS\FinanceiroBundle\Entity;

use Doctrine\ORM\Mapping as ORM,
    Doctrine\Common\Collections\ArrayCollection;

/**
 * Os
 *
 * @ORM\Table(name="os", indexes={@ORM\Index(name="fk_os_cliente1_idx", columns={"cliente_id"})})
 * @ORM\Entity
 */
class Os
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
     * @ORM\Column(name="data_cadastro", type="datetime", nullable=false)
     */
//    private $dataCadastro = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_prometida", type="datetime", nullable=true)
     */
    private $dataPrometida;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_pacote", type="datetime", nullable=true)
     */
    private $dataPacote;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_entrega", type="datetime", nullable=true)
     */
    private $dataEntrega;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_cobrado", type="float", precision=12, scale=2, nullable=false)
     */
    private $valorCobrado = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="obs", type="text", nullable=true)
     */
    private $obs;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '0';

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
     * @ORM\OneToMany(targetEntity="OsHasItem", mappedBy="os", cascade={"persist"})
     * 
     */
    private $osHasItens;

    public function __construct()
    {
        $this->osHasItens = new ArrayCollection();
    }

    public function getOsHasItens()
    {
        return $this->osHasItens;
    }

    public function setOsHasItens($osHasItens)
    {
        foreach ($osHasItens as $osHasItem) {
            $osHasItem->addOs($this);
        }
        
        $this->osHasItens = $osHasItens;        
        
    }    
    

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
     * Set dataCadastro
     *
     * @param \DateTime $dataCadastro
     * @return Os
     */
    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;

        return $this;
    }

    /**
     * Get dataCadastro
     *
     * @return \DateTime 
     */
    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }

    /**
     * Set dataPrometida
     *
     * @param \DateTime $dataPrometida
     * @return Os
     */
    public function setDataPrometida($dataPrometida)
    {
        $this->dataPrometida = $dataPrometida;

        return $this;
    }

    /**
     * Get dataPrometida
     *
     * @return \DateTime 
     */
    public function getDataPrometida()
    {
        return $this->dataPrometida;
    }

    /**
     * Set dataPacote
     *
     * @param \DateTime $dataPacote
     * @return Os
     */
    public function setDataPacote($dataPacote)
    {
        $this->dataPacote = $dataPacote;

        return $this;
    }

    /**
     * Get dataPacote
     *
     * @return \DateTime 
     */
    public function getDataPacote()
    {
        return $this->dataPacote;
    }

    /**
     * Set dataEntrega
     *
     * @param \DateTime $dataEntrega
     * @return Os
     */
    public function setDataEntrega($dataEntrega)
    {
        $this->dataEntrega = $dataEntrega;

        return $this;
    }

    /**
     * Get dataEntrega
     *
     * @return \DateTime 
     */
    public function getDataEntrega()
    {
        return $this->dataEntrega;
    }

    /**
     * Set valorCobrado
     *
     * @param float $valorCobrado
     * @return Os
     */
    public function setValorCobrado($valorCobrado)
    {
        $this->valorCobrado = $valorCobrado;

        return $this;
    }

    /**
     * Get valorCobrado
     *
     * @return float 
     */
    public function getValorCobrado()
    {
        return $this->valorCobrado;
    }

    /**
     * Set obs
     *
     * @param string $obs
     * @return Os
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
     * Set status
     *
     * @param integer $status
     * @return Os
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set cliente
     *
     * @param \AGS\FinanceiroBundle\Entity\Cliente $cliente
     * @return Os
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
