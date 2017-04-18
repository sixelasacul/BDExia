<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boutique
 *
 * @ORM\Table(name="boutique", indexes={@ORM\Index(name="FK_UN_PRODUIT_A_UNE_DATE_DE_PARUTION", columns={"DATE_PROD"})})
 * @ORM\Entity
 */
class Boutique
{
    /**
     * @var integer
     *
     * @ORM\Column(name="STOCK", type="integer", nullable=false)
     */
    private $stock;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_PRODUIT", type="string", length=255, nullable=false)
     */
    private $nomProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION_PRODUIT", type="text", length=65535, nullable=true)
     */
    private $descriptionProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="PRIX_PRODUIT", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $prixProduit;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PRODUIT", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduit;

    /**
     * @var \MainBundle\Entity\Dates
     *
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Dates")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="DATE_PROD", referencedColumnName="ID_DATE")
     * })
     */
    private $dateProd;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="MainBundle\Entity\Photos", mappedBy="imgProd")
     */
    private $idImgProd;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idImgProd = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set stock
     *
     * @param integer $stock
     *
     * @return Boutique
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set nomProduit
     *
     * @param string $nomProduit
     *
     * @return Boutique
     */
    public function setNomProduit($nomProduit)
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    /**
     * Get nomProduit
     *
     * @return string
     */
    public function getNomProduit()
    {
        return $this->nomProduit;
    }

    /**
     * Set descriptionProduit
     *
     * @param string $descriptionProduit
     *
     * @return Boutique
     */
    public function setDescriptionProduit($descriptionProduit)
    {
        $this->descriptionProduit = $descriptionProduit;

        return $this;
    }

    /**
     * Get descriptionProduit
     *
     * @return string
     */
    public function getDescriptionProduit()
    {
        return $this->descriptionProduit;
    }

    /**
     * Set prixProduit
     *
     * @param string $prixProduit
     *
     * @return Boutique
     */
    public function setPrixProduit($prixProduit)
    {
        $this->prixProduit = $prixProduit;

        return $this;
    }

    /**
     * Get prixProduit
     *
     * @return string
     */
    public function getPrixProduit()
    {
        return $this->prixProduit;
    }

    /**
     * Get idProduit
     *
     * @return integer
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * Set dateProd
     *
     * @param \MainBundle\Entity\Dates $dateProd
     *
     * @return Boutique
     */
    public function setDateProd(\MainBundle\Entity\Dates $dateProd = null)
    {
        $this->dateProd = $dateProd;

        return $this;
    }

    /**
     * Get dateProd
     *
     * @return \MainBundle\Entity\Dates
     */
    public function getDateProd()
    {
        return $this->dateProd;
    }

    /**
     * Add idImgProd
     *
     * @param \MainBundle\Entity\Photos $idImgProd
     *
     * @return Boutique
     */
    public function addIdImgProd(\MainBundle\Entity\Photos $idImgProd)
    {
        $this->idImgProd[] = $idImgProd;

        return $this;
    }

    /**
     * Remove idImgProd
     *
     * @param \MainBundle\Entity\Photos $idImgProd
     */
    public function removeIdImgProd(\MainBundle\Entity\Photos $idImgProd)
    {
        $this->idImgProd->removeElement($idImgProd);
    }

    /**
     * Get idImgProd
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdImgProd()
    {
        return $this->idImgProd;
    }
}
