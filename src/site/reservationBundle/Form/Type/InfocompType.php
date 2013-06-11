<?php
        // src/Acme/TaskBundle/Form/Type/infoCompType.php

  namespace site\reservationBundle\Form\Type;

  use Symfony\Component\Validator\Constraints\Length;
  use Symfony\Component\Validator\Constraints\NotBlank;
  use Symfony\Component\Validator\Constraints\Url;
  use Symfony\Component\Form\AbstractType;
  use Symfony\Component\Form\FormBuilderInterface;
  use Symfony\Component\OptionsResolver\OptionsResolverInterface;
  
  
  class infoCompType extends AbstractType{
      
     
    public function buildForm( FormBuilderInterface $builder , array $options ){
        
        $builder->add('website','text',array( 'label'=>'Url Of Web Site' , 'constraint'=> new Url() ) );
        $builder->add('Category','choise',array('label'=>'Category','choices' => array('travel'=>'travel','tourism'=>'tourism','shopping'=>'shopping','restaurant'=>'restaurant','hotels'=>'hotels') ) );
        
    }  
    
      
      
    public function setDefaultOptions(OptionsResolverInterface $resolver){
        
        $resolver->setDefaults(array(
            'data_class' => 'site\reservationBundle\Entity\infocomp',
        ));
    } 
      
      
      public function getName(){
          
          return 'infoComp';
      }
      
  }


?>