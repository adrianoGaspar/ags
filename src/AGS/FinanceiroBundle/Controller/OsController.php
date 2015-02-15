<?php

namespace AGS\FinanceiroBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AGS\FinanceiroBundle\Entity\Os;
use \AGS\FinanceiroBundle\Entity\OsHasItem;

use AGS\FinanceiroBundle\Form\OsType;

/**
 * Os controller.
 *
 */
class OsController extends Controller
{

    /**
     * Lists all Os entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FinanceiroBundle:Os')->findAll();

        return $this->render('FinanceiroBundle:Os:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Os entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Os();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('os_show', array('id' => $entity->getId())));
        }

        return $this->render('FinanceiroBundle:Os:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Os entity.
     *
     * @param Os $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Os $entity)
    {
        $form = $this->createForm(new OsType(), $entity, array(
            'action' => $this->generateUrl('os_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Os entity.
     *
     */
    public function newAction()
    {
        $entity = new Os();
        //Adicionando a entidade vazia para aparecer a primeira linha do form na primeira execução
        $entity->getOsHasItens()->add(new OsHasItem());

        $form  = $this->createCreateForm($entity);

        return $this->render('FinanceiroBundle:Os:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Os entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FinanceiroBundle:Os')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Os entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FinanceiroBundle:Os:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Os entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FinanceiroBundle:Os')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Os entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FinanceiroBundle:Os:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Os entity.
    *
    * @param Os $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Os $entity)
    {
        $form = $this->createForm(new OsType(), $entity, array(
            'action' => $this->generateUrl('os_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Os entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FinanceiroBundle:Os')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Os entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('os_edit', array('id' => $id)));
        }

        return $this->render('FinanceiroBundle:Os:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Os entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FinanceiroBundle:Os')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Os entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('os'));
    }

    /**
     * Creates a form to delete a Os entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('os_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
