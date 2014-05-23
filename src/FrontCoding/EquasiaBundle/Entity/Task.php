<?php

namespace FrontCoding\EquasiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Task
 *
 * @ORM\Table(name="task")
 * @ORM\Entity
 */
class Task
{
    /**
     * @var integer
     *
     * @ORM\Column(name="project_id", type="integer", nullable=true)
     */
    private $projectId;

    /**
     * @var string
     *
     * @ORM\Column(name="priority", type="string", length=255, nullable=true)
     */
    private $priority;

    /**
     * @var integer
     *
     * @ORM\Column(name="category", type="integer", nullable=true)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=250, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="assigned_to", type="integer", nullable=true)
     */
    private $assignedTo;

    /**
     * @var integer
     *
     * @ORM\Column(name="assigned_by", type="integer", nullable=true)
     */
    private $assignedBy;

    /**
     * @var integer
     *
     * @ORM\Column(name="checked_by", type="integer", nullable=true)
     */
    private $checkedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime_start", type="datetime", nullable=true)
     */
    private $datetimeStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime_end", type="datetime", nullable=true)
     */
    private $datetimeEnd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime_deadline", type="datetime", nullable=true)
     */
    private $datetimeDeadline;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="espected_duration", type="time", nullable=true)
     */
    private $espectedDuration;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=true)
     */
    private $status;

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
     * Set projectId
     *
     * @param integer $projectId
     * @return Task
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    
        return $this;
    }

    /**
     * Get projectId
     *
     * @return integer 
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set priority
     *
     * @param string $priority
     * @return Task
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    
        return $this;
    }

    /**
     * Get priority
     *
     * @return string 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set category
     *
     * @param integer $category
     * @return Task
     */
    public function setCategory($category)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return integer 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Task
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
     * @return Task
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
     * Set assignedTo
     *
     * @param integer $assignedTo
     * @return Task
     */
    public function setAssignedTo($assignedTo)
    {
        $this->assignedTo = $assignedTo;
    
        return $this;
    }

    /**
     * Get assignedTo
     *
     * @return integer 
     */
    public function getAssignedTo()
    {
        return $this->assignedTo;
    }

    /**
     * Set assignedBy
     *
     * @param integer $assignedBy
     * @return Task
     */
    public function setAssignedBy($assignedBy)
    {
        $this->assignedBy = $assignedBy;
    
        return $this;
    }

    /**
     * Get assignedBy
     *
     * @return integer 
     */
    public function getAssignedBy()
    {
        return $this->assignedBy;
    }

    /**
     * Set checkedBy
     *
     * @param integer $checkedBy
     * @return Task
     */
    public function setCheckedBy($checkedBy)
    {
        $this->checkedBy = $checkedBy;
    
        return $this;
    }

    /**
     * Get checkedBy
     *
     * @return integer 
     */
    public function getCheckedBy()
    {
        return $this->checkedBy;
    }

    /**
     * Set datetimeStart
     *
     * @param \DateTime $datetimeStart
     * @return Task
     */
    public function setDatetimeStart($datetimeStart)
    {
        $this->datetimeStart = $datetimeStart;
    
        return $this;
    }

    /**
     * Get datetimeStart
     *
     * @return \DateTime 
     */
    public function getDatetimeStart()
    {
        return $this->datetimeStart;
    }

    /**
     * Set datetimeEnd
     *
     * @param \DateTime $datetimeEnd
     * @return Task
     */
    public function setDatetimeEnd($datetimeEnd)
    {
        $this->datetimeEnd = $datetimeEnd;
    
        return $this;
    }

    /**
     * Get datetimeEnd
     *
     * @return \DateTime 
     */
    public function getDatetimeEnd()
    {
        return $this->datetimeEnd;
    }

    /**
     * Set datetimeDeadline
     *
     * @param \DateTime $datetimeDeadline
     * @return Task
     */
    public function setDatetimeDeadline($datetimeDeadline)
    {
        $this->datetimeDeadline = $datetimeDeadline;
    
        return $this;
    }

    /**
     * Get datetimeDeadline
     *
     * @return \DateTime 
     */
    public function getDatetimeDeadline()
    {
        return $this->datetimeDeadline;
    }

    /**
     * Set espectedDuration
     *
     * @param \DateTime $espectedDuration
     * @return Task
     */
    public function setEspectedDuration($espectedDuration)
    {
        $this->espectedDuration = $espectedDuration;
    
        return $this;
    }

    /**
     * Get espectedDuration
     *
     * @return \DateTime 
     */
    public function getEspectedDuration()
    {
        return $this->espectedDuration;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Task
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
     * Set moderator
     *
     * @param integer $moderator
     * @return Task
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
     * @return Task
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