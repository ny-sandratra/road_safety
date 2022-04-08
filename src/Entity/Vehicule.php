<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity
 */
class Vehicule
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
     * @var string|null
     *
     * @ORM\Column(name="couleur_interne", type="string", length=100, nullable=true)
     */
    private $couleurInterne;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur_externe", type="string", length=100, nullable=false)
     */
    private $couleurExterne;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_matricule", type="string", length=100, nullable=false)
     */
    private $numeroMatricule;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_serie", type="string", length=100, nullable=false)
     */
    private $numeroSerie;

    /**
     * @var string
     *
     * @ORM\Column(name="carburant", type="string", length=50, nullable=false)
     */
    private $carburant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_moteur", type="string", length=255, nullable=true)
     */
    private $numeroMoteur;

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

    public function getCouleurInterne(): ?string
    {
        return $this->couleurInterne;
    }

    public function setCouleurInterne(?string $couleurInterne): self
    {
        $this->couleurInterne = $couleurInterne;

        return $this;
    }

    public function getCouleurExterne(): ?string
    {
        return $this->couleurExterne;
    }

    public function setCouleurExterne(string $couleurExterne): self
    {
        $this->couleurExterne = $couleurExterne;

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

    public function getNumeroSerie(): ?string
    {
        return $this->numeroSerie;
    }

    public function setNumeroSerie(string $numeroSerie): self
    {
        $this->numeroSerie = $numeroSerie;

        return $this;
    }

    public function getCarburant(): ?string
    {
        return $this->carburant;
    }

    public function setCarburant(string $carburant): self
    {
        $this->carburant = $carburant;

        return $this;
    }

    public function getNumeroMoteur(): ?string
    {
        return $this->numeroMoteur;
    }

    public function setNumeroMoteur(?string $numeroMoteur): self
    {
        $this->numeroMoteur = $numeroMoteur;

        return $this;
    }


}
