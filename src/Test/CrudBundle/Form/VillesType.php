<?php

namespace Test\CrudBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VillesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('villedepartement')->add('villeslug')->add('villenom')->add('villenomsimple')->add('villenomreel')->add('villenomsoundex')->add('villenommetaphone')->add('villecodepostal')->add('villecommune')->add('villecodecommune')->add('villearrondissement')->add('villecanton')->add('villeamdi')->add('villepopulation2010')->add('villepopulation1999')->add('villepopulation2012')->add('villedensite2010')->add('villesurface')->add('villelongitudedeg')->add('villelatitudedeg')->add('villelongitudegrd')->add('villelatitudegrd')->add('villelongitudedms')->add('villelatitudedms')->add('villezmin')->add('villezmax');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Test\CrudBundle\Entity\Villes'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'test_crudbundle_villes';
    }


}
