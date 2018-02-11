<?php

namespace MicroCMS\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\Blank;
use MicroCMS\Domain\Evenement;


class RechercheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nom', 'text', array('required' => false))
            ->add('Prenoms', 'text', array('required' => false))
            ->add('Guerre', ChoiceType::class, array(
                'required' => false,
                'choices' => array(
                    NULL => 'Conflit',
                    '1GM' => '1GM',
                    '2GM' => '2GM'
                )))
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
            ->add('Grade', ChoiceType::class, array(
                'required' => false,
                'choices' => array(
                NULL => 'Grade',
                    'Général de corps d\'armée' => 'Général de corps d\'armée',
                    'Général de division' => 'Général de division',
                    'Général de brigade' => 'Général de brigade',
                    'Colonel' =>  'Colonel',
                    'Lieutenant-colonel' => 'Lieutenant-colonel',
                    'Commandant' => 'Commandant',
                    'Chef de bataillon' => 'Chef de bataillon',
                    'Chef d\'escadron' => 'Chef d\'escadron',
                    'Capitaine' => 'Capitaine',
                    'Lieutenant' => 'Lieutenant',
                    'Sous-lieutenant' => 'Sous-lieutenant',
                    'Aspirant' => 'Aspirant',
                    'Major' => 'Major',
                    'Adjudant-chef' => 'Adjudant-chef',
                    'Adjudant' => 'Adjudant',
                    'Sergent-major' => 'Sergent-major',
                    'Sergent-chef' => 'Sergent-chef',
                    'Maréchal des logis-chef' => 'Maréchal des logis-chef',
                    'Sergent' => 'Sergent',
                    'Sergent-fourrier' => 'Sergent-fourrier',
                    'Maréchal des logis' => 'Maréchal des logis',
                    'Caporal-chef' => 'Caporal-chef',
                    'Caporal-fourrier' => 'Caporal-fourrier',
                    'Brigadier-chef' => 'Brigadier-chef',
                    'Caporal' => 'Caporal',
                    'Caporal-tambour' => 'Caporal-tambour',
                    'Caporal-clairon' => 'Caporal-clairon',
                    'Brigadier' => 'Brigadier',
                    'Soldat' =>  'Soldat',
                    'Alpin' => 'Alpin',
                    'Cavalier' => 'Cavalier',
                    'Canonnier' => 'Canonnier',
                    'Pointeur' => 'Pointeur',
                    'Chasseur' => 'Chasseur',
                    'Conducteur' => 'Conducteur',
                    'Cuirassier' => 'Cuirassier',
                    'Dragon' => 'Dragon',
                    'Hussard' => 'Hussard',
                    'Légionnaire' => 'Légionnaire',
                    'Zouave' => 'Zouave',
                    'Marsouin' => 'Marsouin',
                    'Sapeur' => 'Sapeur',
                    'Sapeur-mineur' => 'Sapeur-mineur',
                    'Mécanicien' => 'Mécanicien',
                    'Clairon' => 'Clairon',
                    'Tambour' => 'Tambour',
                    'Servant' => 'Servant',
                    'Transmetteur' => 'Transmetteur',
                    'Maître ouvrier' => 'Maître ouvrier',
                    'Maître pointeur' => 'Maître pointeur',
                    'Médecin auxiliaire' => 'Médecin auxiliaire',
                    'Sous-aide-major' => 'Sous-aide-major',
                    'Médecin aide-major' => 'Médecin-aide-major',
                    'Médecin-major' => 'Médecin-major',
                    'Médecin-principal' => 'Médecin-principal',
                    'Médecin-inspecteur' => 'Médecin-inspecteur',
                    'Brancardier' => 'Brancardier',
                    'Infirmier' => 'Infirmier',
                    'Infirmière' => 'Infirmière',
                    'Médecin' => 'Médecin',
                    'Médecin principal' => 'Médecin principal',
                    'Médecin en chef' => 'Médecin en chef',
                    'Médecin général' => 'Médecin général',
                    'Médecin général inspecteur' => 'Médecin général inspecteur',
                    'Médecin général des armées' => 'Médecin général des armées',
                    'Vétérinaire' => 'Vétérinaire',
                    'Pharmacien' => 'Pharmacien',
                    'Aviateur' => 'Aviateur',
                    'Pilote' => 'Pilote',
                    'Amiral' => 'Amiral',
                    'Vice-amiral' => 'Vice-amiral',
                    'Contre-amiral' => 'Contre-amiral',
                    'Capitaine de corvette' => 'Capitaine de corvette',
                    'Capitaine de frégate' => 'Capitaine de frégate',
                    'Capitaine de vaisseau' => 'Capitaine de vaisseau',
                    'Enseigne de vaisseau' => 'Enseigne de vaisseau',
                    'Lieutenant de vaisseau' => 'Lieutenant de vaisseau',
                    'Premier maître' => 'Premier maître',
                    'Maître principal' => 'Maître principal',
                    'Quartier-maître' => 'Quartier-maître',
                    'Second maître' => 'Second maître',
                    'Maître' => 'Maître',
                    'Matelot' => 'Matelot',
                    'Matelot-mécanicien' => 'Matelot-mécanicien'
                    )))
            ->add('CommuneDeces', 'text', array('required' => false))
            ->add('Corps', 'text', array('required' => false))
            ->add('DepartementDeces', 'text', array('required' => false))
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
                    '12' => 'décembre',

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
                    '1918' => '1918',
                    '1919' => '1919',
                    '1939' => '1939',
                    '1940' => '1940',
                    '1941' => '1941',
                    '1942' => '1942',
                    '1943' => '1943',
                    '1944' => '1944',
                    '1945' => '1945'

                )));
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