<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Login Page
    </title>
    <link href="/public/css/style.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
      @vite('resources/css/app.css')
  </head>

  <body>
    <div class="flex items-center min-h-screen bg-gray-50">
      <div
        class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl font-poppins"
      >
        <div class="flex flex-col md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img
              class="object-cover w-full h-full"
              src="https://source.unsplash.com/user/erondu/1600x900"
              alt="img"
            />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <div class="flex justify-center">
                <img
                  class="w-20 h-auto"
                  src="https://upload.wikimedia.org/wikipedia/en/c/c3/Unsyiah-logo.svg"
                  alt="img"
                />
              </div>
              <h1
                class="mb-4 text-3xl font-semibold text-center text-gray-700"
              >
                Login Fasilitas USK
              </h1>
              <h5
                class="mb-16 text-sm font-medium text-[#209AFB] text-center"
              >
                Gunakan akun KRS Online atau Simpeg
              </h5>

              @if ($errors->any())
              <div class="mb-4" role="alert">
                <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                  Danger
                </div>
                <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                  <ul>
                    @foreach($errors->all() as $errors)
                      <li>{{ $errors }}</li>
                    @endforeach
                  </ul>
                </div>
              </div>
              @endif
              <form action="{{ route('admin.login.auth') }}" method="POST">
                @csrf
                <div>
                  <label
                    class="block text-sm after:content-['*'] after:text-red-500 after:-ml-0.5"
                  >
                    NPM/NIP
                  </label>
                  <input
                    class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                    placeholder="" name="nim" value="{{ old('nim') }}" 
                  />
                </div>
                <div>
                  <label
                    class="block mt-7 text-sm after:content-['*'] after:text-red-500 after:-ml-0.5"
                  >
                    Password
                  </label>
                  <input
                    class="w-full mb-8 px-4 py-2 text-sm  border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                    placeholder="" name="password"
                    type="password"
                  />
                </div>
                <button
                  class="block w-full px-4 py-2 mt-4 text-sm font-bold leading-5 text-center text-white transition-colors duration-150 bg-gradient-to-br from-[#F3C158] to-[#E59934] rounded-lg hover:from-[#EBB33D] hover:to-[#EA8B0D] active:from-[#EBB33D] active:to-[#C0730C]"
                  href="#"
                >
                  Login
                </button>
              </form>
              <hr class="my-8" />
              <p class="mb-3 text-xs text-slate-500">
                Bukan Mahasiswa USK?
              </p>

              <div class="items-center justify-center gap-4">
                <button
                  class="block w-full items-center justify-center font-bold px-4 py-2 text-sm bg-[#209AFB] text-white border border-gray-300 rounded-lg hover:border-gray-500 focus:border-gray-500"
                >
                  Login Pengguna Umum
                </button>
              </div>

              <div
                class="mt-14 flex justify-between font-bold text-xs text-slate-400"
              >
                <div>© 2023 FASILITAS USK</div>
                <div>Contact</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
