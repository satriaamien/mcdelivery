
    <div class="pages-sidebar">
        <div class="sidebar-menu">
            <h2 class="menu-category">Akun Saya</h2>
            <ul class="menu">
                <li class="menu-item"><a class="menu-item-target" href="#">Lacak Pesanan</a></li>
                <li class="menu-item"><a class="menu-item-target" href="#">Pesanan Lalu</a></li>
                <li class="menu-item"><a class="menu-item-target" href="<?php echo base_url('Account/gantiFavorit')?>">Favorit Saya</a></li>
                <li class="menu-item"><a class="menu-item-target" href="<?php echo base_url('Account/gantiAlamat')?>">Buku Alamat</a></li>
                <li class="menu-item selected"><a class="menu-item-target" href="<?php echo base_url('Account/index') ?>">Pengaturan Akun</a></li>
                <li class="menu-item"><a class="menu-item-target" href="<?php echo base_url('Account/gantiPass') ?>">Ganti Password</a></li>
            </ul>
        </div>
    </div>


    <div class="page-content">
        <form action="<?php echo base_url('Alamat');?>" method="post">      
                    <div class="fieldset-heading">
                        <h2 class="fieldset-title">Alamat Pengantaran</h2>
                        <p class="instructions">* Harus diisi</p>
                    </div>              
                    <div class="row">
                                <div class="form-group">
                                <label class="field-label">Kota :</label><br> 
                                    <select name="kota">
                                    <option value="BALIKPAPAN">BALIKPAPAN</option>
                                    <option value="BANDUNG">BANDUNG</option>
                                    <option value="BATAM">BATAM</option>
                                    <option value="BEKASI">BEKASI</option>
                                    <option value="BOGOR">BOGOR</option>
                                    <option value="CILEGON">CILEGON</option>
                                    <option value="CIREBON">CIREBON</option>
                                    <option value="DENPASAR">DENPASAR</option>
                                    <option value="DEPOK">DEPOK</option>
                                    <option value="GRESIK">GRESIK</option>
                                    <option value="JAKARTA">JAKARTA</option>
                                    <option value="JEMBER">JEMBER</option>
                                    <option value="JOGJAKARTA">JOGJAKARTA</option>
                                    <option value="KARAWANG">KARAWANG</option>
                                    <option value="KEDIRI">KEDIRI</option>
                                    <option value="LAMPUNG">LAMPUNG</option>
                                    <option value="MAKASAR">MAKASAR</option>
                                    <option value="MALANG">MALANG</option>
                                    <option value="MANADO">MANADO</option>
                                    <option value="MATARAM">MATARAM</option>
                                    <option value="MEDAN">MEDAN</option>
                                    <option value="PADANG">PADANG</option>
                                    <option value="PALEMBANG">PALEMBANG</option>
                                    <option value="PEKANBARU">PEKANBARU</option>
                                    <option value="SAMARINDA">SAMARINDA</option>
                                    <option value="SECRET CITY">SECRET CITY</option>
                                    <option value="SEMARANG">SEMARANG</option>
                                    <option value="SERANG">SERANG</option>
                                    <option value="SIDOARJO">SIDOARJO</option>
                                    <option value="SOLO">SOLO</option>
                                    <option value="SUKABUMI">SUKABUMI</option>
                                    <option value="SURABAYA">SURABAYA</option>
                                    <option value="TANGERANG">TANGERANG</option>
                                    <option value="TASIKMALAYA">TASIKMALAYA</option>
                                    <option value="TEGAL">TEGAL</option>
                                </select>
                            </div>
                        </div>
                
                <div class="row">   
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label class="field-label">Cari Alamat : </label>
                                <input type="text" name="alamat" value="" class="form-control input-lg"/>
                            </div>
                        </div>
                </div>

                <button type="submit" class="btn btn-red btn-lg btn-submit" data-target="#tab">Cari</button>
        </form>

        <div>
            <table class="table" id="tab">
              <thead>
                <tr>
                  <th scope="col">Nama Tempat</th>
                  <th scope="col">Nama Jalan</th>
                  <th scope="col">Kelurahan </th>
                  <th scope="col">Kota</th>
                </tr>
              </thead>
              <tbody>

                <?php foreach ($dataAlamat as $d) {
                    # code...
                    if(empty($this->session->userdata('data_update'))){
                 ?>
                  <tr class='clickable-row' data-href='<?php echo base_url('Alamat/setAlamat/').$d->id_deskripsi;?>'>
                  <?php }else{

                    ?>
                  <tr class='clickable-row' data-href='<?php echo base_url('Alamat/updateAlamat/').$d->id_deskripsi;?>'>

                <?php } ?>
                      <td><?php echo $d->nama_tempat ?></td>
                      <td><?php echo $d->nama_jalan ?></td>
                      <td><?php echo $d->kelurahan ?></td>
                      <td><?php echo $d->kota ?></td>
                    </tr>
                 <?php } ?>
              </tbody>
            </table>
        </div>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".clickable-row").click(function() {
                    window.location = $(this).data("href");
                });
            });
        </script>

    </div>
</div>
