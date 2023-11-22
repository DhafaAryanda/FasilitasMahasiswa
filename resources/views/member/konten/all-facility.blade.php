@extends('member.layouts.base')

@section('role', 'MAHASISWA')

@section('title', 'Prasarana')

@section('content')

  <div class=" py-10 px-5 flex items-center justify-center font-dmsans">
    <div class="container max-w-screen-lg mx-auto">
      <div x-data="alpineInit()" x-init="init()">
        <div class="flex mb-6 items-center">
          <div class="flex-auto">
            <h2 class="font-semibold text-xl text-blue-gray">Prasarana Universitas Syiah Kuala</h2>
            <p class="text-gray-500 text-sm">Temukan Fasilitas Sesuai kebutuhan anda</p>
          </div>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
          @foreach ($facilities as $facility)
            <a href="{{ route('member.konten.facility.detail', $facility->id) }}" class="card-link">
              <div
                class="relative flex flex-col text-gray-700 bg-white shadow-md lg:w-[180px] lg:h-[250px] xl:w-[230px] xl:h-[250px] rounded-[20px] bg-clip-border">
                <div
                  class="relative overflow-hidden text-white shadow-lg rounded-t-[20px] mb-[10px] h-[100px] md:h-[120px] lg:h-[150px] bg-blue-gray-500 bg-clip-border shadow-blue-gray-500/40">
                  <img src="{{ asset('storage/detail/' . $facility->image1_detail) }}" alt="img"
                    class="w-full h-full object-cover" />
                </div>
                <div class="mx-4 my-2">
                  <h5
                    class="block mb-[10px] font-poppins text-xs antialiased font-medium leading-snug tracking-normal text-blue-gray-900">
                    {{ $facility->title }}
                  </h5>
                  <div class="flex flex-row justify-between items-end">
                    <div class="flex flex-col">
                      <h6 class="text-xs font-poppins font-normal text-[#858584]">
                        Harga
                      </h6>
                      <h6 class="mt-1 text-xs tracking-tight font-poppins font-medium">
                        Rp. {{ number_format($facility->price_per_hour, 0, ',', '.') }}/hrs
                      </h6>
                    </div>
                    {{-- <div
                      class="flex justify-center items-center rounded-3xl w-20 h-8 bg-blue-500 text-center align-middle font-sans text-xs font-medium text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                      type="button" data-ripple-light="true">
                      Detail
                    </div> --}}
                  </div>
                </div>
              </div>
            </a>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection
