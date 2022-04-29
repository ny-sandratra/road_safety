<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Declaration
 *
 * @ORM\Table(name="declaration")
 * @ORM\Entity
 */
class Declaration
{
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_perte", type="datetime", nullable=false)
     */
    private $dateDePerte;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_de_perte", type="string", length=200, nullable=false)
     */
    private $lieuDePerte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     * 
     * @ORM\Version
     * @ORM\Column(name="date_de_publication", type="datetime", nullable=true)
     */
    private $dateDePublication;

    /**

     * @ORM\Column(type="string", length=100)
     */
    private $type;

    /**
     * @ORM\OneToMany(targetEntity=PhotoDeclaration::class, mappedBy="post", orphanRemoval=true)
     */
    private $photoDeclarations;

    public function __construct()
    {
        $this->photoDeclarations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDePerte(): ?\DateTimeInterface
    {
        return $this->dateDePerte;
    }

    public function setDateDePerte(\DateTimeInterface $dateDePerte): self
    {
        $this->dateDePerte = $dateDePerte;

        return $this;
    }

    public function getLieuDePerte(): ?string
    {
        return $this->lieuDePerte;
    }

    public function setLieuDePerte(string $lieuDePerte): self
    {
        $this->lieuDePerte = $lieuDePerte;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDateDePublication(): ?\DateTimeInterface
    {
        return $this->dateDePublication;
    }

    public function setDateDePublication(\DateTimeInterface $dateDePublication): self
    {
        $this->dateDePublication = $dateDePublication;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection<int, PhotoDeclaration>
     */
    public function getPhotoDeclarations(): Collection
    {
        return $this->photoDeclarations;
    }

    public function addPhotoDeclaration(PhotoDeclaration $photoDeclaration): self
    {
        if (!$this->photoDeclarations->contains($photoDeclaration)) {
            $this->photoDeclarations[] = $photoDeclaration;
            $photoDeclaration->setPost($this);
        }

        return $this;
    }

    public function removePhotoDeclaration(PhotoDeclaration $photoDeclaration): self
    {
        if ($this->photoDeclarations->removeElement($photoDeclaration)) {
            // set the owning side to null (unless already changed)
            if ($photoDeclaration->getPost() === $this) {
                $photoDeclaration->setPost(null);
            }
        }

        return $this;
    }


}
