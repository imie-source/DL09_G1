<?php

namespace Imie\SkillsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Imie\SkillsBundle\Entity\PromotionRepository")
 */
class Promotion
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
     * @ORM\Column(name="libellePromo", type="string", length=255)
     */
    private $libellePromo;


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
     * Set libellePromo
     *
     * @param string $libellePromo
     * @return Promotion
     */
    public function setLibellePromo($libellePromo)
    {
        $this->libellePromo = $libellePromo;

        return $this;
    }

    /**
     * Get libellePromo
     *
     * @return string 
     */
    public function getLibellePromo()
    {
        return $this->libellePromo;
    }
}
