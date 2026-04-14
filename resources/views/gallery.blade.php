@extends('layouts.app')

@section('title', 'Pinnacle')

@section('content')
    <!-- TOP IMAGE -->
    <div class="page-head " style="background-image:url('{{ asset('assets/images/top-bkgs/about.jpg') }}');">
        <div class="inner-desc">
            <div class="container">
                <h1 class="page-title">Gallery</h1>
                <span class="post-subtitle page-subtitle">Pellentesque quam justo</span>
            </div>
        </div>
    </div>
    <!-- /TOP IMAGE -->
    <!-- PAGE CONTENT -->
    <div class="page-holder custom-page-template page-full fullscreen-page clearfix">
        <!-- SECTION 1-->
        <section class="section-holder">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="gallery-holder gallery-4col clearfix">
                            <div class="gallery-post gal-img">
                                <a href="images/gallery/office-8.jpg" class="lightbox" title="">
                                    <div class="item-content-bkg gallery-bkg">
                                        <div class="gallery-img" style="background-image:url('{{ asset('assets/images/gallery/office-8.jpg') }}');"></div>
                                        <div class="gallery-post-desc">
                                            <div class="gallery-mglass"><i class="fa fa-eye"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="gallery-post gal-img">
                                <a href="images/gallery/office-7.jpg" class="lightbox" title="">
                                    <div class="item-content-bkg gallery-bkg">
                                        <div class="gallery-img" style="background-image:url('{{ asset('assets/images/gallery/office-7.jpg') }}');"></div>
                                        <div class="gallery-post-desc">
                                            <div class="gallery-mglass"><i class="fa fa-eye"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="gallery-post gal-img">
                                <a href="images/gallery/office-6.jpg" class="lightbox" title="">
                                    <div class="item-content-bkg gallery-bkg">
                                        <div class="gallery-img" style="background-image:url('{{ asset('assets/images/gallery/office-6.jpg') }}');"></div>
                                        <div class="gallery-post-desc">
                                            <div class="gallery-mglass"><i class="fa fa-eye"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="gallery-post gal-img">
                                <a href="images/gallery/office-5.jpg" class="lightbox" title="">
                                    <div class="item-content-bkg gallery-bkg">
                                        <div class="gallery-img" style="background-image:url('{{ asset('assets/images/gallery/office-5.jpg') }}');"></div>
                                        <div class="gallery-post-desc">
                                            <div class="gallery-mglass"><i class="fa fa-eye"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="gallery-post gal-img">
                                <a href="images/gallery/office-4.jpg" class="lightbox" title="">
                                    <div class="item-content-bkg gallery-bkg">
                                        <div class="gallery-img" style="background-image:url('{{ asset('assets/images/gallery/office-4.jpg') }}');"></div>
                                        <div class="gallery-post-desc">
                                            <div class="gallery-mglass"><i class="fa fa-eye"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="gallery-post gal-img">
                                <a href="images/gallery/office-3.jpg" class="lightbox" title="">
                                    <div class="item-content-bkg gallery-bkg">
                                        <div class="gallery-img" style="background-image:url('{{ asset('assets/images/gallery/office-3.jpg') }}');"></div>
                                        <div class="gallery-post-desc">
                                            <div class="gallery-mglass"><i class="fa fa-eye"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="gallery-post gal-img">
                                <a href="images/gallery/office-2.jpg" class="lightbox" title="">
                                    <div class="item-content-bkg gallery-bkg">
                                        <div class="gallery-img" style="background-image:url('{{ asset('assets/images/gallery/office-2.jpg') }}');"></div>
                                        <div class="gallery-post-desc">
                                            <div class="gallery-mglass"><i class="fa fa-eye"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="gallery-post gal-img">
                                <a href="images/gallery/office-1.jpg" class="lightbox" title="">
                                    <div class="item-content-bkg gallery-bkg">
                                        <div class="gallery-img" style="background-image:url('{{ asset('assets/images/gallery/office-1.jpg') }}');"></div>
                                        <div class="gallery-post-desc">
                                            <div class="gallery-mglass"><i class="fa fa-eye"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </section>
        <!-- /SECTION 1-->

    </div>
    <!-- /PAGE CONTENT -->
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