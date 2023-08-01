<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class yoni extends CI_Controller {
    
    public function __construct(){

		parent::__construct();

		if(!isset($_SESSION['usuario'])){
			redirect(base_url().'index.php/iniciar');
		
		}
		
		$this->load->model('pasar');
		$this->load->model('ModalProductos');
		$this->load->model('carrito');
		
	}

	public function index()
	{
		$this->load->view('administrador/cabecera');
		$this->load->view('administrador/panel');

		//$this->load->model("listar");
		//$resultado = $this->listar->listar1();
		//$this->load->view('administrador/contenido', array(
		//	"agregar" => $resultado
		//));


		$resultado = $this->ModalProductos->listar();
		$this->load->view('administrador/contenido', array(
		    "listando" => $resultado
		));
		$this->load->view('administrador/footer');
	}

	

	public function Eliminar($id)
	{
		$this->ModalProductos->delete($id);

		echo '<script>
            alert("Producto eliminado correctamente");
         </script>';
        echo '<script>window.location.href="http://localhost:8000/arachoco/index.php/administrador"</script>';	
	}	

	public function EliminarCarrito($id)
	{
		$this->carrito->delete($id);

		echo '<script>
            alert("Producto eliminado correctamente");
         </script>';
        echo '<script>window.location.href="http://localhost:8000/arachoco/index.php/sitio"</script>';	
	}	

	public function modificarVista($id)
	{ 
		$producto = $this->ModalProductos->traer1($id);
		$this->load->view('productos/modificar', array('producto' =>$producto));
	}

	public function editar(){
		/*var_dump($this->input->post());
		echo"--------------------------------------------------------------------";
		echo "LOS DATOS HAN SIDO MODIFICADOS";*/
		$datos = array(
		   "Nombrep" => $this->input->post("Nombrep"),
		   "DescriP" => $this->input->post("DescriP"),
		   "Medidas" => $this->input->post("Medidas"),
		   "Garantia" => $this->input->post("Garantia"),
		   "Valor" => $this->input->post("Valor"),
		   "Descuentos" => $this->input->post("Descuentos"),
		   "Promociones" => $this->input->post("Promociones"),
		  );  
		//$resultado = $this->db->insertOne($datos);
		$resultado = $this->ModalProductos->actualizar($this->input->post("_id"), $datos);
		
		if($resultado > 0)
		{
			redirect(base_url().'index.php/administrador');
		}else{
			//var_dump($this->input->post());
			//echo"--------------------------------------------------------------------";
		    //echo "LAS MODIFICACIONES DE LOS DATOS SE HACEN PERO NO REDIRIGE A LA PAGINA ";
			//redirect(base_url().'index.php/administrador');
		}
		
			//redirect(base_url().'index.php/administrador');
		  /*echo '<script>
            alert("Producto modificado correctamente");
           </script>';
          echo '<script>window.location.href="http://localhost/arachoco/index.php/administrador"</script>';*/	
		
    }

	public function mostrarCarrito()
	{
        $conteo = $this->carrito->contar();
		//var_dump($conteo);
		
	}

    
	}
	
	

