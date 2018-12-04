<?php

namespace messanger\chatBundle\Controller;

use messanger\chatBundle\Entity\PublicMessages;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Publicmessage controller.
 *
 */
class PublicMessagesController extends Controller
{
    /**
     * Lists all publicMessage entities.
     *
     */
    public function indexAction()
    {


        $host = "localhost";
        $user = "root";
        $pass = "";
        $database = "esprit";
        $connection_String = mysqli_connect($host,$user,$pass,$database);

        if(!empty($_POST["senders_message"])){

            $messageSender = "Peter";
            $newmessage = mysqli_real_escape_string($connection_String, $_POST["senders_message"]);

            $my_query = "INSERT INTO public_messages ( Sender, Message ) VALUES ('$messageSender','$newmessage')";
            $run = mysqli_query($connection_String,$my_query);
        }


        return $this->render('publicmessages/share.html.twig');
    }

    /**
     * Creates a new publicMessage entity.
     *
     */
    public function newAction(Request $request)
    {
        $publicMessage = new Publicmessage();
        $form = $this->createForm('messanger\chatBundle\Form\PublicMessagesType', $publicMessage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($publicMessage);
            $em->flush();

            return $this->redirectToRoute('publicmessages_show', array('msgId' => $publicMessage->getMsgid()));
        }

        return $this->render('publicmessages/new.html.twig', array(
            'publicMessage' => $publicMessage,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a publicMessage entity.
     *
     */
    public function showAction(PublicMessages $publicMessage)
    {
        $deleteForm = $this->createDeleteForm($publicMessage);

        return $this->render('publicmessages/show.html.twig', array(
            'publicMessage' => $publicMessage,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing publicMessage entity.
     *
     */
    public function editAction(Request $request, PublicMessages $publicMessage)
    {
        $deleteForm = $this->createDeleteForm($publicMessage);
        $editForm = $this->createForm('messanger\chatBundle\Form\PublicMessagesType', $publicMessage);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('publicmessages_edit', array('msgId' => $publicMessage->getMsgid()));
        }

        return $this->render('publicmessages/edit.html.twig', array(
            'publicMessage' => $publicMessage,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a publicMessage entity.
     *
     */
    public function deleteAction(Request $request, PublicMessages $publicMessage)
    {
        $form = $this->createDeleteForm($publicMessage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($publicMessage);
            $em->flush();
        }

        return $this->redirectToRoute('publicmessages_index');
    }

    /**
     * Creates a form to delete a publicMessage entity.
     *
     * @param PublicMessages $publicMessage The publicMessage entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PublicMessages $publicMessage)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('publicmessages_delete', array('msgId' => $publicMessage->getMsgid())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    public function publicchatAction(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $database = "esprit";
        $connection_String = mysqli_connect($host,$user,$pass,$database);

        if(!empty($_POST["senders_message"])){

            $messageSender = $_COOKIE["user_first_name"];
            $newmessage = mysqli_real_escape_string($connection_String, $_POST["senders_message"]);

            $my_query = "INSERT INTO public_messages ( Sender, Message ) VALUES ('$messageSender','$newmessage')";

            if($run = mysqli_query($connection_String,$my_query)){
                echo "<embed loop='false' src='sound.wav' autoplay='true' hidden='true'/>";
    }
        }
    }
}