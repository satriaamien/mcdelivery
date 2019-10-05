<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_menu');
        $this->load->model('M_alamat');
		$this->load->library('cart');
		$this->load->library('form_validation');
           
     }
      

	

	public function menu($kategori)
	{
		# code...

        $akun = $this->session->userdata('akunLogin');
        
        if(!empty($this->session->userdata('_adrs'))){
            $check = $this->session->userdata('_adrs');
            $pilihAlamat = $this->M_alamat->getAlamatUserByDetailAlamat($akun['idAkun'],$check->id_detail,$check->idAlamat);
            $this->session->set_userdata('_adrs',$pilihAlamat);
        }

        $data = $this->M_alamat->getAlamatUser($akun['idAkun']);
        
		$dataMenu = $this->M_menu->getMenu($kategori);
		$this->load->view('template/header');	
		$this->load->view('template/V_menu',['dataMenu'=>$dataMenu]);
        $this->load->view('viewMenu/V_keranjang',['dataAlamat'=>$data]);
		$this->load->view('template/V_footer');
	}

    public function editPengiriman()
    {
       $akun = $this->session->userdata('akunLogin');
       $data = $this->M_alamat->getAlamatYangDipilih($akun['idAkun'],$this->input->post('address'));
       $this->session->set_userdata('_adrs',$data);
       redirect('Menu/menu/istimewa');
       
       // var_dump($this->session->userdata('_adrs'));
       // exit();
    }
    public function calculatePayment()
    {
        # code...
        if ($cart = $this->cart->contents())
        {
                $total = 0;
                foreach ($cart as $item)
                {
                  
                    $total += $item['price'] * $item['qty'];

                }
                $this->session->set_userdata('total',$total);
        }else{
                $this->session->set_userdata('total',0);
        }
    }

    function hapusMenu($rowid)
    {
        if ($rowid=="all")
            {
                $this->cart->destroy();
            }
        else
            {
                $data = array('rowid' => $rowid,
                              'qty' =>0);
                $this->cart->update($data);
                $this->calculatePayment();
            }
            redirect('Menu/menu/istimewa');
    }

    
    public function editpage($idMenu)
    {
        $cart_info = $_POST['cart'];
        foreach( $cart_info as $id => $cart)
        {
            if($idMenu == $cart['id'] ){
                $rowid = $cart['rowid'];
                $nama = $cart['name'];
                $idMenu = $cart['id'];
                $price = $cart['price'];
                $gambar = $cart['gambar'];
                $amount = $price * $cart['qty'];
                $qty = $cart['qty'];
                $data = array('rowid' => $rowid,
                                'id' => $idMenu,
                                'nama' => $nama,
                                'price' => $price,
                                'gambar' => $gambar,
                                'amount' => $amount,
                                'qty' => $qty);
                $this->load->view('viewMenu/V_edit',['dataMenu'=>$data]); 
                $this->calculatePayment();
                break;
            }else{
            }
        }
    }


    public function sukses($value='')
    {
        # code...
        $this->load->view('template/header');
        $this->load->view('viewMenu/sukses');
        $this->load->view('template/V_footer');
    }

    function ubah_cart()
    {

        $data = array('rowid' => $this->input->post('rowid'),
                        'price' => $this->input->post('harga'),
                        'gambar' => $this->input->post('gambar'),
                        'qty' => $this->input->post('qty')
                    );
        $this->cart->update($data);
        $this->calculatePayment();
        redirect('Menu/menu/istimewa');
    }

    public function tambahMenu()
    {
		# code...

    	$data_menu= array('id' => $this->input->post('id'),
    		'nama' => $this->input->post('nama'),
    		'harga' => $this->input->post('harga'),
    		'gambar' => $this->input->post('gambar')
    	);
		$this->load->view('viewMenu/V_pesan',['dataMenu'=>$data_menu]);
    }
    public function tambahMenuDetail()
    {
    	# code...
	   	$data_menu= array('id' => $this->input->post('id'),
    		'name' => $this->input->post('nama'),
    		'price' => $this->input->post('harga'),
    		'gambar' => $this->input->post('gambar'),
    		'qty' =>$this->input->post('jumlah')
    	);

    	$this->cart->insert($data_menu);
        $this->calculatePayment();
        redirect('Menu/menu/istimewa');
        
    }

    public function prosesMenu()
    {
			# code...

    	$dataAkun = $this->session->userdata('akunLogin');
    	
    	$id_pelanggan = $dataAkun['idAkun'];

    	$data_transaksi = array('tanggal' => date('Y-m-d'),
    							'idAkun' => $id_pelanggan
    	 );

    	$id_transaksi = $this->M_menu->addTransaksi($data_transaksi);
    	
	    if ($cart = $this->cart->contents())
        {
                $total = 0;
                foreach ($cart as $item)
                {
                    $data_detail = array('idTransaksi' =>$id_transaksi,
                                    'idMenu' => $item['id'],
                                    'jumlahItem' => $item['qty'],
                                    'harga' => $item['price']);
                    $proses = $this->M_menu->addDetailMenu($data_detail);
                    $total += $item['price'] * $item['qty'];
                }
                $this->M_menu->setTotalTransaksi($total,$id_transaksi);
                $this->M_menu->setAlamatTransaksi($this->session->userdata('alamatKirim'),$id_transaksi);
		}
        // var_dump($this->session->userdata('alamatKirim'));
        // exit();
        $this->session->unset_userdata('alamatKirim');
        $this->session->unset_userdata('total');
        $this->cart->destroy();
        redirect('Menu/sukses');
	}
}



/* End of file Menu.php */
/* Location: ./application/controllers/Menu.php */