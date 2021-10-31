<!DOCTYPE html>
<html>
    <head>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">
            <div class = 'row'>
                <div class='col-6'>
                   <h1>Santri</h1>
                <div class='col-6'>
                  
                       <button type="button" class="btn btn-primary btn-sm float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                       Santri
                       </button>
                    </div>

                      </div>
                      
                <table class='table table-hover'>
                    <tr>
                        <th>ID SANTRI</th>
                        <th>NAMA SANTRI</th>
                        <th>JENIS KELAMIN</th>
                        <th>TANGGAL LAHIR</th>
                        <th>KOTA LAHIR</th>
                        <th> NAMA ORTU</th>
                        <th> ALAMAT ORTU</th>
                        <th> NO HP</th>
                        <th> EMAIL</th>
                        <th> PASSWORD</th> 
                        <th> TGL MASUK</th>
                        <th> AKTIF</th>    
                        <th> AKSI</th>             
                    </tr>
                    @foreach ($Santris as $Santri)
                    <tr>
                        <td>{{ $Santri->id_Santri }}</td>
                        <td>{{ $Santri->nama_santri }}</td>
                        <td>{{ $Santri->jenis_kelamin }}</td>
                        <td>{{ $Santri->tanggal_lahir }}</td>
                        <td>{{ $Santri->kota_lahir }}</td>
                        <td>{{ $Santri->nama_ortu }}</td>
                        <td>{{ $Santri->alamat_ortu }}</td>
                        <td>{{ $Santri->no_hp }}</td>
                        <td>{{ $Santri->email }}</td>
                        <td>{{ $Santri->password }}</td>
                        <td>{{ $Santri->tanggal_masuk }}</td>
                        <td>{{ $Santri->aktif }}</td>                                    
                          <td><a href="/Santri/{{$Santri->id_Santri}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/Santri/{{$Santri->id_Santri}}/delete"class="btn btn-danger btn-sm " 
                              onclick="return confirm ('Apakah yakin untuk dihapus ?')">Hapus</a>
                            </a>

                        </td>
                        
                        
                    </tr>
                        
                    @endforeach
                </table>
            </div>
            