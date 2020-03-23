<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $productcode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $omschrijving;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $btw;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $prijs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductcode(): ?int
    {
        return $this->productcode;
    }

    public function setProductcode(int $productcode): self
    {
        $this->productcode = $productcode;

        return $this;
    }

    public function getOmschrijving(): ?string
    {
        return $this->omschrijving;
    }

    public function setOmschrijving(string $omschrijving): self
    {
        $this->omschrijving = $omschrijving;

        return $this;
    }

    public function getBtw(): ?string
    {
        return $this->btw;
    }

    public function setBtw(string $btw): self
    {
        $this->btw = $btw;

        return $this;
    }

    public function getPrijs(): ?float
    {
        return $this->prijs;
    }

    public function setPrijs(?float $prijs): self
    {
        $this->prijs = $prijs;

        return $this;
    }
}
