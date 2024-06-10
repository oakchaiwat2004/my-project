<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;

use App\Models\Members;
use Illuminate\Http\Request;

use App\Repositories\MembersRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MembersController extends Controller
{

    private $member;
    public function __construct(MembersRepositoryInterface $MembersRepositoryInterface)

    {
        $this->member = $MembersRepositoryInterface;
    }

    public function memberWithDatatable(Request $request)
    {
        $postData = $request->all();
        ## Read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page

        $columnIndex = isset($postData['order'][0]['column']) ? $postData['order'][0]['column'] : 0;
        $columnName = isset($postData['columns'][$columnIndex]['data']) ? $postData['columns'][$columnIndex]['data'] : '';
        $columnSortOrder = isset($postData['order'][0]['dir']) ? $postData['order'][0]['dir'] : 'asc';
        $searchValue = $postData['search']['value']; // Search value

        // Total records
        $totalRecords = Members::count();

        // Total records with filter
        $query = Members::query();
        if (!empty($searchValue)) {
            $query->where('m_name', 'like', '%' . $searchValue . '%')
                ->orWhere('m_lastname', 'like', '%' . $searchValue . '%')
                ->orWhere('status', 'like', '%' . $searchValue . '%');
        }
        $totalRecordswithFilter = $query->count();

        // Fetch records
        $records = $query->orderBy($columnName, $columnSortOrder)
            ->skip($start)
            ->take($rowperpage)
            ->get();

        return [
            "aaData" => $records,
            "draw" => $draw,
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
        ];
    }

    public function createmApi(Request $request)
    {

        $data = $request->all();

        $formattedDate = Carbon::createFromFormat('d-m-Y H:i', $request->m_date)->format('Y-m-d H:i:s');

        $newMember = [
            'm_name' => $data['m_name'],
            'm_lastname' => $data['m_lastname'],
            'm_date' => $formattedDate,
            'status' => $data['status'],
        ];

        try {
            // สร้างข้อมูลใหม่
            $this->member->create($newMember);

            // การสร้างสำเร็จ
            return response()->json([
                'message' => 'เพิ่มข้อมูลสำเร็จ',
                'code' => 200,
            ]);
        } catch (\Exception $e) {
            // การสร้างไม่สำเร็จ
            return response()->json([
                'message' => 'เพิ่มข้อมูลไม่สำเร็จ',
                'code' => 500,
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function updatemApi(Request $request)
    {



        $data = $request->all();

        if (!isset($data['memberId'])) {
            return response()->json([
                'message' => 'ไม่พบ memberId ใน request',
                'code' => 400,
            ], 400);
        }

        $formattedDate = Carbon::createFromFormat('d-m-Y H:i', $request->m_date)->format('Y-m-d H:i:s');


        $updat = [
            'm_name' => $data['m_name'],
            'm_lastname' => $data['m_lastname'],
            'm_date' => $formattedDate,
            'status' => $data['status'],
        ];

        try {
            // อัปเดตข้อมูล

            $this->member->update($data['memberId'], $updat);

            // อัพเดทสำเร็จ
            return response()->json([
                'message' => 'อัปเดตข้อมูลสำเร็จ',
                'code' => 200,
            ]);
        } catch (\Exception $e) {
            // อัพเดทไม่สำเร็จ
            return response()->json([
                'message' => 'อัปเดตข้อมูลไม่สำเร็จ',
                'code' => 500,
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function deletemApi (Request $request)
    {
        $data = $request->all();
        $memberName = $data['m_name'];

        try {
            // ค้นหาสมาชิกที่ต้องการลบ
            $member = Members::where('m_name', $memberName)->first();

            // ตรวจสอบว่ามีสมาชิกหรือไม่
            if (!$member) {
                return response()->json([
                    'message' => 'ไม่พบผู้ใช้',
                    'code' => 404,
                ], 404);
            }

            // ลบสมาชิก
            $member->delete();

            // ส่งข้อมูลการลบสำเร็จกลับไป
            return response()->json([
                'message' => 'ลบข้อมูลสำเร็จ',
                'code' => 200,
            ], 200);
        } catch (ModelNotFoundException $e) {
            // หากไม่พบข้อมูลสมาชิก
            return response()->json([
                'message' => 'ไม่พบผู้ใช้',
                'code' => 404,
            ], 404);
        } catch (\Exception $e) {
            // หากเกิดข้อผิดพลาดในการลบ
            return response()->json([
                'message' => 'ลบข้อมูลไม่สำเร็จ',
                'code' => 500,
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
