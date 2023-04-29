<x-layouts.frontend.main>

    <x-slot:title>
        Main
    </x-slot:title>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>About</h2>
                <p>You will find here about me personal informations in this department. Prohibited you are copy get or
                    distribution from the informations.</p>
            </div>

            @foreach ($people as $person)
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="{{ asset('frontend') }}/assets/img/profile.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>{{ $person->job }}</h3>
                        <p class="fst-italic">
                            It is personal information about me.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong>
                                        <span>{{ $person->name }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Surname:</strong>
                                        <span>{{ $person->surname }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong>
                                        <span>{{ $person->birthday }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                                        <span>{{ $person->age }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong>
                                        <span>{{ $person->address }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Job:</strong>
                                        <span>{{ $person->job }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Level:</strong>
                                        <span>{{ $person->level }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                        <span>{{ $person->phone }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>{{ $person->email }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                        <span>{{ $person->website }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p><b>Information:</b> {{ $person->information }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </section><!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>Resume </h2>
                <div class="col-lg-12">
                    @foreach ($files as $file)
                        <a href="{{ route('file.download', $file->id) }}" class="btn btn-info mb-1 text-white">{{ $file->name }} <i class="bi bi-download"></i></a>
                    @endforeach
                </div>
            </div>


            <div class="row">
                @foreach ($resumes as $resume)
                    <div class="col-lg-6" data-aos="fade-up">
                        <h3 class="resume-title">{{ $resume->title }}</h3>
                        <div class="resume-item pb-0">
                            <p><?= $resume->information ?></p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p></p>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li><a href="{{ route('main') }}">All</a></li>
                        @foreach ($categories as $category)
                            <li><a href="{{ route('categories.category', $category->id) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                @foreach ($portfolios as $portfolio)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('storage/' . $portfolio->photo) }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('storage/' . $portfolio->photo) }}"
                                    data-gallery="portfolioGallery" class="{{ asset('frontend') }}/portfolio-lightbox"
                                    title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="{{ $portfolio->link }}" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div>
                {{ $portfolios->links() }}
            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Skills</h2>
            </div>

            <div class="row">
                @foreach ($skills as $skill)
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                        <img src="{{ asset('storage/' . $skill->photo) }}"
                                class="icon bg-white" alt="">
                        <h4 class="title"><a>{{ $skill->name }}</a></h4>
                        <p class="description">{{ $skill->description }}</p>
                    </div>
                @endforeach
            </div>
            <div>
                {{ $skills->links() }}
            </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Appeals</h2>
                <p>Send us your interested questions or appeals</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    @foreach ($appeals as $appeal)
                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    {{ $appeal->message }}
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('frontend') }}/assets/img/user.png" class="testimonial-img"
                                    alt="">
                                <h3>{{ $appeal->name }}</h3>
                                <h4><em>{{ $appeal->email }}</em></h4>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
            </div>

            <div class="row" data-aos="fade-in">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>Navoiy v. Xatirchi t. Yangirabot sh.</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>hamidullo0760@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+998 91 250 07 60</p>
                        </div>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24438.733380736696!2d65.945627439945!3d40.03431422619565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f5206b880e408d3%3A0x7c938fbafc9cee36!2sYangirabod%2C%20Uzbekistan!5e0!3m2!1sen!2s!4v1681984252260!5m2!1sen!2s"
                            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <div class="info">
                        <h2 class="text-center mb-3"><b>Send your appeal us!</b></h2>

                        <form action="{{ route('appeal.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12 mb-3">
                                    <label for="name"><b>Name</b></label>
                                    <input type="text" name="name" class="form-control" placeholder="Your name" style="height:45px">
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 mb-3">
                                    <label for="name"><b>Email</b></label>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Your email" style="height:45px">
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name"><b>Subject</b></label>
                                <input type="text" name="subject" class="form-control" placeholder="Subject" style="height:45px">
                                @error('subject')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-5">
                                <label for="name"><b>Message</b></label>
                                <textarea class="form-control" name="message" rows="6" placeholder="Message"></textarea>
                                @error('message')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="text-center"><button class="btn btn-info text-white" type="submit">Send
                                    Message</button></div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</x-layouts.frontend.main>
