// JavaScript Document
"use strict";
// Tooltips Initialization
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
    }) 

jQuery(document).ready(function() {
	 // Date Picker
            jQuery('#datepicker').datepicker();
            jQuery('#datepicker-autoclose').datepicker({
                autoclose: true,
                todayHighlight: true
            });
			 jQuery('#datepicker-autocloseb').datepicker({
                autoclose: true,
                todayHighlight: true
            });
            jQuery('#datepicker-inline').datepicker();
            jQuery('#datepicker-multiple-date').datepicker({
                format: "mm/dd/yyyy",
                clearBtn: true,
                multidate: true,
                multidateSeparator: ","
            });
            jQuery('#date-range').datepicker({
                toggleActive: true
            });
    // Data Tables
            $('#view_agent_table').DataTable({
                keys: true,
                responsive: true,
                "order": [[o, 'asc']],
                "scrollY": "200px",
                "scrollCollapse": true,
                "columns": [
                    {"width": "20%"},null,null,null
                ],
                "pagingType": "simple_numbers"
            });
            $('.dataTables_length').addClass('bs-select');
            table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
});
    //============================navbar==================================
    //hambruger icon
        $('.third-button').on('click', function () {
            $('.animated-icon3').toggleClass('open');
        });
           //navbar change color on scroll
    $(function () {
        $(".sticky").sticky({
            topSpacing: 90,
            zIndex: 2,
            stopper: "#footer",
            stickyClass: ['navbar-dark', 'mdb-color'],
        });
    });





    // Fade in of logo
    function logo_reload() {
        location.reload();
     }
/*
window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    }, false);
    
})();
*/