<?php

namespace App\Form;

use App\Entity\Bank;
use App\Entity\BloodType;
use App\Entity\CompanyDepartment;
use App\Entity\Corregimiento;
use App\Entity\District;
use App\Entity\DocumentType;
use App\Entity\Employees;
use App\Entity\EmployeeType;
use App\Entity\Gender;
use App\Entity\LicenseType;
use App\Entity\MaritalStatus;
use App\Entity\PlaceWork;
use App\Entity\Province;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmployeesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName', null, [
                'required' => true,
                'label' => 'Primer Nombre: ',
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])
            ->add('secondName', null, [
                'required' => true,
                'label' => 'Segundo Nombre: ',
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])
            ->add('lastName', null, [
                'required' => true,
                'label' => 'Apellido Paterno: ',
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])
            ->add('motherLastName', null, [
                'required' => true,
                'label' => 'Apellido Materno: ',
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])
            ->add('marriedLastName', null, [
                'required' => true,
                'label' => 'Apellido de casada: ',
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])
            ->add('documentType', EntityType::class, [
                'class' => DocumentType::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('dt')
                        ->andWhere('dt.status = :status')
                        ->setParameter('status', '1')
                        ->orderBy('dt.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'Tipo de Documento: ',
            ])
            ->add('document', null, [
                'required' => true,
                'label' => 'No. de Identificación Cédula o pasaporte: ',
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])
            ->add('expirationDate', null, [
                'label' => 'Fecha de expiración: ',
            ])
            ->add('birthPlace', null, [
                'required' => true,
                'label' => 'Lugar de nacimiento:  ',
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])
            ->add('nationality', null, [
                'required' => true,
                'label' => 'Nacionalidad: ',
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])
            ->add('birthDay', null, [
                'label' => 'Fecha de nacimiento: ',
            ])
            ->add('age', null, [
                'required' => true,
                'label' => 'Edad: ',
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])
            ->add('gender', EntityType::class, [
                'class' => Gender::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('g')
                        ->andWhere('g.status = :status')
                        ->setParameter('status', '1')
                        ->orderBy('g.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'Género: ',
            ])
            ->add('maritalStatus', EntityType::class, [
                'class' => MaritalStatus::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('mt')
                        ->andWhere('mt.status = :status')
                        ->setParameter('status', '1')
                        ->orderBy('mt.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'Estado civil: ',
            ])
            ->add('fullResidenceAddress', null, [
                'required' => true,
                'label' => 'Dirección de residencia completa: ',
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])

            ->add('province', EntityType::class, [
                'class' => Province::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('p')
                        ->andWhere('p.status = :status')
                        ->setParameter('status', '1')
                        ->orderBy('p.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'Provincia: ',
            ])
            ->add('district', EntityType::class, [
                'class' => District::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('d')
                        ->andWhere('d.status = :status')
                        ->setParameter('status', '1')
                        ->orderBy('d.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'Distrito: ',
            ])
            ->add('corregimiento', EntityType::class, [
                'class' => Corregimiento::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->andWhere('c.status = :status')
                        ->setParameter('status', '1')
                        ->orderBy('c.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'Corregimiento: ',
            ])

            ->add('personalEmail', EmailType::class, [
                'required' => true,
                'label' => 'E-mail Personal: ',
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])
            ->add('residentialTelephone', null, [
                'required' => true,
                'label' => 'Teléfono residencial: ',
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])
            ->add('cellPhone', null, [
                'required' => true,
                'label' => 'Teléfono Celular: ',
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])
            ->add('licenseType', EntityType::class, [
                'class' => LicenseType::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('lt')
                        ->andWhere('lt.status = :status')
                        ->setParameter('status', '1')
                        ->orderBy('lt.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'Tipo de Licencia de Conducir: ',
            ])
            ->add('expirationDateLicense', null, [
                'required' => true,
                'label' => 'Fecha de expiración: ',
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])
            ->add('hasOwnCar', ChoiceType::class, [
                'required' => true,
                'label' => 'Tiene auto propio: ',
                'choices'  => [
                    'SÍ' => true,
                    'NO' => false,
                ],
                'expanded' => true,
            ])
            ->add('inCaseOfEmergency', null, [
                'required' => true,
                'label' => 'En caso de emergencia llamar a: ',
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])
            ->add('familyPhoneNumber', null, [
                'required' => true,
                'label' => 'No. de teléfono del familiar: ',
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])

            ->add('allergic', ChoiceType::class, [
                'required' => true,
                'label' => '¿Es alérgico a algún medicamento o comida?: ',
                'choices'  => [
                    'SÍ' => true,
                    'NO' => false,
                ],
                'expanded' => true,
            ])
            ->add('allergicYes', null, [
                'required' => true,
                'label' => false,
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])
            ->add('chronicDisease', ChoiceType::class, [
                'required' => true,
                'label' => '¿Padece de alguna enfermedad crónica?: ',
                'choices'  => [
                    'SÍ' => true,
                    'NO' => false,
                ],
                'expanded' => true,
            ])
            ->add('chronicDiseaseYes', null, [
                'required' => true,
                'label' => false,
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])
            ->add('bloodType', EntityType::class, [
                'class' => BloodType::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('bt')
                        ->andWhere('bt.status = :status')
                        ->setParameter('status', '1')
                        ->orderBy('bt.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'Tipo de sangre: ',
            ])
            ->add('bloodDonor', ChoiceType::class, [
                'required' => true,
                'label' => '¿Usted es donante de sangre?: ',
                'choices'  => [
                    'SÍ' => true,
                    'NO' => false,
                ],
                'expanded' => true,
            ])

            ->add('bankAccount', ChoiceType::class, [
                'required' => true,
                'label' => '¿Tiene cuenta bancaria de ahorro?: ',
                'choices'  => [
                    'SÍ' => true,
                    'NO' => false,
                ],
                'expanded' => true,
            ])
            ->add('bank', EntityType::class, [
                'class' => Bank::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('b')
                        ->andWhere('b.status = :status')
                        ->setParameter('status', '1')
                        ->orderBy('b.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'Banco: ',
            ])
            ->add('accountNumber', null, [
                'required' => true,
                'label' => 'No. de cuenta:',
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])
            ->add('sportsPractice', ChoiceType::class, [
                'required' => true,
                'label' => '¿Práctica deporte?: ',
                'choices'  => [
                    'SÍ' => true,
                    'NO' => false,
                ],
                'expanded' => true,
            ])
            ->add('whatSports', null, [
                'required' => true,
                'label' => '¿Cuál?:',
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])
            ->add('favoriteHobby', null, [
                'required' => true,
                'label' => '¿Su Hobbie preferido es?:',
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])





            ->add('companyPosition', null, [
                'required' => true,
                'label' => 'Cargo en la empresa:',
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])
            ->add('employeeType', EntityType::class, [
                'class' => EmployeeType::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('et')
                        ->andWhere('et.status = :status')
                        ->setParameter('status', '1')
                        ->orderBy('et.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'Tipo de empleado: ',
            ])
            ->add('companyDepartment', EntityType::class, [
                'class' => CompanyDepartment::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('cd')
                        ->andWhere('cd.status = :status')
                        ->setParameter('status', '1')
                        ->orderBy('cd.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'Departamento: ',
            ])
            ->add('dateJoiningCompany', null, [
                'required' => true,
                'label' => 'Fecha de ingreso a la empresa: ',
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])
            ->add('placeWork', EntityType::class, [
                'class' => PlaceWork::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('b')
                        ->andWhere('b.status = :status')
                        ->setParameter('status', '1')
                        ->orderBy('b.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'Lugar donde desarrolla su trabajo: ',
                'placeholder' => 'Select',
                'multiple' => true ,
                'attr' => ['data-placeholder' => 'choose roles'] ,
            ])
                
            ->add('familyCompany', ChoiceType::class, [
                'required' => true,
                'label' => 'Tiene algún familiar laborando en la empresa: ',
                'choices'  => [
                    'SÍ' => true,
                    'NO' => false,
                ],
                'expanded' => true,
            ])
            ->add('familyCompanyText', null, [
                'required' => true,
                'label' => false,
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])



            ->add('personalReferences', CollectionType::class, [
                'entry_type' => PersonalReferencesType::class,
                'by_reference' => false,
                'allow_add'    => true,
                'allow_delete' => true,
                'prototype'    => true,
                'required'     => false,
                'delete_empty' => true,
                'attr' => array(
                    'class' => 'my-selector',
                ),
                'entry_options' => [
                    'label' => false,
                ],
            ])
            
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Employees::class,
        ]);
    }
}
