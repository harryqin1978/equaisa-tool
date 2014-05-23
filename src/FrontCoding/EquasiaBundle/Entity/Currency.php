<?php

namespace FrontCoding\EquasiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Currency
 *
 * @ORM\Table(name="currency")
 * @ORM\Entity
 */
class Currency
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="abbreviation", type="string", length=10, nullable=false)
     */
    private $abbreviation;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="Employee", mappedBy="currency")
     */
    protected $salary_official_currencys;

    /**
     * @ORM\OneToMany(targetEntity="Employee", mappedBy="currency")
     */
    protected $salary_unofficial_currencys;

    public function __construct()
    {
        $this->salary_official_currencys = new ArrayCollection();
        $this->salary_unofficial_currencys = new ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Currency
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set abbreviation
     *
     * @param string $abbreviation
     * @return Currency
     */
    public function setAbbreviation($abbreviation)
    {
        $this->abbreviation = $abbreviation;
    
        return $this;
    }

    /**
     * Get abbreviation
     *
     * @return string 
     */
    public function getAbbreviation()
    {
        return $this->abbreviation;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Currency
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add salary_official_currencys
     *
     * @param \FrontCoding\EquasiaBundle\Entity\Employee $salaryOfficialCurrencys
     * @return Currency
     */
    public function addSalaryOfficialCurrency(\FrontCoding\EquasiaBundle\Entity\Employee $salaryOfficialCurrencys)
    {
        $this->salary_official_currencys[] = $salaryOfficialCurrencys;
    
        return $this;
    }

    /**
     * Remove salary_official_currencys
     *
     * @param \FrontCoding\EquasiaBundle\Entity\Employee $salaryOfficialCurrencys
     */
    public function removeSalaryOfficialCurrency(\FrontCoding\EquasiaBundle\Entity\Employee $salaryOfficialCurrencys)
    {
        $this->salary_official_currencys->removeElement($salaryOfficialCurrencys);
    }

    /**
     * Get salary_official_currencys
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSalaryOfficialCurrencys()
    {
        return $this->salary_official_currencys;
    }

    /**
     * Add salary_unofficial_currencys
     *
     * @param \FrontCoding\EquasiaBundle\Entity\Employee $salaryUnofficialCurrencys
     * @return Currency
     */
    public function addSalaryUnofficialCurrency(\FrontCoding\EquasiaBundle\Entity\Employee $salaryUnofficialCurrencys)
    {
        $this->salary_unofficial_currencys[] = $salaryUnofficialCurrencys;
    
        return $this;
    }

    /**
     * Remove salary_unofficial_currencys
     *
     * @param \FrontCoding\EquasiaBundle\Entity\Employee $salaryUnofficialCurrencys
     */
    public function removeSalaryUnofficialCurrency(\FrontCoding\EquasiaBundle\Entity\Employee $salaryUnofficialCurrencys)
    {
        $this->salary_unofficial_currencys->removeElement($salaryUnofficialCurrencys);
    }

    /**
     * Get salary_unofficial_currencys
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSalaryUnofficialCurrencys()
    {
        return $this->salary_unofficial_currencys;
    }
}