@extends('layouts.app')

@section('title', 'Pinnacle')

@section('content')
    <!-- TOP IMAGE -->
    <div class="page-head " style="background-image:url('{{ asset('assets/images/top-bkgs/case-results.jpg') }}');">
        <div class="inner-desc">
            <div class="container">
                <h1 class="page-title">Case Studies 2 Cols</h1>
                <span class="post-subtitle page-subtitle">We help clients resolve their legal issues</span>
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
                    <div class="col-lg-10 offset-lg-1">
                        <ul class="portfolio-filter"><li><a class="read-more current" href="#" data-filter="*">Show All</a></li><li><a class="view-more" href="#" data-filter=".finance">Finance</a></li><li><a class="view-more" href="#" data-filter=".health-care">Health Care</a></li><li><a class="view-more" href="#" data-filter=".injuries">Injuries</a></li></ul>
                    </div>
                </div>
                <!-- /row -->

                <div class="case-studies-holder case-studies-short layout-masonry ">
                    <div class="case-study case-2col blog-item-masonry finance ">
                        <div class="case-img-holder">
                            <a href="{{ route('cases.show', ['id' => 5]) }}">
                                <div class="case-img" style="background-image:url('{{ asset('assets/images/cases/case-1.jpg') }}');"></div>
                            </a>
                        </div>
                        <div class="case-content-v1">
                            <ul class="case-categ">
                                <li>Finance</li>
                            </ul>
                            <h4><a href="{{ route('cases.show', ['id' => 5]) }}">Tax Dispute</a></h4>
                            <div class="case-plus"><i class="fas fa-angle-double-right"></i></div>
                        </div>
                    </div>
                    <div class="case-study case-2col blog-item-masonry finance ">
                        <div class="case-img-holder">
                            <a href="{{ route('cases.show', ['id' => 5]) }}">
                                <div class="case-img" style="background-image:url('{{ asset('assets/images/cases/case-2.jpg') }}');"></div>
                            </a>
                        </div>
                        <div class="case-content-v1">
                            <ul class="case-categ">
                                <li>Finance</li>
                            </ul>
                            <h4><a href="{{ route('cases.show', ['id' => 5]) }}">Business Law</a></h4>
                            <div class="case-plus"><i class="fas fa-angle-double-right"></i></div>
                        </div>
                    </div>
                    <div class="case-study case-2col blog-item-masonry health-care  injuries ">
                        <div class="case-img-holder">
                            <a href="{{ route('cases.show', ['id' => 5]) }}">
                                <div class="case-img" style="background-image:url('{{ asset('assets/images/practice/practice-1.jpg') }}');"></div>
                            </a>
                        </div>
                        <div class="case-content-v1">
                            <ul class="case-categ">
                                <li>Health Care</li>
                                <li>Injuries</li>
                            </ul>
                            <h4><a href="{{ route('cases.show', ['id' => 5]) }}">Auto Accident</a></h4>
                            <div class="case-plus"><i class="fas fa-angle-double-right"></i></div>
                        </div>
                    </div>
                    <div class="case-study case-2col blog-item-masonry health-care  injuries ">
                        <div class="case-img-holder">
                            <a href="{{ route('cases.show', ['id' => 5]) }}">
                                <div class="case-img" style="background-image:url('{{ asset('assets/images/cases/case-4.jpg') }}');"></div>
                            </a>
                        </div>
                        <div class="case-content-v1">
                            <ul class="case-categ">
                                <li>Health Care</li>
                                <li>Injuries</li>
                            </ul>
                            <h4><a href="{{ route('cases.show', ['id' => 5]) }}">Family Law</a></h4>
                            <div class="case-plus"><i class="fas fa-angle-double-right"></i></div>
                        </div>
                    </div>
                    <div class="case-study case-2col blog-item-masonry finance ">
                        <div class="case-img-holder">
                            <a href="{{ route('cases.show', ['id' => 5]) }}">
                                <div class="case-img" style="background-image:url('{{ asset('assets/images/cases/case-3.jpg') }}');"></div>
                            </a>
                        </div>
                        <div class="case-content-v1">
                            <ul class="case-categ">
                                <li>Finance</li>
                            </ul>
                            <h4><a href="{{ route('cases.show', ['id' => 5]) }}">Real Estate</a></h4>
                            <div class="case-plus"><i class="fas fa-angle-double-right"></i></div>
                        </div>
                    </div>
                    <div class="case-study case-2col blog-item-masonry injuries ">
                        <div class="case-img-holder">
                            <a href="{{ route('cases.show', ['id' => 5]) }}">
                                <div class="case-img" style="background-image:url('{{ asset('assets/images/cases/case-5.jpg') }}');"></div>
                            </a>
                        </div>
                        <div class="case-content-v1">
                            <ul class="case-categ">
                                <li>Injuries</li>
                            </ul>
                            <h4><a href="{{ route('cases.show', ['id' => 5]) }}">Domestic Violence</a></h4>
                            <div class="case-plus"><i class="fas fa-angle-double-right"></i></div>
                        </div>
                    </div>
                    <div class="case-study case-2col blog-item-masonry injuries health-care ">
                        <div class="case-img-holder">
                            <a href="{{ route('cases.show', ['id' => 5]) }}">
                                <div class="case-img" style="background-image:url('{{ asset('assets/images/cases/case-6.jpg') }}');"></div>
                            </a>
                        </div>
                        <div class="case-content-v1">
                            <ul class="case-categ">
                                <li>Health Care</li>
                                <li>Injuries</li>
                            </ul>
                            <h4><a href="{{ route('cases.show', ['id' => 5]) }}">Motocycle Security</a></h4>
                            <div class="case-plus"><i class="fas fa-angle-double-right"></i></div>
                        </div>
                    </div>

                    <div class="case-study case-2col blog-item-masonry health-care">
                        <div class="case-img-holder">
                            <a href="{{ route('cases.show', ['id' => 5]) }}">
                                <div class="case-img" style="background-image:url('{{ asset('assets/images/cases/case-7.jpg') }}');"></div>
                            </a>
                        </div>
                        <div class="case-content-v1">
                            <ul class="case-categ">
                                <li>Health Care</li>
                            </ul>
                            <h4><a href="{{ route('cases.show', ['id' => 5]) }}">Medical Malpractice</a></h4>
                            <div class="case-plus"><i class="fas fa-angle-double-right"></i></div>
                        </div>
                    </div>

                </div>
                <!-- /case-studies-holder -->


            </div>
            <!-- /container -->
        </section>
        <!-- /SECTION 1-->

    </div><!-- /PAGE CONTENT -->
@endsection

@push('styles')
@endpush

@push('scripts')

@endpush