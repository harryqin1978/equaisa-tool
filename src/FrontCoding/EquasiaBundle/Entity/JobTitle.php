<?php

namespace FrontCoding\EquasiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * JobTitle
 *
 * @ORM\Table(name="job_title")
 * @ORM\Entity
 */
class JobTitle
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

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
     * @ORM\OneToMany(targetEntity="Contact", mappedBy="job_title")
     */
    protected $contacts;

    /**
     * @ORM\OneToMany(targetEntity="Employee", mappedBy="job_title")
     */
    protected $employees;

    public function __construct()
    {
        $this->contacts = new ArrayCollection();
        $this->employees = new ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     * @return JobTitle
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
     * Set description
     *
     * @param string $description
     * @return JobTitle
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
     * Set stamp
     *
     * @param \DateTime $stamp
     * @return JobTitle
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
     * Add contacts
     *
     * @param \FrontCoding\EquasiaBundle\Entity\Contact $contacts
     * @return JobTitle
     */
    public function addContact(\FrontCoding\EquasiaBundle\Entity\Contact $contacts)
    {
        $this->contacts[] = $contacts;
    
        return $this;
    }

    /**
     * Remove contacts
     *
     * @param \FrontCoding\EquasiaBundle\Entity\Contact $contacts
     */
    public function removeContact(\FrontCoding\EquasiaBundle\Entity\Contact $contacts)
    {
        $this->contacts->removeElement($contacts);
    }

    /**
     * Get contacts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Add employees
     *
     * @param \FrontCoding\EquasiaBundle\Entity\Employee $employees
     * @return JobTitle
     */
    public function addEmployee(\FrontCoding\EquasiaBundle\Entity\Employee $employees)
    {
        $this->employees[] = $employees;
    
        return $this;
    }

    /**
     * Remove employees
     *
     * @param \FrontCoding\EquasiaBundle\Entity\Employee $employees
     */
    public function removeEmployee(\FrontCoding\EquasiaBundle\Entity\Employee $employees)
    {
        $this->employees->removeElement($employees);
    }

    /**
     * Get employees
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmployees()
    {
        return $this->employees;
    }
}