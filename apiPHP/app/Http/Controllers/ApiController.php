<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class ApiController extends Controller
{
    public function getAllStudents() {
        // logic to get all students goes here
        return response()->json(['foo'=>'bar']);
    }

    public function createStudent(Request $request) {

        $student = new Student;
        $student->name = $request->name;
        $student->course = $request->course;
        //$student->save();

        return response()->json([
          "message" => "createStudent"
        ], 201);
    }

    public function getStudent($id) {
        // logic to get a student record goes here
    }

    public function updateStudent(Request $request, $id) {
        // logic to update a student record goes here
        //if (Student::where('id', $id)->exists()) {
        //    $student = Student::find($id);
        //    $student->name = is_null($request->name) ? $student->name : $request->name;
        //    $student->course = is_null($request->course) ? $student->course : $request->course;
        //    $student->save();

        //    return response()->json([
        //        "message" => "records updated successfully"
        //    ], 200);
        //} else {
        //    return response()->json([
        //        "message" => "Student not found"
        //    ], 404);

        //}

            $student = new Student;
            $student->id = $request->id;
            $student->name = $request->name;
            $student->course = $request->course;

            return response()->json([
                "message" => "updateStudent"
            ], 201);
    }

    public function deleteStudent (Request $request,$id) {
        // logic to delete a student record goes here
        //if(Student::where('id', $id)->exists()) {
        //    $student = Student::find($id);
        //    $student->delete();

        //    return response()->json([
        //      "message" => "records deleted"
        //    ], 202);
        //} else {
        //    return response()->json([
        //      "message" => "Student not found"
        //    ], 404);
        //}


        $student = new Student;
        $student->id = $request->id;
        $student->name = $request->name;
        $student->course = $request->course;

        return response()->json([
            "message" => "deleteStudent"
        ], 201);

    }
}
