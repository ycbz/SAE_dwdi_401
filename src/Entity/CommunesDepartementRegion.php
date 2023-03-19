<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommunesDepartementRegion
 *
 * @ORM\Table(name="communes_departement_region")
 * @ORM\Entity
 */
class CommunesDepartementRegion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_commune_INSEE", type="string", length=5, nullable=true)
     */
    private $codeCommuneInsee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_commune_postal", type="string", length=38, nullable=true)
     */
    private $nomCommunePostal;

    /**
     * @var int|null
     *
     * @ORM\Column(name="code_postal", type="integer", nullable=true)
     */
    private $codePostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle_acheminement", type="string", length=32, nullable=true)
     */
    private $libelleAcheminement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ligne_5", type="string", length=33, nullable=true)
     */
    private $ligne5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="latitude", type="string", length=13, nullable=true)
     */
    private $latitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="longitude", type="string", length=17, nullable=true)
     */
    private $longitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_commune", type="string", length=3, nullable=true)
     */
    private $codeCommune;

    /**
     * @var string|null
     *
     * @ORM\Column(name="article", type="string", length=3, nullable=true)
     */
    private $article;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_commune", type="string", length=45, nullable=true)
     */
    private $nomCommune;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_commune_complet", type="string", length=45, nullable=true)
     */
    private $nomCommuneComplet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_departement", type="string", length=3, nullable=true)
     */
    private $codeDepartement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_departement", type="string", length=23, nullable=true)
     */
    private $nomDepartement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_region", type="string", length=2, nullable=true)
     */
    private $codeRegion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_region", type="string", length=26, nullable=true)
     */
    private $nomRegion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeCommuneInsee(): ?string
    {
        return $this->codeCommuneInsee;
    }

    public function setCodeCommuneInsee(?string $codeCommuneInsee): self
    {
        $this->codeCommuneInsee = $codeCommuneInsee;

        return $this;
    }

    public function getNomCommunePostal(): ?string
    {
        return $this->nomCommunePostal;
    }

    public function setNomCommunePostal(?string $nomCommunePostal): self
    {
        $this->nomCommunePostal = $nomCommunePostal;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->codePostal;
    }

    public function setCodePostal(?int $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getLibelleAcheminement(): ?string
    {
        return $this->libelleAcheminement;
    }

    public function setLibelleAcheminement(?string $libelleAcheminement): self
    {
        $this->libelleAcheminement = $libelleAcheminement;

        return $this;
    }

    public function getLigne5(): ?string
    {
        return $this->ligne5;
    }

    public function setLigne5(?string $ligne5): self
    {
        $this->ligne5 = $ligne5;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getCodeCommune(): ?string
    {
        return $this->codeCommune;
    }

    public function setCodeCommune(?string $codeCommune): self
    {
        $this->codeCommune = $codeCommune;

        return $this;
    }

    public function getArticle(): ?string
    {
        return $this->article;
    }

    public function setArticle(?string $article): self
    {
        $this->article = $article;

        return $this;
    }

    public function getNomCommune(): ?string
    {
        return $this->nomCommune;
    }

    public function setNomCommune(?string $nomCommune): self
    {
        $this->nomCommune = $nomCommune;

        return $this;
    }

    public function getNomCommuneComplet(): ?string
    {
        return $this->nomCommuneComplet;
    }

    public function setNomCommuneComplet(?string $nomCommuneComplet): self
    {
        $this->nomCommuneComplet = $nomCommuneComplet;

        return $this;
    }

    public function getCodeDepartement(): ?string
    {
        return $this->codeDepartement;
    }

    public function setCodeDepartement(?string $codeDepartement): self
    {
        $this->codeDepartement = $codeDepartement;

        return $this;
    }

    public function getNomDepartement(): ?string
    {
        return $this->nomDepartement;
    }

    public function setNomDepartement(?string $nomDepartement): self
    {
        $this->nomDepartement = $nomDepartement;

        return $this;
    }

    public function getCodeRegion(): ?string
    {
        return $this->codeRegion;
    }

    public function setCodeRegion(?string $codeRegion): self
    {
        $this->codeRegion = $codeRegion;

        return $this;
    }

    public function getNomRegion(): ?string
    {
        return $this->nomRegion;
    }

    public function setNomRegion(?string $nomRegion): self
    {
        $this->nomRegion = $nomRegion;

        return $this;
    }


}
