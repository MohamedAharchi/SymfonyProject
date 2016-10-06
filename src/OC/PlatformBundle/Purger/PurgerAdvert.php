<?php
// src/OC/PlatformBundle/Purger/PurgerAdvert.php

namespace OC\PlatformBundle\Purger;

use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\Application;
use OC\PlatformBundle\Respository\AdvertRepository;

use Doctrine\ORM\EntityManager;

class PurgerAdvert
{
  private $listAdverst;
  private $days;
  private $date; 
  private $em;

  public function __construct(EntityManager $em) 
  {
    $this->em = $em; 
    $this->date = new \DateTime();
  }

  public function purge($days) 
  {
    $this->days = $days;
    $dateDiff = $this->date->modify('- '.$days.' day');
    $listAdverts = $this->em->getRepository('OCPlatformBundle:Advert')->getAdvertsWithoutApp($dateDiff);
    
    foreach ($listAdverts as $advert) {
      $this->em->remove($advert);
    }

    $this->em->flush();
  }
}
