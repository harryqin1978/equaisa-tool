<?php

namespace FrontCoding\EquasiaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use FrontCoding\EquasiaBundle\Entity\ProjectPhase;
use FrontCoding\EquasiaBundle\Form\ProjectPhaseType;

/**
 * ProjectPhase controller.
 *
 * @Route("/projectphase")
 */
class ProjectPhaseController extends Controller
{

    /**
     * Lists all ProjectPhase entities.
     *
     * @Route("/", name="projectphase")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FrontCodingEquasiaBundle:ProjectPhase')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new ProjectPhase entity.
     *
     * @Route("/", name="projectphase_create")
     * @Method("POST")
     * @Template("FrontCodingEquasiaBundle:ProjectPhase:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new ProjectPhase();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('projectphase_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a ProjectPhase entity.
    *
    * @param ProjectPhase $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(ProjectPhase $entity)
    {
        $form = $this->createForm(new ProjectPhaseType(), $entity, array(
            'action' => $this->generateUrl('projectphase_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ProjectPhase entity.
     *
     * @Route("/new", name="projectphase_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ProjectPhase();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a ProjectPhase entity.
     *
     * @Route("/{id}", name="projectphase_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontCodingEquasiaBundle:ProjectPhase')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProjectPhase entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing ProjectPhase entity.
     *
     * @Route("/{id}/edit", name="projectphase_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontCodingEquasiaBundle:ProjectPhase')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProjectPhase entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a ProjectPhase entity.
    *
    * @param ProjectPhase $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ProjectPhase $entity)
    {
        $form = $this->createForm(new ProjectPhaseType(), $entity, array(
            'action' => $this->generateUrl('projectphase_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ProjectPhase entity.
     *
     * @Route("/{id}", name="projectphase_update")
     * @Method("PUT")
     * @Template("FrontCodingEquasiaBundle:ProjectPhase:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontCodingEquasiaBundle:ProjectPhase')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProjectPhase entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('projectphase_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a ProjectPhase entity.
     *
     * @Route("/{id}", name="projectphase_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FrontCodingEquasiaBundle:ProjectPhase')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ProjectPhase entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('projectphase'));
    }

    /**
     * Creates a form to delete a ProjectPhase entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('projectphase_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
