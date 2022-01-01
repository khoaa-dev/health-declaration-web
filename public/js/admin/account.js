$(document).ready(function() {
    $('#add-account-admin').on('click', function(e) {
        // e.preventDefault();
        // var admin_name = $('#admin_name').val();
        // var admin_email = $('#admin_email').val();
        // var admin_password = $('#admin_password').val();
        // var admin_phone = $('#admin_phone').val();
        // var _token = $('input[name=_token]').val();
        // $.ajax({
        //     url: "/test",
        //     type: "POST",
        //     data: $('#form').serialize(),
        //     success: function(data) {
        //         if(data) {
        //             $('#accountAdmin tbody').prepend('<tr><td>' + ++$i2 +'</td><td>' + data.admin_name + '</td><td>' + 
        //                                                     data.admin_email + '</td><td>' + data.admin_phone + '</td></tr>' + 
        //                                                     '<td class=" last"><a href="#">Xem chi tiết</a></td>');
        //             $('#accountAdmin')[0].reset();
        //         }
        //     }
        // });
    });


    // $('#add-account-admin').on('click', function(e) {
    //     e.preventDefault();
    //     var admin_name = $('#admin_name').val();
    //     var admin_email = $('#admin_email').val();
    //     var admin_password = $('#admin_password').val();
    //     var admin_phone = $('#admin_phone').val();
    //     var _token = $('input[name=_token]').val();
    //     $.ajax({
    //         url: "{{ route('test.add') }}",
    //         type: "POST",
    //         data: {
    //             admin_name: admin_name,
    //             admin_email: admin_email,
    //             admin_password: admin_password,
    //             admin_phone: admin_phone,
    //             _token: _token,
    //         },
    //         success: function(data) {
    //             if(data) {
    //                 $('#accountAdmin tbody').prepend('<tr><td>' + ++$i2 +'</td><td>' + data.admin_name + '</td><td>' + 
    //                                                         data.admin_email + '</td><td>' + data.admin_phone + '</td></tr>' + 
    //                                                         '<td class=" last"><a href="#">Xem chi tiết</a></td>');
    //                 $('#accountAdmin')[0].reset();
    //             }
    //         }
    //     });
    // })
})