<section id="Sambutan" class="skills">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h3><span>{!! $sambutan_title ?? 'Judul Sambutan' !!}</span></h3><br><br>
            <div class="border border-primary"></div><br><br>
        </div>
        <div class="row">
            <div class="col-lg-12 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                data-aos-delay="100">
                <h4>{!! $sambutan_head ?? 'Kepala Sambutan' !!}</h4><br>
                <h5> {!! $slot ?? 'Badan Sambutan' !!}</h5><br><br>
                <h4>{!! $sambutan_foot ?? 'Kaki Sambutan' !!}</h4>
                        <br><br>
            </div>
        </div>

    </div>
</section>