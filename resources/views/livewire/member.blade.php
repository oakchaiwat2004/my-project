<div>

    <a
        class="btn-open-add btn-actions inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wider hover:bg-gray-700 active:bg-gray-900">
        {{ __('Add Member') }}
    </a>

    <table id="table-members" class="w-full divide-y divide-gray-200">
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
                        {{ __('Last Name') }}
                    </div>

                </th>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <div class="flex justify-center">
                        {{ __('M Date') }}
                    </div>
                </th>

                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <div class="flex justify-center">
                        {{ __('Status') }}
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
                                ข้อมูลของสมาชิก
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:py-4">
                    <form>
                        <div class="grid gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="m_name" class="block text-sm font-medium text-gray-700">ชื่อ</label>
                                <input type="text" name="m_name" id="m_name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="m_lastname" class="block text-sm font-medium text-gray-700">นามสกุล</label>
                                <input type="text" name="m_lastname" id="m_lastname"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="m_date"
                                    class="block text-sm font-medium text-gray-700">วันที่สมัคร</label>
                                    <x-flatpickr date-format="d-m-Y" name="m_date" id="m_date" value="{{ $currentDate }}" show-time :time24hr="true"  />
                                {{-- <input type="date" name="m_date" id="m_date" data-date-formate="yyyy MM dd"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"> --}}

                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="status" class="block text-sm font-medium text-gray-700">สถานะ</label>
                                <input type="text" name="status" id="status"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            </div>

                        </div>
                    </form>
                </div>
                {{-- การส่งข้อมูลจาก Html to jQurey = data-key="ข้อมูลที่ส่งไป" --}}
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:py-4">
                    <div class="flex flex-row-reverse">
                        <button type="button"
                            class="hidden btn-sm-add mt-3 w-full inline-flex justify-center rounded-md bg-indigo-500 border border-transparent shadow-sm px-4 py-2 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">

                            สมัครสมาชิก
                        </button>
                        <button type="button"
                            class="hidden btn-sm-update mt-3 w-full inline-flex justify-center rounded-md bg-indigo-500 border border-transparent shadow-sm px-4 py-2 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">

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
        var list_table = $('#table-members').DataTable({
            pageLength: 5,
            responsive: true,
            processing: true,
            serverSide: true,
            order:[[0,'desc']],
            serverMethod: 'post',
            ajax: {
                url: '{{ route('member.with.datatable') }}',
                type: "post",
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Authorization',
                        'Bearer K0aICOqvs4Sb9G4DKqPzSvpuKXU8GuxSuTcQQcm2260a6ad0');
                }
            },
            columns: [{
                    data: 'id',
                    className: 'text-center'
                },
                {
                    data: 'm_name',
                    className: 'text-center'
                },
                {
                    data: 'm_lastname',
                    className: 'text-center'
                },
                {
                    data: 'm_date',
                    className: 'text-center'
                },
                {
                    data: 'status',
                    className: 'text-center'
                },
                {
                    data: null,
                    render: function(data, type, row, meta) {
                        return `
                            <div class="flex justify-center">
                                <a class="btn-view btn-actions inline-flex items-center flex-grow px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wider hover:bg-gray-700 active:bg-gray-900">
                                    {{ __('View') }}
                                </a>
                                <a class="btn-edit btn-actions inline-flex items-center flex-grow px-4 py-2 ml-4 bg-indigo-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wider hover:bg-gray-700 active:bg-gray-900">
                                            {{ __('Edit') }}
                                        </a>
                                <button type="submit" class="btn-delete btn-actions inline-flex items-center flex-grow px-4 py-2 ml-4 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wider hover:bg-red-700 active:bg-red-900">
                                    {{ __('Cancel') }}
                                </button>
                            </div>
                        `;
                    },
                    className: 'text-center'
                },
            ],

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
            $('#m_name').val(row.m_name);
            $('#m_lastname').val(row.m_lastname);
            $('#m_date').val(row.m_date);
            $('#status').val(row.status);


            if (!row.status || row.status === 'undefined' || row.status === null) {
                // Clear Select
                $('#status').val('').trigger('change');
            } else {

                $('#status').val(row.status).trigger('change');
            }
            $('#status').prop('disabled', true);

            $('.btn-sm-update').addClass('hidden');
            $('.btn-sm-add').addClass('hidden');
            // แสดง Modal
            $('#modal-view').show();
        });

        $(document).on('click', '#modal-view button', function() {
            $('#modal-view').hide();

        });

        $(document).on('click', '.btn-open-add', function() {
            // แสดง Modal
            $('#modal-view').show();
            // Clear ข้อมูลในฟอร์ม
            $('#m_name').val('');
            $('#m_lastname').val('');
            $('#m_date').val('');
            $('#status').val('').trigger('change');

            $('.btn-sm-add').removeClass('hidden');
            $('.btn-sm-update').addClass('hidden');

            $('#status').prop('disabled', false);




        });

        $(document).on('click', '.btn-sm-add', function() {

            // เก็บค่าจากฟอร์ม

            var name = $('#m_name').val();
            var lastname = $('#m_lastname').val();
            var date = $('#m_date').val();
            var status = $('#status').val();

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
                        url: "{{ route('member.create') }}",
                        data: {
                            m_name: name,
                            m_lastname: lastname,
                            m_date: date,
                            status: status,
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
        });

        $(document).on('click', '.btn-edit', function() {

            var value = $(this).data('value');
            // console.log(value);
            var rows = list_table.rows().data();
            var row = list_table.row($(this).parents('tr')).data();
            var rowIndex = list_table.row($(this).parents('tr')).index();

            // เติมข้อมูลลงใน Modal
            $('#m_name').val(row.m_name);
            $('#m_lastname').val(row.m_lastname);
            $('#m_date').val(row.m_date);
            $('#status').val(row.status);

            $('.btn-sm-update').data('members', row.id);

            $('.btn-sm-update').removeClass('hidden');
            $('.btn-sm-add').addClass('hidden');

            // แสดง Modal
            $('#modal-view').show();
        });

        $(document).on('click', '.btn-sm-update', function() {

            var memberId = $(this).data('members');
            const name = document.getElementById('m_name').value;
            const lastname = document.getElementById('m_lastname').value;
            const date = document.getElementById('m_date').value;
            const status = document.getElementById('status').value;
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
                        type: "PUT",
                        url: "{{ route('member.update') }}",
                        data: {
                            m_name: name,
                            m_lastname: lastname,
                            m_date: date,
                            status: status,
                            memberId: memberId
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

        $(document).on('click', '.btn-delete', function() {
            var row = list_table.row($(this).parents('tr')).data();
            var memberName = row['m_name'];
            Swal.fire({
                title: 'ยืนยันการยกเลิก',
                text: 'คุณ ' + row['m_name'] + ' ต้องการยกเลิกสมาชิก ใช่หรือไม่ ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'ยืนยัน',
                cancelButtonText: 'ยกเลิก',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('member.delete') }}",
                        data: {
                            m_name: memberName,
                        },
                        dataType: 'JSON',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            if (response.code == 200) {
                                Swal.fire({
                                    title: response.message,
                                    text: 'คุณ ' + row['m_name'] +
                                        ' ได้ทำการยกเลิกสมาชิกแล้ว',
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
                        },
                        error: function(xhr, status, error) {
                            Swal.fire({
                                title: 'เกิดข้อผิดพลาด',
                                text: xhr.responseText,
                                icon: 'error',
                            });
                        }
                    });
                }
            });

        });

    })
</script>

