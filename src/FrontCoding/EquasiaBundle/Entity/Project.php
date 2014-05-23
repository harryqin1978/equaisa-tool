<?php

namespace FrontCoding\EquasiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table(name="project")
 * @ORM\Entity
 */
class Project
{
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=50, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="phase", type="integer", nullable=true)
     */
    private $phase;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_start", type="date", nullable=true)
     */
    private $dateStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_end", type="date", nullable=true)
     */
    private $dateEnd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_deadline", type="date", nullable=true)
     */
    private $dateDeadline;

    /**
     * @var integer
     *
     * @ORM\Column(name="initiator", type="integer", nullable=true)
     */
    private $initiator;

    /**
     * @var integer
     *
     * @ORM\Column(name="project_manager", type="integer", nullable=true)
     */
    private $projectManager;

    /**
     * @var integer
     *
     * @ORM\Column(name="account_manager", type="integer", nullable=true)
     */
    private $accountManager;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text", nullable=true)
     */
    private $url;

    /**
     * @var integer
     *
     * @ORM\Column(name="client_representative", type="integer", nullable=true)
     */
    private $clientRepresentative;

    /**
     * @var integer
     *
     * @ORM\Column(name="contracted_client", type="integer", nullable=true)
     */
    private $contractedClient;

    /**
     * @var integer
     *
     * @ORM\Column(name="contracted_entity", type="integer", nullable=true)
     */
    private $contractedEntity;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_terms", type="string", length=255, nullable=true)
     */
    private $paymentTerms;

    /**
     * @var float
     *
     * @ORM\Column(name="payment_contracted_excl", type="decimal", nullable=true)
     */
    private $paymentContractedExcl;

    /**
     * @var float
     *
     * @ORM\Column(name="payment_contracted_tax", type="decimal", nullable=true)
     */
    private $paymentContractedTax;

    /**
     * @var float
     *
     * @ORM\Column(name="payment_outstanding_excl", type="decimal", nullable=true)
     */
    private $paymentOutstandingExcl;

    /**
     * @var float
     *
     * @ORM\Column(name="payment_outstanding_tax", type="decimal", nullable=true)
     */
    private $paymentOutstandingTax;

    /**
     * @var float
     *
     * @ORM\Column(name="payment_fullfilled_excl", type="decimal", nullable=true)
     */
    private $paymentFullfilledExcl;

    /**
     * @var float
     *
     * @ORM\Column(name="payment_fullfilled_tax", type="decimal", nullable=true)
     */
    private $paymentFullfilledTax;

    /**
     * @var integer
     *
     * @ORM\Column(name="payment_currency", type="integer", nullable=true)
     */
    private $paymentCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_tax", type="string", nullable=true)
     */
    private $paymentTax;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="payment_received_date", type="date", nullable=true)
     */
    private $paymentReceivedDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="payment_due_date", type="date", nullable=true)
     */
    private $paymentDueDate;

    /**
     * @var string
     *
     * @ORM\Column(name="proposal_status", type="string", nullable=true)
     */
    private $proposalStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="functional_specification_status", type="string", nullable=true)
     */
    private $functionalSpecificationStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="framework_agreement_status", type="string", nullable=true)
     */
    private $frameworkAgreementStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="contract_status", type="string", nullable=true)
     */
    private $contractStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="root_id", type="integer", nullable=true)
     */
    private $rootId;

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
     * Set code
     *
     * @param string $code
     * @return Project
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Project
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
     * Set phase
     *
     * @param integer $phase
     * @return Project
     */
    public function setPhase($phase)
    {
        $this->phase = $phase;
    
        return $this;
    }

    /**
     * Get phase
     *
     * @return integer 
     */
    public function getPhase()
    {
        return $this->phase;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Project
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     * @return Project
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
    
        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime 
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     * @return Project
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;
    
        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime 
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set dateDeadline
     *
     * @param \DateTime $dateDeadline
     * @return Project
     */
    public function setDateDeadline($dateDeadline)
    {
        $this->dateDeadline = $dateDeadline;
    
        return $this;
    }

    /**
     * Get dateDeadline
     *
     * @return \DateTime 
     */
    public function getDateDeadline()
    {
        return $this->dateDeadline;
    }

    /**
     * Set initiator
     *
     * @param integer $initiator
     * @return Project
     */
    public function setInitiator($initiator)
    {
        $this->initiator = $initiator;
    
        return $this;
    }

    /**
     * Get initiator
     *
     * @return integer 
     */
    public function getInitiator()
    {
        return $this->initiator;
    }

    /**
     * Set projectManager
     *
     * @param integer $projectManager
     * @return Project
     */
    public function setProjectManager($projectManager)
    {
        $this->projectManager = $projectManager;
    
        return $this;
    }

    /**
     * Get projectManager
     *
     * @return integer 
     */
    public function getProjectManager()
    {
        return $this->projectManager;
    }

    /**
     * Set accountManager
     *
     * @param integer $accountManager
     * @return Project
     */
    public function setAccountManager($accountManager)
    {
        $this->accountManager = $accountManager;
    
        return $this;
    }

    /**
     * Get accountManager
     *
     * @return integer 
     */
    public function getAccountManager()
    {
        return $this->accountManager;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Project
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
     * Set notes
     *
     * @param string $notes
     * @return Project
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
     * Set url
     *
     * @param string $url
     * @return Project
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set clientRepresentative
     *
     * @param integer $clientRepresentative
     * @return Project
     */
    public function setClientRepresentative($clientRepresentative)
    {
        $this->clientRepresentative = $clientRepresentative;
    
        return $this;
    }

    /**
     * Get clientRepresentative
     *
     * @return integer 
     */
    public function getClientRepresentative()
    {
        return $this->clientRepresentative;
    }

    /**
     * Set contractedClient
     *
     * @param integer $contractedClient
     * @return Project
     */
    public function setContractedClient($contractedClient)
    {
        $this->contractedClient = $contractedClient;
    
        return $this;
    }

    /**
     * Get contractedClient
     *
     * @return integer 
     */
    public function getContractedClient()
    {
        return $this->contractedClient;
    }

    /**
     * Set contractedEntity
     *
     * @param integer $contractedEntity
     * @return Project
     */
    public function setContractedEntity($contractedEntity)
    {
        $this->contractedEntity = $contractedEntity;
    
        return $this;
    }

    /**
     * Get contractedEntity
     *
     * @return integer 
     */
    public function getContractedEntity()
    {
        return $this->contractedEntity;
    }

    /**
     * Set paymentTerms
     *
     * @param string $paymentTerms
     * @return Project
     */
    public function setPaymentTerms($paymentTerms)
    {
        $this->paymentTerms = $paymentTerms;
    
        return $this;
    }

    /**
     * Get paymentTerms
     *
     * @return string 
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * Set paymentContractedExcl
     *
     * @param float $paymentContractedExcl
     * @return Project
     */
    public function setPaymentContractedExcl($paymentContractedExcl)
    {
        $this->paymentContractedExcl = $paymentContractedExcl;
    
        return $this;
    }

    /**
     * Get paymentContractedExcl
     *
     * @return float 
     */
    public function getPaymentContractedExcl()
    {
        return $this->paymentContractedExcl;
    }

    /**
     * Set paymentContractedTax
     *
     * @param float $paymentContractedTax
     * @return Project
     */
    public function setPaymentContractedTax($paymentContractedTax)
    {
        $this->paymentContractedTax = $paymentContractedTax;
    
        return $this;
    }

    /**
     * Get paymentContractedTax
     *
     * @return float 
     */
    public function getPaymentContractedTax()
    {
        return $this->paymentContractedTax;
    }

    /**
     * Set paymentOutstandingExcl
     *
     * @param float $paymentOutstandingExcl
     * @return Project
     */
    public function setPaymentOutstandingExcl($paymentOutstandingExcl)
    {
        $this->paymentOutstandingExcl = $paymentOutstandingExcl;
    
        return $this;
    }

    /**
     * Get paymentOutstandingExcl
     *
     * @return float 
     */
    public function getPaymentOutstandingExcl()
    {
        return $this->paymentOutstandingExcl;
    }

    /**
     * Set paymentOutstandingTax
     *
     * @param float $paymentOutstandingTax
     * @return Project
     */
    public function setPaymentOutstandingTax($paymentOutstandingTax)
    {
        $this->paymentOutstandingTax = $paymentOutstandingTax;
    
        return $this;
    }

    /**
     * Get paymentOutstandingTax
     *
     * @return float 
     */
    public function getPaymentOutstandingTax()
    {
        return $this->paymentOutstandingTax;
    }

    /**
     * Set paymentFullfilledExcl
     *
     * @param float $paymentFullfilledExcl
     * @return Project
     */
    public function setPaymentFullfilledExcl($paymentFullfilledExcl)
    {
        $this->paymentFullfilledExcl = $paymentFullfilledExcl;
    
        return $this;
    }

    /**
     * Get paymentFullfilledExcl
     *
     * @return float 
     */
    public function getPaymentFullfilledExcl()
    {
        return $this->paymentFullfilledExcl;
    }

    /**
     * Set paymentFullfilledTax
     *
     * @param float $paymentFullfilledTax
     * @return Project
     */
    public function setPaymentFullfilledTax($paymentFullfilledTax)
    {
        $this->paymentFullfilledTax = $paymentFullfilledTax;
    
        return $this;
    }

    /**
     * Get paymentFullfilledTax
     *
     * @return float 
     */
    public function getPaymentFullfilledTax()
    {
        return $this->paymentFullfilledTax;
    }

    /**
     * Set paymentCurrency
     *
     * @param integer $paymentCurrency
     * @return Project
     */
    public function setPaymentCurrency($paymentCurrency)
    {
        $this->paymentCurrency = $paymentCurrency;
    
        return $this;
    }

    /**
     * Get paymentCurrency
     *
     * @return integer 
     */
    public function getPaymentCurrency()
    {
        return $this->paymentCurrency;
    }

    /**
     * Set paymentTax
     *
     * @param string $paymentTax
     * @return Project
     */
    public function setPaymentTax($paymentTax)
    {
        $this->paymentTax = $paymentTax;
    
        return $this;
    }

    /**
     * Get paymentTax
     *
     * @return string 
     */
    public function getPaymentTax()
    {
        return $this->paymentTax;
    }

    /**
     * Set paymentReceivedDate
     *
     * @param \DateTime $paymentReceivedDate
     * @return Project
     */
    public function setPaymentReceivedDate($paymentReceivedDate)
    {
        $this->paymentReceivedDate = $paymentReceivedDate;
    
        return $this;
    }

    /**
     * Get paymentReceivedDate
     *
     * @return \DateTime 
     */
    public function getPaymentReceivedDate()
    {
        return $this->paymentReceivedDate;
    }

    /**
     * Set paymentDueDate
     *
     * @param \DateTime $paymentDueDate
     * @return Project
     */
    public function setPaymentDueDate($paymentDueDate)
    {
        $this->paymentDueDate = $paymentDueDate;
    
        return $this;
    }

    /**
     * Get paymentDueDate
     *
     * @return \DateTime 
     */
    public function getPaymentDueDate()
    {
        return $this->paymentDueDate;
    }

    /**
     * Set proposalStatus
     *
     * @param string $proposalStatus
     * @return Project
     */
    public function setProposalStatus($proposalStatus)
    {
        $this->proposalStatus = $proposalStatus;
    
        return $this;
    }

    /**
     * Get proposalStatus
     *
     * @return string 
     */
    public function getProposalStatus()
    {
        return $this->proposalStatus;
    }

    /**
     * Set functionalSpecificationStatus
     *
     * @param string $functionalSpecificationStatus
     * @return Project
     */
    public function setFunctionalSpecificationStatus($functionalSpecificationStatus)
    {
        $this->functionalSpecificationStatus = $functionalSpecificationStatus;
    
        return $this;
    }

    /**
     * Get functionalSpecificationStatus
     *
     * @return string 
     */
    public function getFunctionalSpecificationStatus()
    {
        return $this->functionalSpecificationStatus;
    }

    /**
     * Set frameworkAgreementStatus
     *
     * @param string $frameworkAgreementStatus
     * @return Project
     */
    public function setFrameworkAgreementStatus($frameworkAgreementStatus)
    {
        $this->frameworkAgreementStatus = $frameworkAgreementStatus;
    
        return $this;
    }

    /**
     * Get frameworkAgreementStatus
     *
     * @return string 
     */
    public function getFrameworkAgreementStatus()
    {
        return $this->frameworkAgreementStatus;
    }

    /**
     * Set contractStatus
     *
     * @param string $contractStatus
     * @return Project
     */
    public function setContractStatus($contractStatus)
    {
        $this->contractStatus = $contractStatus;
    
        return $this;
    }

    /**
     * Get contractStatus
     *
     * @return string 
     */
    public function getContractStatus()
    {
        return $this->contractStatus;
    }

    /**
     * Set rootId
     *
     * @param integer $rootId
     * @return Project
     */
    public function setRootId($rootId)
    {
        $this->rootId = $rootId;
    
        return $this;
    }

    /**
     * Get rootId
     *
     * @return integer 
     */
    public function getRootId()
    {
        return $this->rootId;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Project
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
     * @return Project
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
     * @return Project
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