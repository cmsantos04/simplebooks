<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModuleAccessFormTypePhpController extends AbstractController
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $modules = $options['modules'];

        foreach ($modules as $module) {
            $builder->add($module->getId(), CheckboxType::class, [
                'label' => $module->getName(),
                'required' => false,
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setRequired('modules');
    }
}