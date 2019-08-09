<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $emailUser;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseUser;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephoneUser;

    /**
     * @ORM\Column(type="integer")
     */
    private $cni;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statusUser;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Prestataires")
     * @ORM\JoinColumn(nullable=false)
     */
    private $prestataire;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Compte", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $compteAssocie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmailUser(): ?string
    {
        return $this->emailUser;
    }

    public function setEmailUser(string $email): self
    {
        $this->emailUser = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresseUser(): ?string
    {
        return $this->adresseUser;
    }

    public function setAdresseUser(string $adresse): self
    {
        $this->adresseUser = $adresse;

        return $this;
    }

    public function getTelephoneUser(): ?string
    {
        return $this->telephoneUser;
    }

    public function setTelephoneUser(string $telephone): self
    {
        $this->telephoneUser = $telephone;

        return $this;
    }

    public function getCni(): ?int
    {
        return $this->cni;
    }

    public function setCni(int $cni): self
    {
        $this->cni = $cni;

        return $this;
    }

    public function getStatusUser(): ?string
    {
        return $this->statusUser;
    }

    public function setStatusUser(string $status): self
    {
        $this->statusUser = $status;

        return $this;
    }

    public function getPrestataire(): ?Prestataires
    {
        return $this->prestataire;
    }

    public function setPrestataire(?Prestataires $prestataire): self
    {
        $this->prestataire = $prestataire;

        return $this;
    }

    public function getCompteAssocie(): ?Compte
    {
        return $this->compteAssocie;
    }

    public function setCompteAssocie(Compte $compteAssocie): self
    {
        $this->compteAssocie = $compteAssocie;

        return $this;
    }
}
