<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PhotoDeclarationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=PhotoDeclarationRepository::class)
 */
class PhotoDeclaration
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity=Declaration::class, inversedBy="photoDeclarations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $post;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPost(): ?Declaration
    {
        return $this->post;
    }

    public function setPost(?Declaration $post): self
    {
        $this->post = $post;

        return $this;
    }
}
