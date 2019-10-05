<!DOCTYPE html>
<html>
<head>
  <title>Menu Admin</title>
  <title>McDelivery</title>
  <meta charset="utf-8" />
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>


  <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/jquery-3.3.1.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

</head>


<body>
  <form action="<?php echo base_url('Admin/add'); ?>" method="post" enctype="multipart/form-data">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="formGroupExampleInput">Nama Menu</label>
            <input type="text" class="form-control" name="nama">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Kategori</label>
            <select class="form-control" name="kategori">
              <option value="">---Pilih---</option>
              <option value="istimewa">istimewa</option>
              <option value="tambahan">tambahan</option>
              <option value="sarapan">sarapan</option>
              <option value="happymeal">happy meal</option>
              <option value="minuman">minuman</option>
              <option value="pencucimulut">pencucimulut</option>
            </select >
            <!-- <input type="text" class="form-control" name="kategori"> -->
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Harga</label>
            <input type="text" class="form-control" name="harga">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Photo Profile</label>
            <input type="file" class="form-control-file" name="foto" enctype='multipart/form-data'>
          </div>
        </div>
        <div class="col-md-6">
         <button type="submit" class="btn btn-outline-primary">Tambah Menu</button>  
       </div>
     </div>
   </div>
 </form>
</body>
</html>

