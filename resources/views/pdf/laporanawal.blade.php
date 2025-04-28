<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <title>Laporan Awal</title>
    <style>
      table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
      }
      th,
      td {
        border: 1px solid #000;
        padding: 8px 12px;
        text-align: left;
      }
      th {
        width: 30%;
        font-weight: normal;
      }
      h2 {
        margin-top: 40px;
      }
    </style>
  </head>
  <body>
    <h1 style="text-align: center">Laporan Awal</h1>

    <h2>A. Data Diri</h2>
    <table>
      <tr>
        <th>Nama Lengkap</th>
        <td>{{ $data->nama }}</td>
      </tr>
      <tr>
        <th>NIM</th>
        <td>{{ $data->nim }}</td>
      </tr>
      <tr>
        <th>Jenis Kelamin</th>
        <td>{{ $data->jenis_kelamin }}</td>
      </tr>
      <tr>
        <th>Usia</th>
        <td>{{ $data->usia }}</td>
      </tr>
      <tr>
        <th>Jurusan</th>
        <td>{{ $data->jurusan }}</td>
      </tr>
      <tr>
        <th>Program Studi</th>
        <td>{{ $data->prodi }}</td>
      </tr>
      <tr>
        <th>Semester</th>
        <td>{{ $data->semester }}</td>
      </tr>
      <tr>
        <th>No Telp</th>
        <td>{{ $data->no_telp }}</td>
      </tr>
    </table>

    <h2>B. Detail Masalah</h2>
    <table>
      <tr>
        <th>Kategori Masalah</th>
        <td>{{ $data->kategori_masalah }}</td>
      </tr>
      <tr>
        <th>Deskripsi Masalah</th>
        <td>{{ $data->deskripsi_masalah }}</td>
      </tr>
      <tr>
        <th>Sejak Kapan Dialami</th>
        <td>{{ $data->sejak_kapan }}</td>
      </tr>
      <tr>
        <th>Tindakan Apa Yang Dilakukan</th>
        <td>{{ $data->tindakan_yang_dilakukan }}</td>
      </tr>
    </table>

    <h2>C. Jadwal Pengajuan</h2>
    <table>
      <tr>
        <th>Jenis Layanan</th>
        <td>{{ $data->jenis_layanan }}</td>
      </tr>
      <tr>
        <th>Tanggal</th>
        <td>{{ $data->tanggal }}</td>
      </tr>
      <tr>
        <th>Sesi</th>
        <td>{{ $data->sesi }}</td>
      </tr>
    </table>
  </body>
</html>
