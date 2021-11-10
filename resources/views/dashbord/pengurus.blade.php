<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>
<div class="row">
    <div class="col-lg-12">
        <a href="/dashboard/pengurus/form" class="btn btn-sm btn-primary mb-3">Tambah Data Pengurus</a>
        <table id="table_id" class="display">
        <thead>
            <tr>
                <th>Nama Pengurus</th>
                <th>Gender</th>
                <th>No HP</th>
                <th>Email</th>
                <th>Status Aktif</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>


            <?php foreach ($data as $pengurus){ ?>
                <tr>
            <td>{{$pengurus['nama_pengurus']}}</td>
            <td>{{$pengurus['gender']}}</td>
            <td>{{$pengurus['hp']}}</td>
            <td>{{$pengurus['email']}}</td>
            <td>{{$pengurus['aktif']}}</td>
            <td class="text-nowrap">
                <a href="/dashboard/pengurus/hapus/{{$pengurus['id_pengurus']}}" class="btn btn-danger btn-sm">Hapus</a>
                <a href="/dashboard/pengurus/form/{{$pengurus['id_pengurus']}}" class="btn btn-warning btn-sm">Edit</a>
            </td>
            </tr>
            <?php } ?>

        </tbody>
    </table>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TPQ Digital</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('sb-admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('sb-admin/css/sb-admin-2.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

</head>
