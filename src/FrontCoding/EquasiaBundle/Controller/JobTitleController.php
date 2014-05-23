<?php

namespace FrontCoding\EquasiaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use FrontCoding\EquasiaBundle\Entity\JobTitle;
use FrontCoding\EquasiaBundle\Form\JobTitleType;

/**
 * JobTitle controller.
 *
 * @Route("/jobtitle")
 */
class JobTitleController extends Controller
{

    /**
     * Lists all JobTitle entities.
     *
     * @Route("/", name="jobtitle")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FrontCodingEquasiaBundle:JobTitle')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new JobTitle entity.
     *
     * @Route("/", name="jobtitle_create")
     * @Method("POST")
     * @Template("FrontCodingEquasiaBundle:JobTitle:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new JobTitle();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('jobtitle_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a JobTitle entity.
    *
    * @param JobTitle $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(JobTitle $entity)
    {
        $form = $this->createForm(new JobTitleType(), $entity, array(
            'action' => $this->generateUrl('jobtitle_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new JobTitle entity.
     *
     * @Route("/new", name="jobtitle_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new JobTitle();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a JobTitle entity.
     *
     * @Route("/{id}", name="jobtitle_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontCodingEquasiaBundle:JobTitle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find JobTitle entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing JobTitle entity.
     *
     * @Route("/{id}/edit", name="jobtitle_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontCodingEquasiaBundle:JobTitle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find JobTitle entity.');
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
    * Creates a form to edit a JobTitle entity.
    *
    * @param JobTitle $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(JobTitle $entity)
    {
        $form = $this->createForm(new JobTitleType(), $entity, array(
            'action' => $this->generateUrl('jobtitle_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing JobTitle entity.
     *
     * @Route("/{id}", name="jobtitle_update")
     * @Method("PUT")
     * @Template("FrontCodingEquasiaBundle:JobTitle:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontCodingEquasiaBundle:JobTitle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find JobTitle entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('jobtitle_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a JobTitle entity.
     *
     * @Route("/{id}", name="jobtitle_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FrontCodingEquasiaBundle:JobTitle')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find JobTitle entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('jobtitle'));
    }

    /**
     * Creates a form to delete a JobTitle entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('jobtitle_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
