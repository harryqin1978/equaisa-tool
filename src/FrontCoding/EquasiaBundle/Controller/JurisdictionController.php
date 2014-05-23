<?php

namespace FrontCoding\EquasiaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use FrontCoding\EquasiaBundle\Entity\Jurisdiction;
use FrontCoding\EquasiaBundle\Form\JurisdictionType;

/**
 * Jurisdiction controller.
 *
 * @Route("/jurisdiction")
 */
class JurisdictionController extends Controller
{

    /**
     * Lists all Jurisdiction entities.
     *
     * @Route("/", name="jurisdiction")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $page_size = 10;
        $page_num = (int) $this->get('request')->query->get('page', 1);
        $page_firstrecord = ($page_num - 1) * $page_size;

        $page_totalcount = $em
            ->createQuery("SELECT COUNT(j.id) AS result FROM FrontCodingEquasiaBundle:Jurisdiction j")
            ->getSingleResult();
        $page_totalcount = $page_totalcount['result'];
        $page_count = ceil($page_totalcount / $page_size);

        $entities = $em
            ->getRepository('FrontCodingEquasiaBundle:Jurisdiction')
            ->createQueryBuilder('j')
            ->orderBy('j.id')
            ->setFirstResult($page_firstrecord)
            ->setMaxResults($page_size)
            ->getQuery()
            ->getResult();

        return array(
            'entities' => $entities,
            'page_num' => $page_num,
            'page_count' => $page_count,
        );
    }
    /**
     * Creates a new Jurisdiction entity.
     *
     * @Route("/", name="jurisdiction_create")
     * @Method("POST")
     * @Template("FrontCodingEquasiaBundle:Jurisdiction:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Jurisdiction();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setStamp(new \DateTime());
            $entity->setModerator($this->get('security.context')->getToken()->getUser()->getId());
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('jurisdiction_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Jurisdiction entity.
    *
    * @param Jurisdiction $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Jurisdiction $entity)
    {
        $form = $this->createForm(new JurisdictionType(), $entity, array(
            'action' => $this->generateUrl('jurisdiction_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Jurisdiction entity.
     *
     * @Route("/new", name="jurisdiction_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Jurisdiction();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Jurisdiction entity.
     *
     * @Route("/{id}", name="jurisdiction_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontCodingEquasiaBundle:Jurisdiction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Jurisdiction entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Jurisdiction entity.
     *
     * @Route("/{id}/edit", name="jurisdiction_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontCodingEquasiaBundle:Jurisdiction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Jurisdiction entity.');
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
    * Creates a form to edit a Jurisdiction entity.
    *
    * @param Jurisdiction $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Jurisdiction $entity)
    {
        $form = $this->createForm(new JurisdictionType(), $entity, array(
            'action' => $this->generateUrl('jurisdiction_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Jurisdiction entity.
     *
     * @Route("/{id}", name="jurisdiction_update")
     * @Method("PUT")
     * @Template("FrontCodingEquasiaBundle:Jurisdiction:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontCodingEquasiaBundle:Jurisdiction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Jurisdiction entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $entity->setModerator($this->get('security.context')->getToken()->getUser()->getId());
            $em->flush();

            return $this->redirect($this->generateUrl('jurisdiction_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Jurisdiction entity.
     *
     * @Route("/{id}", name="jurisdiction_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FrontCodingEquasiaBundle:Jurisdiction')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Jurisdiction entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('jurisdiction'));
    }

    /**
     * Creates a form to delete a Jurisdiction entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('jurisdiction_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
