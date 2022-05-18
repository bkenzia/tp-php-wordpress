<?php

namespace App\Controller;
use App\Entity\Licence;
use App\Form\LicenceType;
use App\Repository\LicenceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LicenceController extends AbstractController
{
    /**
     * @Route("/licence", name="licence")
     */
    public function index(): Response
    {
        return $this->render('licence/index.html.twig', [
            'controller_name' => 'LicenceController',
        ]);
    }

    /**
     * @Route("/bdd/licences", name="licence_liste")
    */
    public function licenceListe(LicenceRepository $licenceRepository) 
    {
        $licences=$licenceRepository->findAll();
        return $this->render('licence/licences.html.twig', ['licences'=>$licences]);
    }

    /**
     * @Route("/bdd/licence/{id}", name="licence_show")
    */
    public function licence($id, LicenceRepository $licenceRepository)
    {
        $licence=$licenceRepository->find($id);
        return $this->render('licence/licence.html.twig', ['licence'=>$licence]);
    }

    /**
     * @Route("/bdd/create/licence", name="licence_create")
    */
    public function createLicence(Request $request, EntityManagerInterface $entityManagerInterface)
    {
        $licence=new Licence();
        $licenceForm=$this->createForm(LicenceType::class, $licence);
        $licenceForm->handleRequest($request);
        if($licenceForm->isSubmitted() && $licenceForm->isValid()){
            $entityManagerInterface->persist($licence);
            $entityManagerInterface->flush();
         return $this->redirectToRoute("licence_liste");
        }
        return $this->render('licence/update_licence.html.twig', ['licenceForm'=>$licenceForm->createView()]);
    }

    /**
     * @Route("bdd/update/licence/{id}" , name="licence_update")
    */
    public function licenceUpdate($id,Request $request ,LicenceRepository $licenceRepository, EntityManagerInterface $entityManagerInterface)
   {
    $licence=$licenceRepository->find($id);
    $licenceForm=$this->createForm(LicenceType::class, $licence);
    $licenceForm->handleRequest($request);
    if($licenceForm->isSubmitted() && $licenceForm->isValid()){
        $entityManagerInterface->persist($licence);
        $entityManagerInterface->flush();
        return $this->redirectToRoute("licence_liste");
    }
    return $this->render('licence/update_licence.html.twig', ['licenceForm'=>$licenceForm->createView()]);
   }

   /**
     * @Route("bdd/delete/licence/{id}" , name="licence_delete")
    */
    public function licenceDelete($id, LicenceRepository $licenceRepository , EntityManagerInterface $entityManagerInterface)
    {
        $licence=$licenceRepository->find($id);
        $entityManagerInterface->remove($licence);
        $entityManagerInterface->flush();
        return  $this->redirectToRoute("licence_liste");
    }
}
