<?php

namespace Test\CrudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Villes
 *
 * @ORM\Table(name="villes", uniqueConstraints={@ORM\UniqueConstraint(name="ville_code_commune_2", columns={"villeCodeCommune"}), @ORM\UniqueConstraint(name="ville_slug", columns={"villeSlug"})}, indexes={@ORM\Index(name="ville_departement", columns={"villeDepartement"}), @ORM\Index(name="ville_nom", columns={"villeNom"}), @ORM\Index(name="ville_nom_reel", columns={"villeNomReel"}), @ORM\Index(name="ville_code_commune", columns={"villeCodeCommune"}), @ORM\Index(name="ville_code_postal", columns={"villeCodePostal"}), @ORM\Index(name="ville_longitude_latitude_deg", columns={"villeLongitudeDeg", "villeLatitudeDeg"}), @ORM\Index(name="ville_nom_soundex", columns={"villeNomSoundex"}), @ORM\Index(name="ville_nom_metaphone", columns={"villeNomMetaphone"}), @ORM\Index(name="ville_population_2010", columns={"villePopulation2010"}), @ORM\Index(name="ville_nom_simple", columns={"villeNomSimple"})})
 * @ORM\Entity
 */
class Villes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="villeDepartement", type="string", length=3, nullable=true)
     */
    private $villedepartement;

    /**
     * @var string
     *
     * @ORM\Column(name="villeSlug", type="string", length=255, nullable=true)
     */
    private $villeslug;

    /**
     * @var string
     *
     * @ORM\Column(name="villeNom", type="string", length=45, nullable=true)
     */
    private $villenom;

    /**
     * @var string
     *
     * @ORM\Column(name="villeNomSimple", type="string", length=45, nullable=true)
     */
    private $villenomsimple;

    /**
     * @var string
     *
     * @ORM\Column(name="villeNomReel", type="string", length=45, nullable=true)
     */
    private $villenomreel;

    /**
     * @var string
     *
     * @ORM\Column(name="villeNomSoundex", type="string", length=20, nullable=true)
     */
    private $villenomsoundex;

    /**
     * @var string
     *
     * @ORM\Column(name="villeNomMetaphone", type="string", length=22, nullable=true)
     */
    private $villenommetaphone;

    /**
     * @var string
     *
     * @ORM\Column(name="villeCodePostal", type="string", length=255, nullable=true)
     */
    private $villecodepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="villeCommune", type="string", length=3, nullable=true)
     */
    private $villecommune;

    /**
     * @var string
     *
     * @ORM\Column(name="villeCodeCommune", type="string", length=5, nullable=false)
     */
    private $villecodecommune;

    /**
     * @var integer
     *
     * @ORM\Column(name="villeArrondissement", type="smallint", nullable=true)
     */
    private $villearrondissement;

    /**
     * @var string
     *
     * @ORM\Column(name="villeCanton", type="string", length=4, nullable=true)
     */
    private $villecanton;

    /**
     * @var integer
     *
     * @ORM\Column(name="villeAmdi", type="smallint", nullable=true)
     */
    private $villeamdi;

    /**
     * @var integer
     *
     * @ORM\Column(name="villePopulation2010", type="integer", nullable=true)
     */
    private $villepopulation2010;

    /**
     * @var integer
     *
     * @ORM\Column(name="villePopulation1999", type="integer", nullable=true)
     */
    private $villepopulation1999;

    /**
     * @var integer
     *
     * @ORM\Column(name="villePopulation2012", type="integer", nullable=true)
     */
    private $villepopulation2012;

    /**
     * @var integer
     *
     * @ORM\Column(name="villeDensite2010", type="integer", nullable=true)
     */
    private $villedensite2010;

    /**
     * @var float
     *
     * @ORM\Column(name="villeSurface", type="float", precision=10, scale=0, nullable=true)
     */
    private $villesurface;

    /**
     * @var float
     *
     * @ORM\Column(name="villeLongitudeDeg", type="float", precision=10, scale=0, nullable=true)
     */
    private $villelongitudedeg;

    /**
     * @var float
     *
     * @ORM\Column(name="villeLatitudeDeg", type="float", precision=10, scale=0, nullable=true)
     */
    private $villelatitudedeg;

    /**
     * @var string
     *
     * @ORM\Column(name="villeLongitudeGrd", type="string", length=9, nullable=true)
     */
    private $villelongitudegrd;

    /**
     * @var string
     *
     * @ORM\Column(name="villeLatitudeGrd", type="string", length=8, nullable=true)
     */
    private $villelatitudegrd;

    /**
     * @var string
     *
     * @ORM\Column(name="villeLongitudeDms", type="string", length=9, nullable=true)
     */
    private $villelongitudedms;

    /**
     * @var string
     *
     * @ORM\Column(name="villeLatitudeDms", type="string", length=8, nullable=true)
     */
    private $villelatitudedms;

    /**
     * @var integer
     *
     * @ORM\Column(name="villeZmin", type="integer", nullable=true)
     */
    private $villezmin;

    /**
     * @var integer
     *
     * @ORM\Column(name="villeZmax", type="integer", nullable=true)
     */
    private $villezmax;



    /**
     * Set villedepartement
     *
     * @param string $villedepartement
     *
     * @return Villes
     */
    public function setVilledepartement($villedepartement)
    {
        $this->villedepartement = $villedepartement;

        return $this;
    }

    /**
     * Get villedepartement
     *
     * @return string
     */
    public function getVilledepartement()
    {
        return $this->villedepartement;
    }

    /**
     * Set villeslug
     *
     * @param string $villeslug
     *
     * @return Villes
     */
    public function setVilleslug($villeslug)
    {
        $this->villeslug = $villeslug;

        return $this;
    }

    /**
     * Get villeslug
     *
     * @return string
     */
    public function getVilleslug()
    {
        return $this->villeslug;
    }

    /**
     * Set villenom
     *
     * @param string $villenom
     *
     * @return Villes
     */
    public function setVillenom($villenom)
    {
        $this->villenom = $villenom;

        return $this;
    }

    /**
     * Get villenom
     *
     * @return string
     */
    public function getVillenom()
    {
        return $this->villenom;
    }

    /**
     * Set villenomsimple
     *
     * @param string $villenomsimple
     *
     * @return Villes
     */
    public function setVillenomsimple($villenomsimple)
    {
        $this->villenomsimple = $villenomsimple;

        return $this;
    }

    /**
     * Get villenomsimple
     *
     * @return string
     */
    public function getVillenomsimple()
    {
        return $this->villenomsimple;
    }

    /**
     * Set villenomreel
     *
     * @param string $villenomreel
     *
     * @return Villes
     */
    public function setVillenomreel($villenomreel)
    {
        $this->villenomreel = $villenomreel;

        return $this;
    }

    /**
     * Get villenomreel
     *
     * @return string
     */
    public function getVillenomreel()
    {
        return $this->villenomreel;
    }

    /**
     * Set villenomsoundex
     *
     * @param string $villenomsoundex
     *
     * @return Villes
     */
    public function setVillenomsoundex($villenomsoundex)
    {
        $this->villenomsoundex = $villenomsoundex;

        return $this;
    }

    /**
     * Get villenomsoundex
     *
     * @return string
     */
    public function getVillenomsoundex()
    {
        return $this->villenomsoundex;
    }

    /**
     * Set villenommetaphone
     *
     * @param string $villenommetaphone
     *
     * @return Villes
     */
    public function setVillenommetaphone($villenommetaphone)
    {
        $this->villenommetaphone = $villenommetaphone;

        return $this;
    }

    /**
     * Get villenommetaphone
     *
     * @return string
     */
    public function getVillenommetaphone()
    {
        return $this->villenommetaphone;
    }

    /**
     * Set villecodepostal
     *
     * @param string $villecodepostal
     *
     * @return Villes
     */
    public function setVillecodepostal($villecodepostal)
    {
        $this->villecodepostal = $villecodepostal;

        return $this;
    }

    /**
     * Get villecodepostal
     *
     * @return string
     */
    public function getVillecodepostal()
    {
        return $this->villecodepostal;
    }

    /**
     * Set villecommune
     *
     * @param string $villecommune
     *
     * @return Villes
     */
    public function setVillecommune($villecommune)
    {
        $this->villecommune = $villecommune;

        return $this;
    }

    /**
     * Get villecommune
     *
     * @return string
     */
    public function getVillecommune()
    {
        return $this->villecommune;
    }

    /**
     * Set villecodecommune
     *
     * @param string $villecodecommune
     *
     * @return Villes
     */
    public function setVillecodecommune($villecodecommune)
    {
        $this->villecodecommune = $villecodecommune;

        return $this;
    }

    /**
     * Get villecodecommune
     *
     * @return string
     */
    public function getVillecodecommune()
    {
        return $this->villecodecommune;
    }

    /**
     * Set villearrondissement
     *
     * @param integer $villearrondissement
     *
     * @return Villes
     */
    public function setVillearrondissement($villearrondissement)
    {
        $this->villearrondissement = $villearrondissement;

        return $this;
    }

    /**
     * Get villearrondissement
     *
     * @return integer
     */
    public function getVillearrondissement()
    {
        return $this->villearrondissement;
    }

    /**
     * Set villecanton
     *
     * @param string $villecanton
     *
     * @return Villes
     */
    public function setVillecanton($villecanton)
    {
        $this->villecanton = $villecanton;

        return $this;
    }

    /**
     * Get villecanton
     *
     * @return string
     */
    public function getVillecanton()
    {
        return $this->villecanton;
    }

    /**
     * Set villeamdi
     *
     * @param integer $villeamdi
     *
     * @return Villes
     */
    public function setVilleamdi($villeamdi)
    {
        $this->villeamdi = $villeamdi;

        return $this;
    }

    /**
     * Get villeamdi
     *
     * @return integer
     */
    public function getVilleamdi()
    {
        return $this->villeamdi;
    }

    /**
     * Set villepopulation2010
     *
     * @param integer $villepopulation2010
     *
     * @return Villes
     */
    public function setVillepopulation2010($villepopulation2010)
    {
        $this->villepopulation2010 = $villepopulation2010;

        return $this;
    }

    /**
     * Get villepopulation2010
     *
     * @return integer
     */
    public function getVillepopulation2010()
    {
        return $this->villepopulation2010;
    }

    /**
     * Set villepopulation1999
     *
     * @param integer $villepopulation1999
     *
     * @return Villes
     */
    public function setVillepopulation1999($villepopulation1999)
    {
        $this->villepopulation1999 = $villepopulation1999;

        return $this;
    }

    /**
     * Get villepopulation1999
     *
     * @return integer
     */
    public function getVillepopulation1999()
    {
        return $this->villepopulation1999;
    }

    /**
     * Set villepopulation2012
     *
     * @param integer $villepopulation2012
     *
     * @return Villes
     */
    public function setVillepopulation2012($villepopulation2012)
    {
        $this->villepopulation2012 = $villepopulation2012;

        return $this;
    }

    /**
     * Get villepopulation2012
     *
     * @return integer
     */
    public function getVillepopulation2012()
    {
        return $this->villepopulation2012;
    }

    /**
     * Set villedensite2010
     *
     * @param integer $villedensite2010
     *
     * @return Villes
     */
    public function setVilledensite2010($villedensite2010)
    {
        $this->villedensite2010 = $villedensite2010;

        return $this;
    }

    /**
     * Get villedensite2010
     *
     * @return integer
     */
    public function getVilledensite2010()
    {
        return $this->villedensite2010;
    }

    /**
     * Set villesurface
     *
     * @param float $villesurface
     *
     * @return Villes
     */
    public function setVillesurface($villesurface)
    {
        $this->villesurface = $villesurface;

        return $this;
    }

    /**
     * Get villesurface
     *
     * @return float
     */
    public function getVillesurface()
    {
        return $this->villesurface;
    }

    /**
     * Set villelongitudedeg
     *
     * @param float $villelongitudedeg
     *
     * @return Villes
     */
    public function setVillelongitudedeg($villelongitudedeg)
    {
        $this->villelongitudedeg = $villelongitudedeg;

        return $this;
    }

    /**
     * Get villelongitudedeg
     *
     * @return float
     */
    public function getVillelongitudedeg()
    {
        return $this->villelongitudedeg;
    }

    /**
     * Set villelatitudedeg
     *
     * @param float $villelatitudedeg
     *
     * @return Villes
     */
    public function setVillelatitudedeg($villelatitudedeg)
    {
        $this->villelatitudedeg = $villelatitudedeg;

        return $this;
    }

    /**
     * Get villelatitudedeg
     *
     * @return float
     */
    public function getVillelatitudedeg()
    {
        return $this->villelatitudedeg;
    }

    /**
     * Set villelongitudegrd
     *
     * @param string $villelongitudegrd
     *
     * @return Villes
     */
    public function setVillelongitudegrd($villelongitudegrd)
    {
        $this->villelongitudegrd = $villelongitudegrd;

        return $this;
    }

    /**
     * Get villelongitudegrd
     *
     * @return string
     */
    public function getVillelongitudegrd()
    {
        return $this->villelongitudegrd;
    }

    /**
     * Set villelatitudegrd
     *
     * @param string $villelatitudegrd
     *
     * @return Villes
     */
    public function setVillelatitudegrd($villelatitudegrd)
    {
        $this->villelatitudegrd = $villelatitudegrd;

        return $this;
    }

    /**
     * Get villelatitudegrd
     *
     * @return string
     */
    public function getVillelatitudegrd()
    {
        return $this->villelatitudegrd;
    }

    /**
     * Set villelongitudedms
     *
     * @param string $villelongitudedms
     *
     * @return Villes
     */
    public function setVillelongitudedms($villelongitudedms)
    {
        $this->villelongitudedms = $villelongitudedms;

        return $this;
    }

    /**
     * Get villelongitudedms
     *
     * @return string
     */
    public function getVillelongitudedms()
    {
        return $this->villelongitudedms;
    }

    /**
     * Set villelatitudedms
     *
     * @param string $villelatitudedms
     *
     * @return Villes
     */
    public function setVillelatitudedms($villelatitudedms)
    {
        $this->villelatitudedms = $villelatitudedms;

        return $this;
    }

    /**
     * Get villelatitudedms
     *
     * @return string
     */
    public function getVillelatitudedms()
    {
        return $this->villelatitudedms;
    }

    /**
     * Set villezmin
     *
     * @param integer $villezmin
     *
     * @return Villes
     */
    public function setVillezmin($villezmin)
    {
        $this->villezmin = $villezmin;

        return $this;
    }

    /**
     * Get villezmin
     *
     * @return integer
     */
    public function getVillezmin()
    {
        return $this->villezmin;
    }

    /**
     * Set villezmax
     *
     * @param integer $villezmax
     *
     * @return Villes
     */
    public function setVillezmax($villezmax)
    {
        $this->villezmax = $villezmax;

        return $this;
    }

    /**
     * Get villezmax
     *
     * @return integer
     */
    public function getVillezmax()
    {
        return $this->villezmax;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
