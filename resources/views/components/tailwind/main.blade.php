
<div class="flex justify-center items-center h-screen bg-cover bg-center bg-no-repeat !bg-[url('https://img5.pic.in.th/file/secure-sv1/image673890e079a20092.png')]">
    <div class=" w-full max-w-sm bg-white border border-gray-200 rounded-2xl shadow mt-20 md:p-6 dark:bg-gray-800 dark:border-gray-700 mx-auto">
        <form class="space-y-6" action="#">

            <h5 class=" font-prompt text-center font-bold text-text-login">ลืมรหัสผ่าน</h5>
            <div>
                <label for="pass" class=" font-prompt mb-2 text-sm text-text-login flex items-center"><i class=' text-but font-bold bx bx-hash pr-3'></i>รหัสพนักงาน</label>
                <input type="text" name="pass" id="pass" class="font-prompt text-xs pl-5 w-full border border-gray-300 text-text-login rounded-full focus:ring-gray-300 focus:border-gray-100 h-10 p-2" required />
            </div>
            <div class="relative">
                <label for="date" class="font-prompt mb-2 text-sm text-text-login flex items-center">
                    <i class=' text-but bx bxs-calendar pr-3'></i>วัน/เดือน/ปีเกิด
                </label>
                <div class="relative">
                    <x-flatpickr date-format="d/m/Y" name="date" id="date" class="font-prompt text-xs !pl-5 w-full !border !border-gray-300 text-text-login rounded-full focus:!ring-gray-300 focus:!border-gray-100 h-10  !p-2" required />
                    <i class="absolute right-3 top-1/2 transform -translate-y-1/2 bx bxs-calendar text-but"></i>
                </div>
            </div>

            <div>
                <label for="card" class="font-prompt  mb-2 text-sm text-text-login flex items-center"><i class=' text-but bx bxs-id-card pr-3'></i>เลขบัตรประจำตัวประชาชน</label>
                <input type="text" name="card" id="card" class="font-prompt text-xs pl-5 w-full border border-gray-300 text-text-login rounded-full focus:ring-gray-300 focus:border-gray-100 h-10 p-2" required />
            </div>
            <div>
                <button type="button" class="font-prompt w-full !bg-but !text-white rounded-full text-xs px-4 py-3 text-center me-2 mb-2">ถัดไป</button>
                <a href="#"  class="font-prompt text-center block mb-2 text-xs text-but pt-2">ย้อนกลับ</a>
            </div>
        </form>
    </div>
</div>



