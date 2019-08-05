<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\TransactionsRepository")
 */
class Transactions
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message = "null champs ne doit etre vide")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeDeTransaction;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message = "null champs ne doit etre vide")
     * @Assert\GreaterThanOrEqual(
     *      value = 75000,
     *      message = "La somme a deposé doit au moins etre egal a 75000")
     */
    private $montant;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SystemUser")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotBlank(message = "null champs ne doit etre vide")
     */
    private $caissier;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTypeDeTransaction(): ?string
    {
        return $this->typeDeTransaction;
    }

    public function setTypeDeTransaction(string $typeDeTransaction): self
    {
        $this->typeDeTransaction = $typeDeTransaction;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getCaissier(): ?SystemUser
    {
        return $this->caissier;
    }

    public function setCaissier(?SystemUser $caissier): self
    {
        $this->caissier = $caissier;

        return $this;
    }
}
