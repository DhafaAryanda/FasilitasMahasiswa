import DataTable from "datatables.net-dt";

import $ from "jquery";
import datetimepicker from "jquery-datetimepicker";
import "jquery-datetimepicker/jquery.datetimepicker.css";

$(document).ready(function () {
    $('#datetimepicker').val(''); // Membersihkan nilai input
    $('#datetimepicker').datetimepicker({
        format: 'Y-m-d H:i', // Format tanggal dan jam yang diinginkan
        allowTimes: ['07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00'],
    });
});

import lightbox from "lightbox2";
import 'lightbox2/dist/css/lightbox.min.css';

import GLightbox from 'glightbox';


// $(document).ready(function () {
//     $('#datetimepicker').val(''); // Membersihkan nilai input
//     $('#datetimepicker').datetimepicker({
//         format: 'Y-m-d H:i', // Format tanggal dan jam yang diinginkan
//         allowTimes: ['07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00'],
//     });
// });


