<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ระบบยกเลิกลงทะเบียน') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table table-hover ">
                    <thead class="table-dark">
                        <tr>
                            <th>ลำดับ</th>
                            <th>รหัสวิชาเรียน</th>
                            <th>ชื่อวิชา</th>
                            <th>อาจารย์ประจำวิชา</th>
                            <th>สถานะ</th>
                            <th>จัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>6</td>
                            <td>6</td>
                            <td>
                            <div class="btn btn-danger btn-sm">ยกเลิกลงทะเบียน</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
