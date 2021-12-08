<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', static function () {
    return view('index');
})->name('home');

Route::get('/login', static function () {
    return view('login');
})->name('login');

Route::get('/admin/login', static function () {
    return view('admin.admin_login');
})->name('admin.login_view');

Route::get('/teacher/login', static function () {
    return view('teacher.teacher_login');
})->name('teacher.login_view');

Route::get('/student/login', static function () {
    return view('student.student_login');
})->name('student.login_view');

Route::group(['middleware' => 'web'], static function () {
    Route::post('/auth-admin', 'AuthController@authAdmin')->name('auth.admin');
    Route::post('/auth-teacher', 'AuthController@authTeacher')->name('auth.teacher');
    Route::post('/auth-student', 'AuthController@authStudent')->name('auth.student');
});

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth:admin']], static function () {
    Route::get('my-profile', 'AdminController@myProfile')->name('admin.my_profile');
    Route::post('logout', 'AdminController@logout')->name('admin.logout');

    Route::get('list-admins', 'AdminController@listAdmins')->name('admin.list_admins');
    Route::get('list-teachers', 'AdminController@listTeachers')->name('admin.list_teachers');
    Route::get('list-students', 'AdminController@listStudents')->name('admin.list_students');

    Route::get('add-admin', 'AdminController@addAdminView')->name('admin.add_admin_view');
    Route::get('add-teacher', 'AdminController@addTeacherView')->name('admin.add_teacher_view');
    Route::get('add-student', 'AdminController@addStudentView')->name('admin.add_student_view');

    Route::post('add-admin', 'AdminController@addAdmin')->name('admin.add_admin');
    Route::post('add-teacher', 'AdminController@addTeacher')->name('admin.add_teacher');
    Route::post('add-student', 'AdminController@addStudent')->name('admin.add_student');

    Route::patch('admins/{id}', 'AdminController@updateAdmin')->name('admin.update_admin');

    Route::patch('students/{id}', 'AdminController@updateStudent')->name('admin.update_student');
    Route::delete('students/{id}', 'AdminController@deleteStudent')->name('admin.delete_student');

    Route::patch('teachers/{id}', 'AdminController@updateTeacher')->name('admin.update_teacher');
    Route::delete('teachers/{id}', 'AdminController@deleteTeacher')->name('admin.delete_teacher');
});

Route::group(['prefix' => 'teachers', 'middleware' => ['web', 'auth:teacher']], static function () {
    Route::get('my-profile', 'TeacherController@myProfile')->name('teacher.my_profile');
    Route::post('logout', 'TeacherController@logout')->name('teacher.logout');

    Route::get('students', 'TeacherController@myStudents')->name('teacher.my_students');
    Route::get('add-student', 'TeacherController@addStudentView')->name('teacher.add_student_view');

    Route::post('students', 'TeacherController@addStudent')->name('teacher.add_student');
    Route::patch('students/{id}', 'TeacherController@updateStudent')->name('teacher.update_student');
    Route::delete('students/{id}', 'TeacherController@deleteStudent')->name('teacher.delete_student');
});

Route::group(['prefix' => 'students', 'middleware' => ['web', 'auth:student']], static function () {
    Route::get('my-profile', 'StudentController@myProfile')->name('student.my_profile');
    Route::get('grades', 'StudentController@grades')->name('student.grades');
    Route::post('logout', 'StudentController@logout')->name('student.logout');
});
