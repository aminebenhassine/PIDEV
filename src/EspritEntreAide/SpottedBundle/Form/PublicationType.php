<?php

namespace EspritEntreAide\SpottedBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class PublicationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titreP')
                ->add('descP')
                ->add('dateP')
                ->add('image', FileType::class, array('label' => 'Image(PNG)','data_class'=>null))

            ->add('categorieP')
                ->add('note')

       /* ->add('idUser',EntityType::class,array(
        'class'=>"EspritEntreAide\UserBundle\Entity\User"
    ))*/
            ->add('Ajouter',SubmitType::class);


    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
       /* $resolver->setDefaults(array(
            'data_class' => 'EspritEntreAide\SpottedBundle\Entity\Publication'
        ));*/
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        //return 'espritentreaide_spottedbundle_publication';
    }


}
