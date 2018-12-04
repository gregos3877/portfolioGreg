<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdresseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numeroAdresse', NumberType::class, array('label_format' => 'Num'))
            ->add('complementNumeroAdresse', ChoiceType::class, array(
                'choices' => array(
                    '' => null,
                    'Bis' => 'bis',
                    'Ter' => 'ter',
                ),
                'label_format' => 'complement'))
            ->add('voie')
            ->add('codePostaleAdresse',NumberType::class, array('label_format' => 'Code Postale'))
            ->add('villeAdresse',TextType::class, array('label_format' => 'Ville'))
            ->add('paysAdresse',TextType::class, array('label_format' => 'Pays'));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Adresse'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_adresse';
    }


}
