<?php

namespace AGS\FinanceiroBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AGS\FinanceiroBundle\Entity\PlanoConta;
use AGS\FinanceiroBundle\Form\PlanoContaType;

/**
 * PlanoConta controller.
 *
 */
class PlanoContaController extends Controller
{

    /**
     * Lists all PlanoConta entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FinanceiroBundle:PlanoConta')->findAll();

        return $this->render('FinanceiroBundle:PlanoConta:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new PlanoConta entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new PlanoConta();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('planoconta_show', array('id' => $entity->getId())));
        }

        return $this->render('FinanceiroBundle:PlanoConta:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a PlanoConta entity.
     *
     * @param PlanoConta $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(PlanoConta $entity)
    {
        $form = $this->createForm(new PlanoContaType(), $entity, array(
            'action' => $this->generateUrl('planoconta_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new PlanoConta entity.
     *
     */
    public function newAction()
    {
        $entity = new PlanoConta();
        $form   = $this->createCreateForm($entity);

        return $this->render('FinanceiroBundle:PlanoConta:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PlanoConta entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FinanceiroBundle:PlanoConta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PlanoConta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FinanceiroBundle:PlanoConta:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing PlanoConta entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FinanceiroBundle:PlanoConta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PlanoConta entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FinanceiroBundle:PlanoConta:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a PlanoConta entity.
    *
    * @param PlanoConta $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(PlanoConta $entity)
    {
        $form = $this->createForm(new PlanoContaType(), $entity, array(
            'action' => $this->generateUrl('planoconta_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing PlanoConta entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FinanceiroBundle:PlanoConta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PlanoConta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('planoconta_edit', array('id' => $id)));
        }

        return $this->render('FinanceiroBundle:PlanoConta:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a PlanoConta entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FinanceiroBundle:PlanoConta')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PlanoConta entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('planoconta'));
    }

    /**
     * Creates a form to delete a PlanoConta entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('planoconta_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
