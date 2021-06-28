<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Codeigniter 4 PDF Generate Tutorial</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
    table th {
          background: #0c1c60 !important;
          color: #fff !important;
          border: 1px solid #ddd !important;
          line-height:15px!important;
          text-align:center!important;
          vertical-align:middle!important;

      }
      table td{line-height:15px!important; text-align:center!important;}
  </style>
</head>

<body>
  <div class="container">

    <h2>Generate PDF in Codeigniter 4 - Online Web Tutor</h2>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nama Lengkap</th>
          <th>Nisn</th>
          <th>Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
 
                    <tr>
                        <td><?php echo $siswa['siswa_nama']; ?> </td>
                        <td><?php echo $siswa['siswa_nisn']; ?> </td>
                        <td><?php echo $siswa['tanggal_lahir']; ?> </td>
                        <td><?php echo $siswa['siswa_jk']; ?> </td>
                        <td><?php echo $siswa['status']; ?> </td>
                    </tr>
      </tbody>
    </table>
  </div>
</body>

</html>