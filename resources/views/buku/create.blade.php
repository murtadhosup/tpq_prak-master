<div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Add Buku</h3>
                   @if(session('sukses'))
                    <div class="alert alert-success" role="alert">
                     {{session ('sukses')}}
                    </div>
                   @endif
                    <div class = 'row'>
  
                  <form action="{{ url('buku/store') }} " method="POST">
                        
                   @csrf
                   <div class="mb-3">
                    <label for="formGroupExampleInput1" class="form-label">ID BUKU</label>
                    <input name="id_buku" type="integer" class="form-control" id="formGroupExampleInput2" placeholder="id buku" >
                   </div>
                       <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">BUKU</label>
                        <input name="buku" type="string" class="form-control" id="formGroupExampleInput2" placeholder="buku" >
                       </div>
                       <div class="mb-3">
                        <label for="formGroupExampleInput3" class="form-label">KETERANGAN</label>
                        <input name="keterangan" type="string" class="form-control" id="formGroupExampleInput" placeholder="keterangan" >
                      </div>
                      
                        <button type="submit" class="btn btn-warning" >Submit</button>
          </form>
      </div>
    </div>