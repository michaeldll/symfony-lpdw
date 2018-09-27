<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AccountRepository")
 */
class Account
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $balance;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Transaction", mappedBy="departureAccount", orphanRemoval=true)
     */
    private $departureTransactions;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Transaction", mappedBy="arrivalAccount", orphanRemoval=true)
     */
    private $arrivalTransactions;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Account")
     */
    private $beneficiary;

    public function __construct()
    {
        $this->departureTransactions = new ArrayCollection();
        $this->arrivalTransactions = new ArrayCollection();
        $this->beneficiary = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getBalance(): ?string
    {
        return $this->balance;
    }

    public function addToBalance($amount): ?int
    {
        $this->balance += $amount;
        return $this->balance;
    }

    public function substractFromBalance($amount): ?int
    {
        $this->balance -= $amount;
        return $this->balance;
    }

    public function setBalance(string $balance): self
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * @return Collection|Transaction[]
     */
    public function getDepartureTransactions(): Collection
    {
        return $this->departureTransactions;
    }

    public function addDepartureTransaction(Transaction $transaction): self
    {
        if (!$this->departureTransactions->contains($transaction)) {
            $this->departureTransactions[] = $transaction;
            $transaction->setDepartureAccount($this);
        }

        return $this;
    }

    public function removeDepartureTransaction(Transaction $transaction): self
    {
        if ($this->departureTransactions->contains($transaction)) {
            $this->departureTransactions->removeElement($transaction);
            // set the owning side to null (unless already changed)
            if ($transaction->getDepartureAccount() === $this) {
                $transaction->setDepartureAccount(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Transaction[]
     */
    public function getArrivalTransactions(): Collection
    {
        return $this->arrivalTransactions;
    }

    public function addArrivalTransaction(Transaction $arrivalTransaction): self
    {
        if (!$this->arrivalTransactions->contains($arrivalTransaction)) {
            $this->arrivalTransactions[] = $arrivalTransaction;
            $arrivalTransaction->setArrivalAccount($this);
        }

        return $this;
    }

    public function removeArrivalTransaction(Transaction $arrivalTransaction): self
    {
        if ($this->arrivalTransactions->contains($arrivalTransaction)) {
            $this->arrivalTransactions->removeElement($arrivalTransaction);
            // set the owning side to null (unless already changed)
            if ($arrivalTransaction->getArrivalAccount() === $this) {
                $arrivalTransaction->setArrivalAccount(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Account[]
     */
    public function getBeneficiary(): Collection
    {
        return $this->beneficiary;
    }

    public function addBeneficiary(Account $beneficiary): self
    {
        if (!$this->beneficiary->contains($beneficiary)) {
            $this->beneficiary[] = $beneficiary;
        }

        return $this;
    }

    public function removeBeneficiary(Account $beneficiary): self
    {
        if ($this->beneficiary->contains($beneficiary)) {
            $this->beneficiary->removeElement($beneficiary);
        }

        return $this;
    }


}
