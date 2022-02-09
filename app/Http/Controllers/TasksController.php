<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;

class TasksController extends Controller
{
    public function index()
    {
        // $tasks =  DB::table('tasks')->get();
        return view('tasks.index', [
            'task' => new Task,
            'submit' => 'Tambah Ehek',
            // 'tasks' => DB::table('tasks')->orderBy('id', 'desc')->get(),
            'tasks' => Task::orderBy('id', 'desc')->get(),
        ]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    // NOTE untuk memasukan data ke database
    public function store(TaskRequest $request)
    {
        // validate form input if null
        // NOTE alterbativ 1
        // $request->validate([
        //     'list' => ['required'],
        // ]);
        // NOTE alterbativ 2 lebih enakan gini
        // NOTE sudah di gantikan di TaskRequest.php
        // $request->validate([
        //     'list' => 'required|max:255',
        // ]);

        // DB::table('tasks')->create([
        //     'list' => request('list'),
        // ]);
        Task::create($request->all());
        // NOTE Alternativ 1
        // return redirect('/tasks');
        // NOTE Alternativ 2
        return back(); // redirect()->back();
    }

    // public function edit($id) // NOTE lama
    // {
    //     // NOTE Alternatif 1
    //     // $task = DB::table('tasks')->where('id', $id)->first();
    //     // NOTE Alternatif 2
    //     // $task = Task::where('id', $id)->first();
    //     $task = Task::find($id); //NOTE versi lebih pendek
    //     return view('tasks.edit', [
    //         'task' => $task,
    //     ]);
    // }
    // NOTE lebih simpel dari code di atas/sebelumnya
    public function edit(Task $task) //NOTE baru
    {
        return view('tasks.edit', [
            'task' => $task,
            'submit' => 'Updateeeee',
        ]);
    }

    public function update(TaskRequest $request, $id)
    {
        // NOTE alternatif 1
        // DB::table('tasks')->where('id', $id)->update([
        //     'list' => $request->list,
        // ]);
        // NOTE alternatif 2
        // Task::where('id', $id)->update([
        //     'list' => $request->list,
        // ]);
        Task::find($id)->update([
            'list' => $request->list,
        ]); //NOTE versi lebih pendek
        return redirect('/tasks');
    }

    public function destroy($id)
    {
        // NOTE Alternativ 1
        // $task = DB::table('tasks')->where('id', $id)->first();
        // $task->delete();
        // NOTE Alternativ 2
        // DB::table('tasks')->where('id', $id)->delete();
        // NOTE Alternativ 3
        // Task::where('id', $id)->delete();
        Task::find($id)->delete(); // NOTE versi lebih pendek
        return back(); // redirect()->back();
    }
}
