<?php

namespace Mobly\MoblyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * PurchaseOrder
 */
class PurchaseOrder
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $orderNumber;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $totalCost;

    /**
     * @var string
     */
    private $totalDiscount;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $itens;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->itens = new ArrayCollection();
    }  

    /**
     * Get purchaseOrderId
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set orderNumber
     *
     * @param integer $orderNumber
     * @return PurchaseOrder
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * Get orderNumber
     *
     * @return integer 
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return PurchaseOrder
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return PurchaseOrder
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set totalCost
     *
     * @param string $totalCost
     * @return PurchaseOrder
     */
    public function setTotalCost($totalCost)
    {
        $this->totalCost = $totalCost;

        return $this;
    }

    /**
     * Get totalCost
     *
     * @return string 
     */
    public function getTotalCost()
    {
        return $this->totalCost;
    }

    /**
     * Set totalDiscount
     *
     * @param string $totalDiscount
     * @return PurchaseOrder
     */
    public function setTotalDiscount($totalDiscount)
    {
        $this->totalDiscount = $totalDiscount;

        return $this;
    }

    /**
     * Get totalDiscount
     *
     * @return string 
     */
    public function getTotalDiscount()
    {
        return $this->totalDiscount;
    }
    
    /**
* Get itens
*
* @return \Doctrine\Common\Collections\Collection|Itens[]
*/
    public function getItens()
    {
        return $this->itens;
    }

    /**
* Add itens
*
* @param \Mobly\PurchaseBundle\Entity\Item $itens
* @return PurchaseOrders
*/
    public function addIten(\Mobly\MoblyBundle\Entity\Item $itens)
    {
        $itens->setPurchaseOrder($this); // Necessário para gravação do formulário em cascade
        $this->itens[] = $itens;

        return $this;
    }
    
    /**
* Remove itens
*
* @param \Mobly\PurchaseBundle\Entity\Item $itens
*/
    public function removeIten(\Mobly\MoblyBundle\Entity\Item $itens)
    {
        $this->itens->removeElement($itens);
    }
    
    /**
     * 
     */
    public function preInsert()
    {
        $this->setCreatedAt(new \Datetime());
    }

    /**
     * 
     */
    public function preUpdate()
    {
        $this->setUpdatedAt(new \Datetime());
    }    
}
