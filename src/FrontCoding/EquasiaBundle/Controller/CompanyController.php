<?php

namespace FrontCoding\EquasiaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use FrontCoding\EquasiaBundle\Entity\Company;
use FrontCoding\EquasiaBundle\Form\CompanyType;

use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

use Doctrine\ORM\Tools\Pagination\Paginator;


/**
 * Company controller.
 *
 * @Route("/company")
 */
class CompanyController extends Controller
{

    /**
     * Lists all Company entities.
     *
     * @Route("/", name="company")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {

        $page_size = 10;
        $page_num = (int) $this->get('request')->query->get('page', 1);
        $page_firstrecord = ($page_num - 1) * $page_size;

        $em = $this->getDoctrine()->getManager();

        $page_totalcount = $em
            ->createQuery("SELECT COUNT(c.id) AS result FROM FrontCodingEquasiaBundle:Company c")
            ->getSingleResult();
        $page_totalcount = $page_totalcount['result'];
        $page_count = ceil($page_totalcount / $page_size);

        // $entities = $em->getRepository('FrontCodingEquasiaBundle:Company')->findAll();
        $entities = $em
            ->getRepository('FrontCodingEquasiaBundle:Company')
            ->createQueryBuilder('c')
            ->innerJoin('c.jurisdiction', 'j')
            ->orderBy('c.id')
            ->setFirstResult($page_firstrecord)
            ->setMaxResults($page_size)
            ->getQuery()
            ->getResult();

        // foreach ($entities as $entity) {
        //     print_r($entity->getJurisdiction()->getNameLanguage1());
        // }

        // $entities = $em
        //     ->createQuery("SELECT c FROM FrontCodingEquasiaBundle:Company c")
        //     ->setFirstResult($page_firstrecord)
        //     ->setMaxResults($page_size)
        //     ->getResult();

        return array(
            'entities' => $entities,
            'page_num' => $page_num,
            'page_count' => $page_count,
        );
    }
    /**
     * Creates a new Company entity.
     *
     * @Route("/", name="company_create")
     * @Method("POST")
     * @Template("FrontCodingEquasiaBundle:Company:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Company();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $post_vars = $request->request->get('frontcoding_equasiabundle_company');
            $jurisdiction = $em->getRepository('FrontCodingEquasiaBundle:Jurisdiction')->findOneById($post_vars['jurisdictionId']);
            $entity->setJurisdiction($jurisdiction);
            $entity->setStamp(new \DateTime());
            $entity->setModerator($this->get('security.context')->getToken()->getUser()->getId());
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('company_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Company entity.
    *
    * @param Company $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Company $entity)
    {
        $form = $this->createForm(new CompanyType($this->getDoctrine()->getManager()), $entity, array(
            'action' => $this->generateUrl('company_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Company entity.
     *
     * @Route("/new", name="company_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {

        $entity = new Company();
        $form   = $this->createCreateForm($entity);

        // $form->remove('stamp');

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Company entity.
     *
     * @Route("/{id}", name="company_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontCodingEquasiaBundle:Company')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Company entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Company entity.
     *
     * @Route("/{id}/edit", name="company_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontCodingEquasiaBundle:Company')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Company entity.');
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
    * Creates a form to edit a Company entity.
    *
    * @param Company $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Company $entity)
    {

        $form = $this->createForm(new CompanyType($this->getDoctrine()->getManager()), $entity, array(
            'action' => $this->generateUrl('company_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Company entity.
     *
     * @Route("/{id}", name="company_update")
     * @Method("PUT")
     * @Template("FrontCodingEquasiaBundle:Company:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontCodingEquasiaBundle:Company')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Company entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $entity->setModerator($this->get('security.context')->getToken()->getUser()->getId());
            $em->flush();

            return $this->redirect($this->generateUrl('company_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Company entity.
     *
     * @Route("/{id}", name="company_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FrontCodingEquasiaBundle:Company')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Company entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('company'));
    }

    /**
     * Creates a form to delete a Company entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('company_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
