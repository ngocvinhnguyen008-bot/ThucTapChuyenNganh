<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    /**
     * Hiển thị danh sách quản lý người dùng (học sinh và giáo viên)
     */
    public function index()
    {
        $students = Student::with('user')->get();
        $teachers = Teacher::with('user')->get();

        return view('admin.product.customer-management', [
            'students' => $students,
            'teachers' => $teachers,
            'totalStudents' => $students->count(),
            'activeStudents' => $students->where('status', 'active')->count(),
            'totalTeachers' => $teachers->count(),
            'activeTeachers' => $teachers->where('status', 'active')->count(),
        ]);
    }

    /**
     * Thêm học sinh mới
     */
    public function createStudent()
    {
        return view('admin.product.create-student');
    }

    /**
     * Lưu học sinh mới
     */
    public function storeStudent(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email',
            'phone' => 'nullable|string|max:20',
            'date_of_birth' => 'nullable|date',
            'student_code' => 'required|string|unique:students,student_code',
            'status' => 'required|in:active,inactive,on_leave',
        ]);

        // Tạo user mới
        $user = \App\Models\User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'date_of_birth' => $validated['date_of_birth'] ?? null,
            'password' => \Illuminate\Support\Facades\Hash::make('password123'),
        ]);

        // Tạo student record
        Student::create([
            'user_id' => $user->id,
            'student_code' => $validated['student_code'],
            'status' => $validated['status'],
            'gpa' => 0,
        ]);

        return redirect()->route('admin.users')->with('success', 'Thêm học sinh thành công!');
    }

    /**
     * Sửa học sinh
     */
    public function editStudent($id)
    {
        $student = Student::with('user')->findOrFail($id);
        return view('admin.product.edit-student', ['student' => $student]);
    }

    /**
     * Cập nhật học sinh
     */
    public function updateStudent(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email,' . $student->user_id,
            'phone' => 'nullable|string|max:20',
            'date_of_birth' => 'nullable|date',
            'student_code' => 'required|string|unique:students,student_code,' . $id,
            'status' => 'required|in:active,inactive,on_leave',
        ]);

        // Cập nhật user
        $student->user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'date_of_birth' => $validated['date_of_birth'] ?? null,
        ]);

        // Cập nhật student
        $student->update([
            'student_code' => $validated['student_code'],
            'status' => $validated['status'],
        ]);

        return redirect()->route('admin.users')->with('success', 'Cập nhật học sinh thành công!');
    }

    /**
     * Xóa học sinh
     */
    public function destroyStudent($id)
    {
        $student = Student::findOrFail($id);
        $user = $student->user;

        $student->delete();
        $user->delete();

        return redirect()->route('admin.users')->with('success', 'Xóa học sinh thành công!');
    }

    /**
     * Thêm giáo viên mới
     */
    public function createTeacher()
    {
        return view('admin.product.create-teacher');
    }

    /**
     * Lưu giáo viên mới
     */
    public function storeTeacher(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email',
            'phone' => 'nullable|string|max:20',
            'date_of_birth' => 'nullable|date',
            'employee_code' => 'required|string|unique:teachers,employee_code',
            'specialization' => 'required|string|max:255',
            'status' => 'required|in:active,inactive,on_leave',
        ]);

        // Tạo user mới
        $user = \App\Models\User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'date_of_birth' => $validated['date_of_birth'] ?? null,
            'password' => \Illuminate\Support\Facades\Hash::make('password123'),
        ]);

        // Tạo teacher record
        Teacher::create([
            'user_id' => $user->id,
            'employee_code' => $validated['employee_code'],
            'specialization' => $validated['specialization'],
            'status' => $validated['status'],
            'rating' => 0,
        ]);

        return redirect()->route('admin.users')->with('success', 'Thêm giáo viên thành công!');
    }

    /**
     * Sửa giáo viên
     */
    public function editTeacher($id)
    {
        $teacher = Teacher::with('user')->findOrFail($id);
        return view('admin.product.edit-teacher', ['teacher' => $teacher]);
    }

    /**
     * Cập nhật giáo viên
     */
    public function updateTeacher(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email,' . $teacher->user_id,
            'phone' => 'nullable|string|max:20',
            'date_of_birth' => 'nullable|date',
            'employee_code' => 'required|string|unique:teachers,employee_code,' . $id,
            'specialization' => 'required|string|max:255',
            'status' => 'required|in:active,inactive,on_leave',
        ]);

        // Cập nhật user
        $teacher->user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'date_of_birth' => $validated['date_of_birth'] ?? null,
        ]);

        // Cập nhật teacher
        $teacher->update([
            'employee_code' => $validated['employee_code'],
            'specialization' => $validated['specialization'],
            'status' => $validated['status'],
        ]);

        return redirect()->route('admin.users')->with('success', 'Cập nhật giáo viên thành công!');
    }

    /**
     * Xóa giáo viên
     */
    public function destroyTeacher($id)
    {
        $teacher = Teacher::findOrFail($id);
        $user = $teacher->user;

        $teacher->delete();
        $user->delete();

        return redirect()->route('admin.users')->with('success', 'Xóa giáo viên thành công!');
    }
}
