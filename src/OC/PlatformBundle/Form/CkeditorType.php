<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace OC\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CkeditorType extends AbstractType {
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
           'attr' => array('class' => 'ckeditor') // On ajoute la classe CSS
        ));
    }

    public function getParent()
    {
        return TextareaType::class;
    }
}
