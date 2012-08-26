<?php
namespace Brickstorm\WorldBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

use Knplabs\Bundle\MenuBundle\MenuItem;

use Brickstorm\WorldBundle\Entity\Location;

class LocationAdmin extends Admin
{
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('hashtag')
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Name')
                ->add('hashtag')
                ->add('owner')
                ->add('adress')
                ->add('zipcode')
                ->add('code')
                ->add('city', 'sonata_type_model', array('required' => false))
            ->end()
        ;
    }
}