$(function() {
    $('.ubahData').on('click', function () {
        $('#judul').html('Ubah Data Siswa');
        $('.modal-body form').attr('action', 'http://127.0.0.1/PHP/MVC/007-Database/public/siswa/ubah');

        const id = $(this).data('id');

        $.ajax({
            type: "post",
            url: "http://127.0.0.1/PHP/MVC/007-Database/public/siswa/getUbah",
            data: {id : id},
            dataType: "json",
            success: function (data) {
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#nis').val(data.nis);
                $('#tel').val(data.tel);
                $('#jurusan').val(data.jurusan);
                $('#email').val(data.email);
            }
        });

    });
});