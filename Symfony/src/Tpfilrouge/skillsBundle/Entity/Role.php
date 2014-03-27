<?php

namespace Tpfilrouge\skillsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tpfilrouge\skillsBundle\Entity\RoleRepository")
 */
class Role
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
     * @ORM\Column(name="libelleRole", type="string", length=255)
     */
    private $libelleRole;


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
     * Set libelleRole
     *
     * @param string $libelleRole
     * @return Role
     */
    public function setLibelleRole($libelleRole)
    {
        $this->libelleRole = $libelleRole;

        return $this;
    }

    /**
     * Get libelleRole
     *
     * @return string 
     */
    public function getLibelleRole()
    {
        return $this->libelleRole;
    }
}
