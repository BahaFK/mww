<?php

namespace App\Controller\Admin;

use App\Entity\action;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class actionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return action::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('Week'),
            DateField::new('Date'),
            DateField::new('Due_Date'),
            TextField::new('Description'),
            //AssociationField::new('finding'),
            //AssociationField::new('ref'),
            //TextField::new('Responsible'),
            IntegerField::new('Plan_Status'),
            IntegerField::new('Do_Status'),
            IntegerField::new('Check_Status'),
            IntegerField::new('Act_Status'),
            TextField::new('Photo_Before'),
            TextField::new('Photo_After'),

            
        ];
    }
    
  


}
