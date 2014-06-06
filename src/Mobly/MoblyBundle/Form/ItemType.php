<?php

namespace Mobly\MoblyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ItemType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {     
        $builder
            ->add('itemNumber', 'text', 
                    array('label'       => 'Número do Item',
                          'max_length'  => 3))
            ->add('cost', null, 
                    array('label'       => 'Custo',
                          'max_length'  => 12))
            ->add('discount', null, 
                    array('label'       => 'Desconto',
                          'max_length'  => 12))
//            ->add('purchaseOrder', 'entity', 
//                    array(
//                'label'     => 'Número da Ordem',
//                'class'     => 'MoblyMoblyBundle:PurchaseOrder',
//                'property'  => 'orderNumber',
//                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mobly\MoblyBundle\Entity\Item'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mobly_moblybundle_item';
    }
}
