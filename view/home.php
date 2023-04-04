<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 08.05.2017
 * Time: 09:16
 */

// tampon de flux stocké en mémoire
ob_start();
$title = "Colocation - Home";
?>

    <!-- find section -->
    <section class="find_section ">
        <div class="container">
            <form action="../index.php?action=displayLocation" method="post">
                <div class=" form-row">
                    <div class="col-md-5">
                        <select name="habitation" id="habitation-select" class="form-control">
                            <option value="">Tout type d'habitation</option>
                            <option value="Maison">Maison</option>
                            <option value="Appartement">Appartement</option>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <select name="localisation" id="localisation-select"  class="form-control">
                            <option value="">Tout localisation</option>
                            <option value="Yverdon">Yverdon</option>
                            <option value="Ste-Croix">Ste-Croix</option>
                            <option value="Grandson">Grandson</option>
                            <option value="Fribourg">Fribourg</option>
                            <option value="Renens">Renens</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="">
                            search
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- end find section -->


    <!-- about section -->

    <section class="about_section layout_padding-bottom">
        <div class="square-box">
            <img src="../view/content/images/square.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="../view/content/images/about-img.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                About Our Apartment
                            </h2>
                        </div>
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration
                            in
                            some form, by injected humour, or randomised words
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- sale section -->

    <section class="sale_section layout_padding-bottom">
        <div class="container-fluid">
            <div class="heading_container">
                <h2>
                    Nos tops locations
                </h2>
                <p>
                    Voici le top 3 des biens les plus vus
                </p>
            </div>
            <div class="sale_container">
                <?php for($i=0;$i <3; $i++) :?>
                <div class="box">
                    <div class="img-box">
                        <a href="../index.php?action=displayDetail&Id=<?=$biens[$i]['Id']?>&Habitation=<?=$biens[$i]['Habitation']?>&Localisation=<?=$biens[$i]['Localisation']?>">
                        <img src="<?=$biens[$i]['Image']?>" alt="">
                        </a>
                    </div>
                    <div class="detail-box">
                        <h6>
                            <?=$biens[$i]['Titre']?>
                        </h6>
                        <p>
                            <?=$biens[$i]['Localisation']?>
                        </p>
                    </div>
                </div>
                <?php endfor;?>
            </div>
            <div class="btn-box">
                <a href="">
                    Find More
                </a>
            </div>
        </div>
    </section>

    <!-- end sale section -->

    <!-- price section -->

    <section class="price_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Formulaire
                </h2>
                <p>
                    Remplissez le formulaire ci-dessus
                </p>
            </div>
            <div class="price_container">

                <div class="box">
                    <div class="detail-box">
                        <div class="heading-box">
                            <h4>

                            </h4>
                            <h6>
                                Appartement ou maison
                            </h6>
                        </div>
                        <div class="text-box">

                            <ul>
                                <li>
                                    Remplissez le
                                </li>
                                <li>
                                   formulaire
                                </li>
                                <li>
                                    afin de
                                </li>
                                <li>
                                   débloquer
                                </li>
                                <li>
                                   une
                                </li>
                                <li>
                                   colocations
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="btn-box">
                        <a href="../index.php?action=displaySendFormRequest">
                            Remplire formulaire
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end price section -->

    <!-- deal section -->

    <section class="deal_section layout_padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                Very Good Deal For House
                            </h2>
                        </div>
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration
                            in
                            some form, by injected humour, or randomised words which don't look even slightly
                            believable.
                        </p>
                        <a href="">
                            Get A Quote
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <div class="box b1">
                            <img src="../view/content/images/d-1.jpg" alt="">
                        </div>
                        <div class="box b1">
                            <img src="../view/content/images/d-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end deal section -->


    <!-- us section -->
    <section class="us_section layout_padding2">

        <div class="container">
            <div class="heading_container">
                <h2>
                    Why Choose Us
                </h2>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="../view/content/images/u-1.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h3 class="price">
                                1000+
                            </h3>
                            <h5>
                                Years of House
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="../view/content/images/u-2.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h3>
                                20000+
                            </h3>
                            <h5>
                                Projects Delivered
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="../view/content/images/u-3.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h3>
                                10000+
                            </h3>
                            <h5>
                                Satisfied Customers
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="../view/content/images/u-4.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h3>
                                1500+
                            </h3>
                            <h5>
                                Cheap Rates
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="">
                    Get A Quote
                </a>
            </div>
        </div>
    </section>

    <!-- end us section -->

    <!-- client secction -->

    <section class="client_section layout_padding">
        <div class="container-fluid">
            <div class="heading_container">
                <h2>
                    Voici nos fameux développeurs !!
                </h2>
            </div>
            <div class="client_container">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php $i = 0?>
                        <?php foreach ($develop as $item) :?>
                        <?php if ($i == 0) :?>
                        <div class="carousel-item active">
                        <?php $i++;?>
                        <?php else :?>
                        <div class="carousel-item">
                        <?php endif;?>
                            <div class="box">
                                <div class="img-box">
                                    <img src="<?=$item['Image']?>" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        <span><?=$item['Prénom']?> <?=$item['Nom']?></span>
                                        <hr>
                                    </h5>
                                    <p>
                                        <?=$item['Description']?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- end client section -->

    <!-- contact section -->

    <section class="contact_section ">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Get In Touch
                </h2>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 px-0">
                    <div class="map_container">
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                                    width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 ">
                    <div class="form_container">
                        <form action="">
                            <div>
                                <input type="text" placeholder="Name"/>
                            </div>
                            <div>
                                <input type="email" placeholder="Email"/>
                            </div>
                            <div>
                                <input type="text" placeholder="Phone Number"/>
                            </div>
                            <div>
                                <input type="text" class="message-box" placeholder="Message"/>
                            </div>
                            <div class="d-flex ">
                                <button>
                                    Send
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- end contact section -->


    <!-- info section -->
    <section class="info_section ">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="info_contact">
                        <h5>
                            About Apartment
                        </h5>
                        <div>
                            <div class="img-box">
                                <img src="../view/content/images/location.png" width="18px" alt="">
                            </div>
                            <p>
                                Address
                            </p>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="../view/content/images/phone.png" width="12px" alt="">
                            </div>
                            <p>
                                +01 1234567890
                            </p>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="../view/content/images/mail.png" width="18px" alt="">
                            </div>
                            <p>
                                demo@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info_info">
                        <h5>
                            Information
                        </h5>
                        <p>
                            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="info_links">
                        <h5>
                            Useful Link
                        </h5>
                        <ul>
                            <li>
                                <a href="">
                                    There are many
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    variations of
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    passages of
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Lorem Ipsum
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    available, but
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    the i
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info_form ">
                        <h5>
                            Newsletter
                        </h5>
                        <form action="">
                            <input type="email" placeholder="Enter your email">
                            <button>
                                Subscribe
                            </button>
                        </form>
                        <div class="social_box">
                            <a href="">
                                <img src="../view/content/images/fb.png" alt="">
                            </a>
                            <a href="">
                                <img src="../view/content/images/twitter.png" alt="">
                            </a>
                            <a href="">
                                <img src="../view/content/images/linkedin.png" alt="">
                            </a>
                            <a href="">
                                <img src="../view/content/images/youtube.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end info_section -->

<?php
$content = ob_get_clean();
require "gabarit.php";
