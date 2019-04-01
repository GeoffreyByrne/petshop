<?php


namespace StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 *
 * @ORM\Table(name="order")
 * @ORM\Entity(repositoryClass="StoreBundle\Repository\OrderRepository")
 */
class Order
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="pet_id", type="int")
     * @ORM\OneToMany(targetEntity="PetBundle\Entity\Pet")
     * @ORM\JoinColumn(name="pet_id", referencedColumnName="id")
     */
    private $pet_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="int")
     */
    private $quantity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ship_date", type="datetime")
     */
    private $ship_date;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length="15")
     */
    private $status;

    /**
     * @var bool
     *
     * @ORM\Column(name="complete", type="boolean")
     */
    private $complete;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Order
     */
    public function setId(int $id): Order
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getPetId(): int
    {
        return $this->pet_id;
    }

    /**
     * @param int $pet_id
     * @return Order
     */
    public function setPetId(int $pet_id): Order
    {
        $this->pet_id = $pet_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return Order
     */
    public function setQuantity(int $quantity): Order
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShipDate(): \DateTime
    {
        return $this->ship_date;
    }

    /**
     * @param \DateTime $ship_date
     * @return Order
     */
    public function setShipDate(\DateTime $ship_date): Order
    {
        $this->ship_date = $ship_date;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return Order
     */
    public function setStatus(string $status): Order
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return bool
     */
    public function isComplete(): bool
    {
        return $this->complete;
    }

    /**
     * @param bool $complete
     * @return Order
     */
    public function setComplete(bool $complete): Order
    {
        $this->complete = $complete;
        return $this;
    }


}