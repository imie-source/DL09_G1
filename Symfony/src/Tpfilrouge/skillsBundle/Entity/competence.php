<?php

namespace Tpfilrouge\skillsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competence
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tpfilrouge\skillsBundle\Entity\CompetenceRepository")
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="niveau", type="integer")
     */
    private $niveau;
	
	
	/**
	* @ORM\ManyToOne(targetEntity="Competence", inversedBy="child_competences")
	* @ORM\JoinColumn(name="parent_competence_id", referencedColumnName="id")
	*/
	
	
	protected $parent_competence;
	
	
	
	/**
	* @ORM\OneToMany(targetEntity="Competence", mappedBy="parent_competence")
	*
	*/
	
	protected $child_competences;

	
	
	
	/*------------------CONSTRUCT----------------------------*/
	
	
	public function __construct(){
		$this->child_competences = new \Doctrine\Common\Collections\ArrayCollection;
	}
	
	
	/*----------------------GETTER ------------------------------*/
	
	
	public function getParentCompetence(){
		return $this->parent_competence;
	}
	
	public function getChildCompetences(){
		return $this->child_competences;
	}
	
	
	/*---------------------SETTER----------------------------------*/
	
	
	public function setParentCompetence($x){
		$this->parent_competence = $x;
	}
	
	public function setChildCompetences($x){
		$this->child_competences = $x;
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
     * Set libelle
     *
     * @param string $libelle
     * @return competence
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set niveau
     *
     * @param integer $niveau
     * @return competence
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    
        return $this;
    }

    /**
     * Get niveau
     *
     * @return integer 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }
}
