
@extends('layouts.app')

@section('title', 'Data Pembeli')

@section('content')
<div class="relative flex flex-col min-h-screen bg-slate-50">
  <div class="flex flex-1 justify-center py-5">
    <div class="layout-content-container flex flex-col max-w-[1200px] flex-1">
      <div class="flex flex-wrap justify-between gap-3 p-4">
        <p class="text-[#0d151c] tracking-light text-[32px] font-bold leading-tight min-w-72">Data Pembeli</p>
      </div>

      <div class="px-4 py-3">
        <label class="flex flex-col min-w-40 h-12 w-full">
          <div class="flex w-full flex-1 items-stretch rounded-xl h-full">
            <div class="text-[#5c748a] flex border-none bg-[#eaedf1] items-center justify-center pl-4 rounded-l-xl border-r-0">
              <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
              </svg>
            </div>
            <input placeholder="Cari pembeli..." 
                   class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#101518] focus:outline-0 focus:ring-0 border-none bg-[#eaedf1] focus:border-none h-full placeholder:text-[#5c748a] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                   value=""/>
          </div>
        </label>
      </div>

      <div class="px-4 py-3 @container">
        <div class="flex overflow-hidden rounded-xl border border-[#d4dce2] bg-gray-50">
          <table class="flex-1">
            <thead>
              <tr class="bg-gray-50">
                <th class="table-column-120 px-4 py-3 text-left text-[#101518] w-[400px] text-sm font-medium leading-normal">Nama</th>
                <th class="table-column-240 px-4 py-3 text-left text-[#101518] w-[400px] text-sm font-medium leading-normal">Email</th>
                <th class="table-column-360 px-4 py-3 text-left text-[#101518] w-[400px] text-sm font-medium leading-normal">No. Telepon</th>
                <th class="table-column-480 px-4 py-3 text-left text-[#101518] w-[400px] text-sm font-medium leading-normal">Alamat</th>
                <th class="table-column-600 px-4 py-3 text-left text-[#101518] w-[400px] text-sm font-medium leading-normal">Tanggal Registrasi</th>
                <th class="table-column-720 px-4 py-3 text-left text-[#101518] w-60 text-sm font-medium leading-normal">Status</th>
              </tr>
            </thead>
             <tbody>
              @if(isset($users) && $users->count() > 0)
                @foreach($users as $user)
                  <tr class="border-t border-[#d4dce2]">
                    <td class="px-4 py-3 text-[#0d151c] text-sm">{{ $user->name }}</td>
                    <td class="px-4 py-3 text-[#5c748a] text-sm">{{ $user->email }}</td>
                    <td class="px-4 py-3 text-[#5c748a] text-sm">{{ $user->created_at ? $user->created_at->format('d/m/Y') : '-' }}</td>
                  </tr>
                @endforeach
              @else
                <tr>
                  <td colspan="3" class="px-4 py-3 text-center text-[#5c748a] text-sm">Tidak ada data pembeli</td>
                </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  @media (max-width: 120px) {.table-column-120 {display: none;}}
  @media (max-width: 240px) {.table-column-240 {display: none;}}
  @media (max-width: 360px) {.table-column-360 {display: none;}}
  @media (max-width: 480px) {.table-column-480 {display: none;}}
  @media (max-width: 600px) {.table-column-600 {display: none;}}
  @media (max-width: 720px) {.table-column-720 {display: none;}}
</style>
@endsection