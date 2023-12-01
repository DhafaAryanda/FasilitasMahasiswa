@extends('admin.layouts.base')

@section('title', 'Fasilitas Gelanggang')

@section('content')

  <div class=" m-10 flex items-center justify-center font-dmsans">
    <div class="container max-w-screen-lg mx-auto">
      @if ($errors->any())
        <div class="mb-4" role="alert">
          <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
            Danger
          </div>
          <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
            <ul>
              @foreach ($errors->all() as $errors)
                <li>{{ $errors }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      @endif
      <div>
        <h2 class="font-semibold text-xl text-blue-gray">Tambah Fasilitas Gelanggang</h2>
        <p class="text-gray-500 mb-6 text-sm">Form untuk menambahkan kontent</p>
        <!-- Form Start -->
        <form enctype="multipart/form-data" action="{{ route('admin.manajemen.konten.facility.store') }}" method="POST">
          @csrf
          <section>
            <div class="bg-white rounded-lg border border-gray-200 shadow-md mb-3">
              <div>
                <p class="mt-8 mx-10 font-bold">Informasi Fasilitas</p>
              </div>

              <div class="mt-4 mb-4 mx-10 ">
                <div class="flex py-3 mx-2">
                  <div class="w-[250px] mt-5  font-semibold">
                    <p>Nama</p>
                    <p>Prasarana</p>
                    <p class="font-normal text-xs mt-2 text-[#858584]">Masukkan nama fasilitas</p>
                  </div>

                  <div class="flex items-center">
                    <div class="flex w-[600px]">
                      <input type="text" name="title" id="title"
                        class="h-10 border mt-2 rounded px-4 w-full text-sm bg-gray-50" value="{{ old('title') }}" />
                    </div>
                  </div>
                </div>
                <div class="flex py-3 mx-2">
                  <div class="w-[250px] mt-5  font-semibold">
                    <p>Kategori</p>
                    <p class="font-normal text-xs mt-2 text-[#858584]">Pilih kategori fasilitas</p>
                  </div>

                  <div class="flex items-center">
                    <div class="flex w-[600px]">
                      <select type="text" name="categories" id="categories"
                        class="h-10 border mt-2 rounded px-4 w-full bg-gray-50 text-sm">
                        <option value="" disabled selected>Pilih kategori</option>
                        <option value="Lapangan Indoor" {{ old('categories') == 'Lapangan Indoor' ? 'selected' : '' }}>
                          Lapangan Indoor</option>
                        <option value="Lapangan Outdoor" {{ old('categories') == 'Lapangan Outdoor' ? 'selected' : '' }}>
                          Lapangan Outdoor</option>
                        <option value="Ruangan" {{ old('categories') == 'Ruangan' ? 'selected' : '' }}>Ruangan</option>
                        <option value="Prasarana" {{ old('categories') == 'Prasarana' ? 'selected' : '' }}>Prasarana
                        </option>
                      </select>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </section>

          <section>
            <div class="bg-white rounded-lg border border-gray-200 shadow-md mb-3">
              <div>
                <p class="mt-8 mx-10 font-bold">Detail Fasilitas</p>
              </div>
              <div class="mt-4 mb-4 mx-10 ">
                <div class="flex py-6 mx-2">
                  <div class="mt-5 w-[240px] font-semibold">
                    <p>Foto</p>
                    <p>Fasilitas</p>
                    <p class="font-normal text-xs mt-2 text-[#858584]">Unggah Foto Fasilitas</p>
                  </div>

                  <div class="grid grid-cols-4 gap-3">
                    <div class="items-center justify-center w-full">
                      <label for="image1_detail"
                        class="flex flex-col items-center justify-center w-36 h-36 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-white hover:bg-gray-50">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6 gap-2">
                          <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M13 4H8.8C7.11984 4 6.27976 4 5.63803 4.32698C5.07354 4.6146 4.6146 5.07354 4.32698 5.63803C4 6.27976 4 7.11984 4 8.8V15.2C4 16.8802 4 17.7202 4.32698 18.362C4.6146 18.9265 5.07354 19.3854 5.63803 19.673C6.27976 20 7.11984 20 8.8 20H15.2C16.8802 20 17.7202 20 18.362 19.673C18.9265 19.3854 19.3854 18.9265 19.673 18.362C20 17.7202 20 16.8802 20 15.2V11"
                              stroke="#6b7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                              d="M4 16L8.29289 11.7071C8.68342 11.3166 9.31658 11.3166 9.70711 11.7071L13 15M13 15L15.7929 12.2071C16.1834 11.8166 16.8166 11.8166 17.2071 12.2071L20 15M13 15L15.25 17.25"
                              stroke="#6b7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M18.5 3V5.5M18.5 8V5.5M18.5 5.5H16M18.5 5.5H21" stroke="#6b7280" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                          <img id="selected-image-1" src="" alt="" class="w-full h-full hidden">
                          <p id="image-text-1" class="mb-2 text-base text-gray-500">Foto Utama</p>
                        </div>
                        <input id="image1_detail" name="image1_detail" type="file" class="hidden" accept="image/*">
                      </label>
                    </div>
                    <div class=" items-center justify-center w-full">
                      <label for="image2_detail"
                        class="flex flex-col items-center justify-center w-36 h-36 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-white hover:bg-gray-50">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6 gap-2">
                          <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M13 4H8.8C7.11984 4 6.27976 4 5.63803 4.32698C5.07354 4.6146 4.6146 5.07354 4.32698 5.63803C4 6.27976 4 7.11984 4 8.8V15.2C4 16.8802 4 17.7202 4.32698 18.362C4.6146 18.9265 5.07354 19.3854 5.63803 19.673C6.27976 20 7.11984 20 8.8 20H15.2C16.8802 20 17.7202 20 18.362 19.673C18.9265 19.3854 19.3854 18.9265 19.673 18.362C20 17.7202 20 16.8802 20 15.2V11"
                              stroke="#6b7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                              d="M4 16L8.29289 11.7071C8.68342 11.3166 9.31658 11.3166 9.70711 11.7071L13 15M13 15L15.7929 12.2071C16.1834 11.8166 16.8166 11.8166 17.2071 12.2071L20 15M13 15L15.25 17.25"
                              stroke="#6b7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M18.5 3V5.5M18.5 8V5.5M18.5 5.5H16M18.5 5.5H21" stroke="#6b7280" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                          <img id="selected-image-2" src="" alt="" class="w-full h-full hidden">
                          <p id="image-text-2" class="mb-2 text-base text-gray-500">Foto 2</p>
                        </div>
                        <input id="image2_detail" name="image2_detail" type="file" class="hidden"
                          accept="image/*">
                      </label>
                    </div>
                    <div class=" items-center justify-center w-full">
                      <label for="image3_detail"
                        class="flex flex-col items-center justify-center w-36 h-36 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-white hover:bg-gray-50">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6 gap-2">
                          <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M13 4H8.8C7.11984 4 6.27976 4 5.63803 4.32698C5.07354 4.6146 4.6146 5.07354 4.32698 5.63803C4 6.27976 4 7.11984 4 8.8V15.2C4 16.8802 4 17.7202 4.32698 18.362C4.6146 18.9265 5.07354 19.3854 5.63803 19.673C6.27976 20 7.11984 20 8.8 20H15.2C16.8802 20 17.7202 20 18.362 19.673C18.9265 19.3854 19.3854 18.9265 19.673 18.362C20 17.7202 20 16.8802 20 15.2V11"
                              stroke="#6b7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                              d="M4 16L8.29289 11.7071C8.68342 11.3166 9.31658 11.3166 9.70711 11.7071L13 15M13 15L15.7929 12.2071C16.1834 11.8166 16.8166 11.8166 17.2071 12.2071L20 15M13 15L15.25 17.25"
                              stroke="#6b7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M18.5 3V5.5M18.5 8V5.5M18.5 5.5H16M18.5 5.5H21" stroke="#6b7280" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                          <img id="selected-image-3" src="" alt="" class="w-full h-full hidden">
                          <p id="image-text-3" class="mb-2 text-base text-gray-500">Foto 3</p>
                        </div>
                        <input id="image3_detail" name="image3_detail" type="file" class="hidden"
                          accept="image/*">
                      </label>
                    </div>
                    <div class="items-center justify-center w-full">
                      <label for="image4_detail"
                        class="flex flex-col items-center justify-center w-36 h-36 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-white hover:bg-gray-50">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6 gap-2">
                          <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M13 4H8.8C7.11984 4 6.27976 4 5.63803 4.32698C5.07354 4.6146 4.6146 5.07354 4.32698 5.63803C4 6.27976 4 7.11984 4 8.8V15.2C4 16.8802 4 17.7202 4.32698 18.362C4.6146 18.9265 5.07354 19.3854 5.63803 19.673C6.27976 20 7.11984 20 8.8 20H15.2C16.8802 20 17.7202 20 18.362 19.673C18.9265 19.3854 19.3854 18.9265 19.673 18.362C20 17.7202 20 16.8802 20 15.2V11"
                              stroke="#6b7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                              d="M4 16L8.29289 11.7071C8.68342 11.3166 9.31658 11.3166 9.70711 11.7071L13 15M13 15L15.7929 12.2071C16.1834 11.8166 16.8166 11.8166 17.2071 12.2071L20 15M13 15L15.25 17.25"
                              stroke="#6b7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M18.5 3V5.5M18.5 8V5.5M18.5 5.5H16M18.5 5.5H21" stroke="#6b7280" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                          <img id="selected-image-4" src="" alt="" class="w-full h-full hidden">
                          <p id="image-text-4" class="mb-2 text-base text-gray-500">Foto 4</p>
                        </div>
                        <input id="image4_detail" name="image4_detail" type="file" class="hidden"
                          accept="image/*">
                      </label>
                    </div>
                  </div>
                </div>

                <div class="flex py-6 mx-2">
                  <div class="mt-5 w-[250px] font-semibold">
                    <p>Deskripsi</p>
                    <p>Fasilitas</p>
                    <p class="font-normal text-xs mt-2 text-[#858584]">Tuliskan deskripsi fasilitas</p>
                  </div>
                  <textarea type="text" name="about" id="about"
                    class="text-sm h-64 w-[600px] border  mt-2 rounded-md  bg-gray-50 " placeholder="">{{ old('about') }}</textarea>

                </div>


              </div>

            </div>
          </section>

          <section>
            <div class="bg-white rounded-lg border border-gray-200 shadow-md mb-3">
              <div>
                <p class="mt-8 mx-10 font-bold">Harga Sewa</p>
              </div>
              <div class="mt-4 mb-4 mx-10 ">
                <div class="flex py-3 mx-2">
                  <div class="w-[250px] mt-5  font-semibold">
                    <p>Harga</p>
                    <p>Per Jam</p>
                    <p class="font-normal text-xs mt-2 text-[#858584]">Masukkan harga sewa 1 jam</p>
                  </div>

                  <div class="flex items-center">
                    <div class="flex w-[600px]">
                      <span
                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                        <div class="text-gray-500 font-bold">
                          Rp
                        </div>
                      </span>
                      <input type="text" id="price_per_hour" name="price_per_hour"
                        class="rounded-none rounded-r-md bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 "
                        placeholder="misal: 250000" value="{{ old('price_per_hour') }}">
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-4 mb-4 mx-10 ">
                <div class="flex py-3 mx-2">
                  <div class="w-[250px] mt-5  font-semibold">
                    <p>Harga</p>
                    <p>Per Hari</p>
                    <p class="font-normal text-xs mt-2 text-[#858584]">Masukkan harga sewa 1 Hari &#40;7 jam&#41;</p>
                  </div>

                  <div class="flex items-center">
                    <div class="flex w-[600px]">
                      <span
                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                        <div class="text-gray-500 font-bold">
                          Rp
                        </div>
                      </span>
                      <input type="text" id="price_per_day" name="price_per_day"
                        class="rounded-none rounded-r-md bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 "
                        placeholder="misal: 2000000" value="{{ old('price_per_day') }}">
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </section>

          <section>
            <div class="bg-white rounded-lg border border-gray-200 shadow-md mb-3">
              <div>
                <p class="mt-8 mx-10 font-bold">Pengelolaan Fasilitas</p>
              </div>
              <div class="lg:col-span-2 mt-8 mb-4 mx-10 ">
                <div class="grid gap-4 gap-y-3 text-sm grid-cols-1 md:grid-cols-5">
                  <div class="md:col-span-2 mb-5">
                    <label for="show" class="font-medium after:content-['*'] after:text-red-500">Tampilkan</label>
                    <select type="text" name="show" id="show"
                      class="h-10 border mt-2 rounded px-4 w-full bg-gray-50">
                      <option value="" disabled selected>Pilih tampilkan/sembunyikan konten</option>
                      <option value="0" {{ old('show') == '0' ? 'selected' : '' }}>Sembunyikan</option>
                      <option value="1" {{ old('show') == '1' ? 'selected' : '' }}>Tampilkan</option>
                    </select>
                    <p class="text-xs mt-2 text-[#858584]">Pilih kategori fasilitas</p>
                  </div>
                </div>
              </div>

            </div>
          </section>

          <div class="md:col-span-5 text-right">
            <div class="inline-flex items-end">
              <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>

  {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const imageInputs = document.querySelectorAll('input[type="file"]');

      imageInputs.forEach((input, index) => {
        input.addEventListener('change', (event) => {
          const selectedImage = document.getElementById(`selected-image-${index + 1}`);
          const imageText = document.getElementById(`image-text-${index + 1}`);
          const label = input.closest('label');
          const svgIcon = label.querySelector('svg');

          if (event.target.files.length > 0) {
            const file = event.target.files[0];
            const objectURL = URL.createObjectURL(file);
            selectedImage.src = objectURL;
            selectedImage.classList.remove('hidden');
            imageText.classList.add('hidden');
            svgIcon.classList.add('hidden');
            label.style.border = '1px solid #d1d5db';
          } else {
            selectedImage.src = '';
            selectedImage.classList.add('hidden');
            imageText.classList.remove('hidden');
            svgIcon.classList.remove('hidden');
            label.style.border = '2px dashed #d1d5db';
          }
        });
      });
    });
  </script>

@endsection
