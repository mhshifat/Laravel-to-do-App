<?php

namespace App\Http\Controllers;

use Session;

use App\Todo;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show() {

			$allTodos = Todo::all();

			return view('includes.home', compact('allTodos'));

		}

		public function addTodo() {

			$todos = new Todo;

			$todos->task = request('addToDo');

			$todos->save();

			Session::flash('success', 'Your list has been added!');

			return redirect()->back();

		}

		public function delete($id) {

			$todos = Todo::find($id);

			$todos->delete();

			Session::flash('success', 'Your list has been Deleted!');

			return redirect()->back();

		}

		public function update($id) {

			$allTodos = Todo::all();

			$updates = Todo::find($id);

			return view('includes.update', compact('allTodos', 'updates'));

		}

		public function updateTodo($id) {

			$todos = Todo::find($id);

			$todos->task = request('addToDoupdate');

			$todos->save();

			Session::flash('success', 'Your list has been Updated!');

			return redirect('/');

		}

		public function mark($id) {

			$completed = Todo::find($id);

			$completed->completed = 1;

			$completed->save();

			Session::flash('success', 'Your list has been marked as Complete!');

			return redirect('/');

		}
}
