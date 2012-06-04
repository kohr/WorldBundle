<?php
namespace Brickstorm\WorldBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

use Knplabs\Bundle\MenuBundle\MenuItem;

use Brickstorm\WorldBundle\Entity\Country;

class CountryAdmin extends Admin
{
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('code')
            ->add('continent')
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Country')
                ->add('name')
                ->add('code')
            ->end()
            ->with('Continent')
              ->add('continent', 'sonata_type_model')
            ->end()
        ;
    }
}