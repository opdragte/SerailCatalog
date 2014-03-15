<?php

namespace WOTW\Bundle\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;

class SeasonAdmin extends Admin
{
    public function configureFormFields(FormMapper $formapper)
    {
        $formapper->add('title', 'text', array('label' => 'Название'))
            ->add('releaseBegin', 'text', array('label' => 'Начало выхода'))
            ->add('releaseEnd', 'text', array('label' => 'Завершение'))
//            ->add('episodes', 'entity', array('class' => 'WOTW\Bundle\SerialCatalogBundle\Entity\Episode',
//                'label' => 'Епизод'))
            ->add('serial', 'entity', array('class' => 'WOTW\Bundle\SerialCatalogBundle\Entity\Serial',
                'label' => 'Сериал'))
        ;
    }
} 