  <div class="page-content set">
        <form action="<?php echo base_url('Registrasi/prosesRegistrasi'); ?>" method="post">      
                    <div class="fieldset-heading">
                        <h2 class="fieldset-title">Tentang Anda</h2>
                        <p class="instructions">* Harus diisi</p>
                    </div>              
                    <div class="row">
              				<div class="col-lg-3">
                          <label for="nama">Sebutan :</label><br>
              				    <select name="sebutan" class="form-control">
                            <option value="Tn">Tn</option>    
                            <option value="Ny">Ny</option>  
                          </select>
                      </div>
    		            </div>
                    <div class="row">
              				<div class="col-lg-12">
                          <label for="nama">Nama :</label><br>
                          <input type="text" name="nama" class="form-control">
              				</div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                          <label>Tanggal lahir :</label>
                        <div class="row">
                          <div class="col-md-4">
                             <select id="day" name="day" class="form-control">
                                <option value="0">Day</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                             </select>  
                          </div>
                          <div class="col-md-4">
                              <select id="month" name="month" class="form-control">
                                <option value="0">Month</option>
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">Juli</option>
                                <option value="8">Agustus</option>
                                <option value="9">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                              </select>
                          </div>
                          <div class="col-md-4">
                              <select id="year" name="year" class="form-control">
                                <option value="0">year</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                              </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12">
                          <label for="Notelpon">Nomor Telepon :</label><br>
                          <input type="text" name="notelp" placeholder="tulis angka saja" class="form-control">
                      </div>
                      
                    <div class="fieldset-heading">
                        <h2 class="fieldset-title">Login Anda</h2>
                    </div>           

                      <div class="col-lg-12">
                          <label for="Notelpon">Email :</label><br>
                          <input type="text" name="email" class="form-control">
                      </div>
                      <div class="col-lg-12">
                          <label for="Password">Password :</label><br>
                          <input type="password" name="password"  class="form-control">
                      </div>
                      <div class="col-lg-12">
                          <label for="Konfpass">Konfirmasi Password :</label><br>
                          <input type="password" name="konfpass" class="form-control">
                      </div>                      

                    </div>
                        <button type="submit" class="btn btn-red btn-lg btn-submit" data-target="#tab">Buat Akun</button>
         </form>

	</div>
</div>