<?php

namespace App\Controller\Admin;

use App\Entity\area;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class areaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return area::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
