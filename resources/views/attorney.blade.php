@extends('layouts.app')

@section('title', 'Pinnacle')

@section('content')
    <!-- TOP IMAGE -->
    <div class="page-head " style="background-image:url('{{ asset('assets/images/top-bkgs/lawyers.jpg') }}');">
        <div class="inner-desc">
            <div class="container">
                <h1 class="page-title">Attorneys</h1>
                <span class="post-subtitle page-subtitle">We help you avoid legal problems</span>
            </div>
        </div>
    </div>
    <!-- /TOP IMAGE -->
    <!-- PAGE CONTENT -->
    <div class="page-holder custom-page-template page-full fullscreen-page clearfix">
        <!-- SECTION 1-->
        <section class="section-holder margin-b32">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="lawyer-holder lawyer-3col">
                            <a href="{{ route('attorneys.show', ['id' => 5]) }}"><img src="{{ asset('assets/images/team/team-4.jpg') }}" class="img-fluid" alt="" ></a>
                            <div class="lawyer-position">Founder</div>
                            <h2 class="lawyer-title"><a href="{{ route('attorneys.show', ['id' => 5]) }}">Sarah Barrett</a></h2>
                            <div class="lawyer-excerpt">Integer imperdiet purus urna, a volutpat turpis feugiat vitae. Proin molestie in metus eu volutpat. Vestibulum vitae orci sit amet.</div>
                            <ul class="lawyer-social">
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="mailto:" target="_blank"><i class="far fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="lawyer-holder lawyer-3col">
                            <a href="{{ route('attorneys.show', ['id' => 5]) }}"><img src="{{ asset('assets/images/team/team-6.jpg') }}" class="img-fluid" alt="" ></a>
                            <div class="lawyer-position">Senior Partner</div>
                            <h2 class="lawyer-title"><a href="{{ route('attorneys.show', ['id' => 5]) }}">Mike Holmes</a></h2>
                            <div class="lawyer-excerpt">Integer imperdiet purus urna, a volutpat turpis feugiat vitae. Proin molestie in metus eu volutpat. Vestibulum vitae orci sit amet.</div>
                            <ul class="lawyer-social">
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="lawyer-holder lawyer-3col">
                            <a href="{{ route('attorneys.show', ['id' => 5]) }}"><img src="{{ asset('assets/images/team/team-1.jpg') }}" class="img-fluid" alt="" ></a>
                            <div class="lawyer-position">Lawyer</div>
                            <h2 class="lawyer-title"><a href="{{ route('attorneys.show', ['id' => 5]) }}">Teresa Perkins</a></h2>
                            <div class="lawyer-excerpt">Integer imperdiet purus urna, a volutpat turpis feugiat vitae. Proin molestie in metus eu volutpat. Vestibulum vitae orci sit amet.</div>
                            <ul class="lawyer-social">
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="mailto:" target="_blank"><i class="far fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="lawyer-holder lawyer-3col">
                            <a href="{{ route('attorneys.show', ['id' => 5]) }}"><img src="{{ asset('assets/images/team/team-5.jpg') }}" class="img-fluid" alt="" ></a>
                            <div class="lawyer-position">Legal Advisor</div>
                            <h2 class="lawyer-title"><a href="{{ route('attorneys.show', ['id' => 5]) }}">Samuel Johnson</a></h2>
                            <div class="lawyer-excerpt">Integer imperdiet purus urna, a volutpat turpis feugiat vitae. Proin molestie in metus eu volutpat. Vestibulum vitae orci sit amet.</div>
                            <ul class="lawyer-social">
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="lawyer-holder lawyer-3col">
                            <a href="{{ route('attorneys.show', ['id' => 5]) }}"><img src="{{ asset('assets/images/team/team-2.jpg') }}" class="img-fluid" alt="" ></a>
                            <div class="lawyer-position">Lawyer</div>
                            <h2 class="lawyer-title"><a href="{{ route('attorneys.show', ['id' => 5]) }}">Ellen Moore</a></h2>
                            <div class="lawyer-excerpt">Integer imperdiet purus urna, a volutpat turpis feugiat vitae. Proin molestie in metus eu volutpat. Vestibulum vitae orci sit amet.</div>
                            <ul class="lawyer-social">
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="lawyer-holder lawyer-3col">
                            <a href="{{ route('attorneys.show', ['id' => 5]) }}"><img src="{{ asset('assets/images/team/team-3.jpg') }}" class="img-fluid" alt="" ></a>
                            <div class="lawyer-position">Legal Assistant</div>
                            <h2 class="lawyer-title"><a href="{{ route('attorneys.show', ['id' => 5]) }}">Austin Harper</a></h2>
                            <div class="lawyer-excerpt">Integer imperdiet purus urna, a volutpat turpis feugiat vitae. Proin molestie in metus eu volutpat. Vestibulum vitae orci sit amet.</div>
                            <ul class="lawyer-social">
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </section>
        <!-- /SECTION 1-->
        <!-- SECTION 2-->
        <section class="section-holder section-lawyers">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 alignc">
                        <span class="heading-subtitle">Work with Us</span>
                        <h2 class="margin-b16">We are always looking for new partners</h2>
                        <p>Lorem ipsum dolor sit amet, ut eius periculis eos, eu mea suscipit intellegam. Tota consequuntur cu pro, congue efficiantur eos id. Ius in percipit recusabo. Has ex agam audire, id dicat dolores.</p>
                        <div class="view-more alignc"><a href="contact.html">Contact Us</a></div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </section>
        <!-- /SECTION 2-->
        <!-- SECTION 3-->
        <section class="section-holder">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="badge-wrapper">
                            <div class="badge-img">
                                <img src="{{ asset('assets/images/team/law-badge-1.png') }}" class="img-fluid" alt="" width="95" height="95" >
                            </div>
                            <div class="badge-img">
                                <img src="{{ asset('assets/images/team/law-badge-2.png') }}" class="img-fluid" alt="" width="95" height="95" >
                            </div>
                            <div class="badge-img">
                                <img src="{{ asset('assets/images/team/law-badge-3.png') }}" class="img-fluid" alt="" width="95" height="95" >
                            </div>
                            <div class="badge-img">
                                <img src="{{ asset('assets/images/team/law-badge-4.png') }}" class="img-fluid" alt="" width="95" height="95" >
                            </div>
                            <div class="badge-img">
                                <img src="{{ asset('assets/images/team/law-badge-5.png') }}" class="img-fluid" alt="" width="95" height="95" >
                            </div>
                            <div class="badge-img">
                                <img src="{{ asset('assets/images/team/law-badge-6.png') }}" class="img-fluid" alt="" width="95" height="95" >
                            </div>
                            <div class="badge-img">
                                <img src="{{ asset('assets/images/team/law-badge-7.png') }}" class="img-fluid" alt="" width="95" height="95" >
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </section>
        <!-- /SECTION 3-->
    </div><!-- /PAGE CONTENT -->
@endsection

@push('scripts')
    <script src="https://jsdelivr.net"></script>
    <script>
        // Initialize or customize your carousel here
        const myCarousel = document.querySelector('#homeCarousel');
        const carousel = new bootstrap.Carousel(myCarousel, {
            interval: 2000,
            wrap: true
        })
    </script>
@endpush