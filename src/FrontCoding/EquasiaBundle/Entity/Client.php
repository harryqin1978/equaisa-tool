<?php

namespace FrontCoding\EquasiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
 */
class Client
{

    /**
     * @ORM\ManyToOne(targetEntity="Company", inversedBy="clients")
     * @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     */
    protected $company;

    /**
     * @ORM\ManyToOne(targetEntity="Contact", inversedBy="clients")
     * @ORM\JoinColumn(name="contact_id", referencedColumnName="id")
     */
    protected $contact;

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
     * @ORM\Column(name="company_id", type="integer", nullable=false)
     */
    private $companyId;

    /**
     * @var integer
     *
     * @ORM\Column(name="contact_id", type="integer", nullable=false)
     */
    private $contactId;

    /**
     * @var string
     *
     * @ORM\Column(name="invoicing_name_of_address_language_1", type="string", length=255, nullable=true)
     */
    private $invoicingNameOfAddressLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="invoicing_name_of_address_language_2", type="string", length=255, nullable=true)
     */
    private $invoicingNameOfAddressLanguage2;

    /**
     * @var string
     *
     * @ORM\Column(name="invoicing_address_line_1_language_1", type="text", nullable=true)
     */
    private $invoicingAddressLine1Language1;

    /**
     * @var string
     *
     * @ORM\Column(name="invoicing_address_line_1_language_2", type="text", nullable=true)
     */
    private $invoicingAddressLine1Language2;

    /**
     * @var string
     *
     * @ORM\Column(name="invoicing_address_line_2_language_1", type="text", nullable=true)
     */
    private $invoicingAddressLine2Language1;

    /**
     * @var string
     *
     * @ORM\Column(name="invoicing_address_line_2_language_2", type="text", nullable=true)
     */
    private $invoicingAddressLine2Language2;

    /**
     * @var string
     *
     * @ORM\Column(name="invoicing_city_language_1", type="string", length=255, nullable=true)
     */
    private $invoicingCityLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="invoicing_city_language_2", type="string", length=255, nullable=true)
     */
    private $invoicingCityLanguage2;

    /**
     * @var string
     *
     * @ORM\Column(name="invoicing_region_language_1", type="string", length=255, nullable=true)
     */
    private $invoicingRegionLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="invoicing_region_language_2", type="string", length=255, nullable=true)
     */
    private $invoicingRegionLanguage2;

    /**
     * @var string
     *
     * @ORM\Column(name="invoicing_zip_postal_code", type="string", length=255, nullable=true)
     */
    private $invoicingZipPostalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="invoicing_country_language_1", type="string", length=255, nullable=true)
     */
    private $invoicingCountryLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="invoicing_country_language_2", type="string", length=255, nullable=true)
     */
    private $invoicingCountryLanguage2;

    /**
     * @var string
     *
     * @ORM\Column(name="visiting_name_of_address_language_1", type="string", length=255, nullable=true)
     */
    private $visitingNameOfAddressLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="visiting_name_of_address_language_2", type="string", length=255, nullable=true)
     */
    private $visitingNameOfAddressLanguage2;

    /**
     * @var string
     *
     * @ORM\Column(name="visiting_address_line_1_language_1", type="text", nullable=true)
     */
    private $visitingAddressLine1Language1;

    /**
     * @var string
     *
     * @ORM\Column(name="visiting_address_line_1_language_2", type="text", nullable=true)
     */
    private $visitingAddressLine1Language2;

    /**
     * @var string
     *
     * @ORM\Column(name="visiting_address_line_2_language_1", type="text", nullable=true)
     */
    private $visitingAddressLine2Language1;

    /**
     * @var string
     *
     * @ORM\Column(name="visiting_address_line_2_language_2", type="text", nullable=true)
     */
    private $visitingAddressLine2Language2;

    /**
     * @var string
     *
     * @ORM\Column(name="visiting_city_language_1", type="string", length=255, nullable=true)
     */
    private $visitingCityLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="visiting_city_language_2", type="string", length=255, nullable=true)
     */
    private $visitingCityLanguage2;

    /**
     * @var string
     *
     * @ORM\Column(name="visiting_region_language_1", type="string", length=255, nullable=true)
     */
    private $visitingRegionLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="visiting_region_language_2", type="string", length=255, nullable=true)
     */
    private $visitingRegionLanguage2;

    /**
     * @var string
     *
     * @ORM\Column(name="visiting_zip_postal_code", type="string", length=255, nullable=true)
     */
    private $visitingZipPostalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="visiting_country_language_1", type="string", length=255, nullable=true)
     */
    private $visitingCountryLanguage1;

    /**
     * @var string
     *
     * @ORM\Column(name="visiting_country_language_2", type="string", length=255, nullable=true)
     */
    private $visitingCountryLanguage2;

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
     * Set nameLanguage1
     *
     * @param string $nameLanguage1
     * @return Client
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
     * @return Client
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
     * Set companyId
     *
     * @param integer $companyId
     * @return Client
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
    
        return $this;
    }

    /**
     * Get companyId
     *
     * @return integer 
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * Set contactId
     *
     * @param integer $contactId
     * @return Client
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
    
        return $this;
    }

    /**
     * Get contactId
     *
     * @return integer 
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Set invoicingNameOfAddressLanguage1
     *
     * @param string $invoicingNameOfAddressLanguage1
     * @return Client
     */
    public function setInvoicingNameOfAddressLanguage1($invoicingNameOfAddressLanguage1)
    {
        $this->invoicingNameOfAddressLanguage1 = $invoicingNameOfAddressLanguage1;
    
        return $this;
    }

    /**
     * Get invoicingNameOfAddressLanguage1
     *
     * @return string 
     */
    public function getInvoicingNameOfAddressLanguage1()
    {
        return $this->invoicingNameOfAddressLanguage1;
    }

    /**
     * Set invoicingNameOfAddressLanguage2
     *
     * @param string $invoicingNameOfAddressLanguage2
     * @return Client
     */
    public function setInvoicingNameOfAddressLanguage2($invoicingNameOfAddressLanguage2)
    {
        $this->invoicingNameOfAddressLanguage2 = $invoicingNameOfAddressLanguage2;
    
        return $this;
    }

    /**
     * Get invoicingNameOfAddressLanguage2
     *
     * @return string 
     */
    public function getInvoicingNameOfAddressLanguage2()
    {
        return $this->invoicingNameOfAddressLanguage2;
    }

    /**
     * Set invoicingAddressLine1Language1
     *
     * @param string $invoicingAddressLine1Language1
     * @return Client
     */
    public function setInvoicingAddressLine1Language1($invoicingAddressLine1Language1)
    {
        $this->invoicingAddressLine1Language1 = $invoicingAddressLine1Language1;
    
        return $this;
    }

    /**
     * Get invoicingAddressLine1Language1
     *
     * @return string 
     */
    public function getInvoicingAddressLine1Language1()
    {
        return $this->invoicingAddressLine1Language1;
    }

    /**
     * Set invoicingAddressLine1Language2
     *
     * @param string $invoicingAddressLine1Language2
     * @return Client
     */
    public function setInvoicingAddressLine1Language2($invoicingAddressLine1Language2)
    {
        $this->invoicingAddressLine1Language2 = $invoicingAddressLine1Language2;
    
        return $this;
    }

    /**
     * Get invoicingAddressLine1Language2
     *
     * @return string 
     */
    public function getInvoicingAddressLine1Language2()
    {
        return $this->invoicingAddressLine1Language2;
    }

    /**
     * Set invoicingAddressLine2Language1
     *
     * @param string $invoicingAddressLine2Language1
     * @return Client
     */
    public function setInvoicingAddressLine2Language1($invoicingAddressLine2Language1)
    {
        $this->invoicingAddressLine2Language1 = $invoicingAddressLine2Language1;
    
        return $this;
    }

    /**
     * Get invoicingAddressLine2Language1
     *
     * @return string 
     */
    public function getInvoicingAddressLine2Language1()
    {
        return $this->invoicingAddressLine2Language1;
    }

    /**
     * Set invoicingAddressLine2Language2
     *
     * @param string $invoicingAddressLine2Language2
     * @return Client
     */
    public function setInvoicingAddressLine2Language2($invoicingAddressLine2Language2)
    {
        $this->invoicingAddressLine2Language2 = $invoicingAddressLine2Language2;
    
        return $this;
    }

    /**
     * Get invoicingAddressLine2Language2
     *
     * @return string 
     */
    public function getInvoicingAddressLine2Language2()
    {
        return $this->invoicingAddressLine2Language2;
    }

    /**
     * Set invoicingCityLanguage1
     *
     * @param string $invoicingCityLanguage1
     * @return Client
     */
    public function setInvoicingCityLanguage1($invoicingCityLanguage1)
    {
        $this->invoicingCityLanguage1 = $invoicingCityLanguage1;
    
        return $this;
    }

    /**
     * Get invoicingCityLanguage1
     *
     * @return string 
     */
    public function getInvoicingCityLanguage1()
    {
        return $this->invoicingCityLanguage1;
    }

    /**
     * Set invoicingCityLanguage2
     *
     * @param string $invoicingCityLanguage2
     * @return Client
     */
    public function setInvoicingCityLanguage2($invoicingCityLanguage2)
    {
        $this->invoicingCityLanguage2 = $invoicingCityLanguage2;
    
        return $this;
    }

    /**
     * Get invoicingCityLanguage2
     *
     * @return string 
     */
    public function getInvoicingCityLanguage2()
    {
        return $this->invoicingCityLanguage2;
    }

    /**
     * Set invoicingRegionLanguage1
     *
     * @param string $invoicingRegionLanguage1
     * @return Client
     */
    public function setInvoicingRegionLanguage1($invoicingRegionLanguage1)
    {
        $this->invoicingRegionLanguage1 = $invoicingRegionLanguage1;
    
        return $this;
    }

    /**
     * Get invoicingRegionLanguage1
     *
     * @return string 
     */
    public function getInvoicingRegionLanguage1()
    {
        return $this->invoicingRegionLanguage1;
    }

    /**
     * Set invoicingRegionLanguage2
     *
     * @param string $invoicingRegionLanguage2
     * @return Client
     */
    public function setInvoicingRegionLanguage2($invoicingRegionLanguage2)
    {
        $this->invoicingRegionLanguage2 = $invoicingRegionLanguage2;
    
        return $this;
    }

    /**
     * Get invoicingRegionLanguage2
     *
     * @return string 
     */
    public function getInvoicingRegionLanguage2()
    {
        return $this->invoicingRegionLanguage2;
    }

    /**
     * Set invoicingZipPostalCode
     *
     * @param string $invoicingZipPostalCode
     * @return Client
     */
    public function setInvoicingZipPostalCode($invoicingZipPostalCode)
    {
        $this->invoicingZipPostalCode = $invoicingZipPostalCode;
    
        return $this;
    }

    /**
     * Get invoicingZipPostalCode
     *
     * @return string 
     */
    public function getInvoicingZipPostalCode()
    {
        return $this->invoicingZipPostalCode;
    }

    /**
     * Set invoicingCountryLanguage1
     *
     * @param string $invoicingCountryLanguage1
     * @return Client
     */
    public function setInvoicingCountryLanguage1($invoicingCountryLanguage1)
    {
        $this->invoicingCountryLanguage1 = $invoicingCountryLanguage1;
    
        return $this;
    }

    /**
     * Get invoicingCountryLanguage1
     *
     * @return string 
     */
    public function getInvoicingCountryLanguage1()
    {
        return $this->invoicingCountryLanguage1;
    }

    /**
     * Set invoicingCountryLanguage2
     *
     * @param string $invoicingCountryLanguage2
     * @return Client
     */
    public function setInvoicingCountryLanguage2($invoicingCountryLanguage2)
    {
        $this->invoicingCountryLanguage2 = $invoicingCountryLanguage2;
    
        return $this;
    }

    /**
     * Get invoicingCountryLanguage2
     *
     * @return string 
     */
    public function getInvoicingCountryLanguage2()
    {
        return $this->invoicingCountryLanguage2;
    }

    /**
     * Set visitingNameOfAddressLanguage1
     *
     * @param string $visitingNameOfAddressLanguage1
     * @return Client
     */
    public function setVisitingNameOfAddressLanguage1($visitingNameOfAddressLanguage1)
    {
        $this->visitingNameOfAddressLanguage1 = $visitingNameOfAddressLanguage1;
    
        return $this;
    }

    /**
     * Get visitingNameOfAddressLanguage1
     *
     * @return string 
     */
    public function getVisitingNameOfAddressLanguage1()
    {
        return $this->visitingNameOfAddressLanguage1;
    }

    /**
     * Set visitingNameOfAddressLanguage2
     *
     * @param string $visitingNameOfAddressLanguage2
     * @return Client
     */
    public function setVisitingNameOfAddressLanguage2($visitingNameOfAddressLanguage2)
    {
        $this->visitingNameOfAddressLanguage2 = $visitingNameOfAddressLanguage2;
    
        return $this;
    }

    /**
     * Get visitingNameOfAddressLanguage2
     *
     * @return string 
     */
    public function getVisitingNameOfAddressLanguage2()
    {
        return $this->visitingNameOfAddressLanguage2;
    }

    /**
     * Set visitingAddressLine1Language1
     *
     * @param string $visitingAddressLine1Language1
     * @return Client
     */
    public function setVisitingAddressLine1Language1($visitingAddressLine1Language1)
    {
        $this->visitingAddressLine1Language1 = $visitingAddressLine1Language1;
    
        return $this;
    }

    /**
     * Get visitingAddressLine1Language1
     *
     * @return string 
     */
    public function getVisitingAddressLine1Language1()
    {
        return $this->visitingAddressLine1Language1;
    }

    /**
     * Set visitingAddressLine1Language2
     *
     * @param string $visitingAddressLine1Language2
     * @return Client
     */
    public function setVisitingAddressLine1Language2($visitingAddressLine1Language2)
    {
        $this->visitingAddressLine1Language2 = $visitingAddressLine1Language2;
    
        return $this;
    }

    /**
     * Get visitingAddressLine1Language2
     *
     * @return string 
     */
    public function getVisitingAddressLine1Language2()
    {
        return $this->visitingAddressLine1Language2;
    }

    /**
     * Set visitingAddressLine2Language1
     *
     * @param string $visitingAddressLine2Language1
     * @return Client
     */
    public function setVisitingAddressLine2Language1($visitingAddressLine2Language1)
    {
        $this->visitingAddressLine2Language1 = $visitingAddressLine2Language1;
    
        return $this;
    }

    /**
     * Get visitingAddressLine2Language1
     *
     * @return string 
     */
    public function getVisitingAddressLine2Language1()
    {
        return $this->visitingAddressLine2Language1;
    }

    /**
     * Set visitingAddressLine2Language2
     *
     * @param string $visitingAddressLine2Language2
     * @return Client
     */
    public function setVisitingAddressLine2Language2($visitingAddressLine2Language2)
    {
        $this->visitingAddressLine2Language2 = $visitingAddressLine2Language2;
    
        return $this;
    }

    /**
     * Get visitingAddressLine2Language2
     *
     * @return string 
     */
    public function getVisitingAddressLine2Language2()
    {
        return $this->visitingAddressLine2Language2;
    }

    /**
     * Set visitingCityLanguage1
     *
     * @param string $visitingCityLanguage1
     * @return Client
     */
    public function setVisitingCityLanguage1($visitingCityLanguage1)
    {
        $this->visitingCityLanguage1 = $visitingCityLanguage1;
    
        return $this;
    }

    /**
     * Get visitingCityLanguage1
     *
     * @return string 
     */
    public function getVisitingCityLanguage1()
    {
        return $this->visitingCityLanguage1;
    }

    /**
     * Set visitingCityLanguage2
     *
     * @param string $visitingCityLanguage2
     * @return Client
     */
    public function setVisitingCityLanguage2($visitingCityLanguage2)
    {
        $this->visitingCityLanguage2 = $visitingCityLanguage2;
    
        return $this;
    }

    /**
     * Get visitingCityLanguage2
     *
     * @return string 
     */
    public function getVisitingCityLanguage2()
    {
        return $this->visitingCityLanguage2;
    }

    /**
     * Set visitingRegionLanguage1
     *
     * @param string $visitingRegionLanguage1
     * @return Client
     */
    public function setVisitingRegionLanguage1($visitingRegionLanguage1)
    {
        $this->visitingRegionLanguage1 = $visitingRegionLanguage1;
    
        return $this;
    }

    /**
     * Get visitingRegionLanguage1
     *
     * @return string 
     */
    public function getVisitingRegionLanguage1()
    {
        return $this->visitingRegionLanguage1;
    }

    /**
     * Set visitingRegionLanguage2
     *
     * @param string $visitingRegionLanguage2
     * @return Client
     */
    public function setVisitingRegionLanguage2($visitingRegionLanguage2)
    {
        $this->visitingRegionLanguage2 = $visitingRegionLanguage2;
    
        return $this;
    }

    /**
     * Get visitingRegionLanguage2
     *
     * @return string 
     */
    public function getVisitingRegionLanguage2()
    {
        return $this->visitingRegionLanguage2;
    }

    /**
     * Set visitingZipPostalCode
     *
     * @param string $visitingZipPostalCode
     * @return Client
     */
    public function setVisitingZipPostalCode($visitingZipPostalCode)
    {
        $this->visitingZipPostalCode = $visitingZipPostalCode;
    
        return $this;
    }

    /**
     * Get visitingZipPostalCode
     *
     * @return string 
     */
    public function getVisitingZipPostalCode()
    {
        return $this->visitingZipPostalCode;
    }

    /**
     * Set visitingCountryLanguage1
     *
     * @param string $visitingCountryLanguage1
     * @return Client
     */
    public function setVisitingCountryLanguage1($visitingCountryLanguage1)
    {
        $this->visitingCountryLanguage1 = $visitingCountryLanguage1;
    
        return $this;
    }

    /**
     * Get visitingCountryLanguage1
     *
     * @return string 
     */
    public function getVisitingCountryLanguage1()
    {
        return $this->visitingCountryLanguage1;
    }

    /**
     * Set visitingCountryLanguage2
     *
     * @param string $visitingCountryLanguage2
     * @return Client
     */
    public function setVisitingCountryLanguage2($visitingCountryLanguage2)
    {
        $this->visitingCountryLanguage2 = $visitingCountryLanguage2;
    
        return $this;
    }

    /**
     * Get visitingCountryLanguage2
     *
     * @return string 
     */
    public function getVisitingCountryLanguage2()
    {
        return $this->visitingCountryLanguage2;
    }

    /**
     * Set moderator
     *
     * @param integer $moderator
     * @return Client
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
     * @return Client
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
     * Set company
     *
     * @param \FrontCoding\EquasiaBundle\Entity\Company $company
     * @return Client
     */
    public function setCompany(\FrontCoding\EquasiaBundle\Entity\Company $company = null)
    {
        $this->company = $company;
    
        return $this;
    }

    /**
     * Get company
     *
     * @return \FrontCoding\EquasiaBundle\Entity\Company 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set contact
     *
     * @param \FrontCoding\EquasiaBundle\Entity\Contact $contact
     * @return Client
     */
    public function setContact(\FrontCoding\EquasiaBundle\Entity\Contact $contact = null)
    {
        $this->contact = $contact;
    
        return $this;
    }

    /**
     * Get contact
     *
     * @return \FrontCoding\EquasiaBundle\Entity\Contact 
     */
    public function getContact()
    {
        return $this->contact;
    }
}