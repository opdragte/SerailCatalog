<?php

namespace WOTW\Bundle\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;

class EpisodeAdmin extends Admin
{
    public function configureFormFields(FormMapper $formapper)
    {
        $formapper->add('title', 'text', array('label' => 'Название'))
            ->add('image', 'vlabs_file', array('required' => false))
            ->add('videoQuality', 'text', array('label' => 'Качество видео'))
            ->add('audioQuality', 'text', array('label' => 'Качество аудио'))
            ->add('releaseDate', 'text', array('label' => 'Дата выхода'))
            ->add('season', 'entity', array('class' => 'WOTW\Bundle\SerialCatalogBundle\Entity\Season',
                'label' => 'Сезон'))
        ;
    }
} 