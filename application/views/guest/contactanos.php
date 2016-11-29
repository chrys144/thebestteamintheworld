 <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contactanos</h2>
                    <h3 class="section-subheading text-muted">Atención todos los datos que proporciones en este apartado serán vistos por todas las personas que quieran conocerlos, por lo que recomendamos no otorgar datos personales, nada real para ser prácticos; buen día :)</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name." maxlength="50">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email"  class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address." maxlength="50">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel"  class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number." maxlength="10">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea  class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message." maxlength="255"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Envia tus datos</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>