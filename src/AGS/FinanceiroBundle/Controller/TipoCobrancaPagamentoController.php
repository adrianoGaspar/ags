<?php

namespace AGS\FinanceiroBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AGS\FinanceiroBundle\Entity\TipoCobrancaPagamento;
use AGS\FinanceiroBundle\Form\TipoCobrancaPagamentoType;

/**
 * TipoCobrancaPagamento controller.
 *
 */
class TipoCobrancaPagamentoController extends Controller
{

    /**
     * Lists all TipoCobrancaPagamento entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FinanceiroBundle:TipoCobrancaPagamento')->findAll();

        return $this->render('FinanceiroBundle:TipoCobrancaPagamento:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new TipoCobrancaPagamento entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TipoCobrancaPagamento();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tipocobrancapagamento_show', array('id' => $entity->getId())));
        }

        return $this->render('FinanceiroBundle:TipoCobrancaPagamento:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TipoCobrancaPagamento entity.
     *
     * @param TipoCobrancaPagamento $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TipoCobrancaPagamento $entity)
    {
        $form = $this->createForm(new TipoCobrancaPagamentoType(), $entity, array(
            'action' => $this->generateUrl('tipocobrancapagamento_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TipoCobrancaPagamento entity.
     *
     */
    public function newAction()
    {
        $entity = new TipoCobrancaPagamento();
        $form   = $this->createCreateForm($entity);

        return $this->render('FinanceiroBundle:TipoCobrancaPagamento:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TipoCobrancaPagamento entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FinanceiroBundle:TipoCobrancaPagamento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoCobrancaPagamento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FinanceiroBundle:TipoCobrancaPagamento:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TipoCobrancaPagamento entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FinanceiroBundle:TipoCobrancaPagamento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoCobrancaPagamento entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FinanceiroBundle:TipoCobrancaPagamento:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TipoCobrancaPagamento entity.
    *
    * @param TipoCobrancaPagamento $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TipoCobrancaPagamento $entity)
    {
        $form = $this->createForm(new TipoCobrancaPagamentoType(), $entity, array(
            'action' => $this->generateUrl('tipocobrancapagamento_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TipoCobrancaPagamento entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FinanceiroBundle:TipoCobrancaPagamento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoCobrancaPagamento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tipocobrancapagamento_edit', array('id' => $id)));
        }

        return $this->render('FinanceiroBundle:TipoCobrancaPagamento:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TipoCobrancaPagamento entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FinanceiroBundle:TipoCobrancaPagamento')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TipoCobrancaPagamento entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tipocobrancapagamento'));
    }

    /**
     * Creates a form to delete a TipoCobrancaPagamento entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipocobrancapagamento_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
