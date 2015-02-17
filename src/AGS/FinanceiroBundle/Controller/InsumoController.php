<?php

namespace AGS\FinanceiroBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AGS\FinanceiroBundle\Entity\Insumo;
use AGS\FinanceiroBundle\Form\InsumoType;

/**
 * Insumo controller.
 *
 */
class InsumoController extends Controller
{

    /**
     * Lists all Insumo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FinanceiroBundle:Insumo')->findAll();

        return $this->render('FinanceiroBundle:Insumo:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Insumo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Insumo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('insumo_show', array('id' => $entity->getId())));
        }

        return $this->render('FinanceiroBundle:Insumo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Insumo entity.
     *
     * @param Insumo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Insumo $entity)
    {
        $form = $this->createForm(new InsumoType(), $entity, array(
            'action' => $this->generateUrl('insumo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Insumo entity.
     *
     */
    public function newAction()
    {
        $entity = new Insumo();
        $form   = $this->createCreateForm($entity);

        return $this->render('FinanceiroBundle:Insumo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Insumo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FinanceiroBundle:Insumo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Insumo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FinanceiroBundle:Insumo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Insumo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FinanceiroBundle:Insumo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Insumo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FinanceiroBundle:Insumo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Insumo entity.
    *
    * @param Insumo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Insumo $entity)
    {
        $form = $this->createForm(new InsumoType(), $entity, array(
            'action' => $this->generateUrl('insumo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Insumo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FinanceiroBundle:Insumo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Insumo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('insumo_edit', array('id' => $id)));
        }

        return $this->render('FinanceiroBundle:Insumo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Insumo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FinanceiroBundle:Insumo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Insumo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('insumo'));
    }

    /**
     * Creates a form to delete a Insumo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('insumo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
