<?php

namespace Test\CrudBundle\Controller;

use Test\CrudBundle\Entity\Membres;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Membre controller.
 *
 * @Route("membres")
 */
class MembresController extends Controller
{
    /**
     * Lists all membre entities.
     *
     * @Route("/", name="membres_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $membres = $em->getRepository('TestCrudBundle:Membres')->findAll();

        return $this->render('membres/index.html.twig', array(
            'membres' => $membres,
        ));
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'Test\CrudBundle\Entity\Membres',
                'csrf_protection' => false,
            )
        );
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('dateinscription');
    }
    /**
     * Creates a new membre entity.
     *
     * @Route("/new", name="membres_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $membre = new Membres();
        $form = $this->createForm('Test\CrudBundle\Form\MembresType', $membre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($membre);
            $em->flush();

            return $this->redirectToRoute('membres_show', array('id' => $membre->getId()));
        }

        return $this->render('membres/new.html.twig', array(
            'membre' => $membre,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a membre entity.
     *
     * @Route("/{id}", name="membres_show")
     * @Method("GET")
     */
    public function showAction(Membres $membre)
    {
        $deleteForm = $this->createDeleteForm($membre);

        return $this->render('membres/show.html.twig', array(
            'membre' => $membre,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing membre entity.
     *
     * @Route("/{id}/edit", name="membres_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Membres $membre)
    {
        $deleteForm = $this->createDeleteForm($membre);
        $editForm = $this->createForm('Test\CrudBundle\Form\MembresType', $membre);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('membres_edit', array('id' => $membre->getId()));
        }

        return $this->render('membres/edit.html.twig', array(
            'membre' => $membre,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a membre entity.
     *
     * @Route("/{id}", name="membres_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Membres $membre)
    {
        $form = $this->createDeleteForm($membre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($membre);
            $em->flush();
        }

        return $this->redirectToRoute('membres_index');
    }

    /**
     * Creates a form to delete a membre entity.
     *
     * @param Membres $membre The membre entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Membres $membre)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('membres_delete', array('id' => $membre->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
