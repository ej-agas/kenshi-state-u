<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class TeacherController extends Controller
{
    public function __construct()
    {
    }

    public function myProfile(): View
    {
        return \view('teacher.teacher_my_profile', ['user' => Auth::user()]);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('teacher')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('home'));
    }

    public function myStudents(): View
    {
        /** @var Teacher $teacher */
        $teacher = Auth::user();

        return \view('teacher.my_students', ['students' => $teacher->students()->get()]);
    }

    public function addStudentView(): View
    {
        return \view('teacher.teacher_add_student');
    }

    public function addStudent(Request $request): View
    {
        /** @var Teacher $teacher */
        $teacher = Auth::user();

        $teacher->students()->create(
            collect($request->only(Student::FILLABLES))
                ->except('teacher_id')
                ->all()
        );

        return \view('teacher.teacher_add_student', ['success' => 'Student Created.']);
    }

    public function updateStudent(Request $request, $id): View
    {
        /** @var Student $student */
        $student = Student::find($id);

        if (! $student) {
            return \view('teacher.my_students', ['error' => 'Update Student Failed.']);
        }

        $student->update(
            collect($request->only(Student::FILLABLES))
                ->except('teacher_id')
                ->all()
        );

        /** @var Teacher $teacher */
        $teacher = Auth::user();

        return \view('teacher.my_students', ['success' => 'Student Updated.', 'students' => $teacher->students()->get()]);
    }

    public function deleteStudent($id): View
    {
        /** @var Teacher $teacher */
        $teacher = Auth::user();

        if ($teacher->students()->find($id)?->delete()) {
            return \view('teacher.my_students', ['success' => 'Student Deleted.', 'students' => $teacher->students()->get()]);
        }

        $teacher->students()->find($id)?->delete();

        return \view('teacher.my_students', ['error' => 'Delete student failed.', 'students' => $teacher->students()->get()]);
    }
}
