<?php include 'header.php';?>

<!-- register-information -->
<div id="information" class="spacer reserve-info ">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-md-8">
                <img src="https://www.pandotrip.com/wp-content/uploads/2019/06/Famous-view-of-Ravello-the-Amalfi-Coast-Italy.jpg">
            </div>
            <div class="col-sm-5 col-md-4">
                <h3>REGISTRARSE</h3>
                <form role="form" class="wowload fadeInRight" action="./formulario1.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="Dni" placeholder="Dni" required>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-6">
                                <input type="text" class="form-control" name="name" placeholder="Name" required>
                            </div>
                            <div class="col-xs-6">
                                <input type="text" class="form-control" name="surname" placeholder="Surname/s" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="Phone" class="form-control" name="phone" placeholder="Phone" required>

                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>

                    <div class="row">

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
