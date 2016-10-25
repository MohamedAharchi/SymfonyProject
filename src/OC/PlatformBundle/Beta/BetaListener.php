<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace OC\PlatformBundle\Beta;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class BetaListener {
    // Notre processeur
    protected $betaHTML;
    
    // La date de fin de la version bêta :
    // - Avant cette date, on affichera un comte à rebours (J-3 par exemple)
    // - Après cette date, on n'affichera plus le " bêta "
    protected $endDate;
    
    public function __construct(BetaHTMLAdder $betaHTML, $endDate) {
        $this->betaHTML = $betaHTML;
        $this->endDate = new \Datetime($endDate);
    }
    
    // L'argument de la méthode est un FilterResponseEvent
    public function processBeta(FilterResponseEvent $event)
    {
        // On teste si la requête est bien la requête principale (et non une sous-requête)
        if(!$event->isMasterRequest()) {
            return;
        }
        
        $remainingDays = $this->endDate->diff(new \Datetime())->days;
        
        if($remainingDays <= 0) {
            // Si la date est dépassée, on ne fait rien
            return;
        }
               
        // On utilise notre BetaHTML
        $response = $this->betaHTML->addBeta($event->getResponse(), $remainingDays);
        
        // On met à jour la réponse avec la nouvelle valeur
        $event->setResponse($response);
    }
}