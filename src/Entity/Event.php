<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EventRepository")
 */
class Event
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     * @Assert\GreaterThan("today")
     */
    private $name_event;

    /**
     * @ORM\Column(type="date")
     */
    private $date_event;

    /**
     * @ORM\Column(type="time")
     */
    private $startHour_event;

    /**
     * @ORM\Column(type="time")
     */
    private $endHour_event;

    /**
     * @ORM\Column(type="string", length=75)
     */
    private $location_event;

    /**
     * @ORM\Column(type="integer")
     */
    private $maxplayer_event;

    /**
     * @ORM\Column(type="integer")
     */
    private $subplayer_event;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Range(
     *      min = 18,
     *      max = 130,
     *      minMessage = "Seul les majeurs peuvent utiliser le site",
     *      maxMessage = "Jeanne ?"
     * )
     */
    private $minAge_event;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Range(
     *      min = 18,
     *      max = 130,
     *      minMessage = "Seul les majeurs peuvent utiliser le site",
     *      maxMessage = "Jeanne ?"
     * )
     */
    private $maxAge_event;

    /**
     * @ORM\Column(type="boolean")
     */
    private $checkAvgAge_event;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description_event;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $firstNameLeader_event;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameEvent(): ?string
    {
        return $this->name_event;
    }

    public function setNameEvent(string $name_event): self
    {
        $this->name_event = $name_event;

        return $this;
    }

    public function getStartHourEvent(): ?\DateTimeInterface
    {
        return $this->startHour_event;
    }

    public function setStartHourEvent(\DateTimeInterface $startHour_event): self
    {
        $this->startHour_event = $startHour_event;

        return $this;
    }

    public function getEndHourEvent(): ?\DateTimeInterface
    {
        return $this->endHour_event;
    }

    public function setEndHourEvent(\DateTimeInterface $endHour_event): self
    {
        $this->endHour_event = $endHour_event;

        return $this;
    }

    public function getLocationEvent(): ?string
    {
        return $this->location_event;
    }

    public function setLocationEvent(string $location_event): self
    {
        $this->location_event = $location_event;

        return $this;
    }

    public function getMaxplayerEvent(): ?int
    {
        return $this->maxplayer_event;
    }

    public function setMaxplayerEvent(int $maxplayer_event): self
    {
        $this->maxplayer_event = $maxplayer_event;

        return $this;
    }

    public function getSubplayerEvent(): ?int
    {
        return $this->subplayer_event;
    }

    public function setSubplayerEvent(int $subplayer_event): self
    {
        $this->subplayer_event = $subplayer_event;

        return $this;
    }

    public function getMinAgeEvent(): ?int
    {
        return $this->minAge_event;
    }

    public function setMinAgeEvent(?int $minAge_event): self
    {
        $this->minAge_event = $minAge_event;

        return $this;
    }

    public function getMaxAgeEvent(): ?int
    {
        return $this->maxAge_event;
    }

    public function setMaxAgeEvent(?int $maxAge_event): self
    {
        $this->maxAge_event = $maxAge_event;

        return $this;
    }

    public function getCheckAvgAgeEvent(): ?bool
    {
        return $this->checkAvgAge_event;
    }

    public function setCheckAvgAgeEvent(bool $checkAvgAge_event): self
    {
        $this->checkAvgAge_event = $checkAvgAge_event;

        return $this;
    }

    public function getDescriptionEvent(): ?string
    {
        return $this->description_event;
    }

    public function setDescriptionEvent(?string $description_event): self
    {
        $this->description_event = $description_event;

        return $this;
    }

    public function getFirstNameLeaderEvent(): ?string
    {
        return $this->firstNameLeader_event;
    }

    public function setFirstNameLeaderEvent(string $firstNameLeader_event): self
    {
        $this->firstNameLeader_event = $firstNameLeader_event;

        return $this;
    }

    public function getDateEvent(): ?\DateTimeInterface
    {
        return $this->date_event;
    }

    public function setDateEvent(\DateTimeInterface $date_event): self
    {
        $this->date_event = $date_event;

        return $this;
    }
}
