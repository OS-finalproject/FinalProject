<?php
// src/Acme/TaskBundle/Form/Type/EventsType.php
namespace site\reservationBundle\Form\Type;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class EventsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name','text', array('label'=>'Name :',
                            'constraints' => new Length(array('min' => 5,'max'=>30))));
        $builder->add('place','text', array('label'=>'place :',
                            'constraints' => new Length(array('min' => 5,'max'=>30))));
        $builder->add('available','integer',array('label'=>'This Event is available for :',
            'invalid_message'=>'value must be integer'));
        $builder->add('datefrom','date',array('label'=>'From : '));
        $builder->add('dateto','date',array('label'=>'To : '));
        $builder->add('file','file',array('label'=>'Choose Image : '));
        $builder->add('comp','entity', array('label'=>'Choose Company :','class'=>'site\reservationBundle\Entity\Infocomp', 'property'=>'custid.username', ));
        $builder->add('category', 'choice', array('label'=>'Category : ',
               'choices' => array('hotels' => 'Hotels', 'travel' => 'Travel',
                'tourism' => 'Tourism', 'shopping' => 'Shopping','resturant'=>'Resturant')
                
                ));
        $builder->add('description','textarea', array('label'=>'Description :',));
        $builder->add('ispublished','checkbox', array(
               'required'  => false,
              ));
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'site\reservationBundle\Entity\Events',
        ));
    } 
   

    public function getName()
    {
        return 'event';
    }
}
?>