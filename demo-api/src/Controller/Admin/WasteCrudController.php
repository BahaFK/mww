<?php

namespace App\Controller\Admin;


use App\Entity\Waste;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class WasteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Waste::class;
    }

 /*
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('type'),
        ];
    }
   */
}
