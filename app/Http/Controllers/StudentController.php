<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {

        $request->validate([
            'classroom_id' => 'nullable|integer|min:1',
            'course_id' => 'nullable|integer|min:1',
            'teacher_id' => 'nullable|integer|min:1',
            'gender' => 'nullable|boolean',
        ]);

        $classroomId = $request->has('classroom_id') ? $request->classroom_id : null;
        $courseId = $request->has('course_id') ? $request->course_id : null;
        $teacherId = $request->has('teacher_id') ? $request->teacher_id : null;
        $gender = $request->has('gender') ? $request->gender : null;

        $students = Student::when($classroomId, function ($query, $classroomId) {
            $query->where('classroom_id', $classroomId);
        })
            ->when($courseId, function ($query, $courseId) {
                $query->where('course_id', $courseId);
            })
            ->when($teacherId, function ($query, $teacherId) {
                $query->where('teacher_id', $teacherId);
            })
            ->when($gender, function ($query) {
                $query->where('gender', 1);
            })
            ->with(['classroom', 'course', 'teacher'])
            ->orderBy('id', 'desc')
            ->simplePaginate(50);

        $students = $students->appends([
            'classroom_id' => $classroomId,
            'course_id' => $courseId,
            'teacher_id' => $teacherId,
            'gender' => $gender,
        ]);

        $classrooms = Classroom::orderBy('name')
            ->get();
        $courses = Course::orderBy('name')
            ->get();
        $teachers = Teacher::orderBy('first_name', 'last_name')
            ->get();

        return view('student.index')
            ->with([
                'classrooms' => $classrooms,
                'courses' => $courses,
                'teachers' => $teachers,
                'students' => $students,
                'gender' => $gender,
            ]);
    }

    public function show()
    {

    }
}