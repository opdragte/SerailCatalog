<?php
/**
 * Created by PhpStorm.
 * User: will-o-the-wisp
 * Date: 15.03.14
 * Time: 14:08
 */

namespace WOTW\Bundle\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;

class GenreAdmin extends Admin
{
    public function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('title', 'text', array('label' => 'Жанр'));
    }
} 