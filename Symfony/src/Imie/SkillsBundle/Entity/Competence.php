<?php

namespace Imie\SkillsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competence
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Imie\SkillsBundle\Entity\CompetenceRepository")
 */
class Competence
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
     * @ORM\Column(name="libelleComp", type="string", length=255)
     */
    private $libelleComp;

    /**
     * @var string
     *
     * @ORM\Column(name="niveauComp", type="string", length=30)
     */
    private $niveauComp;


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
     * Set libelleComp
     *
     * @param string $libelleComp
     * @return Competence
     */
    public function setLibelleComp($libelleComp)
    {
        $this->libelleComp = $libelleComp;

        return $this;
    }

    /**
     * Get libelleComp
     *
     * @return string 
     */
    public function getLibelleComp()
    {
        return $this->libelleComp;
    }

    /**
     * Set niveauComp
     *
     * @param string $niveauComp
     * @return Competence
     */
    public function setNiveauComp($niveauComp)
    {
        $this->niveauComp = $niveauComp;

        return $this;
    }

    /**
     * Get niveauComp
     *
     * @return string 
     */
    public function getNiveauComp()
    {
        return $this->niveauComp;
    }
}
