@extends('layouts.main')

@section('assets')
@endsection


@section('content')
    <!-- Preloader-start -->
    @include('partials.pre-loader')
    <!-- Preloader-start-end -->

    <!-- Scroll-top -->
    @include('partials.scroll-top')
    <!-- Scroll-top-end-->

    <!-- header-area -->
    @include('partials.sub-page-header')

    <!-- header-area-end -->
    <!-- main-area -->
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Projects</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Projects</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- project-area -->
        <section class="inner-project-area project-style-two section-pb-140">
            <div class="container custom-container">
                <div class="project-top-meta mb-50">
                    <form action="#" method="GET">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="form-grp">
                                    <input type="text" placeholder="Search by project name or location...">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-grp select">
                                            <select id="shortBy" name="select" class="form-select" aria-label="Default select example">
                                                <option value="">House Type</option>
                                                @foreach($housetypes as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-grp select">
                                            <select id="shortByTwo" name="select" class="form-select" aria-label="Default select example">
                                                <option value="">Sale Type</option>
                                                @foreach($saletypes as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-grp select">
                                            <select id="shortByThree" name="select" class="form-select" aria-label="Default select example">
                                                <option value="">Location</option>
                                                @foreach($locations as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="project-item-wrap">
                    <div class="row justify-content-center">
                        @forelse($properties as $item)
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="project-item">
                                    <div class="project-thumb">
                                        <a href="{{route('properties.show',$item->id)}}"><img src="main/img/project/project_img01.jpg" alt=""></a>
                                    </div>
                                    <div class="project-content">
                                        <h3 class="title"><a href="{{route('properties.show',$item->id)}}">{{$item->title}}</a></h3>
                                        <span>{{$item->city->name}} "{{$item->address_1}}</span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="project-item">
                                    <div class="project-content">
                                        <h3 class="title"><a href="">No Properties</a></h3>
                                    </div>
                                </div>
                            </div>
                        @endforelse

                    </div>
                </div>
                {{$properties->links()}}

{{--                <div class="pagination-wrap">--}}
{{--                    <nav aria-label="Page navigation example">--}}
{{--                        <ul class="pagination list-wrap">--}}
{{--                            <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">4</a></li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                </div>--}}
            </div>
        </section>
        <!-- project-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer-area -->
    @include('partials.footer')

    <!-- footer-area-end -->



    <!-- JS here -->
    @include('partials.sub-page-scripts')
@endsection
