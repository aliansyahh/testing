// $(function(){
//     $('.tambah').on('click',function(){
//         $('#formModalLabel').html('Tambah Data');
//         $('.modal-footer button[type=submit]').html('Tambah Data');
//         $('.modal-body form').attr('action','http://localhost/test/public/Mahasiswa/tambah');
//                 $('#id').val();
//                 $('#nama').val();
//                 $('#npm').val();
//                 $('#email').val();
//                 $('#jurusan').val();
//     })

//     $('.ubah').on('click', function(){
//         $('#formModalLabel').html('Ubah Data');
//         $('.modal-footer button[type=submit]').html('Ubah Data');
//         $('.modal-body form').attr('action','http://localhost/test/public/Mahasiswa/ubah');

//         let id = $(this).data('id');
//         $.ajax({
//             url:'http://localhost/test/public/Mahasiswa/getUbah',
//             data:{ id : id},
//             method:'post',
//             dataType:'json',
//             success: function (data){
//                 $('#id').val(data.id);
//                 $('#nama').val(data.nama);
//                 $('#npm').val(data.npm);
//                 $('#email').val(data.email);
//                 $('#jurusan').val(data.jurusan);
//             }
//         })
//     })
// })

$(function(){

    $('.tambah').on('click',function(){
        $('.modal-title').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-body form').attr('action', 'http://localhost/testing/public/Mahasiswa/tambah')

        $('#nama').val('');
        $('#npm').val('');
        $('#email').val('');
        $('#jurusan').val('');
    })

    $('.ubah').on('click',function(){
        $('.modal-title').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        let id = $(this).data('id');
        $('.modal-body form').attr('action','http://localhost/testing/public/Mahasiswa/ubah');

        $.ajax({
            url:"http://localhost/testing/public/Mahasiswa/getUbah",
            data:{id:id},
            method:'post',
            dataType:'json',
            success: data => {
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#npm').val(data.npm);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
            }
        })
    })
})