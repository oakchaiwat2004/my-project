<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRolesRequest;
use App\Http\Requests\UpdateRolesRequest;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class RolesController extends Controller
{
    /**
     * แสดงรายการ resource
     */
    public function index()
    {
        // ตรวจสอบสิทธิ์การเข้าถึงโดยใช้ Gate
        if (Gate::allows("view", ["SADM", User::class])) {
            // ดึงข้อมูล roles ทั้งหมด
            $roles = Roles::all();
            // แสดง view ที่มีรายชื่อ roles
            return view('roles.index', compact('roles'));
        } else {
            // แสดงหน้าข้อความแจ้งเตือนเมื่อไม่มีสิทธิ์เข้าถึง
            return view('error-access');
        }
    }

    /**
     * แสดงฟอร์มสำหรับสร้าง resource ใหม่
     */
    public function create()
    {
        // ตรวจสอบว่า user ที่ล็อกอินอยู่มี roles_id ไม่เท่ากับ 1 หรือไม่
        if (Auth::user()->roles_id != 1) {
            // ถ้าไม่มีสิทธิ์ให้ redirect ไปที่หน้า roles index พร้อมแสดงข้อความ error
            return redirect()->route('roles.index')
                ->with('error', 'คุณไม่มีสิทธิในการแก้ไข');
        }

        // ถ้ามีสิทธิ์ให้แสดงฟอร์มสร้าง role ใหม่
        return view('roles.create');
    }

    /**
     * เก็บ resource ที่สร้างใหม่ใน storage
     */
    public function store(StoreRolesRequest $request)
    {
        // ดึงข้อมูลที่ผ่านการตรวจสอบจาก request
        $validated = $request->validated();

        // สร้าง role ใหม่ด้วยข้อมูลที่ผ่านการตรวจสอบ
        $role = Roles::create($validated);

        // แสดงข้อความแจ้งเตือนว่าการสร้าง role ใหม่สำเร็จ และ redirect ไปยังหน้า roles index
        return redirect()->route('roles.index')
            ->with('success', 'สร้าง role ใหม่สำเร็จ');
    }


    /**
     * แสดง resource ที่ระบุ
     */
    public function show(Roles $role)
    {
        // เรียกใช้ Policy (optional)
        // $this->authorize('view', $role);
        // แสดงหน้ารายละเอียดของ role
        return view('roles.show', compact('role'));
    }

    /**
     * แสดงฟอร์มสำหรับแก้ไข resource ที่ระบุ
     */
    public function edit(Roles $role)
    {
        // เรียกใช้ Policy (optional)
        // $this->authorize('view', $role);
        // แสดงฟอร์มแก้ไข role
        return view('roles.edit', compact('role'));
    }

    /**
     * อัปเดต resource ที่ระบุใน storage
     */
    public function update(Roles $role, UpdateRolesRequest $request)
    {
        // ดึงข้อมูล "ข้อมูลเดิม" ของ role
        $oldData = $role->getOriginal();

        // ดึงข้อมูล "ข้อมูลที่แก้ไข" ที่ผ่านการตรวจสอบจาก request
        $newData = $request->validated();

        // เปรียบเทียบข้อมูลเดิมกับข้อมูลใหม่
        $diff = array_diff($newData, $oldData);

        // อัปเดตข้อมูล role ด้วยข้อมูลใหม่
        $role->update($newData);

        // แสดงข้อความแจ้งเตือนว่าการแก้ไขสำเร็จ พร้อมแสดงข้อมูลที่เปลี่ยนแปลง
        return redirect()->route('roles.index')
            ->with('success', 'แก้ไขข้อมูล [' .
                implode(', ', array_keys($diff)) .
                '] เป็น [' . implode(', ', $newData) . '] สำเร็จ');
    }

    /**
     * ลบ resource ที่ระบุออกจาก storage
     */
    public function destroy(Roles $role)
    {
        // ลบ role ที่ระบุ
        $role->delete();

        // แสดงข้อความแจ้งเตือนว่าการลบสำเร็จ และ redirect ไปยังหน้า roles index
        return redirect()->route('roles.index')
            ->with('success', 'ลบ role ใหม่สำเร็จ');
    }
}
