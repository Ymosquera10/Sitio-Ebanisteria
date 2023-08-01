<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("ModalProductos");
		$this->load->model("usuario");
		$this->load->model("carrito");
		$this->load->model("pasar");
	}


	public function sitio()
	{
		$datos = array(
				$this->load->model("ModalProductos"),
			"pasando" => $this->ModalProductos->listar(),
		);

		$this->load->view('sitio/index', $datos);

	}


	public function productos()
	{
		$this->load->view('productos/agregar');
	}

	public function filtrar()
	{
		$this->load->view('filtrar/fil');
	}

	public function personas()
	{
		$this->load->view('personas/datos');
	}

	public function contacto()
	{
		$this->load->view('contacto/formulario');
	}

	public function guardar()
	{
		$data = array(
			'Nombre' => $this->input->post("Nombre"),
			'Correo' => $this->input->post("Correo"),
			'Mensaje' => $this->input->post("Mensaje"),
		);

		if ($this->pasar->recibir($data) >= 1) {
			$this->session->set_flashdata("insert", true);
			echo '<script>
                    alert("Mensaje enviado correctamente");
                    </script>';
			echo '<script>window.location.href="http://localhost:8000/arachoco/index.php/sitio"</script>';
		} else {
			redirect(base_url() . 'index.php./contacto');
		}

	}

	public function guardar2()
	{
		$config['upload_path'] = './assets/archivo';
		$config['allowed_types'] = 'jfif|jpg|jpeg|gif|png';
		$config['file_name'] = 'subida';
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('Imagen')) {
			//$error = array('error' => $this->upload->disp)
			//echo "error";
			$this->session->set_userdata('error_imagen', true);
			redirect(base_url() . 'index.php/productos');
		} else {
			$this->load->model("ModalProductos");
			$resultado = $this->ModalProductos->insertar($this->input->post(), $this->upload->data());
			echo '<script>
                    alert("Producto agregado correctamente");
                    </script>';
			echo '<script>window.location.href="http://localhost:8000/arachoco/index.php/administrador"</script>';

			if ($resultado) {
			}

		}

	}

	public function carro()
	{
		$data = array(
			'Nombrep' => $this->input->post("Nombrep"),
			'DescriP' => $this->input->post("DescriP"),
			'Medidas' => $this->input->post("Medidas"),
			'Garantia' => $this->input->post("Garantia"),
			'Valor' => $this->input->post("Valor"),
			'Descuentos' => $this->input->post("Descuentos"),
			'Promociones' => $this->input->post("Promociones"),
		);
		

		if ($this->carrito->carrito1($data) >= 1) {
			$this->session->set_flashdata("insert", true);
			//var_dump($_POST);
			//echo "hola mundo";
			redirect(base_url().'index.php/sitio');
		} else {
			redirect(base_url().'index.php/ver_carrito');
		}

	}


	public function iniciar()
	{
		$this->load->view('iniciar/sesion');

	}

	public function verificar()
	{


		$this->load->model("usuario");
		$resultado = $this->usuario->buscar($this->input->post('Correo'), $this->input->post('Contraseña'));

		if ($resultado) {
			$usuario = array(
				'Nombre' => $resultado
			);
			$this->session->set_userdata('usuario', $resultado);
			redirect(base_url() . 'index.php/administrador');
		} else {
			$this->session->set_userdata('error_session', true);
			//redirect(base_url().'index.php/iniciar');

		}





	}

	public function cerrar()
	{
		$this->session->set_userdata('usuario');
		redirect(base_url() . 'index.php/iniciar');
	}

	public function camas()
	{
		$this->load->view('camas/camas');
	}

	public function chifonier()
	{
		$this->load->view('chifonier/chifonier');
	}
	public function cocina()
	{
		$this->load->view('cocina/cocina');
	}

	public function comedores()
	{
		$this->load->view('comedores/comedores');
	}

	public function muebles()
	{
		$this->load->view('muebles/muebles');
	}

	public function sitioprodu()
	{
		$this->load->view('sitioprodu/sitioprodu');
	}

	public function informacion()
	{
		$this->load->view('informacion/info');
	}

	public function Ver_carrito()
	{

		$resultado = $this->carrito->Traer_carrito();
		$this->load->view('Añadir_carrito/ver_carrito', array(
		    "listando" => $resultado
		));
	}
	public function registro(){
		$this->load->view('sitio/registro');
	}

}