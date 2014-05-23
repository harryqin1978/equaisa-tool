<?php

namespace FrontCoding\EquasiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity
 */
class Contact implements UserInterface, \Serializable
{
    /**
     * @ORM\ManyToOne(targetEntity="JobTitle", inversedBy="contacts")
     * @ORM\JoinColumn(name="job_title_id", referencedColumnName="id")
     */
    protected $job_title;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname_language_1", type="string", length=100, nullable=true)
     */
    private $firstnameLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="familyname_language_1", type="string", length=100, nullable=true)
     */
    private $familynameLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname_language_2", type="string", length=100, nullable=true)
     */
    private $firstnameLanguage2;

    /**
     * @var string
     *
     * @ORM\Column(name="familyname_language_2", type="string", length=255, nullable=true)
     */
    private $familynameLanguage2;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=20, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", nullable=true)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=100, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=200, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=255, nullable=true)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="email_company", type="string", length=100, nullable=true)
     */
    private $emailCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="email_personal", type="string", length=100, nullable=true)
     */
    private $emailPersonal;

    /**
     * @var string
     *
     * @ORM\Column(name="email_google", type="string", length=100, nullable=true)
     */
    private $emailGoogle;

    /**
     * @var string
     *
     * @ORM\Column(name="skype", type="string", length=100, nullable=true)
     */
    private $skype;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile1", type="string", length=20, nullable=true)
     */
    private $mobile1;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile2", type="string", length=20, nullable=true)
     */
    private $mobile2;

    /**
     * @var integer
     *
     * @ORM\Column(name="job_title_id", type="integer", nullable=false)
     */
    private $jobTitleId;

    /**
     * @var string
     *
     * @ORM\Column(name="id_or_passport", type="string", length=100, nullable=true)
     */
    private $idOrPassport;

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
     * @var string
     *
     * @ORM\Column(name="hometown_name_of_address_language_1", type="string", length=255, nullable=true)
     */
    private $hometownNameOfAddressLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="hometown_name_of_address_language_2", type="string", length=255, nullable=true)
     */
    private $hometownNameOfAddressLanguage2;

    /**
     * @var string
     *
     * @ORM\Column(name="hometown_address_line_1_language_1", type="text", nullable=true)
     */
    private $hometownAddressLine1Language1;

    /**
     * @var string
     *
     * @ORM\Column(name="hometown_address_line_1_language_2", type="text", nullable=true)
     */
    private $hometownAddressLine1Language2;

    /**
     * @var string
     *
     * @ORM\Column(name="hometown_address_line_2_language_1", type="text", nullable=true)
     */
    private $hometownAddressLine2Language1;

    /**
     * @var string
     *
     * @ORM\Column(name="hometown_address_line_2_language_2", type="text", nullable=true)
     */
    private $hometownAddressLine2Language2;

    /**
     * @var string
     *
     * @ORM\Column(name="hometown_city_language_1", type="string", length=255, nullable=true)
     */
    private $hometownCityLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="hometown_city_language_2", type="string", length=255, nullable=true)
     */
    private $hometownCityLanguage2;

    /**
     * @var string
     *
     * @ORM\Column(name="hometown_region_language_1", type="string", length=255, nullable=true)
     */
    private $hometownRegionLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="hometown_region_language_2", type="string", length=255, nullable=true)
     */
    private $hometownRegionLanguage2;

    /**
     * @var string
     *
     * @ORM\Column(name="hometown_zip_postal_code", type="string", length=255, nullable=true)
     */
    private $hometownZipPostalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="hometown_country_language_1", type="string", length=255, nullable=true)
     */
    private $hometownCountryLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="hometown_country_language_2", type="string", length=255, nullable=true)
     */
    private $hometownCountryLanguage2;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_name_language_1", type="string", length=100, nullable=true)
     */
    private $bankNameLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_name_language_2", type="string", length=100, nullable=true)
     */
    private $bankNameLanguage2;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_beneficiary_language_1", type="string", length=200, nullable=true)
     */
    private $bankBeneficiaryLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_beneficiary_language_2", type="string", length=200, nullable=true)
     */
    private $bankBeneficiaryLanguage2;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_branch_name_language_1", type="string", length=200, nullable=true)
     */
    private $bankBranchNameLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_branch_name_language_2", type="string", length=200, nullable=true)
     */
    private $bankBranchNameLanguage2;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_name_of_address_language_1", type="string", length=255, nullable=true)
     */
    private $bankNameOfAddressLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_name_of_address_language_2", type="string", length=255, nullable=true)
     */
    private $bankNameOfAddressLanguage2;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_address_line_1_language_1", type="text", nullable=true)
     */
    private $bankAddressLine1Language1;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_address_line_1_language_2", type="text", nullable=true)
     */
    private $bankAddressLine1Language2;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_address_line_2_language_1", type="text", nullable=true)
     */
    private $bankAddressLine2Language1;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_address_line_2_language_2", type="text", nullable=true)
     */
    private $bankAddressLine2Language2;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_city_language_1", type="string", length=255, nullable=true)
     */
    private $bankCityLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_city_language_2", type="string", length=255, nullable=true)
     */
    private $bankCityLanguage2;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_region_language_1", type="string", length=255, nullable=true)
     */
    private $bankRegionLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_region_language_2", type="string", length=255, nullable=true)
     */
    private $bankRegionLanguage2;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_zip_postal_code", type="string", length=255, nullable=true)
     */
    private $bankZipPostalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_country_language_1", type="string", length=255, nullable=true)
     */
    private $bankCountryLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_country_language_2", type="string", length=255, nullable=true)
     */
    private $bankCountryLanguage2;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_number", type="string", length=100, nullable=true)
     */
    private $bankNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_iban", type="string", length=100, nullable=true)
     */
    private $bankIban;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_birth", type="date", nullable=true)
     */
    private $dateOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="text", nullable=true)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="stamp", type="datetime", nullable=false)
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
     * @ORM\OneToMany(targetEntity="Client", mappedBy="contact")
     */
    protected $clients;

    public function __construct()
    {
        $this->clients = new ArrayCollection();
    }

    /**
     * Set firstnameLanguage1
     *
     * @param string $firstnameLanguage1
     * @return Contact
     */
    public function setFirstnameLanguage1($firstnameLanguage1)
    {
        $this->firstnameLanguage1 = $firstnameLanguage1;
    
        return $this;
    }

    /**
     * Get firstnameLanguage1
     *
     * @return string 
     */
    public function getFirstnameLanguage1()
    {
        return $this->firstnameLanguage1;
    }

    /**
     * Set familynameLanguage1
     *
     * @param string $familynameLanguage1
     * @return Contact
     */
    public function setFamilynameLanguage1($familynameLanguage1)
    {
        $this->familynameLanguage1 = $familynameLanguage1;
    
        return $this;
    }

    /**
     * Get familynameLanguage1
     *
     * @return string 
     */
    public function getFamilynameLanguage1()
    {
        return $this->familynameLanguage1;
    }

    /**
     * Set firstnameLanguage2
     *
     * @param string $firstnameLanguage2
     * @return Contact
     */
    public function setFirstnameLanguage2($firstnameLanguage2)
    {
        $this->firstnameLanguage2 = $firstnameLanguage2;
    
        return $this;
    }

    /**
     * Get firstnameLanguage2
     *
     * @return string 
     */
    public function getFirstnameLanguage2()
    {
        return $this->firstnameLanguage2;
    }

    /**
     * Set familynameLanguage2
     *
     * @param string $familynameLanguage2
     * @return Contact
     */
    public function setFamilynameLanguage2($familynameLanguage2)
    {
        $this->familynameLanguage2 = $familynameLanguage2;
    
        return $this;
    }

    /**
     * Get familynameLanguage2
     *
     * @return string 
     */
    public function getFamilynameLanguage2()
    {
        return $this->familynameLanguage2;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Contact
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return Contact
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    
        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Contact
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Contact
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set company
     *
     * @param string $company
     * @return Contact
     */
    public function setCompany($company)
    {
        $this->company = $company;
    
        return $this;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set emailCompany
     *
     * @param string $emailCompany
     * @return Contact
     */
    public function setEmailCompany($emailCompany)
    {
        $this->emailCompany = $emailCompany;
    
        return $this;
    }

    /**
     * Get emailCompany
     *
     * @return string 
     */
    public function getEmailCompany()
    {
        return $this->emailCompany;
    }

    /**
     * Set emailPersonal
     *
     * @param string $emailPersonal
     * @return Contact
     */
    public function setEmailPersonal($emailPersonal)
    {
        $this->emailPersonal = $emailPersonal;
    
        return $this;
    }

    /**
     * Get emailPersonal
     *
     * @return string 
     */
    public function getEmailPersonal()
    {
        return $this->emailPersonal;
    }

    /**
     * Set emailGoogle
     *
     * @param string $emailGoogle
     * @return Contact
     */
    public function setEmailGoogle($emailGoogle)
    {
        $this->emailGoogle = $emailGoogle;
    
        return $this;
    }

    /**
     * Get emailGoogle
     *
     * @return string 
     */
    public function getEmailGoogle()
    {
        return $this->emailGoogle;
    }

    /**
     * Set skype
     *
     * @param string $skype
     * @return Contact
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;
    
        return $this;
    }

    /**
     * Get skype
     *
     * @return string 
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * Set mobile1
     *
     * @param string $mobile1
     * @return Contact
     */
    public function setMobile1($mobile1)
    {
        $this->mobile1 = $mobile1;
    
        return $this;
    }

    /**
     * Get mobile1
     *
     * @return string 
     */
    public function getMobile1()
    {
        return $this->mobile1;
    }

    /**
     * Set mobile2
     *
     * @param string $mobile2
     * @return Contact
     */
    public function setMobile2($mobile2)
    {
        $this->mobile2 = $mobile2;
    
        return $this;
    }

    /**
     * Get mobile2
     *
     * @return string 
     */
    public function getMobile2()
    {
        return $this->mobile2;
    }

    /**
     * Set jobTitleId
     *
     * @param integer $jobTitleId
     * @return Contact
     */
    public function setJobTitleId($jobTitleId)
    {
        $this->jobTitleId = $jobTitleId;
    
        return $this;
    }

    /**
     * Get jobTitleId
     *
     * @return integer 
     */
    public function getJobTitleId()
    {
        return $this->jobTitleId;
    }

    /**
     * Set idOrPassport
     *
     * @param string $idOrPassport
     * @return Contact
     */
    public function setIdOrPassport($idOrPassport)
    {
        $this->idOrPassport = $idOrPassport;
    
        return $this;
    }

    /**
     * Get idOrPassport
     *
     * @return string 
     */
    public function getIdOrPassport()
    {
        return $this->idOrPassport;
    }

    /**
     * Set nameOfAddressLanguage1
     *
     * @param string $nameOfAddressLanguage1
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * Set hometownNameOfAddressLanguage1
     *
     * @param string $hometownNameOfAddressLanguage1
     * @return Contact
     */
    public function setHometownNameOfAddressLanguage1($hometownNameOfAddressLanguage1)
    {
        $this->hometownNameOfAddressLanguage1 = $hometownNameOfAddressLanguage1;
    
        return $this;
    }

    /**
     * Get hometownNameOfAddressLanguage1
     *
     * @return string 
     */
    public function getHometownNameOfAddressLanguage1()
    {
        return $this->hometownNameOfAddressLanguage1;
    }

    /**
     * Set hometownNameOfAddressLanguage2
     *
     * @param string $hometownNameOfAddressLanguage2
     * @return Contact
     */
    public function setHometownNameOfAddressLanguage2($hometownNameOfAddressLanguage2)
    {
        $this->hometownNameOfAddressLanguage2 = $hometownNameOfAddressLanguage2;
    
        return $this;
    }

    /**
     * Get hometownNameOfAddressLanguage2
     *
     * @return string 
     */
    public function getHometownNameOfAddressLanguage2()
    {
        return $this->hometownNameOfAddressLanguage2;
    }

    /**
     * Set hometownAddressLine1Language1
     *
     * @param string $hometownAddressLine1Language1
     * @return Contact
     */
    public function setHometownAddressLine1Language1($hometownAddressLine1Language1)
    {
        $this->hometownAddressLine1Language1 = $hometownAddressLine1Language1;
    
        return $this;
    }

    /**
     * Get hometownAddressLine1Language1
     *
     * @return string 
     */
    public function getHometownAddressLine1Language1()
    {
        return $this->hometownAddressLine1Language1;
    }

    /**
     * Set hometownAddressLine1Language2
     *
     * @param string $hometownAddressLine1Language2
     * @return Contact
     */
    public function setHometownAddressLine1Language2($hometownAddressLine1Language2)
    {
        $this->hometownAddressLine1Language2 = $hometownAddressLine1Language2;
    
        return $this;
    }

    /**
     * Get hometownAddressLine1Language2
     *
     * @return string 
     */
    public function getHometownAddressLine1Language2()
    {
        return $this->hometownAddressLine1Language2;
    }

    /**
     * Set hometownAddressLine2Language1
     *
     * @param string $hometownAddressLine2Language1
     * @return Contact
     */
    public function setHometownAddressLine2Language1($hometownAddressLine2Language1)
    {
        $this->hometownAddressLine2Language1 = $hometownAddressLine2Language1;
    
        return $this;
    }

    /**
     * Get hometownAddressLine2Language1
     *
     * @return string 
     */
    public function getHometownAddressLine2Language1()
    {
        return $this->hometownAddressLine2Language1;
    }

    /**
     * Set hometownAddressLine2Language2
     *
     * @param string $hometownAddressLine2Language2
     * @return Contact
     */
    public function setHometownAddressLine2Language2($hometownAddressLine2Language2)
    {
        $this->hometownAddressLine2Language2 = $hometownAddressLine2Language2;
    
        return $this;
    }

    /**
     * Get hometownAddressLine2Language2
     *
     * @return string 
     */
    public function getHometownAddressLine2Language2()
    {
        return $this->hometownAddressLine2Language2;
    }

    /**
     * Set hometownCityLanguage1
     *
     * @param string $hometownCityLanguage1
     * @return Contact
     */
    public function setHometownCityLanguage1($hometownCityLanguage1)
    {
        $this->hometownCityLanguage1 = $hometownCityLanguage1;
    
        return $this;
    }

    /**
     * Get hometownCityLanguage1
     *
     * @return string 
     */
    public function getHometownCityLanguage1()
    {
        return $this->hometownCityLanguage1;
    }

    /**
     * Set hometownCityLanguage2
     *
     * @param string $hometownCityLanguage2
     * @return Contact
     */
    public function setHometownCityLanguage2($hometownCityLanguage2)
    {
        $this->hometownCityLanguage2 = $hometownCityLanguage2;
    
        return $this;
    }

    /**
     * Get hometownCityLanguage2
     *
     * @return string 
     */
    public function getHometownCityLanguage2()
    {
        return $this->hometownCityLanguage2;
    }

    /**
     * Set hometownRegionLanguage1
     *
     * @param string $hometownRegionLanguage1
     * @return Contact
     */
    public function setHometownRegionLanguage1($hometownRegionLanguage1)
    {
        $this->hometownRegionLanguage1 = $hometownRegionLanguage1;
    
        return $this;
    }

    /**
     * Get hometownRegionLanguage1
     *
     * @return string 
     */
    public function getHometownRegionLanguage1()
    {
        return $this->hometownRegionLanguage1;
    }

    /**
     * Set hometownRegionLanguage2
     *
     * @param string $hometownRegionLanguage2
     * @return Contact
     */
    public function setHometownRegionLanguage2($hometownRegionLanguage2)
    {
        $this->hometownRegionLanguage2 = $hometownRegionLanguage2;
    
        return $this;
    }

    /**
     * Get hometownRegionLanguage2
     *
     * @return string 
     */
    public function getHometownRegionLanguage2()
    {
        return $this->hometownRegionLanguage2;
    }

    /**
     * Set hometownZipPostalCode
     *
     * @param string $hometownZipPostalCode
     * @return Contact
     */
    public function setHometownZipPostalCode($hometownZipPostalCode)
    {
        $this->hometownZipPostalCode = $hometownZipPostalCode;
    
        return $this;
    }

    /**
     * Get hometownZipPostalCode
     *
     * @return string 
     */
    public function getHometownZipPostalCode()
    {
        return $this->hometownZipPostalCode;
    }

    /**
     * Set hometownCountryLanguage1
     *
     * @param string $hometownCountryLanguage1
     * @return Contact
     */
    public function setHometownCountryLanguage1($hometownCountryLanguage1)
    {
        $this->hometownCountryLanguage1 = $hometownCountryLanguage1;
    
        return $this;
    }

    /**
     * Get hometownCountryLanguage1
     *
     * @return string 
     */
    public function getHometownCountryLanguage1()
    {
        return $this->hometownCountryLanguage1;
    }

    /**
     * Set hometownCountryLanguage2
     *
     * @param string $hometownCountryLanguage2
     * @return Contact
     */
    public function setHometownCountryLanguage2($hometownCountryLanguage2)
    {
        $this->hometownCountryLanguage2 = $hometownCountryLanguage2;
    
        return $this;
    }

    /**
     * Get hometownCountryLanguage2
     *
     * @return string 
     */
    public function getHometownCountryLanguage2()
    {
        return $this->hometownCountryLanguage2;
    }

    /**
     * Set bankNameLanguage1
     *
     * @param string $bankNameLanguage1
     * @return Contact
     */
    public function setBankNameLanguage1($bankNameLanguage1)
    {
        $this->bankNameLanguage1 = $bankNameLanguage1;
    
        return $this;
    }

    /**
     * Get bankNameLanguage1
     *
     * @return string 
     */
    public function getBankNameLanguage1()
    {
        return $this->bankNameLanguage1;
    }

    /**
     * Set bankNameLanguage2
     *
     * @param string $bankNameLanguage2
     * @return Contact
     */
    public function setBankNameLanguage2($bankNameLanguage2)
    {
        $this->bankNameLanguage2 = $bankNameLanguage2;
    
        return $this;
    }

    /**
     * Get bankNameLanguage2
     *
     * @return string 
     */
    public function getBankNameLanguage2()
    {
        return $this->bankNameLanguage2;
    }

    /**
     * Set bankBeneficiaryLanguage1
     *
     * @param string $bankBeneficiaryLanguage1
     * @return Contact
     */
    public function setBankBeneficiaryLanguage1($bankBeneficiaryLanguage1)
    {
        $this->bankBeneficiaryLanguage1 = $bankBeneficiaryLanguage1;
    
        return $this;
    }

    /**
     * Get bankBeneficiaryLanguage1
     *
     * @return string 
     */
    public function getBankBeneficiaryLanguage1()
    {
        return $this->bankBeneficiaryLanguage1;
    }

    /**
     * Set bankBeneficiaryLanguage2
     *
     * @param string $bankBeneficiaryLanguage2
     * @return Contact
     */
    public function setBankBeneficiaryLanguage2($bankBeneficiaryLanguage2)
    {
        $this->bankBeneficiaryLanguage2 = $bankBeneficiaryLanguage2;
    
        return $this;
    }

    /**
     * Get bankBeneficiaryLanguage2
     *
     * @return string 
     */
    public function getBankBeneficiaryLanguage2()
    {
        return $this->bankBeneficiaryLanguage2;
    }

    /**
     * Set bankBranchNameLanguage1
     *
     * @param string $bankBranchNameLanguage1
     * @return Contact
     */
    public function setBankBranchNameLanguage1($bankBranchNameLanguage1)
    {
        $this->bankBranchNameLanguage1 = $bankBranchNameLanguage1;
    
        return $this;
    }

    /**
     * Get bankBranchNameLanguage1
     *
     * @return string 
     */
    public function getBankBranchNameLanguage1()
    {
        return $this->bankBranchNameLanguage1;
    }

    /**
     * Set bankBranchNameLanguage2
     *
     * @param string $bankBranchNameLanguage2
     * @return Contact
     */
    public function setBankBranchNameLanguage2($bankBranchNameLanguage2)
    {
        $this->bankBranchNameLanguage2 = $bankBranchNameLanguage2;
    
        return $this;
    }

    /**
     * Get bankBranchNameLanguage2
     *
     * @return string 
     */
    public function getBankBranchNameLanguage2()
    {
        return $this->bankBranchNameLanguage2;
    }

    /**
     * Set bankNameOfAddressLanguage1
     *
     * @param string $bankNameOfAddressLanguage1
     * @return Contact
     */
    public function setBankNameOfAddressLanguage1($bankNameOfAddressLanguage1)
    {
        $this->bankNameOfAddressLanguage1 = $bankNameOfAddressLanguage1;
    
        return $this;
    }

    /**
     * Get bankNameOfAddressLanguage1
     *
     * @return string 
     */
    public function getBankNameOfAddressLanguage1()
    {
        return $this->bankNameOfAddressLanguage1;
    }

    /**
     * Set bankNameOfAddressLanguage2
     *
     * @param string $bankNameOfAddressLanguage2
     * @return Contact
     */
    public function setBankNameOfAddressLanguage2($bankNameOfAddressLanguage2)
    {
        $this->bankNameOfAddressLanguage2 = $bankNameOfAddressLanguage2;
    
        return $this;
    }

    /**
     * Get bankNameOfAddressLanguage2
     *
     * @return string 
     */
    public function getBankNameOfAddressLanguage2()
    {
        return $this->bankNameOfAddressLanguage2;
    }

    /**
     * Set bankAddressLine1Language1
     *
     * @param string $bankAddressLine1Language1
     * @return Contact
     */
    public function setBankAddressLine1Language1($bankAddressLine1Language1)
    {
        $this->bankAddressLine1Language1 = $bankAddressLine1Language1;
    
        return $this;
    }

    /**
     * Get bankAddressLine1Language1
     *
     * @return string 
     */
    public function getBankAddressLine1Language1()
    {
        return $this->bankAddressLine1Language1;
    }

    /**
     * Set bankAddressLine1Language2
     *
     * @param string $bankAddressLine1Language2
     * @return Contact
     */
    public function setBankAddressLine1Language2($bankAddressLine1Language2)
    {
        $this->bankAddressLine1Language2 = $bankAddressLine1Language2;
    
        return $this;
    }

    /**
     * Get bankAddressLine1Language2
     *
     * @return string 
     */
    public function getBankAddressLine1Language2()
    {
        return $this->bankAddressLine1Language2;
    }

    /**
     * Set bankAddressLine2Language1
     *
     * @param string $bankAddressLine2Language1
     * @return Contact
     */
    public function setBankAddressLine2Language1($bankAddressLine2Language1)
    {
        $this->bankAddressLine2Language1 = $bankAddressLine2Language1;
    
        return $this;
    }

    /**
     * Get bankAddressLine2Language1
     *
     * @return string 
     */
    public function getBankAddressLine2Language1()
    {
        return $this->bankAddressLine2Language1;
    }

    /**
     * Set bankAddressLine2Language2
     *
     * @param string $bankAddressLine2Language2
     * @return Contact
     */
    public function setBankAddressLine2Language2($bankAddressLine2Language2)
    {
        $this->bankAddressLine2Language2 = $bankAddressLine2Language2;
    
        return $this;
    }

    /**
     * Get bankAddressLine2Language2
     *
     * @return string 
     */
    public function getBankAddressLine2Language2()
    {
        return $this->bankAddressLine2Language2;
    }

    /**
     * Set bankCityLanguage1
     *
     * @param string $bankCityLanguage1
     * @return Contact
     */
    public function setBankCityLanguage1($bankCityLanguage1)
    {
        $this->bankCityLanguage1 = $bankCityLanguage1;
    
        return $this;
    }

    /**
     * Get bankCityLanguage1
     *
     * @return string 
     */
    public function getBankCityLanguage1()
    {
        return $this->bankCityLanguage1;
    }

    /**
     * Set bankCityLanguage2
     *
     * @param string $bankCityLanguage2
     * @return Contact
     */
    public function setBankCityLanguage2($bankCityLanguage2)
    {
        $this->bankCityLanguage2 = $bankCityLanguage2;
    
        return $this;
    }

    /**
     * Get bankCityLanguage2
     *
     * @return string 
     */
    public function getBankCityLanguage2()
    {
        return $this->bankCityLanguage2;
    }

    /**
     * Set bankRegionLanguage1
     *
     * @param string $bankRegionLanguage1
     * @return Contact
     */
    public function setBankRegionLanguage1($bankRegionLanguage1)
    {
        $this->bankRegionLanguage1 = $bankRegionLanguage1;
    
        return $this;
    }

    /**
     * Get bankRegionLanguage1
     *
     * @return string 
     */
    public function getBankRegionLanguage1()
    {
        return $this->bankRegionLanguage1;
    }

    /**
     * Set bankRegionLanguage2
     *
     * @param string $bankRegionLanguage2
     * @return Contact
     */
    public function setBankRegionLanguage2($bankRegionLanguage2)
    {
        $this->bankRegionLanguage2 = $bankRegionLanguage2;
    
        return $this;
    }

    /**
     * Get bankRegionLanguage2
     *
     * @return string 
     */
    public function getBankRegionLanguage2()
    {
        return $this->bankRegionLanguage2;
    }

    /**
     * Set bankZipPostalCode
     *
     * @param string $bankZipPostalCode
     * @return Contact
     */
    public function setBankZipPostalCode($bankZipPostalCode)
    {
        $this->bankZipPostalCode = $bankZipPostalCode;
    
        return $this;
    }

    /**
     * Get bankZipPostalCode
     *
     * @return string 
     */
    public function getBankZipPostalCode()
    {
        return $this->bankZipPostalCode;
    }

    /**
     * Set bankCountryLanguage1
     *
     * @param string $bankCountryLanguage1
     * @return Contact
     */
    public function setBankCountryLanguage1($bankCountryLanguage1)
    {
        $this->bankCountryLanguage1 = $bankCountryLanguage1;
    
        return $this;
    }

    /**
     * Get bankCountryLanguage1
     *
     * @return string 
     */
    public function getBankCountryLanguage1()
    {
        return $this->bankCountryLanguage1;
    }

    /**
     * Set bankCountryLanguage2
     *
     * @param string $bankCountryLanguage2
     * @return Contact
     */
    public function setBankCountryLanguage2($bankCountryLanguage2)
    {
        $this->bankCountryLanguage2 = $bankCountryLanguage2;
    
        return $this;
    }

    /**
     * Get bankCountryLanguage2
     *
     * @return string 
     */
    public function getBankCountryLanguage2()
    {
        return $this->bankCountryLanguage2;
    }

    /**
     * Set bankNumber
     *
     * @param string $bankNumber
     * @return Contact
     */
    public function setBankNumber($bankNumber)
    {
        $this->bankNumber = $bankNumber;
    
        return $this;
    }

    /**
     * Get bankNumber
     *
     * @return string 
     */
    public function getBankNumber()
    {
        return $this->bankNumber;
    }

    /**
     * Set bankIban
     *
     * @param string $bankIban
     * @return Contact
     */
    public function setBankIban($bankIban)
    {
        $this->bankIban = $bankIban;
    
        return $this;
    }

    /**
     * Get bankIban
     *
     * @return string 
     */
    public function getBankIban()
    {
        return $this->bankIban;
    }

    /**
     * Set dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     * @return Contact
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    
        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return \DateTime 
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return Contact
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    
        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return Contact
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    
        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Contact
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set stamp
     *
     * @param \DateTime $stamp
     * @return Contact
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
     * Add clients
     *
     * @param \FrontCoding\EquasiaBundle\Entity\Client $clients
     * @return Contact
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

    /**
     * Set job_title
     *
     * @param \FrontCoding\EquasiaBundle\Entity\JobTitle $jobTitle
     * @return Contact
     */
    public function setJobTitle(\FrontCoding\EquasiaBundle\Entity\JobTitle $jobTitle = null)
    {
        $this->job_title = $jobTitle;
    
        return $this;
    }

    /**
     * Get job_title
     *
     * @return \FrontCoding\EquasiaBundle\Entity\JobTitle 
     */
    public function getJobTitle()
    {
        return $this->job_title;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return array('ROLE_CONTACT');
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
        ) = unserialize($serialized);
    }

    /**
     * @inheritDoc
     */
    public function getSalt()
    {
        return '';
    }

}