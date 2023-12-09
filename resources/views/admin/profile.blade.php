@extends('admin.layouts.base')

@section('title', 'Profile')

@section('content')
  <div x-data="{ showDetail: false }" class="m-10 flex items-center justify-center font-dmsans relative">
    <div class="container max-w-screen-lg mx-auto">
      <div class="flex flex-col sm:flex-row gap-3">
        <section>
          <div class="w-full sm:w-64 h-full bg-white rounded-lg border border-gray-200 shadow-md mb-3">
            <div class="my-3 mx-10 font-bold">
              Menu Profile
            </div>
            <hr>

            <div class="flex flex-col gap-4 mt-4 mb-4 items-center ">
              <a href="#biodata"
                class="flex grow gap-4 text-gray-500 hover:bg-blue-sky-1 w-48 hover:text-blue-primary py-3 px-4 rounded-lg font-medium"
                id="biodataLink">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                  stroke="none">
                  <path path path
                    d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                    opacity="0.3"></path>
                  <path path
                    d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z">
                  </path>
                </svg>
                Biodata
              </a>
            </div>
          </div>
        </section>
        <section class="grow" id="biodataSection">
          <div class=" h-full bg-white rounded-lg border border-gray-200 shadow-md mb-3 font-medium">
            <div class="my-3 mx-10 font-bold">
              Biodata
            </div>
            <hr>

            <div class="flex flex-col gap-4 my-6 ">
              <div class="flex items-center mx-10 gap-14">
                <div class="w-20">
                  Nama
                </div>
                <div>
                  {{ $user->name }}
                </div>
              </div>
              <div class="flex items-center mx-10 gap-14">
                <div class="w-20">
                  Nim
                </div>
                <div>
                  {{ $user->nim }}
                </div>
              </div>
              <div class="flex items-center mx-10 gap-14">
                <div class="w-20">
                  Role
                </div>
                <div>
                  {{ $user->role }}
                </div>
              </div>
            </div>

          </div>
        </section>
      </div>
    </div>
  </div>

  <script>
    // Function to set the "active" class for the initial state
    function setInitialActiveState() {
      document.getElementById('biodataLink').classList.add('active', 'bg-blue-sky-1', 'text-blue-primary');
    }

    // Call the function when the page loads
    window.addEventListener('load', setInitialActiveState);
    // Function to toggle sections and set the active class
    function toggleSections(activeSection, inactiveSection, activeLink, inactiveLink) {
      document.getElementById(activeSection).classList.remove('hidden');
      document.getElementById(inactiveSection).classList.add('hidden');
      document.getElementById(activeLink).classList.add('active', 'bg-blue-sky-1', 'text-blue-primary');
      document.getElementById(inactiveLink).classList.remove('active', 'bg-blue-sky-1', 'text-blue-primary');
    }

    // Add event listeners to the navigation links
    document.getElementById('biodataLink').addEventListener('click', function() {
      toggleSections('biodataSection', 'riwayatSection', 'biodataLink', 'riwayatLink');
    });
  </script>

  <style>
    [x-cloak] {
      display: none;
    }

    /* .duration-300 {
                                                        transition-duration: 300ms;
                                                      } */

    .ease-in {
      transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
    }

    .ease-out {
      transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
    }

    .scale-90 {
      transform: scale(.9);
    }

    .scale-100 {
      transform: scale(1);
    }
  </style>



@endsection
