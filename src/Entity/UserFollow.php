<?php

namespace App\Entity;

use App\Repository\UserFollowRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserFollowRepository::class)]
class UserFollow
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    //Usuario que sigue
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'follows')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $follower = null;

    //Usuario seguido
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'followers')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $followed = null;

    #[ORM\Column(type: 'datetime')]
    private \DateTimeInterface $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFollower(): ?User
    {
        return $this->follower;
    }
    public function setFollower(User $follower): static
    {
        $this->follower = $follower;
        return $this;
    }

    public function getFollowed(): ?User
    {
        return $this->followed;
    }
    public function setFollowed(User $followed): static
    {
        $this->followed = $followed;
        return $this;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }
    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }





}
