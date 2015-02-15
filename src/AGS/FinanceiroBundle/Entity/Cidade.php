<?php

namespace AGS\FinanceiroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cidade
 *
 * @ORM\Table(name="cidade", indexes={@ORM\Index(name="fk_lav_cidades_estado1_idx", columns={"estado_id"})})
 * @ORM\Entity()
 */
class Cidade
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
     * @ORM\Column(name="cidade", type="string", length=45, nullable=false)
     */
    private $cidade;

    /**
     * @var \Estado
     *
     * @ORM\ManyToOne(targetEntity="Estado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado_id", referencedColumnName="id")
     * })
     */
    private $estado;



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
     * Set cidade
     *
     * @param string $cidade
     * @return Cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get cidade
     *
     * @return string 
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set estado
     *
     * @param \AGS\FinanceiroBundle\Entity\Estado $estado
     * @return Cidade
     */
    public function setEstado(\AGS\FinanceiroBundle\Entity\Estado $estado = null)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return \AGS\FinanceiroBundle\Entity\Estado 
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
