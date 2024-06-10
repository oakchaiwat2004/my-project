<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Members as ModelsMembers;
use Carbon\Carbon;


class Member extends Component
{
    public $currentDate; // สร้างตัวแปรสำหรับเก็บวันที่ปัจจุบัน




    public function mount()
    {
        // กำหนดค่าตัวแปร $currentDate เป็นวันที่ปัจจุบันในรูปแบบ YYYY-MM-DD
        $this->currentDate = Carbon::now()->format('d-m-Y H:i');

    }

    public function render()
    {
        // ส่งตัวแปร $currentDate ไปยัง view 'livewire.member'
        return view('livewire.member', ['currentDate' => $this->currentDate]);
    }
}
