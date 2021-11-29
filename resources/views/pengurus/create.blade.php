<div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Add pengurus</h3>
                   @if(session('sukses'))
                    <div class="alert alert-success" role="alert">
                     {{session ('sukses')}}
                    </div>
                   @endif
                    <div class = 'row'>
  
                  <form action="{{ url('pengurus/store') }} " method="POST">
                        
                   @csrf
                   <div class="mb-3">
                    <label for="formGroupExampleInput1" class="form-label">ID_PENGURUS</label>
                    <input name="id_pengurus" type="text" class="form-control" id="formGroupExampleInput2" placeholder="id pengurus" >
                   </div>
                       <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">NAMA</label>
                        <input name="nama" type="text" class="form-control" id="formGroupExampleInput2" placeholder="nama pengurus" >
                       </div>
                       <div class="mb-3">
                        <label for="formGroupExampleInput3" class="form-label">EMAIL</label>
                        <input name="email" type="text" class="form-control" id="formGroupExampleInput" placeholder="email" >
                      </div>
                      <div class="mb-3">
                       <label for="formGroupExampleInput4" class="form-label">HP</label>
                       <input name="hp" type="integer" class="form-control" id="formGroupExampleInput2" placeholder="hp" >
                      </div>
                      <div class="mb-3">
                        <label for="formGroupExampleInput5" class="form-label">GENDER</label>
                        <input name="gender" type="text" class="form-control" id="formGroupExampleInput" placeholder="gender" >
                      </div>
                      <div class="mb-3">
                       <label for="formGroupExampleInput6" class="form-label">PASSWORD</label>
                       <input name="password" type="text" class="form-control" id="formGroupExampleInput2" placeholder="password" >
                      </div>
                      <div class="mb-3">
                        <label for="formGroupExampleInput7" class="form-label">AKTIF</label>
                        <input name="aktif" type="text" class="form-control" id="formGroupExampleInput2" placeholder="aktif/tidak" >
                       </div>
                      
                       
                       
  
                        <button type="submit" class="btn btn-warning" >Submit</button>
          </form>
      </div>
    </div>