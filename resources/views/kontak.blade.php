@extends('template.layar')
@section('body')
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h3><span>Beberapa Kontak Saya di Berbagai Platform</span></h3><br>
                <div class="border border-primary"></div><br>
                <p>Informasi ini Jangan di Buat Macam-macam, Apalagi untuk Promosi Judi. <br>Klik dibawah untuk Menelusuri Sosial Mediaku</p><br><br>
            </div>
            <div class="row d-flex justify-content-center">
            @include('template.card',[
                'card_link' => 'https://wa.me/+6285875477952?text=Halo',
                'card_src' => 'https://gdm-catalog-fmapi-prod.imgix.net/ProductLogo/b8724004-ac46-4c30-9892-64b1ab9bf54e.png?ixlib=react-9.0.3&ch=Width%2CDPR&auto=format&w=2618',
                'card_text' => 'Whatsapp'
            ])

            @include('template.card',[
                'card_link' => '',
                'card_src' => 'https://t1.daumcdn.net/cfile/tistory/99B6AB485D09F2132A',
                'card_text' => 'Instagram'
            ])

            @include('template.card',[
                'card_link' => '',
                'card_src' => 'https://cdn3.iconfinder.com/data/icons/inficons/512/github.png',
                'card_text' => 'Github'
            ])

            @include('template.card',[
                'card_link' => '',
                'card_src' => 'https://cdn4.iconfinder.com/data/icons/social-media-2146/512/6_social-512.png',
                'card_text' => 'Youtube
                '
            ])

            @include('template.card',[
                'card_link' => '',
                'card_src' => 'https://cdn2.iconfinder.com/data/icons/gaming-platforms-squircle/250/discord_squircle-256.png',
                'card_text' => 'Discord'
            ])

            @include('template.card',[
                'card_link' => '',
                'card_src' => 'https://cdn4.iconfinder.com/data/icons/socialcones/508/Telegram-256.png',
                'card_text' => 'Telegram'
            ])

            @include('template.card',[
                'card_link' => '',
                'card_src' => 'https://cdn1.iconfinder.com/data/icons/social-media-2285/512/Colored_Facebook3_svg-256.png',
                'card_text' => 'Facebook'
            ])

            @include('template.card',[
                'card_link' => '',
                'card_src' => 'https://cdn4.iconfinder.com/data/icons/standard-free-icons/139/Call01-256.png',
                'card_text' => 'Kontak'
            ])

            @include('template.card',[
                'card_link' => '',
                'card_src' => 'https://cdn4.iconfinder.com/data/icons/logos-brands-in-colors/48/google-gmail-256.png',
                'card_text' => 'Email'
            ])

            @include('template.card',[
                'card_link' => '',
                'card_src' => 'https://cdn4.iconfinder.com/data/icons/245-flags-for-your-website/215/flag_ID_Indonesia-256.png',
                'card_text' => 'Indonesia'
            ])
                
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="m-3">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15846.372825793927!2d108.62492995000001!3d-6.8192291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f04b22c00897d%3A0x27e8e4b8d8ca3fa8!2sMertapada%20Kulon%2C%20Kec.%20Astanajapura%2C%20Kabupaten%20Cirebon%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1710931122312!5m2!1sid!2sid"
                        width="100%" height="384px" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
