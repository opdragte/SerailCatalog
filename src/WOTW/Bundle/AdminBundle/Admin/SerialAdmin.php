<?php
/**
 * Created by PhpStorm.
 * User: will-o-the-wisp
 * Date: 10.03.14
 * Time: 11:51
 */

namespace WOTW\Bundle\AdminBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class SerialAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('title', 'text', array('label' => 'Название'))
            ->add('description', 'text', array('label' => 'Описание'))
            ->add('releaseBegin', 'text', array('label' => 'Начало релиза'))
            ->add('genre', 'entity', array('class' => 'WOTW\Bundle\SerialCatalogBundle\Entity\Genre'))
            ->add('seasons', 'entity', array('class' => 'WOTW\Bundle\SerialCatalogBundle\Entity\Season'))
            ->add('actors', 'text', array('label' => 'Актеры'))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('description')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('description')
        ;
    }
}