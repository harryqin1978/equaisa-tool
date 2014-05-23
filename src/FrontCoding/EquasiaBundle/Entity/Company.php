<?php

namespace FrontCoding\EquasiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity
 */
class Company
{

    /**
     * @ORM\ManyToOne(targetEntity="Jurisdiction", inversedBy="companys")
     * @ORM\JoinColumn(name="jurisdiction_id", referencedColumnName="id")
     */
    protected $jurisdiction;

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
     * @var integer
     *
     * @ORM\Column(name="jurisdiction_id", type="integer", nullable=false)
     */
    private $jurisdictionId;

    /**
     * @var string
     *
     * @ORM\Column(name="registration_number", type="string", length=255, nullable=true)
     */
    private $registrationNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="registration_city_language_1", type="string", length=255, nullable=true)
     */
    private $registrationCityLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="registration_city_language_2", type="string", length=255, nullable=true)
     */
    private $registrationCityLanguage2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_incorporation", type="date", nullable=true)
     */
    private $dateOfIncorporation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_termination", type="date", nullable=true)
     */
    private $dateOfTermination;

    /**
     * @var string
     *
     * @ORM\Column(name="name_of_address_language_1", type="string", length=255, nullable=true)
     */
    private $nameOfAddressLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="name_of_address_language_2", type="string", length=255, nullable=true)
     */
    private $nameOfAddressLanguage2;

    /**
     * @var string
     *
     * @ORM\Column(name="address_line_1_language_1", type="text", nullable=true)
     */
    private $addressLine1Language1;

    /**
     * @var string
     *
     * @ORM\Column(name="address_line_1_language_2", type="text", nullable=true)
     */
    private $addressLine1Language2;

    /**
     * @var string
     *
     * @ORM\Column(name="address_line_2_language_1", type="text", nullable=true)
     */
    private $addressLine2Language1;

    /**
     * @var string
     *
     * @ORM\Column(name="address_line_2_language_2", type="text", nullable=true)
     */
    private $addressLine2Language2;

    /**
     * @var string
     *
     * @ORM\Column(name="city_language_1", type="string", length=255, nullable=true)
     */
    private $cityLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="city_language_2", type="string", length=255, nullable=true)
     */
    private $cityLanguage2;

    /**
     * @var string
     *
     * @ORM\Column(name="region_language_1", type="string", length=255, nullable=true)
     */
    private $regionLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="region_language_2", type="string", length=255, nullable=true)
     */
    private $regionLanguage2;

    /**
     * @var string
     *
     * @ORM\Column(name="zip_postal_code", type="string", length=255, nullable=true)
     */
    private $zipPostalCode;

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
     * @ORM\OneToMany(targetEntity="Client", mappedBy="company")
     */
    protected $clients;

    public function __construct()
    {
        $this->clients = new ArrayCollection();
    }

    /**
     * Set nameLanguage1
     *
     * @param string $nameLanguage1
     * @return Company
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
     * @return Company
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
     * Set jurisdictionId
     *
     * @param integer $jurisdictionId
     * @return Company
     */
    public function setJurisdictionId($jurisdictionId)
    {
        $this->jurisdictionId = $jurisdictionId;
    
        return $this;
    }

    /**
     * Get jurisdictionId
     *
     * @return integer 
     */
    public function getJurisdictionId()
    {
        return $this->jurisdictionId;
    }

    /**
     * Set registrationNumber
     *
     * @param string $registrationNumber
     * @return Company
     */
    public function setRegistrationNumber($registrationNumber)
    {
        $this->registrationNumber = $registrationNumber;
    
        return $this;
    }

    /**
     * Get registrationNumber
     *
     * @return string 
     */
    public function getRegistrationNumber()
    {
        return $this->registrationNumber;
    }

    /**
     * Set registrationCityLanguage1
     *
     * @param string $registrationCityLanguage1
     * @return Company
     */
    public function setRegistrationCityLanguage1($registrationCityLanguage1)
    {
        $this->registrationCityLanguage1 = $registrationCityLanguage1;
    
        return $this;
    }

    /**
     * Get registrationCityLanguage1
     *
     * @return string 
     */
    public function getRegistrationCityLanguage1()
    {
        return $this->registrationCityLanguage1;
    }

    /**
     * Set registrationCityLanguage2
     *
     * @param string $registrationCityLanguage2
     * @return Company
     */
    public function setRegistrationCityLanguage2($registrationCityLanguage2)
    {
        $this->registrationCityLanguage2 = $registrationCityLanguage2;
    
        return $this;
    }

    /**
     * Get registrationCityLanguage2
     *
     * @return string 
     */
    public function getRegistrationCityLanguage2()
    {
        return $this->registrationCityLanguage2;
    }

    /**
     * Set dateOfIncorporation
     *
     * @param \DateTime $dateOfIncorporation
     * @return Company
     */
    public function setDateOfIncorporation($dateOfIncorporation)
    {
        $this->dateOfIncorporation = $dateOfIncorporation;
    
        return $this;
    }

    /**
     * Get dateOfIncorporation
     *
     * @return \DateTime 
     */
    public function getDateOfIncorporation()
    {
        return $this->dateOfIncorporation;
    }

    /**
     * Set dateOfTermination
     *
     * @param \DateTime $dateOfTermination
     * @return Company
     */
    public function setDateOfTermination($dateOfTermination)
    {
        $this->dateOfTermination = $dateOfTermination;
    
        return $this;
    }

    /**
     * Get dateOfTermination
     *
     * @return \DateTime 
     */
    public function getDateOfTermination()
    {
        return $this->dateOfTermination;
    }

    /**
     * Set nameOfAddressLanguage1
     *
     * @param string $nameOfAddressLanguage1
     * @return Company
     */
    public function setNameOfAddressLanguage1($nameOfAddressLanguage1)
    {
        $this->nameOfAddressLanguage1 = $nameOfAddressLanguage1;
    
        return $this;
    }

    /**
     * Get nameOfAddressLanguage1
     *
     * @return string 
     */
    public function getNameOfAddressLanguage1()
    {
        return $this->nameOfAddressLanguage1;
    }

    /**
     * Set nameOfAddressLanguage2
     *
     * @param string $nameOfAddressLanguage2
     * @return Company
     */
    public function setNameOfAddressLanguage2($nameOfAddressLanguage2)
    {
        $this->nameOfAddressLanguage2 = $nameOfAddressLanguage2;
    
        return $this;
    }

    /**
     * Get nameOfAddressLanguage2
     *
     * @return string 
     */
    public function getNameOfAddressLanguage2()
    {
        return $this->nameOfAddressLanguage2;
    }

    /**
     * Set addressLine1Language1
     *
     * @param string $addressLine1Language1
     * @return Company
     */
    public function setAddressLine1Language1($addressLine1Language1)
    {
        $this->addressLine1Language1 = $addressLine1Language1;
    
        return $this;
    }

    /**
     * Get addressLine1Language1
     *
     * @return string 
     */
    public function getAddressLine1Language1()
    {
        return $this->addressLine1Language1;
    }

    /**
     * Set addressLine1Language2
     *
     * @param string $addressLine1Language2
     * @return Company
     */
    public function setAddressLine1Language2($addressLine1Language2)
    {
        $this->addressLine1Language2 = $addressLine1Language2;
    
        return $this;
    }

    /**
     * Get addressLine1Language2
     *
     * @return string 
     */
    public function getAddressLine1Language2()
    {
        return $this->addressLine1Language2;
    }

    /**
     * Set addressLine2Language1
     *
     * @param string $addressLine2Language1
     * @return Company
     */
    public function setAddressLine2Language1($addressLine2Language1)
    {
        $this->addressLine2Language1 = $addressLine2Language1;
    
        return $this;
    }

    /**
     * Get addressLine2Language1
     *
     * @return string 
     */
    public function getAddressLine2Language1()
    {
        return $this->addressLine2Language1;
    }

    /**
     * Set addressLine2Language2
     *
     * @param string $addressLine2Language2
     * @return Company
     */
    public function setAddressLine2Language2($addressLine2Language2)
    {
        $this->addressLine2Language2 = $addressLine2Language2;
    
        return $this;
    }

    /**
     * Get addressLine2Language2
     *
     * @return string 
     */
    public function getAddressLine2Language2()
    {
        return $this->addressLine2Language2;
    }

    /**
     * Set cityLanguage1
     *
     * @param string $cityLanguage1
     * @return Company
     */
    public function setCityLanguage1($cityLanguage1)
    {
        $this->cityLanguage1 = $cityLanguage1;
    
        return $this;
    }

    /**
     * Get cityLanguage1
     *
     * @return string 
     */
    public function getCityLanguage1()
    {
        return $this->cityLanguage1;
    }

    /**
     * Set cityLanguage2
     *
     * @param string $cityLanguage2
     * @return Company
     */
    public function setCityLanguage2($cityLanguage2)
    {
        $this->cityLanguage2 = $cityLanguage2;
    
        return $this;
    }

    /**
     * Get cityLanguage2
     *
     * @return string 
     */
    public function getCityLanguage2()
    {
        return $this->cityLanguage2;
    }

    /**
     * Set regionLanguage1
     *
     * @param string $regionLanguage1
     * @return Company
     */
    public function setRegionLanguage1($regionLanguage1)
    {
        $this->regionLanguage1 = $regionLanguage1;
    
        return $this;
    }

    /**
     * Get regionLanguage1
     *
     * @return string 
     */
    public function getRegionLanguage1()
    {
        return $this->regionLanguage1;
    }

    /**
     * Set regionLanguage2
     *
     * @param string $regionLanguage2
     * @return Company
     */
    public function setRegionLanguage2($regionLanguage2)
    {
        $this->regionLanguage2 = $regionLanguage2;
    
        return $this;
    }

    /**
     * Get regionLanguage2
     *
     * @return string 
     */
    public function getRegionLanguage2()
    {
        return $this->regionLanguage2;
    }

    /**
     * Set zipPostalCode
     *
     * @param string $zipPostalCode
     * @return Company
     */
    public function setZipPostalCode($zipPostalCode)
    {
        $this->zipPostalCode = $zipPostalCode;
    
        return $this;
    }

    /**
     * Get zipPostalCode
     *
     * @return string 
     */
    public function getZipPostalCode()
    {
        return $this->zipPostalCode;
    }

    /**
     * Set countryLanguage1
     *
     * @param string $countryLanguage1
     * @return Company
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
     * @return Company
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
     * Set moderator
     *
     * @param integer $moderator
     * @return Company
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
     * @return Company
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
     * Set jurisdiction
     *
     * @param \FrontCoding\EquasiaBundle\Entity\Jurisdiction $jurisdiction
     * @return Company
     */
    public function setJurisdiction(\FrontCoding\EquasiaBundle\Entity\Jurisdiction $jurisdiction = null)
    {
        $this->jurisdiction = $jurisdiction;
    
        return $this;
    }

    /**
     * Get jurisdiction
     *
     * @return \FrontCoding\EquasiaBundle\Entity\Jurisdiction 
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * Add clients
     *
     * @param \FrontCoding\EquasiaBundle\Entity\Client $clients
     * @return Company
     */
    public function addClient(\FrontCoding\EquasiaBundle\Entity\Client $clients)
    {
        $this->clients[] = $clients;
    
        return $this;
    }

    /**
     * Remove clients
     *
     * @param \FrontCoding\EquasiaBundle\Entity\Client $clients
     */
    public function removeClient(\FrontCoding\EquasiaBundle\Entity\Client $clients)
    {
        $this->clients->removeElement($clients);
    }

    /**
     * Get clients
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClients()
    {
        return $this->clients;
    }
}