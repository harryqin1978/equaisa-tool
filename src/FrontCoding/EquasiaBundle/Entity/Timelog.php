<?php

namespace FrontCoding\EquasiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Timelog
 *
 * @ORM\Table(name="timelog")
 * @ORM\Entity
 */
class Timelog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="taskcode", type="integer", nullable=true)
     */
    private $taskcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="projectcode", type="integer", nullable=true)
     */
    private $projectcode;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255, nullable=true)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="employee", type="integer", nullable=true)
     */
    private $employee;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datestart", type="date", nullable=true)
     */
    private $datestart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestart", type="time", nullable=true)
     */
    private $timestart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateed", type="date", nullable=true)
     */
    private $dateed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timeed", type="time", nullable=true)
     */
    private $timeed;

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
     * Set taskcode
     *
     * @param integer $taskcode
     * @return Timelog
     */
    public function setTaskcode($taskcode)
    {
        $this->taskcode = $taskcode;
    
        return $this;
    }

    /**
     * Get taskcode
     *
     * @return integer 
     */
    public function getTaskcode()
    {
        return $this->taskcode;
    }

    /**
     * Set projectcode
     *
     * @param integer $projectcode
     * @return Timelog
     */
    public function setProjectcode($projectcode)
    {
        $this->projectcode = $projectcode;
    
        return $this;
    }

    /**
     * Get projectcode
     *
     * @return integer 
     */
    public function getProjectcode()
    {
        return $this->projectcode;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return Timelog
     */
    public function setCategory($category)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Timelog
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
     * @return Timelog
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
     * Set employee
     *
     * @param integer $employee
     * @return Timelog
     */
    public function setEmployee($employee)
    {
        $this->employee = $employee;
    
        return $this;
    }

    /**
     * Get employee
     *
     * @return integer 
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Set datestart
     *
     * @param \DateTime $datestart
     * @return Timelog
     */
    public function setDatestart($datestart)
    {
        $this->datestart = $datestart;
    
        return $this;
    }

    /**
     * Get datestart
     *
     * @return \DateTime 
     */
    public function getDatestart()
    {
        return $this->datestart;
    }

    /**
     * Set timestart
     *
     * @param \DateTime $timestart
     * @return Timelog
     */
    public function setTimestart($timestart)
    {
        $this->timestart = $timestart;
    
        return $this;
    }

    /**
     * Get timestart
     *
     * @return \DateTime 
     */
    public function getTimestart()
    {
        return $this->timestart;
    }

    /**
     * Set dateed
     *
     * @param \DateTime $dateed
     * @return Timelog
     */
    public function setDateed($dateed)
    {
        $this->dateed = $dateed;
    
        return $this;
    }

    /**
     * Get dateed
     *
     * @return \DateTime 
     */
    public function getDateed()
    {
        return $this->dateed;
    }

    /**
     * Set timeed
     *
     * @param \DateTime $timeed
     * @return Timelog
     */
    public function setTimeed($timeed)
    {
        $this->timeed = $timeed;
    
        return $this;
    }

    /**
     * Get timeed
     *
     * @return \DateTime 
     */
    public function getTimeed()
    {
        return $this->timeed;
    }

    /**
     * Set moderator
     *
     * @param integer $moderator
     * @return Timelog
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
     * @return Timelog
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
}