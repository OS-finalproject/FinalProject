<?php
// src/Acme/TaskBundle/Form/Type/HobbiesType.php
namespace site\reservationBundle\Form\Type;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class HobbiesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('hobby', 'choice', array('label'=>'Hobbies','choices' => array('travel' => 'Travel', 'shopping' => 'Shopping', 'reading' => '
            Reading', 'music' => 'Music', 'drawin' => 'Drawing', 'sports' => 'Sports'),'expanded' => true,'multiple'=>true));

    }
   public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'site\reservationBundle\Entity\Hobbies',
        ));
    } 

    public function getName()
    {
        return 'Hobbies';
    }
}
?>