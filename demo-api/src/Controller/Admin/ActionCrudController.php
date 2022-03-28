<?php

namespace App\Controller\Admin;

use App\Entity\Action;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ActionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Action::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('Week'),
            DateField::new('Date'),
            DateField::new('Due_Date'),
            TextField::new('Finding'),
            AssociationField::new('wastes'),
            TextField::new('Description'),
            AssociationField::new('area'),
            AssociationField::new('resps'),
            IntegerField::new('Plan_Status'),
            //IntegerField::new('Do_Status'),
           // IntegerField::new('Check_Status'),
            //IntegerField::new('Act_Status'),
           // TextField::new('Photo_Before'),
           // TextField::new('Photo_After'),

            
        ];
    }
    
  


}
