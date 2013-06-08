<?php
// src/Acme/TaskBundle/Form/Type/CustomerType.php
namespace site\reservationBundle\Form\Type;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class CustomerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username','text',array('label'=>'Name :',
                            'constraints' => new Length(array('min' => 5,'max'=>30))));
        $builder->add('email','email',array('label'=>'Email','invalid_message'=>'Please Enter email form'));
        $builder->add('password','password',array('label'=>'Password :','invalid_message'=>'password must be at least 6 characters',
                'constraints' => new Length(array('min' => 6,'max'=>10))));
        $builder->add('telephone','text',array('label'=>'Telephone :','invalid_message'=>'Please Enter Valid Telephonne Number',
                'constraints' => new Length(array('min' => 7,'max'=>15))));
        
        $builder->add('file','file',array('label'=>'Choose Image : '));

    }
   public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'site\reservationBundle\Entity\Customer',
        ));
    } 

    public function getName()
    {
        return 'customer';
    }
}
?>