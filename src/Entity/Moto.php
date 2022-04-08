<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moto
 *
 * @ORM\Table(name="moto")
 * @ORM\Entity
 */
class Moto
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
     * @var string
     *
     * @ORM\Column(name="modele", type="string", length=100, nullable=false)
     */
    private $modele;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=100, nullable=false)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=100, nullable=false)
     */
    private $couleur;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_serie", type="string", length=100, nullable=false)
     */
    private $numeroSerie;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_matricule", type="string", length=100, nullable=false)
     */
    private $numeroMatricule;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function getNumeroSerie(): ?string
    {
        return $this->numeroSerie;
    }

    public function setNumeroSerie(string $numeroSerie): self
    {
        $this->numeroSerie = $numeroSerie;

        return $this;
    }

    public function getNumeroMatricule(): ?string
    {
        return $this->numeroMatricule;
    }

    public function setNumeroMatricule(string $numeroMatricule): self
    {
        $this->numeroMatricule = $numeroMatricule;

        return $this;
    }


}
