<?php 
require_once("Libraries/Core/Mysql.php");
trait TraitClientes{
	private $con;
	private $intIdUsuario;
	private $strNombre;
	private $strApellido;
	private $intTelefono;
	private $strEmail;
	private $strPassword;
	private $strToken;
	private $intTipoId;
	private $intIdTransaccion;
    public function insertPedido($idUser){
		$this->con = new Mysql();
		$query_insert  = "INSERT INTO transaccion(null, DEFAULT ,iduser) 
							  VALUES(?)";
		$arrData = array($idUser
    					);
		$request_insert = $this->con->insert($query_insert,$arrData);
	    $return = $request_insert;
	    return $return;
	}
    public function insertDetalle(int $idpedido, int $productoid, int $cantidad){
		$this->con = new Mysql();
		$query_insert  = "INSERT INTO detalles_transaccion(productos_idproductos,transaccion_idtransaccion,cantidad) 
							  VALUES(?,?,?)";
		$arrData = array($productoid,
    					$idpedido,
						$cantidad
					);
		$request_insert = $this->con->insert($query_insert,$arrData);
	    $return = $request_insert;
	    return $return;
	}
}
    
?>