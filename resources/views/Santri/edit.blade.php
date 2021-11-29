<div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Edit Santri</h3>
                   @if(session('sukses'))
                    <div class="alert alert-success" role="alert">
                     {{session ('sukses')}}
                    </div>
                   @endif
                    <div class = 'row'>
  
                  <form action="/Santri/{{$Santri->id_Santri}}/update" method="POST">
                        
                    {{csrf_field()}}
                       <div class="from-group">
                         <label for="formGroupExampleInput1" class="form-label">ID SANTRI</label>
                         <input name="id_Santri" type="integer" class="form-control" id="formGroupExampleInput" placeholder="id santri" value="{{ $Santri->id_Santri }}">
                       </div>
                       <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">NAMA SANTRI</label>
                        <input name="nama_santri" type="text" class="form-control" id="formGroupExampleInput2" placeholder="nama santri" value="{{ $Santri->nama_santri}}">
                       </div>
                       <div class="mb-3">
                        <label for="formGroupExampleInput3" class="form-label">JENIS KELAMIN</label>
                        <input name="jenis_kelamin" type="boolean" class="form-control" id="formGroupExampleInput" placeholder="jenis kelamin" value="{{ $Santri->jenis_kelamin }}">
                      </div>
                      <div class="mb-3">
                       <label for="formGroupExampleInput4" class="form-label">TGL LAHIR</label>
                       <input name="tanggal_lahir" type="date" class="form-control" id="formGroupExampleInput2" placeholder="tanggal lahir" value="{{ $Santri->tanggal_lahir}}">
                      </div>
                      <div class="mb-3">
                        <label for="formGroupExampleInput5" class="form-label">KOTA LAHIR</label>
                        <input name="kota_lahir" type="text" class="form-control" id="formGroupExampleInput" placeholder="kota lahir" value="{{ $Santri->kota_lahir}}">
                      </div>
                      <div class="mb-3">
                       <label for="formGroupExampleInput6" class="form-label">NAMA ORTU</label>
                       <input name="nama_ortu" type="text" class="form-control" id="formGroupExampleInput2" placeholder="nama ortu" value="{{ $Santri->nama_ortu}}">
                      </div>
                      <div class="mb-3">
                        <label for="formGroupExampleInput7" class="form-label">ALAMAT ORTU</label>
                        <input name="tanggal_lahir" type="date" class="form-control" id="formGroupExampleInput2" placeholder="tanggal lahir" value="{{ $Santri->tanggal_lahir}}">
                       </div>
                       <div class="mb-3">
                         <label for="formGroupExampleInput8" class="form-label">NO HP</label>
                         <input name="no_hp" type="varchar" class="form-control" id="formGroupExampleInput" placeholder="no hp" value="{{ $Santri->no_hp}}">
                       </div>
                       <div class="mb-3">
                        <label for="formGroupExampleInput9" class="form-label">EMAIL</label>
                        <input name="email" type="text" class="form-control" id="formGroupExampleInput2" placeholder="email" value="{{ $Santri->email}}">
                       </div>
                       <div class="mb-3">
                        <label for="formGroupExampleInput10" class="form-label">PASSWORD</label>
                        <input name="password" type="text" class="form-control" id="formGroupExampleInput2" placeholder="password" value="{{ $Santri->password}}">
                       </div>
                       <div class="mb-3">
                        <label for="formGroupExampleInput11" class="form-label">TGL MASUK</label>
                        <input name="tanggal_masuk" type="text" class="form-control" id="formGroupExampleInput2" placeholder="tanggal masuk" value="{{ $Santri->tanggal_masuk}}">
                       </div>
                       <div class="mb-3">
                        <label for="formGroupExampleInput12" class="form-label">AKTIF</label>
                        <input name="aktif" type="text" class="form-control" id="formGroupExampleInput2" placeholder="aktif/tidak" value="{{ $Santri->aktif}}">
                       </div>
                      
                       
                       
  
                        <button type="submit" class="btn btn-warning" >Submit</button>
          </form>
      </div>
    </div>