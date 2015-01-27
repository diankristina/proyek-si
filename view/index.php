<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SI Jadwal Pengganti Praktikum Komsi</title>

  <!-- Bootstrap -->
  <link href="http://localhost/si_lab/assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>

      <nav class="navbar navbar-default" role="navigation">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand navbar-brand-centered">SI Jadwal</div>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-brand-centered">
            <ul class="nav navbar-nav">
              <li><a href="#">Jadwal Praktikum</a></li>
              <li><a href="#">Jadwal Pengganti</a></li>
             
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Logout</a></li>
                         
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
<div class="container">
<div class="row">
  <div class="col-md-12">
     <table class="table table-striped">
      <thead>
        <tr>
          <th style="text-align:center;">No</th>
          <th style="text-align:center;">Sesi</th>
          <th style="text-align:center;">Hari</th>
          <th style="text-align:center;">Dosen</th>
          <th style="text-align:center;">Kode MK</th>
          <th style="text-align:center;">Mata Kuliah</th>
          <th style="text-align:center;">SKS</th>
          <th style="text-align:center;">Kelas</th>
          <th style="text-align:center;">Ruang</th>
          <th style="text-align:center;">Status</th>
          <th style="text-align:center;">Pilihan</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no=1;
          foreach($query as $row)
          {
            ?>
            <tr>
             <td><?php echo $no++;?></td>
             <td><?php echo $row ['sesi'];?></td>
             <td><?php echo $row ['hari'];?></td>
             <td><?php echo $row ['nama_dosen'];?></td>
             <td><?php echo $row ['kode_mk'];?></td>
             <td><?php echo $row ['nama_matkul'];?></td>
             <td><?php echo $row ['sks'];?></td>
             <td><?php echo $row ['nama_kelas'];?></td>
             <td><?php echo $row ['nama_ruang'];?></td>
             <td>
                <a><button class="btn btn-success btn-xs" type="button"><i class="glyphicon glyphicon-ok"></i></button></a>
                &nbsp;
                <a><button class="btn btn-xs btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i></button></a>
                </button>
              </td>
              <td>
                <a><button class="btn btn-success btn-xs" type="button"><i class="glyphicon glyphicon-pencil"></i></button></a>
                &nbsp;
                <a><button class="btn btn-xs btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button></a>
                </button>
              </td>
            </tr>
            <?php
          }
            ?>
      </tbody>
    </table>
</div>
</div>
</div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
    </body>
    </html>