<!DOCTYPE html>
<html>

<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      color: #333;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
    }

    .header {
      text-align: center;
      margin-bottom: 30px;
    }

    .details {
      background-color: #f8f9fa;
      padding: 20px;
      border-radius: 5px;
      margin-bottom: 20px;
    }

    .footer {
      text-align: center;
      color: #666;
      font-size: 14px;
    }

    .action {
      text-align: center;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #ef6e46;
      color: #fff;
      border: none;
      border-radius: 5px;
      text-decoration: none;
      cursor: pointer;
    }

    .btn:hover {
      color: #fff;
      background-color: #313e77;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="header">
      <h1>Undangan Pernikahan Telah Diverifikasi</h1>
    </div>

    <p>Yth. {{ $invitation->user->name }},</p>

    <p>Dengan senang hati kami informasikan bahwa undangan pernikahan Anda telah diverifikasi dan dipublikasikan.
      Berikut detail undangan Anda:</p>

    <div class="details">
      <p><strong>Mempelai Wanita:</strong> {{ $invitation->bride_name }}</p>
      <p><strong>Mempelai Pria:</strong> {{ $invitation->groom_name }}</p>
      <p><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($invitation->date)->isoFormat('dddd, D MMMM Y') }}</p>
      <p><strong>Waktu:</strong> {{ $invitation->time }} WIB</p>
      <p><strong>Lokasi:</strong> {{ $invitation->location }}</p>
      <p><strong>Alamat:</strong> {{ $invitation->address }}</p>
      <div class="action">
        <a href="{{ route('invitations.show', $invitation) }}" class="btn">Lihat Undangan</a>
      </div>
    </div>

    <p>Undangan Anda sekarang sudah aktif dan siap dibagikan kepada para tamu undangan.</p>

    <div class="footer">
      <p>Terima kasih telah menggunakan layanan kami!</p>
      <p>Semoga acara pernikahan Anda berjalan dengan lancar.</p>
    </div>
  </div>
</body>

</html>
