<?php

namespace Tpfilrouge\skillsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etat
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tpfilrouge\skillsBundle\Entity\EtatRepository")
 */
class Etat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleEtat", type="string", length=255)
     */
    private $libelleEtat;


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
     * Set libelleEtat
     *
     * @param string $libelleEtat
     * @return Etat
     */
    public function setLibelleEtat($libelleEtat)
    {
        $this->libelleEtat = $libelleEtat;

        return $this;
    }

    /**
     * Get libelleEtat
     *
     * @return string 
     */
    public function getLibelleEtat()
    {
        return $this->libelleEtat;
    }
}
