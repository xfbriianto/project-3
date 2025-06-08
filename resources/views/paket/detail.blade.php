@extends('layouts.public')

@section('title', 'Paket Produk | Technocenter')

@section('content')
<div class="px-40 flex flex-1 justify-center py-5">
    <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
        <div class="flex flex-wrap gap-2 p-4">
            <a class="text-[#49719c] text-base font-medium leading-normal" href="{{ route('paket.index') }}">Shop</a>
            <span class="text-[#49719c] text-base font-medium leading-normal">/</span>
            <span class="text-[#0d141c] text-base font-medium leading-normal">{{ $paket->name }}</span>
        </div>
        <div class="flex flex-wrap justify-between gap-3 p-4">
            <div class="flex min-w-72 flex-col gap-3">
                <p class="text-[#0d141c] tracking-light text-[32px] font-bold leading-tight">{{ $paket->name }}</p>
                <p class="text-[#49719c] text-sm font-normal leading-normal">{{ $paket->description }}</p>
            </div>
        </div>
        <div class="flex w-full grow bg-slate-50 @container p-4">
            <div class="w-full gap-1 overflow-hidden bg-slate-50 @[480px]:gap-2 aspect-[3/2] rounded-xl flex">
                <div
                    class="w-full bg-center bg-no-repeat bg-cover aspect-auto rounded-none flex-1"
                    style="background-image: url('{{ $paket->image_url }}');"
                ></div>
            </div>
        </div>
        <h3 class="text-[#0d141c] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Package Items</h3>
        <div class="p-4 grid grid-cols-[20%_1fr] gap-x-6">
            @foreach($paket->items as $item)
            <div class="col-span-2 grid grid-cols-subgrid border-t border-t-[#cedbe8] py-5">
                <p class="text-[#49719c] text-sm font-normal leading-normal">{{ $item->name }}</p>
                <p class="text-[#0d141c] text-sm font-normal leading-normal">Quantity: {{ $item->pivot->quantity }}</p>
            </div>
            @endforeach
        </div>
        <div class="flex justify-stretch">
            <div class="flex flex-1 gap-3 flex-wrap px-4 py-3 justify-start">
                <button
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-[#3490f3] text-slate-50 text-sm font-bold leading-normal tracking-[0.015em]"
                >
                    <span class="truncate">Add to Cart</span>
                </button>
                <button
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-[#e7edf4] text-[#0d141c] text-sm font-bold leading-normal tracking-[0.015em]"
                >
                    <span class="truncate">Add to My Favorites</span>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection