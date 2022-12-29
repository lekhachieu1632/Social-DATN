'use strict';

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    },
});

$(document).ready(function () {
    console.log('post.js')

    $(document).on('submit', 'form[name=confirm_store_post]', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function (response) {
                alert('thành công')
                resetFormPost()
                location.reload();
            },
            error: function (error) {
                alert('khong thanh cong')
                location.reload();
            }
        })
    });

    $(document).on('submit', 'form[name=post-update]', function (e) {
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

    $('.btn-delete-post').on('click', function () {
        $('input[id=id-post]').val($(this).attr('data-bs-id'))
    })

    $(document).on('submit', 'form[name=post-delete]', function (e) {
        e.preventDefault();
        const idUser = $('input[id=id-user]').val()
        const idPost = $('input[id=id-post]').val()
        $.ajax({
            type: 'DELETE',
            url: '/profile/'+ idUser +'/post/delete/' + idPost,
            success: function (response) {
                $('#deletePostModal').modal('hide');
                location.reload();
            },
            error: function (error) {
                $('#deletePostModal').modal('hide');
                location.reload();
            }
        });
    });

    // hien thi modal edit
    $(document).on('click', 'a[name=confirm_detail]', function (e) {
        const _this = $(this);
        const targetId = _this.attr('data-bs-target');
        const modal = $(targetId);
        const content = modal.find('.modal-dialog');
        e.preventDefault();
        $.ajax({
            url: _this.attr('href'),
            type: 'GET',
            success: function (response) {
                content.html(response.content)
            }
        })
    });

    $('#close-modal-post-create').on('click', function (e) {
        resetFormPost()
    });

    $('#close-modal-post-edit').on('click', function (e) {
        resetFormPost()
    });

    function resetFormPost() {
        $('textarea[name=content_post]').val('')
        $('.boxUpImg').html('')
    }

    $('a[id=like-post]').on('click', function (e) {
        e.preventDefault();
        let data = {
            'post_id' : $(this).attr('data-bs-id-post'),
        }
        $.ajax({
            type: 'POST',
            url: '/profile/'+ $(this).attr('data-bs-id-user') +'/post/like/'+ $(this).attr('data-bs-id-post'),
            data: data,
            dataType: 'json',
            success: function (response) {
                location.reload();
            },
            error: function (error) {
                location.reload();
            }
        })
    })

    $('a[id=unlike-post]').on('click', function (e) {
        e.preventDefault();
        let data = {
            'post_id' : $(this).attr('data-bs-id-post'),
        }
        $.ajax({
            type: 'DELETE',
            url: '/profile/'+ $(this).attr('data-bs-id-user') +'/post/unlike/'+ $(this).attr('data-bs-id-like'),
            data: data,
            dataType: 'json',
            success: function (response) {
                location.reload();
            },
            error: function (error) {
                location.reload();
            }
        })
    })
});
