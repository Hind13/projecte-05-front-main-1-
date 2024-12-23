<?php include 'header.php';?>

<!-- iniciarsesion-information -->
<div id="information" class="spacer iniciarsesion-info ">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-md-8">
                <img src="https://www.pandotrip.com/wp-content/uploads/2019/06/Famous-view-of-Ravello-the-Amalfi-Coast-Italy.jpg">
            </div>
            <div class="col-sm-5 col-md-4">
                <h3>INICIAR SESIÓN</h3>
                <form role="form" class="wowload fadeInRight" action="./formulario1.php" method="post">

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                        <figure>
                                <figcaption>
                                    Enviar :
                                </figcaption>
                            <input type="submit" class="btn btn-default"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- register-information -->



<?php include 'footer.php';?>
