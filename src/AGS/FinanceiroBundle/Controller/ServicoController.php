<?php

namespace AGS\FinanceiroBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AGS\FinanceiroBundle\Entity\Servico;
use AGS\FinanceiroBundle\Form\ServicoType;

/**
 * Servico controller.
 *
 */
class ServicoController extends Controller
{

    /**
     * Lists all Servico entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FinanceiroBundle:Servico')->findAll();

        return $this->render('FinanceiroBundle:Servico:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Servico entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Servico();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('servico_show', array('id' => $entity->getId())));
        }

        return $this->render('FinanceiroBundle:Servico:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Servico entity.
     *
     * @param Servico $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Servico $entity)
    {
        $form = $this->createForm(new ServicoType(), $entity, array(
            'action' => $this->generateUrl('servico_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Servico entity.
     *
     */
    public function newAction()
    {
        $entity = new Servico();
        $form   = $this->createCreateForm($entity);

        return $this->render('FinanceiroBundle:Servico:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Servico entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FinanceiroBundle:Servico')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Servico entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FinanceiroBundle:Servico:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Servico entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FinanceiroBundle:Servico')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Servico entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FinanceiroBundle:Servico:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Servico entity.
    *
    * @param Servico $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Servico $entity)
    {
        $form = $this->createForm(new ServicoType(), $entity, array(
            'action' => $this->generateUrl('servico_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Servico entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FinanceiroBundle:Servico')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Servico entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('servico_edit', array('id' => $id)));
        }

        return $this->render('FinanceiroBundle:Servico:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Servico entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FinanceiroBundle:Servico')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Servico entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('servico'));
    }

    /**
     * Creates a form to delete a Servico entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('servico_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
