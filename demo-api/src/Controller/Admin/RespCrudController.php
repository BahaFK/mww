<?php

namespace App\Controller\Admin;

use App\Entity\Resp;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class RespCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Resp::class;
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
