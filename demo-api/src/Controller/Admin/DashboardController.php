<?php

namespace App\Controller\Admin;

use App\Entity\Action;
use App\Entity\Finding;
use App\Entity\Area;
use App\Entity\Resp;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Demo Api');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Action', 'fa fa-check', Action::class);
        yield MenuItem::linkToCrud('Finding', 'fa fa-times', Finding::class);
        yield MenuItem::linkToCrud('Area', 'fa fa-map-marker', Area::class);
        yield MenuItem::linkToCrud('Responsible', 'fa fa-user', Resp::class);

   
    }
}
