<?php

namespace App\Controller\Admin;

use App\Entity\finding;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class findingCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return finding::class;
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
