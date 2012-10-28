<?php
namespace LaMarciana\HTML5FormTypesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;


class RangeType extends AbstractType
{
   public function setDefaultOptions(OptionsResolverInterface $resolver)
   {
      $resolver->setDefaults(array(
         'min' => '0',
         'max' => '100'
      ));
   }
   public function buildView(FormView $view, FormInterface $form, array $options)
   {
      $view->vars = array_replace($view->vars, array(
         'type' => 'range',
         'attr' => array(
            'min' => $options['min'],
            'max' => $options['max'],
         ),
      ));
   }

   public function getParent()
   {
      return 'text';
   }

   public function getName()
   {
      return 'range';
   }
}
