@extends('layouts.app')

@section('content')
<section class="space-y-4">
    <h5 class="text-3xl font-bold">Statistik</h5>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-4 gap-y-4 lg:gap-y-0">
        <div class="bg-white rounded-md ease-in duration-200 hover:drop-shadow-md p-6">
            <div class="flex flex-col">
                <h5 class="text-2xl font-bold">44</h5>
                <span class="text-gray-500">Total karyawan</span>
            </div>
        </div>
        <div class="bg-white rounded-md ease-in duration-200 hover:drop-shadow-md p-6">
            <div class="flex flex-col">
                <h5 class="text-2xl font-bold">44</h5>
                <span class="text-gray-500">Karyawan Aktif</span>
            </div>
        </div>
        <div class="bg-white rounded-md ease-in duration-200 hover:drop-shadow-md p-6">
        <div class="flex flex-col">
            <h5 class="text-2xl font-bold">44</h5>
            <span class="text-gray-500">Karyawan non-aktif</span>
        </div>
    </div>
</div>
</section>
<section class="space-y-8 mt-20">
    <div class="flex flex-row items-center justify-between">
        <h5 class="text-3xl font-bold">Karyawan</h5>
        <a href={{ route('employee.create') }} class="px-3 py-2 bg-[#7000FD] text-white rounded-md">Tambah Karyawan</a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-4 gap-y-4 lg:gap-y-0">
        @foreach($employee as $item)
        <div class="bg-white rounded-md text-center ease-in duration-200 drop-shadow-md">
            <img class="w-full object-cover bg-center rounded-tl-md rounded-tr-md" src="/img/team.jpg" alt="">
            <section class="flex flex-col p-4">
                <h5 class="text-base font-bold mb-1">Admin tampan</h5>
                <span class="text-sm font-normal text-gray-500">Admin</span>
                <div class="flex flex-row gap-x-4 mt-4">
                    <div class="w-full py-2 bg-[#7000FD] text-white rounded-md">
                        <a href="/detail-karyawan">Lihat Detail</a>
                    </div>
                    <div class="flex flex-row gap-x-2">
                        <button>
                            <a href="/edit-karyawan"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg></a>
                        </button>
                        <button><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></button>
                    </div>
                </div>
            </section>
        </div>
        @endforeach
</div>
@endsection
