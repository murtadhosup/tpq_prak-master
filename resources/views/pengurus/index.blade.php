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
                   <h1>Pengurus</h1>
                <div class='col-6'>
                  
                       <button type="button" class="btn btn-primary btn-sm float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                       pengurus
                       </button>
                    </div>

                      </div>
                      
                <table class='table table-hover'>
                    <tr>
                        <th>ID PENGURUS</th>
                        <th>NAMA PENGURUS</th>
                        <th>EMAIL</th>
                        <th>HP</th>
                        <th>GENDER</th>
                        <th> PASSWORD</th>
                        <th> AKTIF</th>            
                    </tr>
                    @foreach ($pengurus as $pengurus)
                    <tr>
                        <td>{{ $pengurus->id_pengurus }}</td>
                        <td>{{ $pengurus->nama}}</td>
                        <td>{{ $pengurus->email }}</td>
                        <td>{{ $pengurus->hp}}</td>
                        <td>{{ $pengurus->gender }}</td>
                        <td>{{ $pengurus->password }}</td>
                        <td>{{ $pengurus->aktif }}</td>                                   
                          <td><a href="/pengurus/{{$pengurus->id_pengurus}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/pengurus/{{$pengurus->id_pengurus}}/delete"class="btn btn-danger btn-sm " 
                              onclick="return confirm ('Apakah yakin untuk dihapus ?')">Hapus</a>
                            </a>

                        </td>
                        
                        
                    </tr>
                        
                    @endforeach
                </table>
            </div>
            