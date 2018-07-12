<?php

namespace Test\CrudBundle\Controller;

use Test\CrudBundle\Entity\Conversations;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Conversation controller.
 *
 * @Route("conversations")
 */
class ConversationsController extends Controller
{
    /**
     * Lists all conversation entities.
     *
     * @Route("/", name="conversations_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $conversations = $em->getRepository('TestCrudBundle:Conversations')->findAll();

        return $this->render('conversations/index.html.twig', array(
            'conversations' => $conversations,
        ));
    }

    /**
     * Creates a new conversation entity.
     *
     * @Route("/new", name="conversations_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $conversation = new Conversation();
        $form = $this->createForm('Test\CrudBundle\Form\ConversationsType', $conversation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($conversation);
            $em->flush();

            return $this->redirectToRoute('conversations_show', array('id' => $conversation->getId()));
        }

        return $this->render('conversations/new.html.twig', array(
            'conversation' => $conversation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a conversation entity.
     *
     * @Route("/{id}", name="conversations_show")
     * @Method("GET")
     */
    public function showAction(Conversations $conversation)
    {
        $deleteForm = $this->createDeleteForm($conversation);

        return $this->render('conversations/show.html.twig', array(
            'conversation' => $conversation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing conversation entity.
     *
     * @Route("/{id}/edit", name="conversations_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Conversations $conversation)
    {
        $deleteForm = $this->createDeleteForm($conversation);
        $editForm = $this->createForm('Test\CrudBundle\Form\ConversationsType', $conversation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('conversations_edit', array('id' => $conversation->getId()));
        }

        return $this->render('conversations/edit.html.twig', array(
            'conversation' => $conversation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a conversation entity.
     *
     * @Route("/{id}", name="conversations_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Conversations $conversation)
    {
        $form = $this->createDeleteForm($conversation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($conversation);
            $em->flush();
        }

        return $this->redirectToRoute('conversations_index');
    }

    /**
     * Creates a form to delete a conversation entity.
     *
     * @param Conversations $conversation The conversation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Conversations $conversation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('conversations_delete', array('id' => $conversation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
