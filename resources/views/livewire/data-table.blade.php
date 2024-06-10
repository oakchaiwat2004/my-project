<div>
    <a
        class="btn-open-create btn-actions inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wider hover:bg-gray-700 active:bg-gray-900">
        {{ __('Add User') }}
    </a>

    <table id="table-users" class="w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <div class="flex justify-center">
                        {{ __('ID') }}
                    </div>

                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <div class="flex justify-center">
                        {{ __('Name') }}
                    </div>

                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <div class="flex justify-center">
                        {{ __('Nick_name') }}
                    </div>

                </th>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <div class="flex justify-center">
                        {{ __('Email') }}
                    </div>
                </th>

                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <div class="flex justify-center">
                        {{ __('roles_id') }}
                    </div>
                </th>

                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <div class="flex justify-center">
                        {{ __('Actions') }}
                    </div>
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
        </tbody>
    </table>


    <div class="fixed z-10 inset-0 overflow-y-auto hidden" id="modal-view" aria-labelledby="modal-view-title"
        role="dialog" aria-modal="true">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity bg-gray-500 opacity-75" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
            <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-view-title">
                                ข้อมูลผู้ใช้
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">
                                    กรอกข้อมูลผู้ใช้
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:py-4">
                    <form>
                        <div class="grid gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="name" class="block text-sm font-medium text-gray-700">ชื่อ</label>
                                <input type="text" name="name" id="name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="nick_name" class="block text-sm font-medium text-gray-700">ชื่อเล่น</label>
                                <input type="text" name="nick_name" id="nick_name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">อีเมล</label>
                                <input type="email" name="email" id="email"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="password" class="block text-sm font-medium text-gray-700">รหัสผ่าน</label>
                                <input type="password" name="password" id="password"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="roles" class="block text-sm font-medium text-gray-700">สิทธิ์</label>
                                <select name="roles" id="roles"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    disabled>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->roles_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- การส่งข้อมูลจาก Html to jQurey = data-key="ข้อมูลที่ส่งไป" --}}
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:py-4">
                    <div class="flex flex-row-reverse">
                        <button type="button"
                            class="hidden btn-sm-create mt-3 w-full inline-flex justify-center rounded-md bg-indigo-500 border border-transparent shadow-sm px-4 py-2 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">

                            เพิ่มข้อมูล
                        </button>
                        <button type="button"
                            class="hidden btn-sm-update mt-3 w-full inline-flex justify-center rounded-md bg-indigo-500 border border-transparent shadow-sm px-4 py-2 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                            {{-- data-users="Hello"> --}}

                            อัพเดทข้อมูล
                        </button>
                        <button type="button"
                            class="btn-sm-close mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                            ปิด
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        // กำหนด DataTable ให้กับ element `#table-users`
        var list_table = $('#table-users').DataTable({
            // กำหนดจำนวน record ที่แสดงต่อหน้าจอ เริ่มต้นที่ 5 record
            pageLength: 5,
            // กำหนดให้ datatable ตอบสนองต่อหน้าจอที่มีขนาดต่างกัน
            responsive: true,
            // แสดง indicator แถบแสดงสถานะการโหลดข้อมูล
            processing: true,
            // เปิดใช้งานการประมวลผลข้อมูลฝั่ง server
            serverSide: true,
            // กำหนด method การส่งข้อมูลไปยัง server
            serverMethod: 'post',
            // กำหนดให้ตารางโชว์แบบมากไปหาน้อย
            order:[[0,'desc']],
            // กำหนด URL สำหรับดึงข้อมูล
            ajax: {
                url: "{{ route('user.with.datatable') }}",

                type: "post",

                // กำหนด header เพิ่มเติม
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Authorization',
                        'Bearer qPdkY9CbnP9P3qflJsBYMxkKkXeeCJ7FoSy08fBR25bee2ae');
                }
            },
            columns: [{
                    // ดึงข้อมูลของคอลัมน์ 'id' จาก server-side script
                    data: 'id',
                    className: 'text-center'
                },
                {
                    // ดึงข้อมูลของคอลัมน์ 'name' จาก server-side script
                    data: 'name',
                    className: 'text-center'
                },
                {
                    // ดึงข้อมูลของคอลัมน์ 'nick_name' จาก server-side script
                    data: 'nick_name',
                    className: 'text-center'
                },
                {
                    // ดึงข้อมูลของคอลัมน์ 'email' จาก server-side script
                    // แสดงข้อมูลตามปกติ ไม่ต้องแปลง
                    data: 'email',
                    render: function(data, type, row, meta) {
                        return row.email;
                    },
                    // กำหนด class 'text-center' ให้กับคอลัมน์นี้เพื่อจัดกึ่งกลาง
                    className: 'text-center'
                },
                {
                    // ดึงข้อมูลของคอลัมน์ 'role' จาก server-side script
                    // แปลงข้อมูลโดยดึงค่า 'roles_name' จาก object 'role'
                    data: 'roles_id',
                    render: function(data, type, row, meta) {
                        return row.role.roles_name;
                    },
                    // กำหนด class 'text-center' ให้กับคอลัมน์นี้เพื่อจัดกึ่งกลาง
                    className: 'text-center'
                },

                {
                    // ดึงข้อมูลของคอลัมน์ 'id' จาก server-side script
                    // ไม่ได้ดึงข้อมูลโดยตรง แต่สร้าง HTML button สำหรับการจัดการข้อมูล
                    data: null,
                    render: function(data, type, row, meta) {
                        // สร้าง HTML string สำหรับแสดง button
                        return `
                                <div class="flex justify-center">

                                        <a class="btn-view btn-actions inline-flex items-center flex-grow px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wider hover:bg-gray-700 active:bg-gray-900">
                                            {{ __('View') }}
                                        </a>

                                        <a class="btn-edit btn-actions inline-flex items-center flex-grow px-4 py-2 ml-4 bg-indigo-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wider hover:bg-gray-700 active:bg-gray-900"
                                        data-value='${JSON.stringify(row)}'>
                                            {{ __('Edit') }}
                                        </a>

                                        <button type="submit"
                                            class="btn-delete btn-actions inline-flex items-center flex-grow px-4 py-2 ml-4 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wider hover:bg-red-700 active:bg-red-900">
                                            {{ __('Delete') }}
                                        </button>

                                </div>
                            `;
                    },
                    // กำหนด class 'text-center' ให้กับคอลัมน์นี้เพื่อจัดกึ่งกลาง
                    className: 'text-center'
                },
            ],
            // กำหนดค่าคอลัมน์ต่างๆ
            columnDefs: [

                // กำหนดให้คอลัมน์ 0, 1, 2 responsive มากที่สุด
                {
                    responsivePriority: 1,
                    targets: [0, 1, 2]
                },

                // กำหนดให้คอลัมน์ 1 และ 2 เรียงลำดับได้
                {
                    orderable: true,
                    targets: [1, 2]
                },

                // กำหนดให้คอลัมน์สุดท้าย (คอลัมน์ 3) ไม่เรียงลำดับ
                {
                    orderable: false,
                    targets: [4]
                }
            ],

            // กำหนดตัวเลือกจำนวน record ที่แสดงต่อหน้าจอ
            "lengthMenu": [5, 10, 20, 40],
        });

        $(document).on('click', '.btn-view', function() {

            var data = $(this).data('data');
            console.log('เข้าถึง Row ทั้งหมด ที่ส่งมาจาก attribute row data');
            console.log(data);
            console.log('---------------------------------------------------------------------------');

            var rows = list_table.rows().data();
            console.log('เข้าถึง Row ทั้งหมด');
            console.log(rows);
            console.log('---------------------------------------------------------------------------');

            var row = list_table.row($(this).parents('tr')).data();
            console.log('เข้าถึง Row ของปุ่มที่ทำการคลิก');
            console.log(row);
            console.log('---------------------------------------------------------------------------');

            var rowIndex = list_table.row($(this).parents('tr')).index();
            console.log('เข้าถึงตำแหน่งของ Row ของปุ่มที่ทำการคลิก');
            console.log(rowIndex);
            console.log('---------------------------------------------------------------------------');

            // เติมข้อมูลลงใน Modal
            $('#name').val(row.name);
            $('#nick_name').val(row.nick_name);
            $('#email').val(row.email);
            $('#roles').val(row.roles);

            // ตรวจสอบว่า row.roles ว่างหรือไม่
            if (!row.role || row.role === 'undefined' || row.role === null) {
                // Clear Select
                $('#roles').val('').trigger('change');
            } else {
                // เลือก option ที่มี value ตรงกับ row.id
                $('#roles').val(row.role.id).trigger('change');
            }
            $('#roles').prop('disabled', true);
            // add user
            $('.btn-sm-create').addClass('hidden');

            $('.btn-sm-update').addClass('hidden');
            // แสดง Modal
            $('#modal-view').show();
        });

        $(document).on('click', '.btn-open-create', function() {
            // แสดง Modal
            $('#modal-view').show();
            // Clear ข้อมูลในฟอร์ม
            $('#name').val('');
            $('#nick_name').val('');
            $('#email').val('');
            $('#password').val('');
            $('#roles').val('').trigger('change');

            // ซ่อนปุ่มอัพเดทและแสดงปุ่มเพิ่มข้อมูล
            $('.btn-sm-update').addClass('hidden');
            $('.btn-sm-create').removeClass('hidden');

            $('#roles').prop('disabled', false);




        });

        $(document).on('click', '.btn-sm-create', function() {

            // เก็บค่าจากฟอร์ม

            var name = $('#name').val();
            var nick_name = $('#nick_name').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var roles = $('#roles').val();

            Swal.fire({
                title: 'ยืนยันการเพิ่มข้อมูล',
                text: 'คุณต้องการเพิ่มข้อมูลผู้ใช้ ' + name + ' ใช่หรือไม่ ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ยืนยัน',
                cancelButtonText: 'ยกเลิก',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "post",
                        url: "{{ route('user.create') }}",
                        data: {
                            name: name,
                            nick_name: nick_name,
                            email: email,
                            password: password,
                            roles_id: roles,

                        },
                        dataType: 'JSON',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            // console.log(response);
                            // เอาไว้re table ทั้งหมด

                            if (response.code == 200) {
                                Swal.fire({
                                    title: response.message,
                                    text: 'เพิ่มข้อมูลผู้ใช้ ' + name +
                                        ' ได้ทำการเพิ่มแล้ว',
                                    icon: 'success',
                                });
                            list_table.ajax.reload(null, false)
                            } else {
                                Swal.fire({
                                    title: 'เกิดข้อผิดพลาด',
                                    text: response.message,
                                    icon: 'error',
                                    confirmButtonText: 'ตกลง',
                                });
                            }
                        }
                    });
                }
            });
            // console.log(name);
            // console.log(nick_name);
            // console.log(email);
            // console.log(password);
            // console.log(roles);

        });

        $(document).on('click', '#modal-view button', function() {
            $('#modal-view').hide();

        });

        $(document).on('click', '.btn-sm-update', function() {
            // var users = $(this).data('users')
            // console.log(users);
            var userId = $(this).data('user');
            const name = document.getElementById('name').value;
            const nick_name = document.getElementById('nick_name').value;
            const email = document.getElementById('email').value;
            const roles = document.getElementById('roles').value;
            Swal.fire({
                title: 'ยืนยันการอัพเดทข้อมูล',
                text: 'คุณต้องการอัพเดทข้อมูลผู้ใช้ ' + name + ' ใช่หรือไม่ ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ยืนยัน',
                cancelButtonText: 'ยกเลิก',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "put",
                        url: "{{ route('user.update') }}",
                        data: {
                            name: name,
                            nick_name: nick_name,
                            email: email,
                            roles_id: roles,
                            userId: userId,
                        },
                        dataType: 'JSON',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            if (response.code == 200) {
                                Swal.fire({
                                    title: response.message,
                                    text: 'ข้อมูลผู้ใช้ ' + name +
                                        ' ได้รับการอัพเดทแล้ว',
                                    icon: 'success',
                                });
                                list_table.clear().draw();
                            } else {
                                Swal.fire({
                                    title: 'เกิดข้อผิดพลาด',
                                    text: response.message,
                                    icon: 'error',
                                    confirmButtonText: 'ตกลง',
                                });
                            }
                        }
                    });
                }
            });
        });

        $(document).on('click', '.btn-edit', function() {

            var value = $(this).data('value');
            // console.log(value);
            var rows = list_table.rows().data();
            var row = list_table.row($(this).parents('tr')).data();
            var rowIndex = list_table.row($(this).parents('tr')).index();

            // console.log(row);
            // เติมข้อมูลลงใน Modal
            $('#name').val(row.name);
            $('#nick_name').val(row.nick_name);
            $('#email').val(row.email);
            $('#roles').val(row.roles);

            // ตรวจสอบว่า row.roles ว่างหรือไม่
            if (!row.role || row.role === 'undefined' || row.role === null) {
                // Clear Select
                $('#roles').val('').trigger('change');
            } else {
                // เลือก option ที่มี value ตรงกับ row.id
                $('#roles').val(row.role.id).trigger('change');
            }
            //ปลด disabled select roles
            $('#roles').prop('disabled', false);

            // การปลดการทำงานของตารางโรว์
            // disabled = การปิดการทำงาน
            // เพิ่ม attribute data-id

            // แก้ไข data-id ของปุ่ม btn-sm-update


            $('.btn-sm-update').data('user', row.id);
            $('.btn-sm-update').removeClass('hidden');

            $('.btn-sm-create').addClass('hidden');

            // แสดง Modal
            $('#modal-view').show();
        });


        $(document).on('click', '.btn-delete', function() {
            var row = list_table.row($(this).parents('tr')).data();
            var userId = row.id;
            Swal.fire({
                title: 'ยืนยันการลบข้อมูล',
                text: 'คุณต้องการลบข้อมูลผู้ใช้ ( ' + userId + ' : ' + row.name +
                    ' ) ใช่หรือไม่ ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'ยืนยัน',
                cancelButtonText: 'ยกเลิก',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "delete",
                        url: "{{ route('user.delete') }}",
                        data: {
                            userId: userId,
                        },
                        dataType: 'JSON',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            if (response.code == 200) {
                                Swal.fire({
                                    title: response.message,
                                    text: 'ข้อมูลผู้ใช้ ( ' + userId +
                                        ' : ' + row.name +
                                        ' ) ได้รับการลบแล้ว',
                                    icon: 'success',
                                });
                                list_table.clear().draw();
                            } else {
                                Swal.fire({
                                    title: 'เกิดข้อผิดพลาด',
                                    text: response.message,
                                    icon: 'error',
                                    confirmButtonText: 'ตกลง',
                                });
                            }
                        }
                    });
                }
            });
        });


    });
</script>
