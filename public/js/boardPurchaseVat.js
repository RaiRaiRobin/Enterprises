// Purchase vat submit button 
$(document).ready(function() {
    $(document).on('submit', '#PurchaseVat', function(e) {
        e.preventDefault();
        alert('asdsa');
    });
});


// add new supplier ajax view
$(document).on('change', '#SupplierSelect', function(e) {
    e.preventDefault();
    var selected = $('#SupplierSelect').val();
    if (selected == 'AddNewSupplier') {
        // $('.card-body').empty();
        $.ajax({
            url: '/board/add/vat/supplier',
            method: 'GET',
            beforeSend: function() {
                $('#modalLoading').html('<div class="spinner-grow text-muted"></div>\
                    <div class="spinner-grow text-primary"></div>\
                    <div class="spinner-grow text-success"></div>\
                    <div class="spinner-grow text-info"></div>\
                    <div class="spinner-grow text-warning"></div>\
                    <div class="spinner-grow text-danger"></div>\
                    <div class="spinner-grow text-secondary"></div>\
                    <div class="spinner-grow text-dark"></div>\
                    <div class="spinner-grow text-light"></div>');
                $('#PurchaseVat :input').prop("disabled", true);
                $('#modalLoading').removeAttr('hidden');
            },
            success: function(response) {
                $('.card-title').append(' (Add New Supplier)')
                $('.card-body').html(response);
                $('#modalLoading').attr('hidden', 'hidden');
                $('#modalLoading').empty();
            },
            error: function(jqXHR, status) {
                // console.log(jqXHR.responseJSON.message);
                alert('Page failed to load....');
            }
        });
    }
});


// add new supplier submit form
$(document).on('submit', '#PurchaseVatAddSupplier', function(e) {
    e.preventDefault();
    var FormData = {
        SupplierName: $('#SupplierName').val(),
        PanNo: $('#SupplierPanNo').val(),
        SupplierEmail: $('#SupplierEmail').val(),
        SupplierPhone: $('#SupplierPhone').val(),
        SupplierAddress: $('#SupplierAddress').val()
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: '/board/add/vat/supplier',
        method: 'POST',
        data: FormData,
        beforeSend: function() {
            $('#modalLoading').html('<div class="spinner-grow text-muted"></div>\
                    <div class="spinner-grow text-primary"></div>\
                    <div class="spinner-grow text-success"></div>\
                    <div class="spinner-grow text-info"></div>\
                    <div class="spinner-grow text-warning"></div>\
                    <div class="spinner-grow text-danger"></div>\
                    <div class="spinner-grow text-secondary"></div>\
                    <div class="spinner-grow text-dark"></div>\
                    <div class="spinner-grow text-light"></div>');
            $('#PurchaseVat :input').prop("disabled", true);
            $('#modalLoading').removeAttr('hidden');
        },
        success: function(response) {
            // console.log(response);
            alert(response.message);
            // $('#modalLoading').attr('hidden', 'hidden');
            // $('#modalLoading').empty();
            location.reload(true);
        },
        error: function(jqXHR, status) {
            alert('Failed to register');
            // console.log(jqXHR);
            $('#modalLoading').attr('hidden', 'hidden');
            $('#modalLoading').empty();
            // location.reload(true);
        }
    });
});

// add new line for description
$(document).on('change', '.r', function(event) {
    event.preventDefault();
    var a;  
    var n = $(this).attr('data-id').trim();
    var val = $(this).val();
    if (a == undefined && val != "") {
    console.log(a); 
    }
});
