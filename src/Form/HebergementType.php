<?php

namespace App\Form;

use App\Entity\Hebergement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HebergementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', ChoiceType::class, [
                'choices'  => [
                    'Maison dhote' => 'Maison dhote',
                    'Maison Localation' => 'Maison Localation',
                    'hotel' => 'hotel',
                ],
            ])
            ->add('nom')
            ->add('adresse')
            ->add('prixParNuit')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Hebergement::class,
        ]);
    }
}
