<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\PrestatairesRepository")
 */
class Prestataires
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $matricule;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $denomination;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adressePrest;

    /**
     * @ORM\Column(type="integer")
     */
    private $contactePrest;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emailPrest;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statusPrest;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getDenomination(): ?string
    {
        return $this->denomination;
    }

    public function setDenomination(string $denomination): self
    {
        $this->denomination = $denomination;

        return $this;
    }

    public function getAdressePrest(): ?string
    {
        return $this->adressePrest;
    }

    public function setAdressePrest(string $adresse): self
    {
        $this->adressePrest = $adresse;

        return $this;
    }

    public function getContactePrest(): ?int
    {
        return $this->contactePrest;
    }

    public function setContactePrest(int $contacte): self
    {
        $this->contactePrest = $contacte;

        return $this;
    }

    public function getEmailPrest(): ?string
    {
        return $this->emailPrest;
    }

    public function setEmailPrest(string $email): self
    {
        $this->emailPrest = $email;

        return $this;
    }

    public function getStatusPrest(): ?string
    {
        return $this->statusPrest;
    }

    public function setStatusPrest(string $status): self
    {
        $this->statusPrest = $status;

        return $this;
    }
}
