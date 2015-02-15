<?php

namespace AGS\FinanceiroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OsHasItemType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('qtd')
            ->add('item')
            ->add('servico')
            ->add('un')
            ->add('valor')
//            ->add('os')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AGS\FinanceiroBundle\Entity\OsHasItem'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'oshasitem';
    }
}
