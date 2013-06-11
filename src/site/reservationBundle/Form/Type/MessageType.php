<?php
// src/Acme/TaskBundle/Form/Type/HobbiesType.php
namespace site\reservationBundle\Form\Type;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class MessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('message','textarea',array('label'=>'Message :'));
    }
   public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'site\reservationBundle\Entity\Messages',
        ));
    } 

    public function getName()
    {
        return 'Message';
    }
}
?>