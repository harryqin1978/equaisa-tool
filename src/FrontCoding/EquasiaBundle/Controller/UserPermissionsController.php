<?php

namespace FrontCoding\EquasiaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use FrontCoding\EquasiaBundle\Entity\UserPermissions;
use FrontCoding\EquasiaBundle\Form\UserPermissionsType;

/**
 * UserPermissions controller.
 *
 * @Route("/userpermissions")
 */
class UserPermissionsController extends Controller
{

    /**
     * Lists all UserPermissions entities.
     *
     * @Route("/", name="userpermissions")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FrontCodingEquasiaBundle:UserPermissions')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new UserPermissions entity.
     *
     * @Route("/", name="userpermissions_create")
     * @Method("POST")
     * @Template("FrontCodingEquasiaBundle:UserPermissions:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new UserPermissions();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('userpermissions_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a UserPermissions entity.
    *
    * @param UserPermissions $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(UserPermissions $entity)
    {
        $form = $this->createForm(new UserPermissionsType(), $entity, array(
            'action' => $this->generateUrl('userpermissions_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new UserPermissions entity.
     *
     * @Route("/new", name="userpermissions_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new UserPermissions();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a UserPermissions entity.
     *
     * @Route("/{id}", name="userpermissions_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontCodingEquasiaBundle:UserPermissions')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UserPermissions entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing UserPermissions entity.
     *
     * @Route("/{id}/edit", name="userpermissions_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontCodingEquasiaBundle:UserPermissions')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UserPermissions entity.');
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
    * Creates a form to edit a UserPermissions entity.
    *
    * @param UserPermissions $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(UserPermissions $entity)
    {
        $form = $this->createForm(new UserPermissionsType(), $entity, array(
            'action' => $this->generateUrl('userpermissions_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing UserPermissions entity.
     *
     * @Route("/{id}", name="userpermissions_update")
     * @Method("PUT")
     * @Template("FrontCodingEquasiaBundle:UserPermissions:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontCodingEquasiaBundle:UserPermissions')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UserPermissions entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('userpermissions_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a UserPermissions entity.
     *
     * @Route("/{id}", name="userpermissions_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FrontCodingEquasiaBundle:UserPermissions')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find UserPermissions entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('userpermissions'));
    }

    /**
     * Creates a form to delete a UserPermissions entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('userpermissions_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
