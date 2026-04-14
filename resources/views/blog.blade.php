@extends('layouts.app')

@section('title', 'Pinnacle')

@section('content')
    <!-- TOP IMAGE -->
    <div class="page-head " style="background-image:url('{{ asset('assets/images/top-bkgs/blog.jpg') }}');">
        <div class="inner-desc">
            <div class="container">
                <h1 class="page-title">Blog List</h1>
                <span class="post-subtitle page-subtitle"> View the latest articles</span>
            </div>
        </div>
    </div>
    <!-- /TOP IMAGE -->
    <!-- PAGE CONTENT -->
    <div class="page-holder custom-page-template page-full fullscreen-page clearfix">
        <!-- SECTION 1-->
        <section class="blog-1col-list-left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9  posts-holder post-sidebar ">
                        <article class="blog-item blog-item-1col-list">
                            <div class="post-image-list">
                                <a href="blog-single-post.html">
                                    <div class="list-image" style="background-image:url('{{ asset('assets/images/blog/blog-1.jpg') }}');"></div>
                                </a>
                            </div>
                            <div class="post-holder ">
                                <div class="list-holder">
                                    <ul class="blog-date">
                                        <li class="meta-date">October 10, 2019</li>
                                        <li class="meta-categ"><a href="#" rel="category tag">Car Accidents</a> <a href="#" rel="category tag">News</a></li>
                                    </ul>
                                    <h2 class="blog-title"><a href="blog-single-post.html">Thinking Out Of The Box After A Simple Car Accident</a></h2>
                                    <div class="article-excerpt"> Arnare varius mauris eu commodo. Aenean nibh risus, rhoncus eget consectetur ac. Consectetur adipiscing elit. Vivamus auctor condimentum sem et gravida. Maecenas id enim pharetra, sollicitudin dui eget, blandit lorem. Nunc vitae blandit lectus. Donec lacinia magna sit amet arcu...</div>
                                </div>
                            </div>
                        </article>
                        <article class="blog-item blog-item-1col-list">
                            <div class="post-image-list">
                                <a href="blog-single-post.html">
                                    <div class="list-image" style="background-image:url('{{ asset('assets/images/blog/blog-2.jpg') }}');"></div>
                                </a>
                            </div>
                            <div class="post-holder ">
                                <div class="list-holder">
                                    <ul class="blog-date">
                                        <li class="meta-date">October 9, 2019</li>
                                        <li class="meta-categ"><a href="#" rel="category tag">Divorce</a> <a href="#" rel="category tag">News</a></li>
                                    </ul>
                                    <h2 class="blog-title"><a href="blog-single-post.html">Understanding Domestic Violence Defense</a></h2>
                                    <div class="article-excerpt"> Arnare varius mauris eu commodo. Aenean nibh risus, rhoncus eget consectetur ac. Consectetur adipiscing elit. Vivamus auctor condimentum sem et gravida. Maecenas id enim pharetra, sollicitudin dui eget, blandit lorem. Nunc vitae blandit lectus. Donec lacinia magna sit amet arcu...</div>
                                </div>
                            </div>
                        </article>
                        <article class="blog-item blog-item-1col-list">
                            <div class="post-image-list">
                                <a href="blog-single-post.html">
                                    <div class="list-image" style="background-image:url('{{ asset('assets/images/blog/blog-9.jpg') }}');"></div>
                                </a>
                            </div>
                            <div class="post-holder ">
                                <div class="list-holder">
                                    <ul class="blog-date">
                                        <li class="meta-date">October 8, 2019</li>
                                        <li class="meta-categ"> <a href="#" rel="category tag">News</a></li>
                                    </ul>
                                    <h2 class="blog-title"><a href="blog-single-post.html">How to Make a Claim Against an Airline</a></h2>
                                    <div class="article-excerpt"> Arnare varius mauris eu commodo. Aenean nibh risus, rhoncus eget consectetur ac. Consectetur adipiscing elit. Vivamus auctor condimentum sem et gravida. Maecenas id enim pharetra, sollicitudin dui eget, blandit lorem. Nunc vitae blandit lectus. Donec lacinia magna sit amet arcu...</div>
                                </div>
                            </div>
                        </article>
                        <article class="blog-item blog-item-1col-list">
                            <div class="post-image-list">
                                <a href="blog-single-post.html">
                                    <div class="list-image" style="background-image:url('{{ asset('assets/images/blog/blog-7.jpg') }}');"></div>
                                </a>
                            </div>
                            <div class="post-holder ">
                                <div class="list-holder">
                                    <ul class="blog-date">
                                        <li class="meta-date">October 7, 2019</li>
                                        <li class="meta-categ"><a href="#" rel="category tag">Business</a> <a href="#" rel="category tag">News</a></li>
                                    </ul>
                                    <h2 class="blog-title"><a href="blog-single-post.html">Internship for Law Students</a></h2>
                                    <div class="article-excerpt"> Arnare varius mauris eu commodo. Aenean nibh risus, rhoncus eget consectetur ac. Consectetur adipiscing elit. Vivamus auctor condimentum sem et gravida. Maecenas id enim pharetra, sollicitudin dui eget, blandit lorem. Nunc vitae blandit lectus. Donec lacinia magna sit amet arcu...</div>
                                </div>
                            </div>
                        </article>
                        <div class="prev-next"><span class="nav-page"></span><span class="page-numbers current-page">1</span> <a class="page-numbers" href="#">2</a> <a class="page-numbers" href="#">3</a> <span class="nav-page"><a href="#">&gt;</a></span></div>
                    </div>
                    <!-- /col-lg-9 -->
                    <div class="col-lg-3">
                        <aside>
                            <ul>
                                <li class="widget">
                                    <h5 class="widgettitle">About Us</h5>
                                    <div class="textwidget">
                                        <p><img class="img-fluid" src="{{ asset('assets/images/home/about-feature3.jpg') }}" alt=""></p>
                                        <p>Hi, we’re Lawyers and we’re here to help with any legal issue. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                    </div>
                                </li>
                                <li class="widget">
                                    <form method="get" id="search-form" action="#"> <span><input type="text" name="s" id="search-string" placeholder="type and hit enter"></span></form>
                                </li>
                                <li class="widget widget_recent_entries">
                                    <h5 class="widgettitle">Recent Posts</h5>
                                    <ul>
                                        <li> <a href="#">Thinking Out Of The Box After A Simple Car Accident</a></li>
                                        <li> <a href="#">Understanding Domestic Violence Defense</a></li>
                                        <li> <a href="#">How to Make a Claim Against an Airline</a></li>
                                        <li> <a href="#">Internship for Law Students</a></li>
                                        <li> <a href="#">Last Will and Testament</a></li>
                                    </ul>
                                </li>
                                <li class="widget widget_recent_entries">
                                    <h5 class="widgettitle">Categories</h5>
                                    <ul>
                                        <li class="cat-item"><a href="#">Business Law</a></li>
                                        <li class="cat-item"><a href="#">Car Accidents</a></li>
                                        <li class="cat-item"><a href="#">Divorce</a></li>
                                        <li class="cat-item"><a href="#">News</a></li>
                                    </ul>
                                </li>
                                <li class="widget">
                                    <h5 class="widgettitle">Tags</h5>
                                    <div class="tagcloud"><a href="#">accident</a> <a href="#">airplaine</a> <a href="#">attorney</a> <a href="#">business</a><a href="#">divorce</a><a href="#">family</a><a href="#">finance</a><a href="#">justice</a><a href="#">law</a><a href="#">legal</a><a href="#">rights</a><a href="#">tax</a><a href="#">testament</a></div>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
                <!-- /row -->
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