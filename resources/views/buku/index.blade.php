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
            