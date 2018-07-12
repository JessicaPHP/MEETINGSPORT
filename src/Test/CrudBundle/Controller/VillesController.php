<?php

namespace Test\CrudBundle\Controller;

use Test\CrudBundle\Entity\Villes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Ville controller.
 *
 * @Route("villes")
 */
class VillesController extends Controller
{
    /**
     * Lists all ville entities.
     *
     * @Route("/", name="villes_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $villes = $em->getRepository('TestCrudBundle:Villes')->findBy(array('villeDepartement'=>'01'), null, 5);

        return $this->render('villes/index.html.twig', array(
            'villes' => $villes,
        ));
    }

    /**
     * Creates a new ville entity.
     *
     * @Route("/new", name="villes_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $ville = new Ville();
        $form = $this->createForm('Test\CrudBundle\Form\VillesType', $ville);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ville);
            $em->flush();

            return $this->redirectToRoute('villes_show', array('id' => $ville->getId()));
        }

        return $this->render('villes/new.html.twig', array(
            'ville' => $ville,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ville entity.
     *
     * @Route("/{id}", name="villes_show")
     * @Method("GET")
     */
    public function showAction(Villes $ville)
    {
        $deleteForm = $this->createDeleteForm($ville);

        return $this->render('villes/show.html.twig', array(
            'ville' => $ville,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ville entity.
     *
     * @Route("/{id}/edit", name="villes_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Villes $ville)
    {
        $deleteForm = $this->createDeleteForm($ville);
        $editForm = $this->createForm('Test\CrudBundle\Form\VillesType', $ville);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('villes_edit', array('id' => $ville->getId()));
        }

        return $this->render('villes/edit.html.twig', array(
            'ville' => $ville,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ville entity.
     *
     * @Route("/{id}", name="villes_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Villes $ville)
    {
        $form = $this->createDeleteForm($ville);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ville);
            $em->flush();
        }

        return $this->redirectToRoute('villes_index');
    }

    /**
     * Creates a form to delete a ville entity.
     *
     * @param Villes $ville The ville entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Villes $ville)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('villes_delete', array('id' => $ville->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
