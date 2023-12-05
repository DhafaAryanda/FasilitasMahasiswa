@extends('member.layouts.base')

@section('title', 'Prasarana')

@section('content')

  <div class=" py-10 px-5 flex items-center justify-center font-dmsans">
    <div class="container max-w-screen-lg mx-auto">
      <div x-data="alpineInit()" x-init="init()">

        <a href="{{ route('member.konten.facility.all') }}"
          class=" flex ml-auto mr-5 mb-5 w-fit items-center gap-2 text-sm font-bold px-2 py-1 rounded-2xl text-blue-600 hover:text-blue-800">
          Lihat Semua >
        </a>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4 md:gap-2 lg:gap-0">
          @foreach ($facilities as $facility)
            <a href="{{ route('member.konten.facility.detail', $facility->id) }}" class="mx-auto px-5 my-2">
              <div
                class="max-w-xs cursor-pointer rounded-2xl bg-white p-2 shadow duration-150 hover:scale-105 hover:shadow-md">
                <img class="w-[300px] h-[200px] rounded-xl object-cover object-center"
                  src="{{ asset('storage/detail/' . $facility->image1_detail) }}" alt="img" />
                <div>
                  <div class="my-6 flex items-center justify-between px-4">
                    <p class="font-bold text-gray-500">{{ $facility->title }}</p>
                  </div>
                  <div class="my-3 flex items-center justify-between px-4">
                    <p class="text-sm font-semibold text-gray-500">Kategori</p>
                    <p class="rounded-full bg-gray-200 px-2 py-0.5 text-xs font-semibold text-gray-600">
                      {{ $facility->categories }}</p>
                  </div>
                  <div class="my-3 flex items-center justify-between px-4">
                    <p class="text-sm font-semibold text-gray-500">Harga</p>
                    <p class="rounded-full bg-blue-500 px-2 py-0.5 text-xs font-semibold text-white">
                      Rp. {{ number_format($facility->price_per_hour, 0, ',', '.') }} / jam</p>
                  </div>
                  {{-- <div class="mx-4 my-2 flex flex-row justify-between items-end">
                    <div class="flex flex-col">
                      <h6 class="text-xs font-poppins font-normal text-[#858584]">
                        Harga
                      </h6>
                      <h6 class="mt-1 text-xs tracking-tight font-poppins font-medium">
                        Rp. {{ number_format($facility->price_per_hour, 0, ',', '.') }}/hrs
                      </h6>
                    </div>
                    <div
                      class="flex justify-center items-center rounded-3xl w-20 h-8 bg-blue-500 text-center align-middle font-sans text-xs font-medium text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                      type="button" data-ripple-light="true">
                      Detail
                    </div>
                  </div> --}}
                </div>
              </div>
            </a>
          @endforeach
        </div>

        <div class="mt-4">
          {{ $facilities->links() }}
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection
