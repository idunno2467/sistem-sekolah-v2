<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return "Displaying teacher list";
    }

    public function create()
    {
        return "Displaying teacher create form";
    }
    
        public function store()
    {
        return "Storing new teacher";
    }

        public function show($id)
    {
        return "Displaying teacher with ID: $id";
    }

        public function edit($id)
    {
        return "Displaying teacher edit form with ID: $id";
    }

        public function update($id)
    {
        return "Updating teacher with ID: $id";
    }

            public function destroy($id)
    {
        return "Deleting teacher with ID: $id";
    }
}
