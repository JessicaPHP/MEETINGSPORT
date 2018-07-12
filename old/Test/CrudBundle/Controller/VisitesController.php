<?php

namespace Test\CrudBundle\Controller;

use Test\CrudBundle\Entity\Visites;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Visite controller.
 *
 * @Route("visites")
 */
class VisitesController extends Controller
{
    /**
     * Lists all visite entities.
     *
     * @Route("/", name="visites_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $visites = $em->getRepository('TestCrudBundle:Visites')->findAll();

        return $this->render('visites/index.html.twig', array(
            'visites' => $visites,
        ));
    }

    /**
     * Creates a new visite entity.
     *
     * @Route("/new", name="visites_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $visite = new Visite();
        $form = $this->createForm('Test\CrudBundle\Form\VisitesType', $visite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($visite);
            $em->flush();

            return $this->redirectToRoute('visites_show', array('id' => $visite->getId()));
        }

        return $this->render('visites/new.html.twig', array(
            'visite' => $visite,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a visite entity.
     *
     * @Route("/{id}", name="visites_show")
     * @Method("GET")
     */
    public function showAction(Visites $visite)
    {
        $deleteForm = $this->createDeleteForm($visite);

        return $this->render('visites/show.html.twig', array(
            'visite' => $visite,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing visite entity.
     *
     * @Route("/{id}/edit", name="visites_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Visites $visite)
    {
        $deleteForm = $this->createDeleteForm($visite);
        $editForm = $this->createForm('Test\CrudBundle\Form\VisitesType', $visite);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('visites_edit', array('id' => $visite->getId()));
        }

        return $this->render('visites/edit.html.twig', array(
            'visite' => $visite,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a visite entity.
     *
     * @Route("/{id}", name="visites_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Visites $visite)
    {
        $form = $this->createDeleteForm($visite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($visite);
            $em->flush();
        }

        return $this->redirectToRoute('visites_index');
    }

    /**
     * Creates a form to delete a visite entity.
     *
     * @param Visites $visite The visite entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Visites $visite)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('visites_delete', array('id' => $visite->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
