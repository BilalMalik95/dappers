@extends('frontend.layout')
@section('title',$category->meta_title)
@section('meta_description',$category->meta_description)
@section('meta_keywords',$category->meta_keywords)

@section('styles')
<style>
    .page_title_wrapper {
        max-height: 80vh;
        overflow: auto;
    }

    .rainbow-sidebar {
        position: sticky !important;
        top: 10px !important;
    }

    .page_content_description {
        position: relative;
    }

</style>
@endsection
@section('content')


<!-- Start Breadcarumb area  -->
<div class="breadcrumb-area breadcarumb-style-1 ptb--120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="title theme-gradient h2">
                        {{ $category->title }}
                    </h1>
                    <ul class="page-list">
                        <li class="rainbow-breadcrumb-item"><a href="/">Home</a></li>
                        <li class="rainbow-breadcrumb-item active">{{ $category->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcarumb area  -->
<!-- Start Theme Style  -->
<div>
    <div class="rainbow-gradient-circle"></div>
    <div class="rainbow-gradient-circle theme-pink"></div>
</div>
<!-- End Theme Style  -->


<!-- Start Seperator Area  -->
<div class="rbt-separator-mid">
    <div class="container">
        <hr class="rbt-separator m-0">
    </div>
</div>
<!-- End Seperator Area  -->

<!-- Start Elements Area  -->
<div class="rainbow-elements-area rainbow-section-gap">
    <div class="container">
        <div class="row flex-lg-row-reverse">
            <div class="col-lg-4 mt_md--40 mt_sm--40">
                <aside class="rainbow-sidebar">
                    <div class="rbt-single-widget widget_search mt--40">
                        <div class="inner">
                            <form class="blog-search" action="#"><input type="text" placeholder="Search ...">
                                <button class="search-button">
                                    <i class="feather-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="rbt-single-widget widget_categories mt--40">
                        <h3 class="title">On This Page...</h3>
                        <div class="inner page_title_wrapper">
                            <ul class="category-list page_title_list">
                            </ul>
                        </div>
                    </div>
                       <div class="rbt-single-widget widget_image p-4 mt--40">
                        <img src="{{ asset('frontend/assets/images') . '/'. $category->image }}" alt="{{ $category->name }} service category image">
                       </div>
                    
                </aside>
            </div>
            <div class="col-lg-8">
                <div class="entry-content page_content_description">
                    {!! $category->description !!}
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Elements Area  -->


@if(!empty($category->service))

<div class="rainbow-service-area rainbow-section-gapBottom ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h4 class="subtitle ">
                        <span class="theme-gradient">Services</span>
                    </h4>
                    <h2 class="title w-600 mb--20">Related Services of {{ $category->name }}</h2>
                </div>
            </div>
        </div>
        <div class="row row--15 service-wrapper">
            @foreach ($category->service as $service)
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-duration="700">
                <div class="service gallery-style text-left">
                    <div class="inner">
                        <div class="content">
                            <h4 class="title">
                                <a href="{{ route('singleService',[$category->slug,$service->slug]) }}">{{ $service->name }}</a>
                            </h4>
                            <p class="description">{{ substr($service->short_description,0,100) . '..' }}</p>
                        </div>
                        <div class="image">
                            <img src="{{ asset('frontend/assets/images/services') . '/'. $service->image }}" alt="{{ $service->name }}">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endif
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $(document).on('click', '.page_title_list li a', function() {
            let activeClass = '';
            let link = window.location.hash;
            let url = $(this).attr('href');
            if (link == url) {
                activeClass = 'active';
            }
            $('#SingleBlogTitles li').removeClass('active');
            $(this).parent().addClass(activeClass);
        });
        var blogContent = $('.page_content_description');
        var tableOfContents = $('.page_title_list');

        blogContent.find('h1, h2, h3, h4').each(function() {
            var heading = $(this);
            let slug = heading.text().toLowerCase().replace(/[^a-z0-9]+/g, '-');
            heading.attr('id', slug);
            var Items = $(
                `<li>  <a href="#${slug}">${heading.text()}</a> </li>`)
            tableOfContents.append(Items);
        });

    });

</script>
@endsection
