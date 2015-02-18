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

            ->add('situacao', 'checkbox', array(
                'label'     => ' Quitado ?',
                'required'  => false,
            ))
                
            ->add('tipo', 'choice', array(
                'choices' => array(
                    'D' => 'Débito',
                    'C' => 'Crédito'
                ),
                'expanded' => true,
                'multiple' => false,
                'required' => true,
             ))
                
            ->add('valor')
            ->add('obs')
                
            ->add('planoConta', null , array(
                    'placeholder'=>'Selecione o plano de contas'
                )
            )
            ->add('tipoCobrancaPagamento', null , array(
                    'placeholder'=>'Selecione o documento de cobrança ou pagamento'
                )
            )
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
