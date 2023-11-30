import DataTable from "datatables.net-dt";

import $ from "jquery";
import datetimepicker from "jquery-datetimepicker";
import "jquery-datetimepicker/jquery.datetimepicker.css";
import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";
import toast, { Toaster } from 'solid-toast';



$(document).ready(function () {
    $('#dateandtimepicker1').val(''); // Membersihkan nilai input
    $('#dateandtimepicker1').datetimepicker({
        format: 'Y-m-d H:i', // Format tanggal dan jam yang diinginkan
        allowTimes: ['07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00'],
    });
});


document.addEventListener('DOMContentLoaded', function () {
    flatpickr("#datepicker", {
        dateFormat: "Y-m-d",
        // tambahkan opsi lain sesuai kebutuhan
    });
});


import lightbox from "lightbox2";
import 'lightbox2/dist/css/lightbox.min.css';

import GLightbox from 'glightbox';


