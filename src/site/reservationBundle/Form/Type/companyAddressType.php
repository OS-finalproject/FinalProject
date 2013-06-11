<?php
    
   
  namespace site\reservationBundle\Form\Type;

  use Symfony\Component\Validator\Constraints\Length;
  use Symfony\Component\Validator\Constraints\NotBlank;
  
  use Symfony\Component\Form\AbstractType;
  use Symfony\Component\Form\FormBuilderInterface;
  use Symfony\Component\OptionsResolver\OptionsResolverInterface;
  
  
  class companyAddressType extends AbstractType{
      
     
    public function buildForm( FormBuilderInterface $builder , array $options ){
        
        $builder->add('city','text',array( 'label'=>'City :' , 'constraints'=> new NotBlank() ) );
        $builder->add('country','text',array( 'label'=>'Country :' ,'constraints'=> new NotBlank()));
        $builder->add('street','text',array( 'label'=>'Street : ' ,'constraints'=> new NotBlank()));
        $builder->add('telephone','text',array( 'label'=>'Telephone :' ,'constraints'=> new NotBlank()));
        $builder->add('att','text',array( 'label'=>'Attr Of Address :' ,'constraints'=> new NotBlank()));
        $builder->add('lang','text',array( 'label'=>'Lang Of Address :' ,'constraints'=> new NotBlank()));
                
    }  
    
      
      
    public function setDefaultOptions(OptionsResolverInterface $resolver){
        
        $resolver->setDefaults(array(
            'data_class' => 'site\reservationBundle\Entity\Address',
        ));
    } 
      
      
      public function getName(){
          
          return 'companyAddress';
      }
      
  }

?>
