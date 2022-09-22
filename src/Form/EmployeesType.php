<?php

namespace App\Form;

use App\Entity\Employees;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmployeesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName')
            ->add('secondName')
            ->add('lastName')
            ->add('motherLastName')
            ->add('marriedLastName')
            ->add('document')
            ->add('expirationDate')
            ->add('birthPlace')
            ->add('nationality')
            ->add('birthDay')
            ->add('age')
            ->add('fullResidenceAddress')
            ->add('personalEmail')
            ->add('residentialTelephone')
            ->add('cellPhone')
            ->add('expirationDateLicense')
            ->add('hasOwnCar')
            ->add('inCaseOfEmergency')
            ->add('familyPhoneNumber')
            ->add('allergic')
            ->add('chronicDisease')
            ->add('allergicYes')
            ->add('chronicDiseaseYes')
            ->add('bloodDonor')
            ->add('bankAccount')
            ->add('accountNumber')
            ->add('sportsPractice')
            ->add('whatSports')
            ->add('favoriteHobby')
            ->add('documentType')
            ->add('gender')
            ->add('maritalStatus')
            ->add('province')
            ->add('corregimiento')
            ->add('district')
            ->add('licenseType')
            ->add('bloodType')
            ->add('bank')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Employees::class,
        ]);
    }
}
