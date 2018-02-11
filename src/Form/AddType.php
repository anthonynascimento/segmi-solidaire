<?php

namespace MicroCMS\Form;

use phpDocumentor\Reflection\Types\Null_;
use spec\Prophecy\Doubler\NameGeneratorSpec;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\Blank;
use MicroCMS\Domain\Evenement;

/**
 * Cette classe permet de mettre en place les menus déroulants pour les champs dans la recherche.
 * Class AddType
 * @package MicroCMS\Form
 */
class AddType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nom', 'text', array('required' => false))
            ->add('Prenoms', 'text', array('required' => false))
            ->add('Day', ChoiceType::class, array(
                'required' => false,
                'choices' => array(
                    NULL => 'Jour',
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6',
                    '7' => '7',
                    '8' => '8',
                    '9' => '9',
                    '10' => '10',
                    '11' => '11',
                    '12' => '12',
                    '13' => '13',
                    '14' => '14',
                    '15' => '15',
                    '16' => '16',
                    '17' => '17',
                    '18' => '18',
                    '19' => '19',
                    '20' => '20',
                    '21' => '21',
                    '22' => '22',
                    '23' => '23',
                    '24' => '24',
                    '25' => '25',
                    '26' => '26',
                    '27' => '27',
                    '28' => '28',
                    '29' => '29',
                    '30' => '30',
                    '31' => '31'
                )))
            ->add('Month', ChoiceType::class, array(
                'required' => false,
                'choices' => array(
                    NULL => 'Mois',
                    '1' => 'janvier',
                    '2' => 'février',
                    '3' => 'mars',
                    '4' => 'avril',
                    '5' => 'mai',
                    '6' => 'juin',
                    '7' => 'juillet',
                    '8' => 'août',
                    '9' => 'septembre',
                    '10' => 'octobre',
                    '11' => 'novembre',
                    '12' => 'décembre',

                )
            ))
            ->add('Year', ChoiceType::class, array(
                'required' => false,
                'choices' => array(
                    NULL => 'Année',
                    '1859' => '1859',
                    '1860' => '1860',
                    '1861' => '1861',
                    '1862' => '1862',
                    '1863' => '1863',
                    '1864' => '1864',
                    '1865' => '1865',
                    '1866' => '1866',
                    '1867' => '1867',
                    '1868' => '1868',
                    '1869' => '1869',
                    '1870' => '1870',
                    '1871' => '1871',
                    '1872' => '1872',
                    '1873' => '1873',
                    '1874' => '1874',
                    '1875' => '1875',
                    '1876' => '1876',
                    '1877' => '1877',
                    '1878' => '1878',
                    '1879' => '1879',
                    '1880' => '1880',
                    '1881' => '1881',
                    '1882' => '1882',
                    '1883' => '1883',
                    '1884' => '1884',
                    '1885' => '1885',
                    '1886' => '1886',
                    '1887' => '1887',
                    '1888' => '1888',
                    '1889' => '1889',
                    '1890' => '1890',
                    '1891' => '1891',
                    '1892' => '1892',
                    '1893' => '1893',
                    '1894' => '1894',
                    '1895' => '1895',
                    '1896' => '1896',
                    '1897' => '1897',
                    '1898' => '1898',
                    '1899' => '1899'
                )))
            ->add('Grade', 'text', array('required' => false))
            ->add('Dayd', ChoiceType::class, array(
                'required' => false,
                'choices' => array(
                    NULL => 'Jour',
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6',
                    '7' => '7',
                    '8' => '8',
                    '9' => '9',
                    '10' => '10',
                    '11' => '11',
                    '12' => '12',
                    '13' => '13',
                    '14' => '14',
                    '15' => '15',
                    '16' => '16',
                    '17' => '17',
                    '18' => '18',
                    '19' => '19',
                    '20' => '20',
                    '21' => '21',
                    '22' => '22',
                    '23' => '23',
                    '24' => '24',
                    '25' => '25',
                    '26' => '26',
                    '27' => '27',
                    '28' => '28',
                    '29' => '29',
                    '30' => '30',
                    '31' => '31'
                )))
            ->add('Monthd', ChoiceType::class, array(
                'required' => false,
                'choices' => array(
                    NULL => 'Mois',
                    '1' => 'janvier',
                    '2' => 'février',
                    '3' => 'mars',
                    '4' => 'avril',
                    '5' => 'mai',
                    '6' => 'juin',
                    '7' => 'juillet',
                    '8' => 'août',
                    '9' => 'septembre',
                    '10' => 'octobre',
                    '11' => 'novembre',
                    '12' => 'décembre'
                )
            ))
            ->add('Yeard', ChoiceType::class, array(
                'required' => false,
                'choices' => array(
                    NULL => 'Année',
                    '1914' => '1914',
                    '1915' => '1915',
                    '1916' => '1916',
                    '1917' => '1917',
                    '1918' => '1918'

                )))
            ->add('Guerre', 'text', array('required' => false))
            ->add('Corps', 'text', array('required' => false))
            ->add('Departement_naissance', 'text', array('required' => false))
            ->add('Commune_naissance', 'text', array('required' => false))
            ->add('Commune_deces', 'text', array('required' => false))
            ->add('Pays_deces', 'text', array('required' => false))
            ->add('Departement_deces', 'text', array('required' => false))
            ->add('Mort_france', 'text', array('required' => false))
            ->add('Complement_deces', 'textarea', array('required' => false))
            ->add('Dernier_residence', 'text', array('required' => false))
            ->add('Precision_adresse', 'text', array('required' => false))
            ->add('Commentaire', 'text', array('required' => false));
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        // TODO: Implement getName() method.
    }
}