<!DOCTYPE html>
<html>
    <head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script></head>
<body>
    <header>
        <div class="topnav">
            <?php include("include/header.html"); ?>
        </div>
    </header>
    <div class="banner">
            <?php include("include/banner.html"); ?>
        </div>
    <div id="wrapper">
        <section>
            <article>
                <header id="Contacts">
                    <section class="second">
                        <!--Section: Contact v.2-->
                        <section class="mb-4">
                            <!--Section heading-->
                            <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                            <!--Section description-->
                            
                            
                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-9 mb-md-0 mb-5">
                                    <form id="contact-form" name="contact-form" action="contactform.php" method="POST">
                                        <!--Grid row-->
                                        <div class="row">
                                            <!--Grid column-->
                                            <div class="col-md-6">
                                                <div class="md-form mb-0">
                                                    <input type="text" id="name" name="name" class="form-control">
                                                    <label for="name" class="">Your name</label>
                                                </div>
                                            </div>
                                            <!--Grid column-->
                                            <!--Grid column-->
                                            <div class="col-md-6">
                                                <div class="md-form mb-0">
                                                    <input type="text" id="email" name="email" class="form-control">
                                                    <label for="email" class="">Your email</label>
                                                </div>
                                            </div>
                                            <!--Grid column-->
                                        </div>
                                        <!--Grid row-->
                                        <!--Grid row-->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="md-form mb-0">
                                                    <input type="text" id="subject" name="subject" class="form-control">
                                                    <label for="subject" class="">Subject</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Grid row-->
                                        <!--Grid row-->
                                        <div class="row">
                                            <!--Grid column-->
                                            <div class="col-md-12">
                                                <div class="md-form">
                                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                                    <label for="message">Your message</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Grid row-->
                                        <div class="text-center text-md-left">
                                            <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                                        </div>
                                        <div class="status"></div>
                                </div>
                                <!--Grid column-->
                                <!--Grid column-->
                                <div class="col-md-3 text-center">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>                                     
                                            <p class="envelope">Fort Myers Fl, 33901</p>
                                        </li>
                                        <li>
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                            <p class="envelope">(813)-434-0169</p>
                                        </li>
                                        <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                            <p class="envelope">leeboyz@leeboyzdeveloperz.tech</p>
                                        </li>
                                    </ul>
                                </div>
                                <!--Grid column-->
                            </div>
                        </section>
                </header>
            </article>
        </section>
    </div>
    <footer class="main-footer">
        <?php include("include/footer.html"); ?>
    </footer>
</body>

</html>