<?php

namespace Mobly\MoblyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 */
class Item
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $itemNumber;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var float
     */
    private $cost;

    /**
     * @var float
     */
    private $discount;

    /**
     * @var \Mobly\MoblyBundle\Entity\PurchaseOrder
     */
    protected $purchaseOrder;


    /**
     * Set itemId
     *
     * @param integer $itemId
     * @return Item
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get itemId
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set itemNumber
     *
     * @param integer $itemNumber
     * @return Item
     */
    public function setItemNumber($itemNumber)
    {
        $this->itemNumber = $itemNumber;

        return $this;
    }

    /**
     * Get itemNumber
     *
     * @return integer 
     */
    public function getItemNumber()
    {
        return $this->itemNumber;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Item
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
     * @return Item
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
     * Set cost
     *
     * @param float $cost
     * @return Item
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return float 
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set discount
     *
     * @param float $discount
     * @return Item
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return float 
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set purchaseOrder
     *
     * @param \Mobly\MoblyBundle\Entity\PurchaseOrder $purchaseOrder
     * @return Item
     */
    public function setPurchaseOrder(\Mobly\MoblyBundle\Entity\PurchaseOrder $purchaseOrder = null)
    {
        $this->purchaseOrder = $purchaseOrder;
        return $this;
    }
    
    /**
     * Get purchaseOrder
     *
     * @return \Mobly\MoblyBundle\Entity\PurchaseOrder 
     */
    public function getPurchaseOrder()
    {
        return $this->purchaseOrder;
    }

    /**
     * 
     */
    public function preInsert()
    {
        $this->setCreatedAt(new \Datetime());
        $this->getPurchaseOrder()->preInsert();
    }

    /**
     * 
     */
    public function preUpdate()
    {
        $this->setUpdatedAt(new \Datetime());
        $this->getPurchaseOrder()->preUpdate();
    }    
}
