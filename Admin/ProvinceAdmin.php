<?php
namespace Brickstorm\WorldBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

use Knplabs\Bundle\MenuBundle\MenuItem;

use Brickstorm\WorldBundle\Entity\Province;

class ProvinceAdmin extends Admin
{
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('country')
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Name')
                ->add('name')
                ->add('parent', 'sonata_type_model', array('required' => false))
            ->end()
            ->with('Country')
                ->add('country', 'sonata_type_model', array('required' => false))
            ->end()
        ;
    }
}