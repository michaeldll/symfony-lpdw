<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TransactionRepository")
 */
class Transaction
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\GreaterThan(0, message="Le montant doit etre superieur a 0")
     */
    private $amount;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Account", inversedBy="departureTransactions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $departureAccount;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Account", inversedBy="arrivalTransactions")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\Expression("value != this.getDepartureAccount()")
     */
    private $arrivalAccount;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;

        return $this;
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

    public function getDepartureAccount(): ?Account
    {
        return $this->departureAccount;
    }

    public function setDepartureAccount(?Account $account): self
    {
        $this->departureAccount = $account;

        return $this;
    }

    public function getArrivalAccount(): ?Account
    {
        return $this->arrivalAccount;
    }

    public function setArrivalAccount(?Account $arrivalAccount): self
    {
        $this->arrivalAccount = $arrivalAccount;

        return $this;
    }
}
