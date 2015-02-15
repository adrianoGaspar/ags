<?php

namespace AGS\FinanceiroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LancamentoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dataVencimento')
            ->add('situacao')
            ->add('tipo')
            ->add('valor')
            ->add('obs')
            ->add('planoConta')
            ->add('tipoCobrancaPagamento')
            ->add('os')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AGS\FinanceiroBundle\Entity\Lancamento'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ags_financeirobundle_lancamento';
    }
}
