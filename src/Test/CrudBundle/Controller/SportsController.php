<?php

namespace Test\CrudBundle\Controller;

use Test\CrudBundle\Entity\Sports;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Sport controller.
 *
 * @Route("sports")
 */
class SportsController extends Controller
{
    /**
     * Lists all sport entities.
     *
     * @Route("/", name="sports_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sports = $em->getRepository('TestCrudBundle:Sports')->findAll();

        return $this->render('sports/index.html.twig', array(
            'sports' => $sports,
        ));
    }

    /**
     * Creates a new sport entity.
     *
     * @Route("/new", name="sports_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $sport = new Sport();
        $form = $this->createForm('Test\CrudBundle\Form\SportsType', $sport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sport);
            $em->flush();

            return $this->redirectToRoute('sports_show', array('id' => $sport->getId()));
        }

        return $this->render('sports/new.html.twig', array(
            'sport' => $sport,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a sport entity.
     *
     * @Route("/{id}", name="sports_show")
     * @Method("GET")
     */
    public function showAction(Sports $sport)
    {
        $deleteForm = $this->createDeleteForm($sport);

        return $this->render('sports/show.html.twig', array(
            'sport' => $sport,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing sport entity.
     *
     * @Route("/{id}/edit", name="sports_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Sports $sport)
    {
        $deleteForm = $this->createDeleteForm($sport);
        $editForm = $this->createForm('Test\CrudBundle\Form\SportsType', $sport);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sports_edit', array('id' => $sport->getId()));
        }

        return $this->render('sports/edit.html.twig', array(
            'sport' => $sport,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a sport entity.
     *
     * @Route("/{id}", name="sports_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Sports $sport)
    {
        $form = $this->createDeleteForm($sport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($sport);
            $em->flush();
        }

        return $this->redirectToRoute('sports_index');
    }

    /**
     * Creates a form to delete a sport entity.
     *
     * @param Sports $sport The sport entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Sports $sport)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sports_delete', array('id' => $sport->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
