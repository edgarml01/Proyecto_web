<?php 
    require_once('Views/Generals/header_tienda.php');
    $productos =$data['prods']  ;
?>
	<section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">

            <div class="row">

              <div class="col-lg-7">
                <h5 class="mb-3"><a href="<?=base_url()?>" class="text-body"><i
                      class="fas fa-long-arrow-alt-left me-2"></i>Continuar comprando</a></h5>
                <hr>

                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    <p class="mb-1">Carrito de compras</p>
                    <p class="mb-0">Usted tiene <?=count($_SESSION['arrIdProductos'])?> en su carrito </p>
                  </div>
                </div>
                <?php 
                    //echo json_encode($productos);
                    foreach ($productos as $p) {
                ?>
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                          <img
                            
                            src="<?php if (!empty($p['images']))echo$p['images'][0]['url_image']; 
                            else{
                                echo media().'images/default-image.jpg';
                            }?>"
                            class="img-fluid rounded-3" alt="Shopping item" style="heigth: 65px;">
                        </div>
                        <div class="ms-3">
                          <h5><?=$p['nombre_producto']?></h5>
                          <p class="small mb-0">SKU: <?=$p['SKU']?></p>
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        <div style="width: 50px;">
                          <h5 class="fw-normal mb-0">1</h5>
                        </div>
                        <div style="width: 80px;">
                          <h5 class="mb-0">$ <?=$p['precio']?></h5>
                        </div>
                        <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                    <?php }?>            
              </div>
              <div class="col-lg-5">

                <div class="card bg-primary text-white rounded-3">
                  <div class="card-body">
                    
                    <form class="mt-4">
                      <div data-mdb-input-init class="form-outline form-white mb-4">
                        <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                          placeholder="Cardholder's Name" />
                        <label class="form-label" for="typeName">Cardholder's Name</label>
                      </div>

                      <div data-mdb-input-init class="form-outline form-white mb-4">
                        <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                          placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                        <label class="form-label" for="typeText">Card Number</label>
                      </div>

                      <div class="row mb-4">
                        <div class="col-md-6">
                          <div data-mdb-input-init class="form-outline form-white">
                            <input type="text" id="typeExp" class="form-control form-control-lg"
                              placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                            <label class="form-label" for="typeExp">Expiration</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div data-mdb-input-init class="form-outline form-white">
                            <input type="password" id="typeText" class="form-control form-control-lg"
                              placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                            <label class="form-label" for="typeText">Cvv</label>
                          </div>
                        </div>
                      </div>

                    </form>

                    <hr class="my-4">

                    <div class="d-flex justify-content-between">
                      <h2 class="mb-2">Subtotal</h2>
                      <h2 class="mb-2">$4798.00</h2>
                    </div>
                    <a href="<?=base_url().'carrito/procesarPago'?>" class="" >
                        <img src="<?=media().'/images/continue.png'?>" alt="" style="height:105px">
                    </a>
                  </div>
                </div>

              </div>    

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
	<?php require_once('Views/Generals/footer_tienda.php');?>