<?php
// src/Acme/TaskBundle/Form/Type/UserInfoType.php
namespace site\reservationBundle\Form\Type;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserInfoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('mobile','text',array('label'=>'Mobile :','invalid_message'=>'Please Enter valid Mobile Number','constraints' => new Length(array('min' => 11,'max'=>20))));
        $builder->add('num_children','integer',array('label'=>'Number of Children'));
        $builder->add('gendar', 'choice', array('label'=>'Gendar','choices' => array('male' => 'Male', 'female' => 'Female'),'expanded' => true,));
        $builder->add('customers', 'collection', array('type' => new CustomerType()));
        //$builder->add('hobbies', 'collection', array('type' => new HobbiesType()));
        $builder->add('address','textarea');

    }
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'site\reservationBundle\Entity\Userinfo',
        ));
    }  

    public function getName()
    {
        return 'userinfo';
    }
}
?>