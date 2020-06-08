<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(fields={"mail_user"}, message="There is already an account with this mail_user")
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
    private $mail_user;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password_user;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $name_user;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $firstname_user;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $city_user;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $postalCode_user;

    /**
     * @ORM\Column(type="string", length=75, nullable=true)
     */
    private $address_user;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $birthday_user;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $phone_user;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $picture_user;

    /**
     * @ORM\Column(type="boolean")
     */
    private $picture_user_check;

    /**
     * @ORM\Column(type="integer")
     */
    private $rank_user;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $biography_user;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $story_user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMailUser(): ?string
    {
        return $this->mail_user;
    }

    public function setMailUser(string $mail_user): self
    {
        $this->mail_user = $mail_user;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->mail_user;
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
        return (string) $this->password_user;
    }

    public function setPassword(string $password_user): self
    {
        $this->password_user = $password_user;

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

    public function getNameUser(): ?string
    {
        return $this->name_user;
    }

    public function setNameUser(string $name_user): self
    {
        $this->name_user = $name_user;

        return $this;
    }

    public function getFirstnameUser(): ?string
    {
        return $this->firstname_user;
    }

    public function setFirstnameUser(string $firstname_user): self
    {
        $this->firstname_user = $firstname_user;

        return $this;
    }

    public function getCityUser(): ?string
    {
        return $this->city_user;
    }

    public function setCityUser(string $city_user): self
    {
        $this->city_user = $city_user;

        return $this;
    }

    public function getPostalCodeUser(): ?int
    {
        return $this->postalCode_user;
    }

    public function setPostalCodeUser(?int $postalCode_user): self
    {
        $this->postalCode_user = $postalCode_user;

        return $this;
    }

    public function getAddressUser(): ?string
    {
        return $this->address_user;
    }

    public function setAddressUser(?string $address_user): self
    {
        $this->address_user = $address_user;

        return $this;
    }

    public function getBirthdayUser(): ?\DateTimeInterface
    {
        return $this->birthday_user;
    }

    public function setBirthdayUser(\DateTimeInterface $birthday_user): self
    {
        $this->birthday_user = $birthday_user;

        return $this;
    }

    public function getPhoneUser(): ?int
    {
        return $this->phone_user;
    }

    public function setPhoneUser(?int $phone_user): self
    {
        $this->phone_user = $phone_user;

        return $this;
    }

    public function getPictureUser(): ?string
    {
        return $this->picture_user;
    }

    public function setPictureUser(?string $picture_user): self
    {
        $this->picture_user = $picture_user;

        return $this;
    }

    public function getPictureUserCheck(): ?bool
    {
        return $this->picture_user_check;
    }

    public function setPictureUserCheck(bool $picture_user_check): self
    {
        $this->picture_user_check = $picture_user_check;

        return $this;
    }

    public function getRankUser(): ?int
    {
        return $this->rank_user;
    }

    public function setRankUser(int $rank_user): self
    {
        $this->rank_user = $rank_user;

        return $this;
    }

    public function getBiographyUser(): ?string
    {
        return $this->biography_user;
    }

    public function setBiographyUser(?string $biography_user): self
    {
        $this->biography_user = $biography_user;

        return $this;
    }

    public function getStoryUser(): ?string
    {
        return $this->story_user;
    }

    public function setStoryUser(?string $story_user): self
    {
        $this->story_user = $story_user;

        return $this;
    }
}
