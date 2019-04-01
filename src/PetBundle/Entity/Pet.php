<?php


namespace PetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * pet
 *
 * @ORM\Table(name="pet")
 * @ORM\Entity(repositoryClass="PetBundle\Repository\PetRepository")
 */
class Pet
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
     * @ORM\Column(name="name", type="int")
     * @ORM\OneToMany(targetEntity="PetBundle\Entity\Category")
     * @ORM\JoinColumn(name="category", referencedColumnName="id")
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="pet_name", type="string", length=255, nullable=true)
     */
    private $petName;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_urls", type="text", length=255, nullable=true)
     */
    private $photoUrls;

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="text", length=255, nullable=true)
     */
    private $tags;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Pet
     */
    public function setId(int $id): Pet
    {
        $this->id = $id;
        return $this;
    }


}