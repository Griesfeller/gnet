<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GnetCustomerRepository")
 */
class GnetCustomer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    // add your own fields
    
    /**
     * @ORM\Column(type="integer")
     */
    private $salutation = 1;  
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $firstName = '';
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $lastName = '';

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $middleName = '';    

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $street = '';

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $housenumber = '';
    
    /**
     * @ORM\Column(type="string", length=20)
     */
    private $addressAddtitionals = '';
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $city = '';

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $postalCode = '';

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $telephon = '';
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $fax = '';
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $mobil = '';
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email = '';
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getSalutation()
    {
        return $this->salutation;
    }
    
    public function setSalutaion($salutation)
    {
        $this->salutation = $salutation;
    }
        
    public function getFirstName()
    {
        return $this->firstName;
    }
    
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    
    public function getMiddleName()
    {
        return $this->middleName;
    }
    
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }   

    public function getStreet()
    {
        return $this->street;
    }
    
    public function setStreet($street)
    {
        $this->street = $street;
    }    

    public function getHousenumber()
    {
        return $this->housenumber;
    }
    
    public function setHousenumber($housenumber)
    {
        $this->housenumber = $housenumber;
    }  
    
    public function getAddressAddtitionals()
    {
        return $this->addressAddtitionals;
    }
    
    public function setAddressAddtitionals($addressAddtitionals)
    {
        $this->addressAddtitionals = $addressAddtitionals;
    }   
    
    public function getCity()
    {
        return $this->city;
    }
    
    public function setCity($city)
    {
        $this->city = $city;
    }  

    public function getPostalCode()
    {
        return $this->postalCode;
    }
    
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    } 

    public function getTelephon()
    {
        return $this->telephon;
    }
    
    public function setTelephon($telephon)
    {
        $this->telephon = $telephon;
    } 

    public function getFax()
    {
        return $this->fax;
    }
    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    public function getMobil()
    {
        return $this->mobil;
    }
    public function setMobil($mobil)
    {
        $this->mobil = $mobil;
    }    
  
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }     
    
    
}
