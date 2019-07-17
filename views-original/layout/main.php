

            <?php
            if (isset($_SESSION['errorConnectionDB'])) {
                $error = $_SESSION['errorConnectionDB'];
                ?>
                <div class="row mb-3">
                    <div class="col-8 offset-2 ">
                        <div class="alert alert-danger text-align-center" role="alert">
                            <?= $error ?>
                        </div>
                        <h3 class=""></h3>
                    </div>
                </div>

                <?php
                unset($_SESSION['errorConnectionDB']);
            }
            ?>


            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="assets/images/taxis-ny.jpg" alt="Seguridad Industrial">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/images/taxis-london.jpg" alt="Seguridad Taller">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/images/taxi-ny-2.jpg" alt="Seguridad Industrial">
                    </div>
                    <div class="overlay">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-6 offset-md-6 text-center text-md-right">
                                    <h1>Autos Van Den Bercken</h1>
                                    <p class="d-none d-md-block text-align-right">
                                        Coches de ocasión y segunda mano en <br> Autos Van Den Bercken.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
