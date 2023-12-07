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
      rel="stylesheet" />
    @vite('resources/css/app.css')
  </head>

  <body>
    <div class="flex items-center min-h-screen bg-gray-100">
      <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl font-poppins">
        <div class="flex flex-col md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img class="object-cover w-full h-full" src="{{ '/storage/assets/images/login-image.jpg' }}"
              alt="img" />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <div class="flex justify-center">
                <img class="w-20 h-auto" src="https://upload.wikimedia.org/wikipedia/en/c/c3/Unsyiah-logo.svg"
                  alt="img" />
              </div>
              <h1 class="mb-4 text-3xl font-semibold text-center text-gray-700">
                Fasilitas USK
              </h1>
              <h5 class="my-5 text-sm font-semibold text-[#209AFB] text-left">
                Login Akun Member
              </h5>
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif

              <form action="{{ route('member.login.auth') }}" method="POST">
                @csrf

                <div class="my-3">
                  <label class="block text-sm after:content-['*'] after:text-red-500 after:-ml-0.5">
                    Email
                  </label>
                  <input type="email"
                    class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                    placeholder="Masukkan Alamat Email" name="email" value="{{ old('email') }}" />
                  @error('email')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                  @enderror
                </div>
                <div class="my-3">
                  <label class="block text-sm after:content-['*'] after:text-red-500 after:-ml-0.5">
                    Password
                  </label>
                  <input
                    class="w-full px-4 py-2 text-sm  border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                    placeholder="Masukkan Kata Sandi" type="password" name="password" />
                  @error('password')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                  @enderror
                </div>
                @error('credentials')
                  <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror

                <button
                  class="block w-full items-center justify-center font-bold px-4 py-2 text-sm bg-[#209AFB] text-white border border-gray-300 rounded-lg hover:border-gray-500 focus:border-gray-500">
                  Login
                </button>
              </form>
              <hr class="my-8" />
              <div class="mt-14 flex justify-between font-bold text-xs text-slate-400">
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
