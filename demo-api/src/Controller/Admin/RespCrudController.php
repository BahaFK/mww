<?php

namespace App\Controller\Admin;

use App\Entity\Resp;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;

class RespCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Resp::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [

            TextField::new('ref'),
            TextField::new('name'),
            TextField::new('mail'),
            BooleanField::new('manager')->renderAsSwitch(false),
            AssociationField::new('areas'),
            AssociationField::new('units'),
            AssociationField::new('sections'),

        ];
    }

}
