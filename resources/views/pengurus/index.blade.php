<!DOCTYPE html>


    <head>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Pengurus</a>
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
                   <h1>Pengurus</h1>
                <div class='col-6'>
                </div>
                <!-- Button trigger modal -->
                <a href="{{ url('pengurus/create') }}" class="btn btn-success btn-sm">
                  <i class="fa fa-plus"></i> Add
              </a>


                  Tambah Pengurus 
                 
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

                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

  