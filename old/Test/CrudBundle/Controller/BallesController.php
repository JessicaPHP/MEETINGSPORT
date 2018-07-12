<?php

namespace Test\CrudBundle\Controller;

use Test\CrudBundle\Entity\Balles;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Balle controller.
 *
 * @Route("balles")
 */
class BallesController extends Controller
{
    /**
     * Lists all balle entities.
     *
     * @Route("/", name="balles_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $balles = $em->getRepository('TestCrudBundle:Balles')->findAll();

        return $this->render('balles/index.html.twig', array(
            'balles' => $balles,
        ));
    }

    /**
     * Creates a new balle entity.
     *
     * @Route("/new", name="balles_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $balle = new Balle();
        $form = $this->createForm('Test\CrudBundle\Form\BallesType', $balle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($balle);
            $em->flush();

            return $this->redirectToRoute('balles_show', array('id' => $balle->getId()));
        }

        return $this->render('balles/new.html.twig', array(
            'balle' => $balle,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a balle entity.
     *
     * @Route("/{id}", name="balles_show")
     * @Method("GET")
     */
    public function showAction(Balles $balle)
    {
        $deleteForm = $this->createDeleteForm($balle);

        return $this->render('balles/show.html.twig', array(
            'balle' => $balle,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing balle entity.
     *
     * @Route("/{id}/edit", name="balles_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Balles $balle)
    {
        $deleteForm = $this->createDeleteForm($balle);
        $editForm = $this->createForm('Test\CrudBundle\Form\BallesType', $balle);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('balles_edit', array('id' => $balle->getId()));
        }

        return $this->render('balles/edit.html.twig', array(
            'balle' => $balle,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a balle entity.
     *
     * @Route("/{id}", name="balles_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Balles $balle)
    {
        $form = $this->createDeleteForm($balle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($balle);
            $em->flush();
        }

        return $this->redirectToRoute('balles_index');
    }

    /**
     * Creates a form to delete a balle entity.
     *
     * @param Balles $balle The balle entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Balles $balle)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('balles_delete', array('id' => $balle->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
