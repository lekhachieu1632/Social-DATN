'use strict';

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    },
});

$(document).ready(function () {
    console.log('profile.js')

    $('input[name=update-avatar]').on('change', function (e) {
        let data = {
            'avatar': $('input[name=update-avatar]').val().replace(/C:\\fakepath\\/i, ''),
        }
        e.preventDefault();
        $.ajax({
            type: 'PUT',
            url: '/update/avatar/' + $(this).data('id'),
            data: data,
            dataType: 'json',
            success: function (response) {
                alert('Cập nhật thành công')
                location.reload();
            },
            error: function (error) {
                alert('Cập nhật không thành công')
                location.reload();
            }
        })
    })

    $('input[name=update-banner]').on('change', function (e) {
        let data = {
            'banner': $('input[name=update-banner]').val().replace(/C:\\fakepath\\/i, ''),
        }
        e.preventDefault();
        $.ajax({
            type: 'PUT',
            url: '/update/banner/' + $(this).data('id'),
            data: data,
            dataType: 'json',
            success: function (response) {
                alert('Cập nhật thành công')
                location.reload();
            },
            error: function (error) {
                alert('Cập nhật không thành công')
                location.reload();
            }
        })
    })

    // $(document).on('submit', 'form[name=update-avatar]', function (e) {
    //     console.log('ahihi')
    //     e.preventDefault();
    //     $.ajax({
    //         type: 'PUT',
    //         url: '/update/avatar/' + $(this).data('id'),
    //         data: new FormData(this),
    //         processData: false,
    //         contentType: false,
    //         success: function (response) {
    //             alert('thành công')
    //             // location.reload();
    //         },
    //         error: function (error) {
    //             alert('khong thanh cong')
    //             // location.reload();
    //         }
    //     })
    // })
})
