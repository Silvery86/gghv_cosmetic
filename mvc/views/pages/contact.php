<head>

    <!-- Include jQuery and Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>

</head>

<!-- Start of Main Content Wrapper -->
<main id="content" class="main-content-wrapper page-about">

    <!-- Start of Contact Section -->
    <section class="contact-section">

        <div class="container">
            <div class="row" style="margin-bottom: 30px; background-size: cover; background-position: center; max-width: 100%; margin-left: 20px
            ;">
                <div>
                    <a href="#">
                        <img src="../../gghv_cosmetic/public/assets/images/banners/banner-contacs.jpg" alt="About Us">
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                        <img src="../../gghv_cosmetic/public/assets/images/banners/banner4.jpg" >
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="contact-form-wrapper">
                        <div class="section-title left-aligned with-border">
                            <h2>Tư Vấn Skin!</h2>
                        </div>
                        <form id="contact-form" action="process.php" method="post">
                            <div class="form-row mb-2">
                                <div class="form-group col-12 col-sm-12 col-md-6">
                                    <input type="text" name="name" class="form-control" id="com-name" placeholder="Họ và tên*" required>
                                </div>
                                <div class="form-group col-12 col-sm-12 col-md-6">
                                    <input type="email" name="email" class="form-control" id="com-email" placeholder="Địa chỉ Email *" required>
                                </div>
                            </div>
                            <div class="form-row mb-2">
                                <div class="form-group col-12 col-sm-12 col-md-12">
                                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Tiêu đề">
                                </div>
                            </div>
                            <div class="form-row mb-2">
                                <div class="form-group col-12 col-sm-12 col-md-12">
                                    <textarea id="comment" placeholder="Thông điệp....." name="message" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <button name="send" type="submit" class="btn btn-secondary">Gửi đi</button>
                                </div>
                            </div>
                        </form>
                        <!-- <?php
                                if (isset($_POST['send'])) {
                                    // Lấy dữ liệu từ form
                                    $name = $_POST['name'];
                                    $email = $_POST['email'];
                                    $subject = $_POST['subject'];
                                    $message = $_POST['message'];

                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "mysql";
                                    $dbname = "gghv_cosmetic";

                                    try {
                                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                        $sql = "INSERT INTO messages (name, email, subject, message) VALUES (:name, :email, :subject, :message)";
                                        $stmt = $conn->prepare($sql);
                                        $stmt->bindParam(':name', $name);
                                        $stmt->bindParam(':email', $email);
                                        $stmt->bindParam(':subject', $subject);
                                        $stmt->bindParam(':message', $message);
                                        $stmt->execute();

                                        echo "Gửi tin nhắn thành công.";
                                    } catch (PDOException $e) {
                                        echo "Lỗi: " . $e->getMessage();
                                    }

                                    $conn = null;
                                }
                                ?> -->
                        <p class="form-messege"></p>
                    </div>
                    <style>
                        /* CSS div map */
                        .mapouter {
                            position: relative;
                            text-align: center;
                            height: 400px;
                            width: 100%;
                            margin-bottom: 30px;
                            border: 2px solid #f8e1e8;
                            border-radius: 10px;
                            overflow: hidden;
                        }

                        .mapouter iframe {
                            height: 100%;
                            width: 100%;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 100%;
                            width: 100%;
                            position: relative;
                        }

                        /* CSS  div form */
                        .contact-form-wrapper {
                            background-color: #ffffff;
                            padding: 30px;
                            border: 2px solid #f8e1e8;
                            border-radius: 10px;
                            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
                            max-width: 500px;
                            margin: 0 auto;
                        }

                        .contact-form-wrapper h2 {
                            margin-bottom: 20px;
                            font-size: 24px;
                            font-weight: bold;
                            color: #f80a5d;
                            text-transform: uppercase;
                            text-align: center;
                        }

                        .form-control {
                            border-radius: 5px;
                            border: none;
                            font-size: 16px;
                            padding: 10px;
                            margin-bottom: 20px;
                            width: 100%;
                            background-color: #F5F5F5;
                            color: #444;
                            box-shadow: inset 0px 0px 5px rgba(0, 0, 0, 0.1);
                        }

                        .form-control:focus {
                            border-color: #f80a5d;
                            box-shadow: none;
                        }

                        textarea.form-control {
                            height: 150px;
                        }

                        .btn-secondary {
                            background-color: #f80a5d;
                            border-color: #f80a5d;
                            color: #fff;
                            font-weight: bold;
                            text-transform: uppercase;
                            transition: all 0.3s ease-in-out;
                            padding: 10px 30px;
                            border-radius: 5px;
                            margin-top: 10px;
                        }

                        .btn-secondary:hover {
                            background-color: #fff;
                            color: #f80a5d;
                            border-color: #f80a5d;
                        }

                        .form-group {
                            margin-bottom: 20px;
                        }

                        .form-row {
                            display: flex;
                            flex-wrap: wrap;
                            justify-content: space-between;
                        }

                        @media (max-width: 768px) {
                            .form-row {
                                flex-direction: column;
                            }
                        }
                    </style>
                </div>

                <!-- Add the popup HTML -->
                <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="success-modal-label" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="success-modal-label">Cảm ơn!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Tin nhắn của bạn đã được gửi đi thành công.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add the popup JavaScript -->
                <script>
                    $(document).ready(function() {
                        $('#contact-form').submit(function(event) {
                            event.preventDefault();
                            var form = $(this);
                            var formData = new FormData(form[0]);
                            $.ajax({
                                url: form.attr('action'),
                                method: form.attr('method'),
                                data: formData,
                                processData: false,
                                contentType: false,
                                success: function(response) {
                                    $('#success-modal').modal('show');
                                    form.trigger('reset');
                                    setTimeout(function() {
                                        $('#success-modal').modal('hide');
                                    }, 1000); // 1 second
                                },
                                error: function(xhr, status, error) {
                                    $('.form-messege').html('There was an error sending your message. Please try again later.');
                                }
                            });
                        });
                    });
                </script>


            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>
    <!-- End of Contact Section -->

    <!-- Start of Team Section -->
    <section class="team-section pt-full pb-half bgc-offset">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="info-box mx-auto">
                    <div class="info-icon">
                        <i class="ion ion-md-locate" onclick="showLocation()"></i>
                    </div>
                    <div class="info-content">
                        <h4>Địa chỉ </h4>
                        <p>8a Tôn Thất Thuyết, Mỹ Đình</p>
                        <p>Hà Nội</p>
                    </div>
                </div>

                <div class="info-box mx-auto">
                    <div class="info-icon">
                        <i class="ion ion-ios-call" onclick="callHotline()"></i>
                    </div>
                    <div class="info-content">
                        <h4>Số hotline</h4>
                        <p>Mobile: <a href="tel:+84998999989">(+84) 099 8999989</a></p>
                        <p>Fax: <a href="tel:+84998999989">(+84) 099 8999989</a></p>
                    </div>
                </div>

                <div class="info-box mx-auto">
                    <div class="info-icon">
                        <i class="ion ion-md-mail-open" onclick="sendEmail()"></i>
                    </div>
                    <div class="info-content">
                        <h4>Email liên hệ</h4>
                        <p><a href="mailto:GGHV_CosmeticSupport@gmail.com">GGHV_CosmeticSupport@gmail.com</a></p>
                        <p><a href="mailto:GGHV_CosmeticContacs@gmail.com">GGHV_CosmeticContacs@gmail.com</a></p>
                    </div>
                </div>
            </div> <!-- end of d-flex -->

            <script>
                function showLocation() {

                    var address = document.querySelector('.info-box p:first-of-type').textContent;


                    window.open('https://www.google.com/maps/search/?api=1&query=' + encodeURIComponent(address), '_blank');
                }

                function callHotline() {

                    var phone = document.querySelector('.info-box a[href^="tel:"]').getAttribute('href');

                    phone = phone.replace("tel:", "");

                    window.location.href = 'tel:' + phone;
                }

                function sendEmail() {
                    var email = document.querySelector('.info-box a[href^="mailto:"]').getAttribute('href');

                    email = email.replace("mailto:", "");

                    window.open('mailto:' + email, '_self');
                }
            </script>
        </div> <!-- end of container -->
    </section>
    <!-- End of Team Section -->


    <!-- Start of Client Section -->
    <div class="client-section mb-full">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="clients element-carousel" data-visible-slide="5" data-visible-xl-slide="5" data-visible-lg-slide="5" data-visible-md-slide="4" data-visible-sm-slide="3" data-visible-xs-slide="2" data-loop="true" data-autoplay-delay="3000" data-space-between="0" data-effect="slide">

                        <!-- Slides -->
                        <div class="swiper-wrapper">
                            <div class="item-brand swiper-slide">
                                <img src="../../gghv_cosmetic/public/assets/images/brand/client-logo-1.jpg" alt="Client Logo">
                            </div>
                            <div class="item-brand swiper-slide">
                                <img src="../../gghv_cosmetic/public/assets/images/brand/client-logo-2.jpg" alt="Client Logo">
                            </div>
                            <div class="item-brand swiper-slide">
                                <img src="../../gghv_cosmetic/public/assets/images/brand/client-logo-3.jpg" alt="Client Logo">
                            </div>
                            <div class="item-brand swiper-slide">
                                <img src="../../gghv_cosmetic/public/assets/images/brand/client-logo-4.jpg" alt="Client Logo">
                            </div>

                        </div>
                        <style>
                            .item-brand img {
                                height: 80px;
                                width: auto;
                                display: block;
                                margin: 0 auto;
                            }
                        </style>
                    </div> <!-- end of element-carousel -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <!-- End of Client Section -->

    <!-- Start of Newsletter Section -->
    <section class="newsletter-section vpadding bgc-offset mb0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                    <div class="newsletter-title d-lg-flex justify-content-lg-start">
                        <h6>Đăng ký GGHV_Cosmetic</h6>
                        <h3>Đăng ký GGHV_Cosmetic của chúng tôi để biết trước về tất cả các chương trình khuyến mãi và giảm giá.</h3>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                    <div class="newsletter-form-wrapper">
                        <form class="mc-subscribe-form">
                            <input type="email" autocomplete="off" placeholder="Nhập địa chỉ email của bạn ở đây..." required>
                            <input type="submit" class="default-btn" value="Subscribe">
                        </form>

                        <div class="mailchimp-alerts">
                            <div class="mailchimp-submitting"></div>
                            <div class="mailchimp-success"></div>
                            <div class="mailchimp-error"></div>
                        </div><!-- end of mailchimp-alerts -->
                    </div>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>
    <!-- End of Newsletter Section -->
</main>
<!-- End of Main Content Wrapper -->

