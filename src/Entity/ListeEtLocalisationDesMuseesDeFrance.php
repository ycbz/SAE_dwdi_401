<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListeEtLocalisationDesMuseesDeFrance
 *
 * @ORM\Table(name="liste_et_localisation_des_musees_de_france")
 * @ORM\Entity
 */
class ListeEtLocalisationDesMuseesDeFrance
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
     * @ORM\Column(name="Region_administrative", type="string", length=39, nullable=true)
     */
    private $regionAdministrative;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Departement", type="string", length=24, nullable=true)
     */
    private $departement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Identifiant_Museofile", type="string", length=5, nullable=true)
     */
    private $identifiantMuseofile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Commune", type="string", length=31, nullable=true)
     */
    private $commune;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_officiel_du_musee", type="string", length=106, nullable=true)
     */
    private $nomOfficielDuMusee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Adresse", type="string", length=118, nullable=true)
     */
    private $adresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Lieu", type="string", length=72, nullable=true)
     */
    private $lieu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Code_Postal", type="string", length=5, nullable=true)
     */
    private $codePostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Telephone", type="string", length=84, nullable=true)
     */
    private $telephone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="URL", type="string", length=170, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Latitude", type="string", length=19, nullable=true)
     */
    private $latitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Longitude", type="string", length=20, nullable=true)
     */
    private $longitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="REF_Deps", type="string", length=7, nullable=true)
     */
    private $refDeps;

    /**
     * @var string|null
     *
     * @ORM\Column(name="geolocalisation", type="string", length=40, nullable=true)
     */
    private $geolocalisation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Date_arrete_attribution_appellation", type="string", length=10, nullable=true)
     */
    private $dateArreteAttributionAppellation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRegionAdministrative(): ?string
    {
        return $this->regionAdministrative;
    }

    public function setRegionAdministrative(?string $regionAdministrative): self
    {
        $this->regionAdministrative = $regionAdministrative;

        return $this;
    }

    public function getDepartement(): ?string
    {
        return $this->departement;
    }

    public function setDepartement(?string $departement): self
    {
        $this->departement = $departement;

        return $this;
    }

    public function getIdentifiantMuseofile(): ?string
    {
        return $this->identifiantMuseofile;
    }

    public function setIdentifiantMuseofile(?string $identifiantMuseofile): self
    {
        $this->identifiantMuseofile = $identifiantMuseofile;

        return $this;
    }

    public function getCommune(): ?string
    {
        return $this->commune;
    }

    public function setCommune(?string $commune): self
    {
        $this->commune = $commune;

        return $this;
    }

    public function getNomOfficielDuMusee(): ?string
    {
        return $this->nomOfficielDuMusee;
    }

    public function setNomOfficielDuMusee(?string $nomOfficielDuMusee): self
    {
        $this->nomOfficielDuMusee = $nomOfficielDuMusee;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(?string $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

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

    public function getRefDeps(): ?string
    {
        return $this->refDeps;
    }

    public function setRefDeps(?string $refDeps): self
    {
        $this->refDeps = $refDeps;

        return $this;
    }

    public function getGeolocalisation(): ?string
    {
        return $this->geolocalisation;
    }

    public function setGeolocalisation(?string $geolocalisation): self
    {
        $this->geolocalisation = $geolocalisation;

        return $this;
    }

    public function getDateArreteAttributionAppellation(): ?string
    {
        return $this->dateArreteAttributionAppellation;
    }

    public function setDateArreteAttributionAppellation(?string $dateArreteAttributionAppellation): self
    {
        $this->dateArreteAttributionAppellation = $dateArreteAttributionAppellation;

        return $this;
    }


}
