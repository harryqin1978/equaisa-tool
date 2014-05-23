<?php

namespace FrontCoding\EquasiaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use FrontCoding\EquasiaBundle\Entity\Employee;
use FrontCoding\EquasiaBundle\Form\EmployeeType;

use Symfony\Component\Form\FormError;

/**
 * Employee controller.
 *
 * @Route("/employee")
 */
class EmployeeController extends Controller
{

    /**
     * Lists all Employee entities.
     *
     * @Route("/", name="employee")
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
            ->createQuery("SELECT COUNT(e.id) AS result FROM FrontCodingEquasiaBundle:Employee e")
            ->getSingleResult();
        $page_totalcount = $page_totalcount['result'];
        $page_count = ceil($page_totalcount / $page_size);

        $entities = $em
            ->getRepository('FrontCodingEquasiaBundle:Employee')
            ->createQueryBuilder('e')
            ->orderBy('e.id')
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
     * Creates a new Employee entity.
     *
     * @Route("/", name="employee_create")
     * @Method("POST")
     * @Template("FrontCodingEquasiaBundle:Employee:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Employee();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $post_vars = $request->request->get('frontcoding_equasiabundle_employee');

            $user_exist = $em->getRepository('FrontCodingEquasiaBundle:Employee')->findOneByUsername($post_vars['username']);
            $user_exist1 = $em->getRepository('FrontCodingEquasiaBundle:Contact')->findOneByUsername($post_vars['username']);

            if (!$user_exist && !$user_exist1) {

                $job_title = $em->getRepository('FrontCodingEquasiaBundle:JobTitle')->findOneById($post_vars['jobTitleId']);
                $entity->setJobTitle($job_title);
                $salary_official_currency = $em->getRepository('FrontCodingEquasiaBundle:Currency')->findOneById($post_vars['salaryOfficialCurrencyId']);
                $entity->setSalaryOfficialCurrency($salary_official_currency);
                $salary_unofficial_currency = $em->getRepository('FrontCodingEquasiaBundle:Currency')->findOneById($post_vars['salaryUnofficialCurrencyId']);
                $entity->setSalaryUnofficialCurrency($salary_unofficial_currency);
                $entity->setStamp(new \DateTime());
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('employee_show', array('id' => $entity->getId())));

            } else {
                $form->get('username')->addError(new FormError('This username already exists.'));
            }
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Employee entity.
    *
    * @param Employee $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Employee $entity)
    {
        $form = $this->createForm(new EmployeeType($this->getDoctrine()->getManager(), 'create'), $entity, array(
            'action' => $this->generateUrl('employee_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Employee entity.
     *
     * @Route("/new", name="employee_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Employee();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Employee entity.
     *
     * @Route("/{id}", name="employee_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontCodingEquasiaBundle:Employee')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Employee entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Employee entity.
     *
     * @Route("/{id}/edit", name="employee_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontCodingEquasiaBundle:Employee')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Employee entity.');
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
    * Creates a form to edit a Employee entity.
    *
    * @param Employee $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Employee $entity)
    {
        $form = $this->createForm(new EmployeeType($this->getDoctrine()->getManager(), 'edit'), $entity, array(
            'action' => $this->generateUrl('employee_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Employee entity.
     *
     * @Route("/{id}", name="employee_update")
     * @Method("PUT")
     * @Template("FrontCodingEquasiaBundle:Employee:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontCodingEquasiaBundle:Employee')->find($id);
        $origin_password = $entity->getPassword();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Employee entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $post_vars = $request->request->get('frontcoding_equasiabundle_employee');
            
            if (!$post_vars['password']['password']) {
                $entity->setPassword($origin_password);
            }

            $em->flush();

            return $this->redirect($this->generateUrl('employee_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Employee entity.
     *
     * @Route("/{id}", name="employee_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FrontCodingEquasiaBundle:Employee')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Employee entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('employee'));
    }

    /**
     * Creates a form to delete a Employee entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('employee_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
