<?php

namespace App\Form;

use App\Entity\Patient;
use App\Form\CardiovasculaireType;
use App\Form\ParacliniqueType;
use App\Form\SuiviType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use phpDocumentor\Reflection\Types\Integer;

class PatientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array(
                'label' => 'Nom',
                'required' => true,
            ))
            ->add('prenom', TextType::class, array(
                'label' => 'Prénom',
                'required' => true,
            ))
            ->add('sexe', ChoiceType::class, array(
                'label' => 'Sexe',
                'required' => 'true',
                'expanded' => true,
                'multiple' => false,
                'placeholder' => false,
                'choices' => array(
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                ),
            ))
            ->add('dateNaissance', DateType::class, array(
                'label' => 'Date de naissance',
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'attr' => array(
                    'placeholder' => 'dd/mm/yyyy',
                ),
                'required' => false,
            ))
            ->add('age', IntegerType::class, array(
                'label' => 'Âge',
                'required' => false,
                // 'attr' => array(
                //     'useStyle' => false,
                // ),
            ))

            ->add('cardiovasculaire', CardiovasculaireType::class, array(
                'label' => 'Cardiovasculaire'
            ))

            ->add('paraclinique', ParacliniqueType::class, array(
                'label' => 'Paraclinique'
            ))

            ->add('suivi', SuiviType::class, array(
                'label' => 'Suivi'
            ))

            ->add('add', SubmitType::class, array('label' => 'Ajouter'))
            ->add('save', SubmitType::class, array('label' => 'Sauvegarder'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Patient::class,
            'allow_extra_fields' => true,
        ]);
    }
}
