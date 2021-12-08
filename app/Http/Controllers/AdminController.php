<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function __construct()
    {
    }

    public function myProfile()
    {
        return view('admin.admin_my_profile', ['user' => Auth::user()]);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('home'));
    }

    public function listAdmins()
    {
        return view('admin.list_admins', ['admins' => Admin::all()]);
    }

    public function listTeachers()
    {
        return view('admin.list_teachers', ['teachers' => Teacher::all()]);
    }

    public function listStudents()
    {
        return view('admin.list_students', ['students' => Student::all()]);
    }

    public function addAdminView()
    {
        return view('admin.admin_add_admin', ['user' => Auth::user()]);
    }

    public function addTeacherView()
    {
        return view('admin.admin_add_teacher', ['user' => Auth::user()]);
    }

    public function addStudentView()
    {
        return view('admin.admin_add_student', ['user' => Auth::user(), 'teachers' => Teacher::all()]);
    }

    public function addAdmin(Request $request)
    {
        $user = Auth::user();

        if ($user::class !== Admin::class) {
            return view('admin.admin_add_admin', ['error' => 'Unauthorized. You are not allowed to do that.']);
        }

        Admin::create($request->only(Admin::FILLABLES));

        return view('admin.admin_add_user', ['success' => 'User Added.']);
    }

    public function addTeacher(Request $request)
    {
        $user = Auth::user();

        if ($user::class !== Admin::class) {
            return view('admin.admin_add_teacher', ['error' => 'Unauthorized. You are not allowed to do that.']);
        }

        Teacher::create($request->only(Teacher::FILLABLES));

        return view('admin.admin_add_teacher', ['success' => 'User Added.']);
    }

    public function addStudent(Request $request)
    {
        $user = Auth::user();

        if ($user::class !== Admin::class) {
            return view('admin.admin_add_student', ['error' => 'Unauthorized. You are not allowed to do that.']);
        }

        Student::create($request->only(Student::FILLABLES));

        return \view('admin.admin_add_student', ['success' => 'User Added.', 'teachers' => Teacher::all()]);
    }

    public function updateAdmin(Request $request, $id): RedirectResponse
    {
        /** @var ?Admin $admin */
        $admin = Admin::find($id);

        if (! $admin) {
            redirect(route('admin.list_admins'))->with(['error' => 'Update admin failed.']);
        }

        $admin->update(
            collect($request->only(Admin::FILLABLES))
                ->all()
        );

        return redirect(route('admin.list_admins'))->with(['success' => 'Admin updated.']);
    }

    public function updateTeacher(Request $request, $id): RedirectResponse
    {
        /** @var ?Teacher $teacher */
        $teacher = Teacher::find($id);

        if (! $teacher) {
            return redirect(route('admin.list_teachers'))->with(['error' => 'Update teacher failed.']);
        }

        $teacher->update(
            collect($request->only(Teacher::FILLABLES))
                ->all()
        );

        return redirect(route('admin.list_teachers'))->with(['success' => 'Teacher updated.']);
    }

    public function deleteTeacher($id): RedirectResponse
    {
        /** @var ?Teacher $student */
        $teacher = Teacher::find($id);

        if ($teacher?->delete()) {
            return redirect(route('admin.list_teachers'))->with(['success' => 'Teacher deleted.']);
        }

        return redirect(route('admin.list_teachers'))->with(['error' => 'Delete teacher failed.']);
    }

    public function updateStudent(Request $request, $id): RedirectResponse
    {
        /** @var ?Student $student */
        $student = Student::find($id);

        if (! $student) {
            return redirect(route('admin.list_students'))->with(['error' => 'Update student failed.']);
        }

        $student->update(
            collect($request->only(Student::FILLABLES))
                ->all()
        );

        return redirect(route('admin.list_students'))->with(['success' => 'Student Updated.']);
    }

    public function deleteStudent($id): RedirectResponse
    {
        /** @var ?Student $student */
        $student = Student::find($id);

        if ($student?->delete()) {
            return redirect(route('admin.list_students'))->with(['success' => 'Student deleted.']);
        }

        return redirect(route('admin.list_students'))->with(['error' => 'Delete student failed.']);
    }
}
