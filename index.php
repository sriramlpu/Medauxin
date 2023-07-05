<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medauxin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: medauxin
  * Updated: Jun 19 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" style="background-color:white;">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <span>Medauxin</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="#hero">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#products">Products</a></li>
          <li><a class="nav-link scrollto" href="#clients">Clients</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
          <li><a class="getstarted" href="./admin/admin_login.php">login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center mb-0">

    <div class="hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="assets/img/dna.png" class="img-fluid w-100" alt="">
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about m-0">

      <div class="container-fluid" data-aos="fade-up">
        <div class="row gx-0">

          <div class="d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Who We Are</h3>
              <p>
                "Medauxin" Founded in the year 2015 with a vision to provide a Quality services and solutions in the field of Biotechnology. It is headquartered in Bangalore, India with Dealers all over India .Medauxin is a Genomics R & D Services company, that provides genomic sequencing and bioinformatics services to life science and healthcare businesses globally as well as academic and government institutions in India.
              </p>
            </div>
          </div>

          <!-- <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div> -->

        </div>
      </div>

    </section><!-- End About Section -->



    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Services</h2>
          <p>The Key services we provide</p>
        </header>

        <div class="row gy-4">

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <h3>SEQUENCING</h3>
              <img /><br />
              <p>Sanger Sequencing</p>
              <div id="sanger-sequencing-table" style="display:none;">
                <table class="table table-striped">
                  <tbody>
                    <tr>
                      <th scope="row">Features</th>
                      <td>
                        <p>1. High Quality reads between 700-800 bases</p>
                        <p>2. Best-in-Class Difficult Template Protocols</p>
                        <p>3. Free Universal primers</p>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Deliverables</th>
                      <td> Read length up to 700-800 bases with ABI, PDF &amp; FASTA file.</td>
                    </tr>
                    <tr>
                      <th scope="row">Turn Around Time</th>
                      <td>3-4 working days from the receipt of sample to Medauxin premises.</td>
                    </tr>

                    <tr>
                      <th scope="row">Sample sources for sequencing</th>
                      <td>DNA sequencing of Plasmids, PCR, Genomic DNA </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <button class="read-more" id="service-button-1" onclick="read_more_service_1()"><span>Read More</span> <i class="bi bi-arrow-right"></i></button>
            </div>
          </div>

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <h3>MOLECULAR BIOLOGY SERVICES</h3>
              <img /><br />
              <p>Bacterial/Fungal Identification</p>
              <div id="services-molecular-biology-table" style="display:none;">
                <table class="table table-striped">

                  <tbody>

                    <tr>
                      <th scope="row">
                        Process
                      </th>
                      <td>
                        <p>1. Genomic DNA extraction from microbial culture & amplification of the desired gene by PCR.</p>
                        <p>2. Best-in-Class Difficult Template Protocols</p>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">Deliverables</th>
                      <td> Read length up to 700-800 bases with ABI, PDF & FASTA file.</td>
                    </tr>

                    <tr>
                      <th scope="row">Turn Around Time</th>
                      <td>7-14 working days from the receipt of sample to Medauxin premises.</td>
                    </tr>

                    <tr>
                      <th scope="row">Sample Requirement</th>
                      <td>
                        <p>(a) Pure culture propagation: for Bacteria/Yeast/Fungi (Plate/Slants/Glycerol stock)</p>
                        <p>(b) &nbsp;Isolated microbial genomic DNA: Concentration of 100 - 200 ng/μl , volume:- 20 μl</p>
                        <p>(c)&nbsp; PCR product of 16S/18S rDNA gene: concentration of 20-30 ng/μl, volume:- 20 μl.</p>
                      </td>
                    </tr>


                  </tbody>

                </table>
              </div>

              <button class="read-more" id="service-button-2" onclick="read_more_service_2()"><span>Read More</span> <i class="bi bi-arrow-right"></i></button>
            </div>

          </div>

        </div>

    </section><!-- End Services Section -->

    <!-- ======= Products Section ======= -->
    <section id="products" class="services">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Products</h2>
        </header>

        <div class="row gy-4">

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <img /><br /> <!--need to keep an image here-->
              <p>Oligonucleotide synthesis</p>
              <div id="product-table-1" style="display:none;">
                <table class="table table-striped">
                  <tbody>

                    <tr>
                      <th scope="row">
                        Standard-oligos
                      </th>
                      <td>
                        <p>1. High Quality reads between 700-800 bases</p>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">Standard scale</th>
                      <td> 10 nmol</td>
                    </tr>

                    <tr>
                      <th scope="row">Long oligos</th>
                      <td> >40 - 180 bases.</td>
                    </tr>

                    <tr>
                      <th scope="row">Custom scale</th>
                      <td>5 to 100 nmol</td>
                    </tr>

                    <tr>
                      <th scope="row">Format</th>
                      <td>Tube, Plate</td>
                    </tr>

                    <tr>
                      <th scope="row">Purifications</th>
                      <td>Machine Grade, Desalted, OPC, HPLC, PAGE</td>
                    </tr>


                  </tbody>
                </table>
              </div>

              <button class="read-more" id="product-button-1" onclick="read_more_product_1()"><span>Read More</span> <i class="bi bi-arrow-right"></i></button>
            </div>
          </div>


          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <img /><br /> <!--need to keep an image here-->
              <p>Plasticles</p>
              <div id="product-table-2" style="display:none;">
                <table class="table table-striped">
                  <tbody>

                    <tr>
                      <th scope="row">
                        Micro Pipette Tips
                      </th>
                    </tr>

                    <tr>
                      <th scope="row">Filter Barrier Tips</th>

                    </tr>

                    <tr>
                      <th scope="row">Micro Centrifuge Tubes</th>
                    </tr>

                    <tr>
                      <th scope="row">Centrifuge Tubes</th>
                    </tr>

                    <tr>
                      <th scope="row">Freezing Vials</th>
                    </tr>

                    <tr>
                      <th scope="row">Screw Cap Tubes</th>
                    </tr>

                    <tr>
                      <th scope="row">Tip Boxes</th>
                    </tr>

                    <tr>
                      <th scope="row">MCT Racks</th>
                    </tr>

                    <tr>
                      <th scope="row">MCT Work Stations</th>
                    </tr>
                    <tr>
                      <th scope="row">MCT Chiller Boxes</th>
                    </tr>
                    <tr>
                      <th scope="row">MCT Storage Boxes</th>
                    </tr>


                  </tbody>
                </table>
              </div>

              <button class="read-more" id="product-button-2" onclick="read_more_product_2()"><span>Read More</span> <i class="bi bi-arrow-right"></i></button>
            </div>
          </div>


          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <img /><br /> <!--need to keep an image here-->
              <p>Molecular biology kits</p>
              <div id="product-table-3" style="display:none;">
                <table class="table table-striped">
                  <tbody>

                    <tr>
                      <th scope="row">
                        Genomic DNA purification
                      </th>
                    </tr>

                    <tr>
                      <th scope="row">Plasmid Screening & Isolation</th>

                    </tr>

                    <tr>
                      <th scope="row">DNA Clean up & Concentration</th>
                    </tr>

                    <tr>
                      <th scope="row">RNA Purification</th>
                    </tr>

                    <tr>
                      <th scope="row">Nucleic Acid Electrophoresis</th>
                    </tr>

                    <tr>
                      <th scope="row">Embryonic RNA Lysates</th>
                    </tr>

                    <tr>
                      <th scope="row">Yeast Research Tools</th>
                    </tr>

                  </tbody>
                </table>
              </div>

              <button class="read-more" id="product-button-3" onclick="read_more_product_3()"><span>Read More</span> <i class="bi bi-arrow-right"></i></button>
            </div>
          </div>


          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <img /><br /> <!--need to keep an image here-->
              <p>Proteomics products</p>
              <div id="product-table-4" style="display:none;">
                <table class="table table-striped">
                  <tbody>

                    <tr>
                      <th scope="row">
                        Protein Quantitation Assays
                      </th>
                    </tr>

                    <tr>
                      <th scope="row">Extraction & Lysis Systems</th>

                    </tr>

                    <tr>
                      <th scope="row">Fractionation & Enrichment Kits</th>
                    </tr>

                    <tr>
                      <th scope="row">Folding & Solubilization</th>
                    </tr>

                    <tr>
                      <th scope="row">Sample Preparation</th>
                    </tr>

                    <tr>
                      <th scope="row">Detergents & Accessories</th>
                    </tr>

                    <tr>
                      <th scope="row">Proteases, Inhibitors & Assays</th>
                    </tr>

                    <tr>
                      <th scope="row">Protein Electrophoresis</th>
                    </tr>

                    <tr>
                      <th scope="row">Gel Stains</th>
                    </tr>
                    <tr>
                      <th scope="row">Western Blotting & ELISA</th>
                    </tr>
                    <tr>
                      <th scope="row">Mass Spectrometry & Sequencing</th>
                    </tr>


                    <tr>
                      <th scope="row">Purification & Chromatography</th>
                    </tr>

                    <tr>
                      <th scope="row">Antibody Production & Purification</th>
                    </tr>

                    <tr>
                      <th scope="row">Cross-linking & Modification</th>
                    </tr>
                    <tr>
                      <th scope="row">Labelling & Conjugation</th>
                    </tr>
                    <tr>
                      <th scope="row">Lysates & Premade Blots</th>
                    </tr>


                  </tbody>
                </table>
              </div>

              <button class="read-more" id="product-button-4" onclick="read_more_product_4()"><span>Read More</span> <i class="bi bi-arrow-right"></i></button>
            </div>
          </div>
    </section>


    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Clients</h2>
        </header>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-9.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-10.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-11.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-12.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-13.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-14.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-15.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section><!-- End Clients Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Our Address</h3>
                  <p>#85, Udayaravi Building, Cellar Ground Floor
                    NTI Layout 1st Phase, Rajivgandhi Nagar
                    Kodigehalli-Badrappa Layout Main Road
                    Bangalore 560092</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>sales@medauxin.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+91 8029731422</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" value="" placeholder="Enter Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" value="" placeholder="Enter Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="institute" value="" placeholder="Enter Your Institute Name" required>
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="mobile" value="" placeholder="Enter Your Mobile Number" required>
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="address" value="" placeholder="Enter Your address" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>
                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <!-- <img src="assets/img/logo.png" alt=""> -->
              <span>Medauxin</span>
            </a>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#Products">Products</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#clients">Clients</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#contact">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#services">SEQUENCING</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#services">MOLECULAR BIOLOGY SERVICES</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              #85, Udayaravi Building, Cellar Ground Floor <br>
              NTI Layout 1st Phase, Rajivgandhi Nagar<br>
              Kodigehalli-Badrappa Layout Main Road <br>
              Bangalore 560092<br>
              <strong>Phone:</strong> +91 8029731422<br>
              <strong>Email:</strong> sales@medauxin.com<br>

            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Medauxin</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">Sriram</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/readmore.js"></script>

</body>

</html>
