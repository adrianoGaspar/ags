<?php

namespace AGS\FinanceiroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EnderecoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rua')
            ->add('bairro')
            ->add('numero')
            ->add('complemento')
            ->add('cep')
            ->add('tipo')
            ->add('cidade')
            ->add('cliente')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AGS\FinanceiroBundle\Entity\Endereco'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ags_financeirobundle_endereco';
    }
}
