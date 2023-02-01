const flashdata = $('.flash-data').data('flashdata');

if (flashdata) {
    Swal.fire({
        title: 'Data Mahasiswa ',
        text: 'Berhasil ' + flashdata,
        icon: 'success'
    })
}

// tombol-hapus
$('.tombol-hapus').on('click', function (event) {

    event.preventDefault();
    const href = $(this).attr('href'); // ngambil value attribute href, pada tombol yang saya pencet (this)

    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "data mahasiswa akan dihapus",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data!'
    }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = href;
        }
    })
})