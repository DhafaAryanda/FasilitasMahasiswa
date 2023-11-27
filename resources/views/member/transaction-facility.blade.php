@extends('member.layouts.base')

@section('role', 'MAHASISWA')

@section('title', 'Fasilitas Gelanggang')

@section('content')

  {{-- transaction-facility --}}

  <div class="p-5 lg:p-10 flex items-center justify-center font-dmsans">
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
        <h2 class="font-semibold text-xl text-slate-700 mb-6">Sewa Fasilitas</h2>
        <!-- Form Start -->
        <form class="mb-20" action="{{ route('member.transaction.store', ['id' => $facility->id]) }}" method="POST"
          enctype="multipart/form-data">
          @csrf
          <section>
            <div class="bg-white rounded-lg border border-gray-200 shadow-md mb-5">
              <div class="items-center mb-3">
                <p class=" mx-10 mt-3 mb-2  font-bold">Form Sewa Fasilitas</p>
                <hr>
              </div>
              <div class="flex flex-col md:flex-row mb-5">

                <div class="flex-1 mx-10 md:mx-3 lg:mx-5">

                  <div class="mt-4 mb-4 md:mx-1 lg:mx-5 text-sm">
                    <div class="sm:col-span-3 md:col-span-5 mb-5">
                      <h4 for="title" class="font-medium ">Prasarana</h4>
                      <h4 class="flex items-center text-gray-500 bg-gray-50 h-10 border mt-2 rounded px-4 w-full">
                        {{ $facility->title }}
                      </h4>
                      <p class="text-xs mt-2 text-[#858584]">Nama prasarana yang dipilih</p>
                    </div>
                    <div class="sm:col-span-3 md:col-span-5 mb-5">
                      <h4 for="title" class="font-medium ">Nama Pemohon</h4>
                      <h4 class="flex items-center text-gray-500 bg-gray-50 h-10 border mt-2 rounded px-4 w-full">
                        {{ $user->name }}
                      </h4>
                      <p class="text-xs mt-2 text-[#858584]">Nama pemohon penyewa fasilitas</p>
                    </div>
                    <div class="sm:col-span-3 md:col-span-5 mb-5">
                      <label for="phone_number" class="font-medium after:content-['*'] after:text-red-500 ">Nomor
                        Telepon</label>
                      <input type="text" name="phone_number" id="phone_number"
                        class="h-10 border mt-2 rounded px-4 w-full bg-gray-50" />
                      <p class="text-xs mt-2 text-[#858584]">Tuliskan Nomor Telepon yang menggunakan Whatsapp</p>
                    </div>
                    <div class="sm:col-span-3 md:col-span-5 mb-5">
                      <label for="description" class="font-medium after:content-['*'] after:text-red-500 ">Deskripsi
                        Kegiatan</label>
                      <textarea type="text" name="description" id="description" class="h-24 border mt-2 rounded px-4 w-full bg-gray-50"
                        placeholder=""></textarea>
                      <p class="text-xs mt-2 text-[#858584]">Tuliskan keperluan Nomor Telepon yang menggunakan Whatsapp
                      </p>
                    </div>
                  </div>
                </div>
                <div class="flex-1 mx-10 md:mx-3 lg:mx-5">

                  <div class="mt-4 mb-4 md:mx-1 lg:mx-5 text-sm">
                    <div class="sm:col-span-3 md:col-span-5 mb-5">
                      <label for="activity_name" class="font-medium after:content-['*'] after:text-red-500 ">Nama
                        Kegiatan</label>
                      <input type="text" name="activity_name" id="activity_name"
                        class="h-10 border mt-2 rounded px-4 w-full bg-gray-50" />
                      <p class="text-xs mt-2 text-[#858584]">Tuliskan nama kegiatan atau acara</p>
                    </div>
                    <div class="sm:col-span-3 md:col-span-5 mb-5">
                      <label for="dateandtimepicker1" class="font-medium after:content-['*'] after:text-red-500 ">Jadwal
                        Kegiatan Berlangsung</label>
                      <input id="dateandtimepicker1" type="text" name="schedule_start" id="schedule_start"
                        class="h-10 border mt-2 rounded px-4 w-full bg-gray-50" readonly />
                      <p class="text-xs mt-2 text-[#858584]">Pilih jadwal kegiatan berlangsung</p>
                    </div>
                    <div class="sm:col-span-3 md:col-span-5 mb-5">
                      <label for="duration_hours" class="font-medium after:content-['*'] after:text-red-500 ">Durasi
                        Kegiatan</label>
                      <input type="text" name="duration_hours" id="duration_hours"
                        class="h-10 border mt-2 rounded px-4 w-full bg-gray-50" />
                      <p class="text-xs mt-2 text-[#858584]">Tuliskan durasi kegiatan dalam jam</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <div class="flex justify-end mx-10">
            <a href="{{ route('member.dashboard') }}"
              class="bg-gray-400 mx-2 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded-lg">Kembali</a>
            <button type="submit" name="action" value="update"
              class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg">Berikutnya</button>
          </div>

        </form>

      </div>
    </div>
  </div>


@endsection

<script>
  const MONTH_NAMES = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];
  const MONTH_SHORT_NAMES = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec",
  ];
  const DAYS = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];


  function dateandtimepicker1() {
    return {
      showDatepicker: false,
      selectedDate: "2023-11-16",
      dateFormat: "DD-MM-YYYY",
      month: "",
      year: "",
      no_of_days: [],
      blankdays: [],
      initDate() {
        let today;
        if (this.selectedDate) {
          today = new Date(Date.parse(this.selectedDate));
        } else {
          today = new Date();
        }
        this.month = today.getMonth();
        this.year = today.getFullYear();
        this.datepickerValue = this.formatDateForDisplay(
          today
        );
      },
      formatDateForDisplay(date) {
        let formattedDay = DAYS[date.getDay()];
        let formattedDate = ("0" + date.getDate()).slice(
          -2
        ); // appends 0 (zero) in single digit date
        let formattedMonth = MONTH_NAMES[date.getMonth()];
        let formattedMonthShortName =
          MONTH_SHORT_NAMES[date.getMonth()];
        let formattedMonthInNumber = (
          "0" +
          (parseInt(date.getMonth()) + 1)
        ).slice(-2);
        let formattedYear = date.getFullYear();
        if (this.dateFormat === "DD-MM-YYYY") {
          return `${formattedDate}-${formattedMonthInNumber}-${formattedYear}`; // 02-04-2021
        }
        if (this.dateFormat === "YYYY-MM-DD") {
          return `${formattedYear}-${formattedMonthInNumber}-${formattedDate}`; // 2021-04-02
        }
        if (this.dateFormat === "D d M, Y") {
          return `${formattedDay} ${formattedDate} ${formattedMonthShortName} ${formattedYear}`; // Tue 02 Mar 2021
        }
        return `${formattedDay} ${formattedDate} ${formattedMonth} ${formattedYear}`;
      },
      isSelectedDate(date) {
        const d = new Date(this.year, this.month, date);
        return this.datepickerValue ===
          this.formatDateForDisplay(d) ?
          true :
          false;
      },
      isToday(date) {
        const today = new Date();
        const d = new Date(this.year, this.month, date);
        return today.toDateString() === d.toDateString() ?
          true :
          false;
      },
      getDateValue(date) {
        let selectedDate = new Date(
          this.year,
          this.month,
          date
        );
        this.datepickerValue = this.formatDateForDisplay(
          selectedDate
        );
        // this.$refs.date.value = selectedDate.getFullYear() + "-" + ('0' + formattedMonthInNumber).slice(-2) + "-" + ('0' + selectedDate.getDate()).slice(-2);
        this.isSelectedDate(date);
        this.showDatepicker = false;
      },
      getTimeValue(selectedTime) {
        // Mendapatkan tanggal yang telah dipilih
        let selectedDate = new Date(this.year, this.month, this.datepickerValue.split('-')[0]);

        // Mendapatkan jam yang dipilih
        let selectedHours = parseInt(selectedTime.split(':')[0]);
        let selectedMinutes = parseInt(selectedTime.split(':')[1]);

        // Mengatur waktu pada tanggal yang telah dipilih
        selectedDate.setHours(selectedHours);
        selectedDate.setMinutes(selectedMinutes);

        // Menyimpan nilai datetime yang telah dibuat
        let formattedDateTime = this.formatDateForDisplay(selectedDate);

        // Menampilkan nilai datetime yang telah dibuat
        console.log("Selected Datetime:", formattedDateTime);
      },
      getNoOfDays() {
        let daysInMonth = new Date(
          this.year,
          this.month + 1,
          0
        ).getDate();
        // find where to start calendar day of week
        let dayOfWeek = new Date(
          this.year,
          this.month
        ).getDay();
        let blankdaysArray = [];
        for (var i = 1; i <= dayOfWeek; i++) {
          blankdaysArray.push(i);
        }
        let daysArray = [];
        for (var i = 1; i <= daysInMonth; i++) {
          daysArray.push(i);
        }
        this.blankdays = blankdaysArray;
        this.no_of_days = daysArray;
      },
    };
  }
</script>
