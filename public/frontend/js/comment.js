'use strict';

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    },
});

$(document).ready(function () {
    console.log('comment.js')

    $(document).on('submit', 'form[name=confirm_store_comment]', function (e) {
        e.preventDefault();
        $.ajax({
            type: $(this).attr('method') || 'POST',
            url: $(this).attr('action'),
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function (response) {
                alert('thành công')
                location.reload()
            },
            error: function (error) {
                alert('khong thanh cong')
                location.reload()
            }
        })
    });

    $('.btn-delete-comment').on('click', function (e) {
        var action = window.location.origin + '/profile/comment/delete/' + $(this).attr('data-bs-id-comment');
        $('#form-delete-comment').attr('action', action);
        $('#delete_comment_id').val($(this).attr('data-bs-id-comment'));
    });

    $('.btn-edit-comment').on('click', function (e) {
        // $('#formListItemComment-' + $(this).attr('data-bs-id')).addClass('hidden');
        $('#formEditComment-' + $(this).attr('data-bs-id')).removeClass('hidden');
        $('#id-comment-' + $(this).attr('data-bs-id')).val($(this).attr('data-bs-id'))
        $('#edit-comment-content-' + $(this).attr('data-bs-id')).val($(this).attr('data-bs-content'))
        if (!!$(this).data('bsImage')){
            $('#edit-comment-image-' + $(this).attr('data-bs-id')).html(`<a href="/../storage/`+$(this).attr('data-bs-image')+`">
                                        <img src="/../storage/`+$(this).attr('data-bs-image')+`"></a>`)
        }
    });

    $(document).on('submit', 'form[name=comment-update-50]', function (e) {
        console.log('123', this)
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function (response) {
                alert('thành công')
                location.reload();
            },
            error: function (error) {
                alert('khong thanh cong')
                location.reload();
            }
        })
    });

    $('.close-form-edit-comment').on('click', function (e) {
        $('#formEditComment-' + $(this).data('id')).removeClass('show')
    });
})
