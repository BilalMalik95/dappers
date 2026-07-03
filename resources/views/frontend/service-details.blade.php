@extends('frontend.layout')
@section('title',$categoryService->service[0]->meta_title)
@section('meta_description',$categoryService->service[0]->meta_description)
@section('meta_keywords',$categoryService->service[0]->meta_keywords)

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
                        {{ $categoryService->service[0]->title }}
                    </h1>
                    <ul class="page-list">
                        <li class="rainbow-breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="rainbow-breadcrumb-item "><a href="{{ route('category',$categoryService->slug) }}">{{ $categoryService->name }}</a></li>
                        <li class="rainbow-breadcrumb-item active">{{ $categoryService->service[0]->name }}</li>
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
                        <img src="{{ asset('frontend/assets/images/services') . '/'. $categoryService->service[0]->image }}" alt="{{ $categoryService->service[0]->name }} service image">
                    </div>

                </aside>
            </div>
            <div class="col-lg-8">
                <div class="entry-content page_content_description">
                    {!! $categoryService->service[0]->description !!}
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Elements Area  -->
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
