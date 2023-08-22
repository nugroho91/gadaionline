document.addEventListener('DOMContentLoaded', function () {
    const downloadLink = document.getElementById('downloadLink');
    const image = document.getElementById('image');

    // Ganti 'path/to/your/image.jpg' dengan path gambar yang ingin Anda gunakan
    const imageUrl = 'path/to/your/i';

    downloadLink.addEventListener('click', function (event) {
        event.preventDefault();
        
        // Buat elemen anchor (link) baru untuk menginisiasi unduhan
        const anchor = document.createElement('a');
        anchor.href = imageUrl;
        anchor.download = 'image.jpg'; // Nama file saat diunduh
        anchor.style.display = 'none';
        
        // Tambahkan elemen anchor ke dalam dokumen
        document.body.appendChild(anchor);
        
        // Klik anchor untuk memulai unduhan
        anchor.click();
        
        // Hapus elemen anchor setelah unduhan selesai
        document.body.removeChild(anchor);
    });
});
