<?php

namespace FrontCoding\EquasiaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use FrontCoding\EquasiaBundle\Entity\Timelog;
use FrontCoding\EquasiaBundle\Form\TimelogType;

/**
 * Timelog controller.
 *
 * @Route("/timelog")
 */
class TimelogController extends Controller
{

    /**
     * Lists all Timelog entities.
     *
     * @Route("/", name="timelog")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FrontCodingEquasiaBundle:Timelog')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Timelog entity.
     *
     * @Route("/", name="timelog_create")
     * @Method("POST")
     * @Template("FrontCodingEquasiaBundle:Timelog:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Timelog();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('timelog_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Timelog entity.
    *
    * @param Timelog $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Timelog $entity)
    {
        $form = $this->createForm(new TimelogType(), $entity, array(
            'action' => $this->generateUrl('timelog_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Timelog entity.
     *
     * @Route("/new", name="timelog_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Timelog();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Timelog entity.
     *
     * @Route("/{id}", name="timelog_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontCodingEquasiaBundle:Timelog')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Timelog entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Timelog entity.
     *
     * @Route("/{id}/edit", name="timelog_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontCodingEquasiaBundle:Timelog')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Timelog entity.');
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
    * Creates a form to edit a Timelog entity.
    *
    * @param Timelog $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Timelog $entity)
    {
        $form = $this->createForm(new TimelogType(), $entity, array(
            'action' => $this->generateUrl('timelog_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Timelog entity.
     *
     * @Route("/{id}", name="timelog_update")
     * @Method("PUT")
     * @Template("FrontCodingEquasiaBundle:Timelog:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontCodingEquasiaBundle:Timelog')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Timelog entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('timelog_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Timelog entity.
     *
     * @Route("/{id}", name="timelog_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FrontCodingEquasiaBundle:Timelog')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Timelog entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('timelog'));
    }

    /**
     * Creates a form to delete a Timelog entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('timelog_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
