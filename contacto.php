<?php
    include 'includes/header.php';
?>
    <!-- Header -->
    <header class="contacto">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Contacto</div>
            </div>
        </div>
    </header>
    
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">¿Dónde nos encontramos?</h2>
                    <h3 class="section-subheading text-muted">Localización de nuestro restaurante</h3>
                </div>
            </div>
            <div class="">
                 <div class="row">
                    <div class="col-md-8">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3082.9221571653216!2d-0.41457598506167503!3d39.40326712457231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604e82a8672a35%3A0xed578f5f80fed685!2sFlorida+Universitaria!5e0!3m2!1ses!2ses!4v1464526770795" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4 text-center">
                            <address>
                                <h5>Restaurante Alvaro S.L.</h5>
                                <p>Polígono Industrial VII<br>
                                    Avenida de Picassent, 24.<br>
                                    46460 Silla (Valencia)<br>
                                    España</p>
                                <p>Tel: +34 961 212 458</p>
                                <p>Email: restaurante@alvaro.com</p>
                            </address>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    
        <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contacto</h2>
                    <h3 class="section-subheading text-muted">Ponte en contacto con nosotros.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre *" id="name" required data-validation-required-message="Por favor introduzca su nombre.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" id="email" required data-validation-required-message="Por favor introduzca su email.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Teléfono *" id="phone" required data-validation-required-message="Por favor introduzca su teléfono.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Mensaje *" id="message" required data-validation-required-message="Por favor introduzca un mensaje."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    
    
<?php
    include 'includes/footer.php';
?>