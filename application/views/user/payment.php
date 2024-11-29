<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
  <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="SB-Mid-client-KsogII-ePiFUyOZc"></script>
  <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
</head>

<div class="container mt-5">
  <!-- Heading -->
  <h1 class="text-center mb-4">Biaya Pendaftaran SMAN Ceria</h1>

  <!-- Table for Fee Details -->
  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead class="thead-dark">
        <tr>
          <th>Jenis Biaya</th>
          <th>Jumlah (Rp)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Biaya Pendaftaran</td>
          <td>75.000</td>
        </tr>
        <tr>
          <td>Biaya Ujian Seleksi</td>
          <td>150.000</td>
        </tr>
        <tr>
          <td>Biaya Seragam Sekolah</td>
          <td>500.000</td>
        </tr>
        <tr>
          <td>Biaya SPP (bulan pertama)</td>
          <td>500.000</td>
        </tr>
        <tr>
          <td>Biaya Buku dan Alat Tulis</td>
          <td>800.000</td>
        </tr>
        <tr>
          <td>Biaya Asuransi Kesehatan</td>
          <td>50.000</td>
        </tr>
        <tr>
          <td>Biaya MOS (Orientasi Siswa)</td>
          <td>100.000</td>
        </tr>
        <tr>
          <td>Biaya Fasilitas dan Prasarana</td>
          <td>200.000</td>
        </tr>
        <tr>
          <td>Biaya Ekstrakurikuler dan Lain-lain</td>
          <td>150.000</td>
        </tr>
        <tr class="table-primary font-weight-bold">
          <td>Total Biaya</td>
          <td>2.500.000</td>
        </tr>
      </tbody>
    </table>
  </div>
  <button id="pay-button">Pay!</button>


  <script type="text/javascript">
  var payButton = document.getElementById('pay-button');
  payButton.addEventListener('click', async function() {
    try {
      const response = await fetch('http://localhost/Pendaftaran-Sekolah/index.php/payment/token', {
        method: 'POST'
      });
      const token = await response.json(); // Mengambil token dari server
      console.log(token);
      window.snap.pay(token); // Menggunakan token untuk memproses pembayaran
    } catch (error) {
      console.log("Error:", error);
    }
  });
  </script>

</div>