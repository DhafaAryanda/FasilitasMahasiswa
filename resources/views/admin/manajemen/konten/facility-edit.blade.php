@extends('admin.layouts.base')

@section('title', 'Fasilitas Gelanggang')

@section('content')

  <div x-data="{ showModal: false }">
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
          <h2 class="font-semibold text-xl text-blue-gray">Edit Fasilitas Gelanggang</h2>
          <p class="text-gray-500 mb-6 text-sm">Form untuk mengedit kontent</p>
          <!-- Form Start -->
          <form enctype="multipart/form-data" action="{{ route('admin.manajemen.konten.facility.update', $facility->id) }}"
            method="POST" id="facilityForm">
            @csrf
            @method('PUT')
            <section>
              <div class="bg-white rounded-lg border border-gray-200 shadow-md mb-3">
                <div>
                  <p class="mt-8 mx-10 font-bold">Informasi Fasilitas</p>
                </div>

                <div class="mt-4 mb-4 mx-10 ">
                  <div class="flex py-3 mx-2">
                    <div class="w-[250px] mt-5  font-semibold">
                      <p>Nama</p>
                      <p>Fasilitas</p>
                      <p class="font-normal text-xs mt-2 text-[#858584]">Masukkan nama fasilitas</p>
                    </div>

                    <div class="flex items-center">
                      <div class="flex w-[600px]">
                        <input type="text" name="title" id="title"
                          class="h-10 border mt-2 rounded px-4 w-full text-sm bg-gray-50"
                          value="{{ $facility->title }}" />
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
                          <option value="Lapangan Indoor"
                            {{ $facility->categories == 'Lapangan Indoor' ? 'selected' : '' }}>Lapangan Indoor</option>
                          <option value="Lapangan Outdoor"
                            {{ $facility->categories == 'Lapangan Outdoor' ? 'selected' : '' }}>Lapangan Outdoor</option>
                          <option value="Ruangan" {{ $facility->categories == 'Ruangan' ? 'selected' : '' }}>Ruangan
                          </option>
                          <option value="Prasarana" {{ $facility->categories == 'Prasarana' ? 'selected' : '' }}>Prasarana
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
                            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
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
                            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
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
                      class="text-sm h-64 w-[600px] border  mt-2 rounded-md  bg-gray-50 " placeholder="">{{ $facility->about }}</textarea>

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
                          placeholder="misal: 250000" value="{{ $facility->price_per_hour }}">
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
                          placeholder="misal: 2000000" value="{{ $facility->price_per_day }}">
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
                        <option value="0" {{ $facility->show == '0' ? 'selected' : '' }}>Sembunyikan</option>
                        <option value="1" {{ $facility->show == '1' ? 'selected' : '' }}>Tampilkan</option>
                      </select>
                      <p class="text-xs mt-2 text-[#858584]">Pilih kategori fasilitas</p>
                    </div>
                  </div>
                </div>

              </div>
            </section>

            <div class="md:col-span-5 text-right">
              <div class="flex items-end">
                <button @click="showModal = true" type="button" id="deleteButton"
                  class="bg-red-500 mx-2 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Hapus
                  Fasilitas</button>
                <div class="ml-auto">
                  <a href="{{ route('admin.manajemen.konten.facility') }}"
                    class="bg-gray-400 mx-2 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Kembali</a>
                  <button type="submit" name="action" value="update"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Perbarui</button>
                </div>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
    <div class="flex items-center justify-center h-screen">
      <div>
        {{-- <!-- Background overlay -->
        <div x-show="showModal" class="fixed inset-0 transition-opacity" aria-hidden="true"
          @click="showModal = false">
          <div class="absolute inset-0"></div>
        </div> --}}
        <!-- Modal -->
        <div x-show="showModal" x-transition:enter="transition ease-out duration-300 transform"
          x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
          x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
          x-transition:leave="transition ease-in duration-200 transform"
          x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
          x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
          class="fixed flex justify-center items-center top-0 left-0 w-full h-full z-50"
          style="background-color: rgba(0,0,0,0.5)" x-cloak>
          <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Modal panel -->
            <div
              class=" w-full inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
              role="dialog" aria-modal="true" aria-labelledby="modal-headline">
              <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <!-- Modal content -->
                <div class="sm:flex sm:items-start">
                  <div
                    class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                    <!-- Heroicon name: outline/exclamation -->
                    <svg width="64px" height="64px" class="h-6 w-6 text-red-600" stroke="currentColor"
                      fill="none" viewBox="0 0 24.00 24.00" xmlns="http://www.w3.org/2000/svg" stroke="#ef4444"
                      stroke-width="0.45600000000000007">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <path
                          d="M12 7.25C12.4142 7.25 12.75 7.58579 12.75 8V13C12.75 13.4142 12.4142 13.75 12 13.75C11.5858 13.75 11.25 13.4142 11.25 13V8C11.25 7.58579 11.5858 7.25 12 7.25Z"
                          fill="#ef4444"></path>
                        <path
                          d="M12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z"
                          fill="#ef4444"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M8.2944 4.47643C9.36631 3.11493 10.5018 2.25 12 2.25C13.4981 2.25 14.6336 3.11493 15.7056 4.47643C16.7598 5.81544 17.8769 7.79622 19.3063 10.3305L19.7418 11.1027C20.9234 13.1976 21.8566 14.8523 22.3468 16.1804C22.8478 17.5376 22.9668 18.7699 22.209 19.8569C21.4736 20.9118 20.2466 21.3434 18.6991 21.5471C17.1576 21.75 15.0845 21.75 12.4248 21.75H11.5752C8.91552 21.75 6.84239 21.75 5.30082 21.5471C3.75331 21.3434 2.52637 20.9118 1.79099 19.8569C1.03318 18.7699 1.15218 17.5376 1.65314 16.1804C2.14334 14.8523 3.07658 13.1977 4.25818 11.1027L4.69361 10.3307C6.123 7.79629 7.24019 5.81547 8.2944 4.47643ZM9.47297 5.40432C8.49896 6.64148 7.43704 8.51988 5.96495 11.1299L5.60129 11.7747C4.37507 13.9488 3.50368 15.4986 3.06034 16.6998C2.6227 17.8855 2.68338 18.5141 3.02148 18.9991C3.38202 19.5163 4.05873 19.8706 5.49659 20.0599C6.92858 20.2484 8.9026 20.25 11.6363 20.25H12.3636C15.0974 20.25 17.0714 20.2484 18.5034 20.0599C19.9412 19.8706 20.6179 19.5163 20.9785 18.9991C21.3166 18.5141 21.3773 17.8855 20.9396 16.6998C20.4963 15.4986 19.6249 13.9488 18.3987 11.7747L18.035 11.1299C16.5629 8.51987 15.501 6.64148 14.527 5.40431C13.562 4.17865 12.8126 3.75 12 3.75C11.1874 3.75 10.4379 4.17865 9.47297 5.40432Z"
                          fill="#ef4444"></path>
                      </g>
                    </svg>
                  </div>
                  <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline"> Delete Item </h3>
                    <div class="mt-2">
                      <p class="text-sm text-gray-500"> Apakah Anda yakin ingin menghapus <span
                          class="font-bold">Fasilitas ini</span>? Tindakan ini tidak dapat dibatalkan. </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                {{-- <a href="{{ route('admin.manajemen.konten.facility.destroy', $facility->id) }}">
                  <button @click="deleteItem" type="button"
                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-500 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                    Hapus </button>

                </a> --}}
                <form method="POST" action="{{ route('admin.manajemen.konten.facility.destroy', $facility->id) }}"
                  style="display: inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit"
                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-500 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                    Hapus
                  </button>
                </form>

                <button @click="showModal = false" type="button"
                  class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                  Batal </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- <script>
      document.getElementById('deleteButton').addEventListener('click', function() {
        if (confirm("Apakah Anda yakin ingin menghapus fasilitas ini?")) {
          var form = document.getElementById('facilityForm');
          var inputMethod = document.createElement('input');
          inputMethod.type = 'hidden';
          inputMethod.name = '_method';
          inputMethod.value = 'DELETE';
          form.appendChild(inputMethod);

          form.action = "{{ route('admin.manajemen.konten.facility.destroy', $facility->id) }}";
          form.submit();
        }
      });
    </script> --}}

  </div>

@endsection
