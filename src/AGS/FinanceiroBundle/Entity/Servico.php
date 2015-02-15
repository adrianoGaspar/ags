<?php

namespace AGS\FinanceiroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servico
 *
 * @ORM\Table(name="servico")
 * @ORM\Entity
 */
class Servico
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
     * @ORM\Column(name="servico", type="string", length=255, nullable=false)
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
     * Set servico
     *
     * @param string $servico
     * @return Servico
     */
    public function setServico($servico)
    {
        $this->servico = $servico;

        return $this;
    }

    /**
     * Get servico
     *
     * @return string 
     */
    public function getServico()
    {
        return $this->servico;
    }

    public function __toString()
    {
        return $this->servico;
    }
    
}
