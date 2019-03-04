<?php

// On utilise le typage strict
declare(strict_types=1);

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Task;

class TasksController extends Controller
{
    /**
     * Affiche la liste des tâches.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $tasks = Task::all();

        return view('pages/todolist', compact('tasks'));
    }

    /**
     * Traite le formulaire d'ajout de tâche.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function store()
    {
        Task::create(
            request()->validate([
                'task' => 'required|min:3|max:65000',
            ])
        );

        return redirect('todolist');
    }

    /**
     * Affiche la page de création de tâche.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        return view('pages/tasks/create');
    }

    /**
     * Affiche une tâche.
     *
     * @param Task $id
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function show(Task $task)
    {
        return view('pages/tasks/show', compact('task'));
    }

    /**
     * Traite le formulaire d'édition de tâche.
     *
     * @param Task $id
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function update(Task $task)
    {
        $task->update(
            request()->validate([
                'task' => 'required|min:3|max:65000',
            ])
        );

        return redirect('/todolist');
    }

    /**
     * Supprime une tâche.
     *
     * @param int $id
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect('/todolist');
    }

    /**
     * Affiche la page d'édition d'une tâche.
     *
     * @param Task $id
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit(Task $task)
    {
        return view('pages/tasks/edit', compact('task'));
    }
}
