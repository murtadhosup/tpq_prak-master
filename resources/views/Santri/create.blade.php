<div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Add</h3>
                   @if(session('sukses'))
                    <div class="alert alert-success" role="alert">
                     {{session ('sukses')}}
                    </div>
                   @endif
                    <div class = 'row'>
  
                  <form action="{{ url('Santri/store') }} " method="POST">
                        
                   @csrf
                   <div class="mb-3">
                    <label for="formGroupExampleInput1" class="form-label">ID_SANTRI</label>
                    <input name="id_Santri" type="text" class="form-control" id="formGroupExampleInput2" placeholder="id santri" >
                   </div>
                       <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">NAMA SANTRI </label>
                        <input name="nama_santri" type="text" class="form-control" id="formGroupExampleInput2" placeholder="nama santri" >
                       </div>
                       <div class="mb-3">
                        <label for="formGroupExampleInput3" class="form-label">JENIS KELAMIN</label>
                        <input name="jenis_kelamin" type="boolean" class="form-control" id="formGroupExampleInput" placeholder="jenis kelamin" >
                      </div>
                      <div class="mb-3">
                       <label for="formGroupExampleInput4" class="form-label">TANGGAL LAHIR</label>
                       <input name="tanggal_lahir" type="date" class="form-control" id="formGroupExampleInput2" placeholder="tgl ahir" >
                      </div>
                      <div class="mb-3">
                        <label for="formGroupExampleInput5" class="form-label">KOTA LAHIR</label>
                        <input name="kota_lahir" type="text" class="form-control" id="formGroupExampleInput" placeholder="kota lahir" >
                      </div>
                      <div class="mb-3">
                       <label for="formGroupExampleInput6" class="form-label">NAMA ORTU </label>
                       <input name="nama_ortu" type="text" class="form-control" id="formGroupExampleInput2" placeholder="nama ortu" >
                      </div>
                      <div class="mb-3">
                        <label for="formGroupExampleInput7" class="form-label">ALAMAT ORTU</label>
                        <input name="alamat_ortu" type="text" class="form-control" id="formGroupExampleInput2" placeholder="alamat ortu" >
                       </div>
                       <div class="mb-3">
                        <label for="formGroupExampleInput8" class="form-label">HP </label>
                        <input name="no_hp" type="integer" class="form-control" id="formGroupExampleInput2" placeholder="no hp" >
                       </div>
                       <div class="mb-3">
                        <label for="formGroupExampleInput9" class="form-label">EMAIL</label>
                        <input name="email" type="text" class="form-control" id="formGroupExampleInput" placeholder="email" >
                      </div>                    
                      <div class="mb-3">
                        <label for="formGroupExampleInput10" class="form-label">PASSWORD</label>
                        <input name="password" type="text" class="form-control" id="formGroupExampleInput" placeholder="password" >
                      </div>
                      <div class="mb-3">
                       <label for="formGroupExampleInput11" class="form-label">TANGGAL MASUK</label>
                       <input name="tanggal_masuk" type="date" class="form-control" id="formGroupExampleInput2" placeholder="tgl mduk" >
                      </div>
                      <div class="mb-3">
                        <label for="formGroupExampleInput12" class="form-label">AKTIF</label>
                        <input name="aktif" type="integer" class="form-control" id="formGroupExampleInput2" placeholder="aktif/tidak" >
                       </div>
                      
                       
                       
  
                        <button type="submit" class="btn btn-warning" >Submit</button>
          </form>
      </div>
    </div>