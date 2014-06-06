<?php

namespace Mobly\MoblyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;



class PurchaseOrderType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('orderNumber', 'text', 
                    array('label'       => 'Número da Ordem',
                          'max_length'  => 10))
            ->add('totalCost', null, 
                    array('label'       => 'Custo Total',
                          'max_length'  => 12))
            ->add('totalDiscount', null, 
                    array('label'       => 'Total de Desconto',
                          'max_length'  => 12))
            ->add('itens', 'collection', array(
                'type'          => new ItemType(),
                'allow_add'     => true,
                'allow_delete'  => true,
                'by_reference'  => false,                
            ))                
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'            => 'Mobly\MoblyBundle\Entity\PurchaseOrder',
            'cascade_validation'    => true
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mobly_moblybundle_purchaseorder';
    }
}
