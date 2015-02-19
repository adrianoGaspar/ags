<?php

namespace AGS\FinanceiroBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AGS\FinanceiroBundle\Entity\Fornecedor;
use AGS\FinanceiroBundle\Form\FornecedorType;

/**
 * Fornecedor controller.
 *
 */
class FornecedorController extends Controller
{

    /**
     * Lists all Fornecedor entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FinanceiroBundle:Fornecedor')->findAll();

        return $this->render('FinanceiroBundle:Fornecedor:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Fornecedor entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Fornecedor();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('fornecedor_show', array('id' => $entity->getId())));
        }

        return $this->render('FinanceiroBundle:Fornecedor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Fornecedor entity.
     *
     * @param Fornecedor $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Fornecedor $entity)
    {
        $form = $this->createForm(new FornecedorType(), $entity, array(
            'action' => $this->generateUrl('fornecedor_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Fornecedor entity.
     *
     */
    public function newAction()
    {
        $entity = new Fornecedor();
        $form   = $this->createCreateForm($entity);

        return $this->render('FinanceiroBundle:Fornecedor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Fornecedor entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FinanceiroBundle:Fornecedor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fornecedor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FinanceiroBundle:Fornecedor:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Fornecedor entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FinanceiroBundle:Fornecedor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fornecedor entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FinanceiroBundle:Fornecedor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Fornecedor entity.
    *
    * @param Fornecedor $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Fornecedor $entity)
    {
        $form = $this->createForm(new FornecedorType(), $entity, array(
            'action' => $this->generateUrl('fornecedor_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Fornecedor entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FinanceiroBundle:Fornecedor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fornecedor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('fornecedor_edit', array('id' => $id)));
        }

        return $this->render('FinanceiroBundle:Fornecedor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Fornecedor entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FinanceiroBundle:Fornecedor')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Fornecedor entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('fornecedor'));
    }

    /**
     * Creates a form to delete a Fornecedor entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fornecedor_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
