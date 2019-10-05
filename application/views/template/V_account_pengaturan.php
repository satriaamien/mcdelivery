<div class="row">
	<div class="pages-sidebar">
		<div class="sidebar-menu">
			<h2 class="menu-category">Akun Saya</h2>
			<ul class="menu">
				<li class="menu-item"><a class="menu-item-target" href="#">Lacak Pesanan</a></li>
				<li class="menu-item"><a class="menu-item-target" href="<?php echo base_url('Account/pesananLalu') ?>">Pesanan Lalu</a></li>
				<li class="menu-item"><a class="menu-item-target" href="<?php echo base_url('Account/gantiFavorit')?>">Favorit Saya</a></li>
				<li class="menu-item"><a class="menu-item-target" href="<?php echo base_url('Account/gantiAlamat')?>">Buku Alamat</a></li>
				<li class="menu-item selected"><a class="menu-item-target" href="<?php echo base_url('Account/index') ?>">Pengaturan Akun</a></li>
				<li class="menu-item"><a class="menu-item-target" href="<?php echo base_url('Account/gantiPass') ?>">Ganti Password</a></li>
			</ul>
		</div>	
	</div>
	<div class="col-xs">
		<div class="page-title">
			<h1>Pengaturan Akun</h1>
			<?php $data = $this->session->userdata('akunLogin');
			?>
		</div>
		
		<div class="panel-lg panel panel-default" style="width: 102%;margin-left:-5px; padding: 6px;">
			<div class="panel-heading" style="text-align: left;">
				<h3 style="margin-left: 20px;">Edit details</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-12">
						<form action="<?php echo base_url('Account/edit'); ?>" method="post" role="form">
							<div class="form-register error-container">
							</div>
							<fieldset class="fieldset">
								<div class="fieldset-heading">
									<h2 class="fieldset-title" style="line-height: 0;">Tentang Anda</h2>
									<p class="instructions">* Harus diisi</p>
								</div>
								<div class="row">
									<div class="form-group kol">
										<label class="field-label " for="form_accountsetting_title"><span>Sebutan:</span></label>
										<div class="row input-row ">
											<div class="col-xs-6">
												<select name="title" id="form_accountsetting_title" class="form-control select-lg" tabindex="0" aria-disabled="false">
													<option value="Mr">Tn.</option>
													<option value="Mrs">Ny.</option>
													<option value="Miss">Nn.</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group kol">
											<label><span class="required-symbol">*</span>Nama:</label>
											<input type="text" name="nama" class="form-control" value="<?php echo $data['nama'] ?>">
										</div> 
									</div>
								</div>
								<div class="form-group">
									<label class="field-label" for="form_register_dob_day">Tanggal Lahir:</label>
									<div class="row input-row">
										<div class="col-xs-6">
											<select name="day" id="" class="form-control select-lg selectdate-day input-group-form-control" tabindex="0" aria-disabled="false">
												<option value="">Day</option>
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
												<option value="28">28</option>
												<option value="29">29</option>
												<option value="30">30</option>
												<option value="31">31</option>
											</select>
										</div>
										<div class="form-group">
											<select name="month" id="" class="form-control select-lg selectdate-month input-group-form-control">
												<option value="">Month</option>
												<option value="1">January</option>
												<option value="2">February</option>
												<option value="3">March</option>
												<option value="4">April</option>
												<option value="5">May</option>
												<option value="6">June</option>
												<option value="7">July</option>
												<option value="8">August</option>
												<option value="9">September</option>
												<option value="10">October</option>
												<option value="11">November</option>
												<option value="12">December</option>
											</select>
										</div>
										<div class="form-group col-xs-6">
											<select name="year" id=" form_register_dob_year" class="form-control select-lg selectdate-year input-group-form-control" tabindex="0" aria-disabled="false">
												<option value="">Year</option>
												<option value="2018">2018</option>
												<option value="2017">2017</option>
												<option value="2016">2016</option>
												<option value="2015">2015</option>
												<option value="2014">2014</option>
												<option value="2013">2013</option>
												<option value="2012">2012</option>
												<option value="2011">2011</option>
												<option value="2010">2010</option>
												<option value="2009">2009</option>
												<option value="2008">2008</option>
												<option value="2007">2007</option>
												<option value="2006">2006</option>
												<option value="2005">2005</option>
												<option value="2004">2004</option>
												<option value="2003">2003</option>
												<option value="2002">2002</option>
												<option value="2001">2001</option>
												<option value="2000">2000</option>
												<option value="1999">1999</option>
												<option value="1998">1998</option>
												<option value="1997">1997</option>
												<option value="1996">1996</option>
												<option value="1995">1995</option>
												<option value="1994">1994</option>
												<option value="1993">1993</option>
												<option value="1992">1992</option>
												<option value="1991">1991</option>
												<option value="1990">1990</option>
												<option value="1989">1989</option>
												<option value="1988">1988</option>
												<option value="1987">1987</option>
												<option value="1986">1986</option>
												<option value="1985">1985</option>
												<option value="1984">1984</option>
												<option value="1983">1983</option>
												<option value="1982">1982</option>
												<option value="1981">1981</option>
												<option value="1980">1980</option>
												<option value="1979">1979</option>
												<option value="1978">1978</option>
												<option value="1977">1977</option>
												<option value="1976">1976</option>
												<option value="1975">1975</option>
												<option value="1974">1974</option>
												<option value="1973">1973</option>
												<option value="1972">1972</option>
												<option value="1971">1971</option>
												<option value="1970">1970</option>
												<option value="1969">1969</option>
												<option value="1968">1968</option>
												<option value="1967">1967</option>
												<option value="1966">1966</option>
												<option value="1965">1965</option>
												<option value="1964">1964</option>
												<option value="1963">1963</option>
												<option value="1962">1962</option>
												<option value="1961">1961</option>
												<option value="1960">1960</option>
												<option value="1959">1959</option>
												<option value="1958">1958</option>
												<option value="1957">1957</option>
												<option value="1956">1956</option>
												<option value="1955">1955</option>
												<option value="1954">1954</option>
												<option value="1953">1953</option>
												<option value="1952">1952</option>
												<option value="1951">1951</option>
												<option value="1950">1950</option>
												<option value="1949">1949</option>
												<option value="1948">1948</option>
												<option value="1947">1947</option>
												<option value="1946">1946</option>
												<option value="1945">1945</option>
												<option value="1944">1944</option>
												<option value="1943">1943</option>
												<option value="1942">1942</option>
												<option value="1941">1941</option>
												<option value="1940">1940</option>
												<option value="1939">1939</option>
												<option value="1938">1938</option>
												<option value="1937">1937</option>
												<option value="1936">1936</option>
												<option value="1935">1935</option>
												<option value="1934">1934</option>
												<option value="1933">1933</option>
												<option value="1932">1932</option>
												<option value="1931">1931</option>
												<option value="1930">1930</option>
												<option value="1929">1929</option>
												<option value="1928">1928</option>
												<option value="1927">1927</option>
												<option value="1926">1926</option>
												<option value="1925">1925</option>
												<option value="1924">1924</option>
												<option value="1923">1923</option>
												<option value="1922">1922</option>
												<option value="1921">1921</option>
												<option value="1920">1920</option>
												<option value="1919">1919</option>
												<option value="1918">1918</option>
												<option value="1917">1917</option>
												<option value="1916">1916</option>
												<option value="1915">1915</option>
											</select>											
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group kol">
											<label class="field-label" for="form_accountsetting_contactno"><span class="required-symbol">*</span>Nomor Telepon:</label>
											<input type="text" class="form-control input-lg required number digit-only" maxlength="14" name="kontak" placeholder="Tulis Angka Saja" value="" aria-required="true">
										</div> 
									</div>
								</div>
							</fieldset>
							<!-- END Notification Channel -->
							<fieldset class="fieldset form-actions">
								<div class="form-group">
									<button type="submit" class="btn btn-red btn-xl btn-submit">Save Details</button>


								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>
</div>
