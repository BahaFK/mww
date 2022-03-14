<?php

namespace App\Controller\Admin;

use App\Entity\Finding;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class FindingCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Finding::class;
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
