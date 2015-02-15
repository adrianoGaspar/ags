<?php

namespace AGS\FinanceiroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//            ->add('dataCadastro')
            ->add('cliente')
            ->add('dataPrometida')
            ->add('dataPacote')
            ->add('dataEntrega')
            ->add('valorCobrado')
            ->add('obs')
            ->add('status')
        
            //esse cara é o itens e serviços aparentemente estou inserindo outro form
            ->add('osHasItens', 'collection', array(
                'type' => new OsHasItemType(),
                'allow_add'    => true,
                'allow_delete' => true,
                'by_reference' => false,
            ));
               
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AGS\FinanceiroBundle\Entity\Os'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'os';
    }
}
