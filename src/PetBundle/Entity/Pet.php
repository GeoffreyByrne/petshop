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
     * @ORM\Column(name="name", type="integer")
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

    /**
     * @return int
     */
    public function getCategory(): int
    {
        return $this->category;
    }

    /**
     * @param int $category
     * @return Pet
     */
    public function setCategory(int $category): Pet
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return string
     */
    public function getPetName(): string
    {
        return $this->petName;
    }

    /**
     * @param string $petName
     * @return Pet
     */
    public function setPetName(string $petName): Pet
    {
        $this->petName = $petName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhotoUrls(): string
    {
        return $this->photoUrls;
    }

    /**
     * @param string $photoUrls
     * @return Pet
     */
    public function setPhotoUrls(string $photoUrls): Pet
    {
        $this->photoUrls = $photoUrls;
        return $this;
    }

    /**
     * @return string
     */
    public function getTags(): string
    {
        return $this->tags;
    }

    /**
     * @param string $tags
     * @return Pet
     */
    public function setTags(string $tags): Pet
    {
        $this->tags = $tags;
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
     * @return Pet
     */
    public function setStatus(string $status): Pet
    {
        $this->status = $status;
        return $this;
    }




}