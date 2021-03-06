<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ToDoController extends Controller
{
    /**
     * @Route("/todos", name="todo_list")
     */
    public function listAction()
    {
        // replace this example code with whatever you need
        return $this->render('todo/index.html.twig');
    }

    /**
     * @Route("/todo/create", name="todo_create")
     */
    public function createAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('todo/create.html.twig');
    }

    /**
     * @Route("/todo/edit/{id}", name="todo_edit")
     */
    public function editAction($id, Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('todo/edit.html.twig');
    }

    /**
     * @Route("/todo/details/{id}", name="todo_details")
     */
    public function detailsAction($Id)
    {
        // replace this example code with whatever you need
        return $this->render('todo/details.html.twig');
    }
}
