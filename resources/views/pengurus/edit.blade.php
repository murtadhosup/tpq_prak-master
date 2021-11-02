<div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Edit pengurus</h3>
                   @if(session('sukses'))
                    <div class="alert alert-success" role="alert">
                     {{session ('sukses')}}
                    </div>
                   @endif
                    <div class = 'row'>
  
                  <form action="/pengurus/{{$pengurus->id_pengurus}}/update" method="POST">
                        
                    {{csrf_field()}}
                       <div class="from-group">
                         <label for="formGroupExampleInput1" class="form-label">ID  PENGURUS</label>
                         <input name="id_pengurus" type="integer" class="form-control" id="formGroupExampleInput" placeholder="id pengurus" value="{{ $pengurus->id_pengurus }}">
                       </div>
                       <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">NAMA</label>
                        <input name="nama" type="text" class="form-control" id="formGroupExampleInput2" placeholder="nama pengurus" value="{{ $pengurus->nama}}">
                       </div>
                       <div class="mb-3">
                        <label for="formGroupExampleInput3" class="form-label">EMAIL</label>
                        <input name="email" type="text" class="form-control" id="formGroupExampleInput" placeholder="email" value="{{ $pengurus->email }}">
                      </div>
                      <div class="mb-3">
                       <label for="formGroupExampleInput4" class="form-label">HP</label>
                       <input name="hp" type="integer" class="form-control" id="formGroupExampleInput2" placeholder="hp" value="{{ $pengurus->hp}}">
                      </div>
                      <div class="mb-3">
                        <label for="formGroupExampleInput5" class="form-label">GENDER</label>
                        <input name="gender" type="text" class="form-control" id="formGroupExampleInput" placeholder="gender" value="{{ $pengurus->gender}}">
                      </div>
                      <div class="mb-3">
                       <label for="formGroupExampleInput6" class="form-label">PASSWORD</label>
                       <input name="password" type="text" class="form-control" id="formGroupExampleInput2" placeholder="password" value="{{ $pengurus->password}}">
                      </div>
                      <div class="mb-3">
                        <label for="formGroupExampleInput7" class="form-label">AKTIF</label>
                        <input name="aktif" type="text" class="form-control" id="formGroupExampleInput2" placeholder="aktif/tidak" value="{{ $pengurus->aktif}}">
                       </div>
                      
                       
                       
  
                        <button type="submit" class="btn btn-warning" >Submit</button>
          </form>
      </div>
    </div>