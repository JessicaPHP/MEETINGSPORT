<?php

namespace Test\CrudBundle\Controller;

use Test\CrudBundle\Entity\Fichiers;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Fichier controller.
 *
 * @Route("fichiers")
 */
class FichiersController extends Controller
{
    /**
     * Lists all fichier entities.
     *
     * @Route("/", name="fichiers_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fichiers = $em->getRepository('TestCrudBundle:Fichiers')->findAll();

        return $this->render('fichiers/index.html.twig', array(
            'fichiers' => $fichiers,
        ));
    }

    /**
     * Creates a new fichier entity.
     *
     * @Route("/new", name="fichiers_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $fichier = new Fichier();
        $form = $this->createForm('Test\CrudBundle\Form\FichiersType', $fichier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fichier);
            $em->flush();

            return $this->redirectToRoute('fichiers_show', array('id' => $fichier->getId()));
        }

        return $this->render('fichiers/new.html.twig', array(
            'fichier' => $fichier,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a fichier entity.
     *
     * @Route("/{id}", name="fichiers_show")
     * @Method("GET")
     */
    public function showAction(Fichiers $fichier)
    {
        $deleteForm = $this->createDeleteForm($fichier);

        return $this->render('fichiers/show.html.twig', array(
            'fichier' => $fichier,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing fichier entity.
     *
     * @Route("/{id}/edit", name="fichiers_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Fichiers $fichier)
    {
        $deleteForm = $this->createDeleteForm($fichier);
        $editForm = $this->createForm('Test\CrudBundle\Form\FichiersType', $fichier);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fichiers_edit', array('id' => $fichier->getId()));
        }

        return $this->render('fichiers/edit.html.twig', array(
            'fichier' => $fichier,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a fichier entity.
     *
     * @Route("/{id}", name="fichiers_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Fichiers $fichier)
    {
        $form = $this->createDeleteForm($fichier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($fichier);
            $em->flush();
        }

        return $this->redirectToRoute('fichiers_index');
    }

    /**
     * Creates a form to delete a fichier entity.
     *
     * @param Fichiers $fichier The fichier entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Fichiers $fichier)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fichiers_delete', array('id' => $fichier->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
