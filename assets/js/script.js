document.getElementById('seleksi-form').addEventListener('submit', function(event) {
    var nomorPendaftaran = document.getElementById('nomor-pendaftaran').value;
    var nama = document.getElementById('nama').value;
    var tanggalLahir = document.getElementById('tanggal_lahir').value;
  
    if (!nomorPendaftaran || !nama || !tanggalLahir) {
      alert('Harap mengisi semua field yang diperlukan.');
      event.preventDefault();
    }
  });
  