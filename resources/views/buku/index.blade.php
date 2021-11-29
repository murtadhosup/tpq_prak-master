<!DOCTYPE html>
<html>
    <head>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
    <body>
        <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container-fluid">
                <a class="navbar-brand" href="#">Buku</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Santri</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Pengurus</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled">Buku</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
        <div class="container">
            <div class = 'row'>
                <div class='col-6'>
                   <h1>Buku</h1>
                <div class='col-6'>
                  
                       <button type="button" class="btn btn-primary btn-sm float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                       buku
                       </button>
                    </div>

                      </div>
                      
                <table class='table table-hover'>
                    <tr>
                        <th>ID BUKU</th>
                        <th>BUKU</th>
                        <th>KETERANGAN</th>           
                    </tr>
                    @foreach ($buku as $buku)
                    <tr>
                        <td>{{ $buku->id_buku }}</td>
                        <td>{{ $buku->buku}}</td>
                        <td>{{ $buku->keterangan }}</td>                                  
                          <td><a href="/buku/{{$buku->id_buku}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/buku/{{$buku->id_buku}}/delete"class="btn btn-danger btn-sm " 
                              onclick="return confirm ('Apakah yakin untuk dihapus ?')">Hapus</a>
                            </a>

                        </td>
                        
                        
                    </tr>
                        
                    @endforeach
                </table>
            </div>
            