document.getElementById('seleksi_form').addEventListener('submit', function(event) {
    var nomorPendaftaran = document.getElementById('nomor_pendaftaran').value;
    var namapeserta = document.getElementById('nama_peserta').value;
    var tanggalLahir = document.getElementById('tanggal_lahir').value;
  
    if ( !nomorPendaftaran ||!namapeserta || !tanggalLahir) {
      alert('Harap mengisi semua field yang diperlukan.');
      event.preventDefault();
    }
  });
  