<?php
namespace LaMarciana\HTML5FormTypesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;


class TelType extends AbstractType
{
   public function buildView(FormView $view, FormInterface $form, array $options)
   {
      $view->vars = array_replace($view->vars, array(
         'type' => 'tel'
      ));
   }

   public function getParent()
   {
      return 'text';
   }

   public function getName()
   {
      return 'tel';
   }
}
