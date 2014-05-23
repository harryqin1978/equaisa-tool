<?php

namespace FrontCoding\EquasiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Jurisdiction
 *
 * @ORM\Table(name="jurisdiction")
 * @ORM\Entity
 */
class Jurisdiction
{
    /**
     * @var string
     *
     * @ORM\Column(name="name_language_1", type="string", length=255, nullable=true)
     */
    private $nameLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="name_language_2", type="string", length=255, nullable=true)
     */
    private $nameLanguage2;

    /**
     * @var string
     *
     * @ORM\Column(name="country_language_1", type="string", length=255, nullable=true)
     */
    private $countryLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="country_language_2", type="string", length=255, nullable=true)
     */
    private $countryLanguage2;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="moderator", type="integer", nullable=true)
     */
    private $moderator;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="stamp", type="datetime", nullable=true)
     */
    private $stamp;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="Company", mappedBy="jurisdiction")
     */
    protected $companys;

    public function __construct()
    {
        $this->companys = new ArrayCollection();
    }

    /**
     * Set nameLanguage1
     *
     * @param string $nameLanguage1
     * @return Jurisdiction
     */
    public function setNameLanguage1($nameLanguage1)
    {
        $this->nameLanguage1 = $nameLanguage1;
    
        return $this;
    }

    /**
     * Get nameLanguage1
     *
     * @return string 
     */
    public function getNameLanguage1()
    {
        return $this->nameLanguage1;
    }

    /**
     * Set nameLanguage2
     *
     * @param string $nameLanguage2
     * @return Jurisdiction
     */
    public function setNameLanguage2($nameLanguage2)
    {
        $this->nameLanguage2 = $nameLanguage2;
    
        return $this;
    }

    /**
     * Get nameLanguage2
     *
     * @return string 
     */
    public function getNameLanguage2()
    {
        return $this->nameLanguage2;
    }

    /**
     * Set countryLanguage1
     *
     * @param string $countryLanguage1
     * @return Jurisdiction
     */
    public function setCountryLanguage1($countryLanguage1)
    {
        $this->countryLanguage1 = $countryLanguage1;
    
        return $this;
    }

    /**
     * Get countryLanguage1
     *
     * @return string 
     */
    public function getCountryLanguage1()
    {
        return $this->countryLanguage1;
    }

    /**
     * Set countryLanguage2
     *
     * @param string $countryLanguage2
     * @return Jurisdiction
     */
    public function setCountryLanguage2($countryLanguage2)
    {
        $this->countryLanguage2 = $countryLanguage2;
    
        return $this;
    }

    /**
     * Get countryLanguage2
     *
     * @return string 
     */
    public function getCountryLanguage2()
    {
        return $this->countryLanguage2;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Jurisdiction
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set moderator
     *
     * @param integer $moderator
     * @return Jurisdiction
     */
    public function setModerator($moderator)
    {
        $this->moderator = $moderator;
    
        return $this;
    }

    /**
     * Get moderator
     *
     * @return integer 
     */
    public function getModerator()
    {
        return $this->moderator;
    }

    /**
     * Set stamp
     *
     * @param \DateTime $stamp
     * @return Jurisdiction
     */
    public function setStamp($stamp)
    {
        $this->stamp = $stamp;
    
        return $this;
    }

    /**
     * Get stamp
     *
     * @return \DateTime 
     */
    public function getStamp()
    {
        return $this->stamp;
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
     * Add companys
     *
     * @param \FrontCoding\EquasiaBundle\Entity\Company $companys
     * @return Jurisdiction
     */
    public function addCompany(\FrontCoding\EquasiaBundle\Entity\Company $companys)
    {
        $this->companys[] = $companys;
    
        return $this;
    }

    /**
     * Remove companys
     *
     * @param \FrontCoding\EquasiaBundle\Entity\Company $companys
     */
    public function removeCompany(\FrontCoding\EquasiaBundle\Entity\Company $companys)
    {
        $this->companys->removeElement($companys);
    }

    /**
     * Get companys
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCompanys()
    {
        return $this->companys;
    }
}