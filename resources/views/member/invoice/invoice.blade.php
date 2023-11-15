<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="style.css">
    @vite('resources/css/app.css')
  </head>

  <body>

    <div class = "invoice-wrapper" id = "print-area">
      <div class = "invoice">
        <div class = "invoice-container">
          <div class = "invoice-head">
            <div class="invoice-head-top" style="text-align: center; overflow: hidden;">
              <div class="invoice-head-top-left" style="float: left; text-align: left;">
                <img src="{{ $image }}" style="max-width: 100%; height: auto;">
              </div>
              <div class="invoice-head-top-right" style="float: right; text-align: right;">
                <h3 style="">Bukti Transaksi</h3>
              </div>
            </div>

            <div class="hr" style="clear: both;"></div>
            <div class="invoice-head-middle">
              <div class="invoice-head-middle-left" style="float: left; text-align: left;">
                <p><span class="text-bold">Tanggal</span>: 05/12/2020</p>
              </div>
              <div class="invoice-head-middle-right" style="float: right; text-align: right;">
                <p><span class="text-bold">No Transaksi: </span>16789</p>
              </div>
            </div>
            <div class="hr" style="clear: both;"></div>


            <div class="invoice-head-bottom">
              <div class="invoice-head-bottom-left" style="float: left; width: 50%;">
                <ul class="text-start">
                  <li>Dhafa Aryanda</li>
                  <li>Mahasiswa</li>
                  <li>0823885170232</li>
                  <li>dhafa@gmail.com</li>
                </ul>
              </div>
              <div class="invoice-head-bottom-right" style="float: right; width: 50%;">
                <ul class="text-end">
                  <li>Biro Kemahasiswaan dan Alumni USK</li>
                  <li>Universitas Syiah Kuala, Kota Banda Aceh, Aceh</li>
                  <li>+62 123-456-7890</li>
                  <li>kemahasiswaan@usk.ac.id</li>
                </ul>
              </div>
            </div>
          </div>
          <div class = "overflow-view">
            <div class = "invoice-body">
              <table>
                <thead>
                  <tr>
                    <td class = "text-bold">Fasilitas</td>
                    <td class = "text-bold">Nama Kegiatan</td>
                    <td class = "text-bold">Jadwal Kegiatan</td>
                    <td class = "text-bold">Durasi</td>
                    <td class = "text-bold">Jadwal Selesai</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Ruang Seminar Gelannggang</td>
                    <td>Sidang Seminar Proposal</td>
                    <td>2023-11-07 23:00:00</td>
                    <td>3 Jam</td>
                    <td class = "text-end">2023-11-08 02:00:00</td>
                  </tr>

                </tbody>
              </table>
              <div class = "invoice-body-bottom">
                <div class = "invoice-body-info-item border-bottom">
                  <div class = "info-item-td text-end text-bold">Sub Total:</div>
                  <div class = "info-item-td text-end">300.000 x 3</div>
                </div>
                <div class = "invoice-body-info-item">
                  <div class = "info-item-td text-end text-bold">Total:</div>
                  <div class = "info-item-td text-end">900.000</div>
                </div>
              </div>
            </div>
          </div>
          <div class = "invoice-foot text-center">
            <p><span class = "text-bold text-center">Catatan:&nbsp;</span>Ini adalah tanda terima yang dibuat komputer
              dan tidak memerlukan tanda tangan fisik.</p>

          </div>
        </div>
      </div>
    </div>
  </body>

</html>

<style>
  *,
  *::after,
  *::before {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }

  :root {
    --blue-color: #0c2f54;
    --dark-color: #535b61;
    --white-color: #fff;
  }

  body {
    height: 100%;
    width: 100%;
    margin: 0;
    padding: 0;
  }

  ul {
    list-style-type: none;
  }

  ul li {
    margin: 2px 0;
  }

  /* text colors */
  .text-dark {
    color: var(--dark-color);
  }

  .text-blue {
    color: var(--blue-color);
  }

  .text-end {
    text-align: right;
    text-align
  }

  .text-center {
    text-align: center;
  }

  .text-start {
    text-align: left;
  }

  .text-semibold {
    font-weight: 600;
  }

  .text-bold {
    font-weight: 700;
  }

  /* hr line */
  .hr {
    height: 1px;
    background-color: rgba(0, 0, 0, 0.1);
  }

  /* border-bottom */
  .border-bottom {
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  }

  body {
    font-family: 'Inter', sans-serif;
    color: var(--dark-color);
    font-size: 14px;
  }

  .invoice-wrapper {
    min-height: 100vh;
    /* background-color: rgba(0, 0, 0, 0.1); */
    padding-top: 20px;
    padding-bottom: 20px;
  }

  .invoice {
    max-width: 850px;
    margin-right: auto;
    margin-left: auto;
    background-color: var(--white-color);
    padding: 70px;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 5px;
    min-height: 920px;
  }

  .invoice-head-top-left img {
    width: 130px;

  }

  .invoice-head-top-right h3 {
    font-weight: 500;
    font-size: 27px;
    color: var(--blue-color);
  }

  .invoice-head-middle,
  .invoice-head-bottom {
    /* padding: 16px 0; */
    margin-top: 15px;
    margin-bottom: 15px;
  }

  .invoice-body {
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 4px;
    margin-top: 15px;
    margin-bottom: 15px;
    clear: both;
  }

  .invoice-body table {
    border-collapse: collapse;
    border-radius: 4px;
    width: 100%;
  }

  .invoice-body table td,
  .invoice-body table th {
    padding: 12px;
  }

  .invoice-body table tr {
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  }

  .invoice-body table thead {
    background-color: rgba(0, 0, 0, 0.02);
  }

  .invoice-body-info-item {
    display: grid;
    grid-template-columns: 80% 20%;
  }

  .invoice-body-info-item .info-item-td {
    padding: 12px;
    background-color: rgba(0, 0, 0, 0.02);
  }

  .invoice-foot {
    padding: 30px 0;
  }

  .invoice-foot p {
    font-size: 12px;
  }

  .invoice-btns {
    margin-top: 20px;
    display: flex;
    justify-content: center;
  }

  .invoice-btn {
    padding: 3px 9px;
    color: var(--dark-color);
    font-family: inherit;
    border: 1px solid rgba(0, 0, 0, 0.1);
    cursor: pointer;
  }

  .invoice-head-top,
  .invoice-head-middle,
  .invoice-head-bottom {
    /* display: grid; */
    justify-content: center;
    align-items: center;
    padding-bottom: 15px;
    padding-top: 15px;
    margin-bottom: 10px;
    margin-top: 10px;

  }

  @media screen and (max-width: 992px) {
    .invoice {
      padding: 40px;
    }
  }

  @media screen and (max-width: 576px) {

    /* .invoice-head-top,
    .invoice-head-middle,
    .invoice-head-bottom {
      grid-template-columns: repeat(1, 1fr);
    } */

    .invoice-head-bottom-right {
      margin-top: 12px;
      margin-bottom: 12px;
    }

    .invoice * {
      text-align: left;
    }

    .invoice {
      padding: 28px;
    }
  }

  /* .overflow-view {
    overflow-x: scroll;
  } */

  .invoice-body {
    min-width: 600px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 4px;
    overflow: hidden;
    /* Tambahkan overflow: hidden; */
    margin-top: 15px;
    margin-bottom: 15px;
    clear: both;
    /* Tambahkan clear: both; */
  }

  @media print {
    .print-area {
      visibility: visible;
      width: 100%;
      position: absolute;
      left: 0;
      top: 0;
      /* overflow: hidden; */
    }

    /* .overflow-view {
      overflow-x: hidden;
    } */

    .invoice-btns {
      display: none;
    }

  }

  .invoice-head-top {
    /* overflow: hidden; */
  }

  .invoice-head-left {
    float: left;
  }

  .invoice-head-right {
    float: right;
  }

  .invoice-head-top::after {
    content: "";
    display: table;
    clear: both;
  }
</style>
