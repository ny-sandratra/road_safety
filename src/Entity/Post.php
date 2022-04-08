<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity
 */
class Post
{
    /**
     * @var int
     *
     * @ORM\Column(name="post_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $postId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="post_declaration", type="integer", nullable=true)
     */
    private $postDeclaration;

    /**
     * @var string|null
     *
     * @ORM\Column(name="post_lien", type="text", length=65535, nullable=true)
     */
    private $postLien;

    public function getPostId(): ?int
    {
        return $this->postId;
    }

    public function getPostDeclaration(): ?int
    {
        return $this->postDeclaration;
    }

    public function setPostDeclaration(?int $postDeclaration): self
    {
        $this->postDeclaration = $postDeclaration;

        return $this;
    }

    public function getPostLien(): ?string
    {
        return $this->postLien;
    }

    public function setPostLien(?string $postLien): self
    {
        $this->postLien = $postLien;

        return $this;
    }


}
