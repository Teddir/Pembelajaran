$(function(){
    $('.tombolTambahData').on('click', function()
    {
        $('#formModalLabel').html('Tambah Data Artikel');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        

    });
})
$(function(){
    $('.tombolTambahData1').on('click', function()
    {
        $('#ModalLabel1').html('Tambah Data Artikel');
        $('.modal-footer button[type=submit]').html('Sigup');
        

    });
})




$(function() 
{

    $('.tampilModalUbah').on('click', function()
    {
        $('#formModalLabel').html('Ubah Data Artikel');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/Bismillah/Jangan-Dibuka/phpmvc/public/Santri/ubah')
        const id = $(this).data('id');
        // console.log(id);
        
        $.ajax({
            url: 'http://localhost/Bismillah/Jangan-Dibuka/phpmvc/public/Santri/getubah',
            data: {id : id},  //id kiri = id yang dikirim || id kanan adalah isi datanya
            method: 'post',
            dataType: 'json',
            success: function(data) 
            {
                $('#image').val(data.image);
                $('#judulArtikel').val(data.judulArtikel);
                $('#artikel').val(data.artikel);
                $('#tanggal').val(data.tanggal);
                $('#kategori').val(data.kategori);
                $('#id').val(data.id );
            }
        });
    
    });

    $('.tampilModalUbah1').on('click', function()
    {
        $('#ModalLabel1').html('Ubah Data Artikel');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/Bismillah/Jangan-Dibuka/phpmvc/public/Artikel/ubah')
        const id = $(this).data('id');
        // console.log(id);
        
        $.ajax({
            url: 'http://localhost/Bismillah/Jangan-Dibuka/phpmvc/public/Artikel/getubah',
            data: {id : id},  //id kiri = id yang dikirim || id kanan adalah isi datanya
            method: 'post',
            dataType: 'json',
            success: function(data) 
            {
                $('#image').val(data.image);
                $('#judulArtikel').val(data.judulArtikel);
                $('#artikel').val(data.artikel);
                $('#tanggal').val(data.tanggal);
                $('#kategori').val(data.kategori);
                $('#id').val(data.id );
            }
        });
    
    });

});