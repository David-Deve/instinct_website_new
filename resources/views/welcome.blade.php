@extends('layouts.app')
@section('content')
    <section class="container" id="home-post">
        <div class="heading">
            <h2>
                <span>ព័ត៌មានថ្មីៗ</span>
            </h2>
        </div>
        <div class="row m-l-r--8">
            @foreach($news as $new)
            <div class="col-md-3 col-sm-4 col-xs-12 p-l-r-8 m-b-30">
                <a href="/article/archives/139786">
                    <div class="post-item match-height-box">
                        <div class="image-wrapper">
                            <img src="{{ asset('http://127.0.0.1:8081/storage/images/' . $new->photos) }}" alt="News Photo" class="card-img-top" style="height: 200px; object-fit: cover">
                        </div>
                        <div class="title">
                            {{$new->title}}
                        </div>
                        <div class="post-meta">
                <span class="time-ago">
                  <time
                      class="timeago"
                      datetime="April 13, 2023 10:08"
                      title="April 13, 2023"
                  >{{$new->created_at}}</time>
                </span>
                <span class="post-view-count">
                  500 view
                </span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>
    <section class="container" id="home-category-post-2">
        <div class="row">
            <div class="col-md-4 match-height-box">
                <div class="heading">
                    <h2>
                        <span>ព័ត៌មានជាតិ</span>
                    </h2>
                    <a class="view-more" href="/categories/local"
                    ><span>ទាំងអស់</span>
                    </a>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row big-box post-item">
                            <div class="col-md-12 col-sm-5 p-r-0">
                                <a class="post" href="/article/archives/139761">
                                    <div class="image-wrapper">
                                        <img
                                            class="image-scale-center card-img-top"
                                            style="height: 200px; object-fit: cover"
                                            src="{{ asset('http://127.0.0.1:8081/storage/images/' . $randomRecord->photos) }}"
                                            alt="Untitled 1 copy"
                                        />
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12 col-sm-7">
                                <a class="post" href="/article/archives/139761">
                                    <div class="title">
                                        {{$randomRecord->title}}
                                    </div>
                                    <div class="post-meta">
                                        <span class="time-ago">
                                          <time
                                              class="timeago"
                                              datetime="March 30, 2023 19:18"
                                              title="March 30, 2023"
                                          >{{$randomRecord->created_at}}</time>
                                        </span>
                                        <span class="post-view-count">

                                          500 view
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @foreach($get4news as $get4new)
                    <div class="col-xs-12">
                        <div class="row small-box post-item">
                            <div class="col-md-4 col-sm-5 p-r-0">
                                <a class="post" href="/article/archives/139461">
                                    <div class="image-wrapper">
                                        <img
                                            class="image-scale-center"
                                            style="height: 80px; object-fit: cover"
                                            src="{{ asset('http://127.0.0.1:8081/storage/images/' . $get4new->photos) }}"
                                            alt="Untitled 1 recovered recovered recovered"
                                        />
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-7">
                                <a class="post" href="/article/archives/139461">
                                    <div class="title">
                                        {{$get4new->title}}
                                    </div>
                                    <div class="post-meta">
                                        <span class="time-ago">
                                          <time
                                              class="timeago"
                                              datetime="January 08, 2023 15:39"
                                              title="January 08, 2023"
                                          >{{$get4new->created_at}}</time>
                                        </span>
                                        <span class="post-view-count">

                                          1084 view
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="btn-more" href="/categories/local"><span>ទាំងអស់</span> </a>
            </div>

            <div class="col-md-4 match-height-box">
                <div class="heading">
                    <h2>
                        <span>ព័ត៌មានអន្តរជាតិ</span>
                    </h2>
                    <a class="view-more" href="/categories/local"
                    ><span>ទាំងអស់</span>
                    </a>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row big-box post-item">
                            <div class="col-md-12 col-sm-5 p-r-0">
                                <a class="post" href="/article/archives/139761">
                                    <div class="image-wrapper">
                                        <img
                                            class="image-scale-center card-img-top"
                                            style="height: 200px; object-fit: cover"
                                            src="{{ asset('http://127.0.0.1:8081/storage/images/' . $randomRecord2->photos) }}"
                                            alt="Untitled 1 copy"
                                        />
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12 col-sm-7">
                                <a class="post" href="/article/archives/139761">
                                    <div class="title">
                                        {{$randomRecord2->title}}
                                    </div>
                                    <div class="post-meta">
                                        <span class="time-ago">
                                          <time
                                              class="timeago"
                                              datetime="March 30, 2023 19:18"
                                              title="March 30, 2023"
                                          >{{$randomRecord2->created_at}}</time>
                                        </span>
                                        <span class="post-view-count">

                                          500 view
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @foreach($get4news2 as $get4new2)
                        <div class="col-xs-12">
                            <div class="row small-box post-item">
                                <div class="col-md-4 col-sm-5 p-r-0">
                                    <a class="post" href="/article/archives/139461">
                                        <div class="image-wrapper">
                                            <img
                                                class="image-scale-center"
                                                style="height: 80px; object-fit: cover"
                                                src="{{ asset('http://127.0.0.1:8081/storage/images/' . $get4new2->photos) }}"
                                                alt="Untitled 1 recovered recovered recovered"
                                            />
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-8 col-sm-7">
                                    <a class="post" href="/article/archives/139461">
                                        <div class="title">
                                            {{$get4new2->title}}
                                        </div>
                                        <div class="post-meta">
                                        <span class="time-ago">
                                          <time
                                              class="timeago"
                                              datetime="January 08, 2023 15:39"
                                              title="January 08, 2023"
                                          >{{$get4new2->created_at}}</time>
                                        </span>
                                            <span class="post-view-count">

                                          1084 view
                                        </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="btn-more" href="/categories/local"><span>ទាំងអស់</span> </a>
            </div>

            <div class="col-md-4 match-height-box">
                <div class="heading">
                    <h2>
                        <span>សង្គម សិល្បៈ និង កម្សាន្ដ</span>
                    </h2>
                    <a class="view-more" href="/categories/local"
                    ><span>ទាំងអស់</span>
                    </a>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row big-box post-item">
                            <div class="col-md-12 col-sm-5 p-r-0">
                                <a class="post" href="/article/archives/139761">
                                    <div class="image-wrapper">
                                        <img
                                            class="image-scale-center card-img-top"
                                            style="height: 200px; object-fit: cover"
                                            src="{{ asset('http://127.0.0.1:8081/storage/images/' . $randomRecord->photos) }}"
                                            alt="Untitled 1 copy"
                                        />
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12 col-sm-7">
                                <a class="post" href="/article/archives/139761">
                                    <div class="title">
                                        {{$randomRecord->title}}
                                    </div>
                                    <div class="post-meta">
                                        <span class="time-ago">
                                          <time
                                              class="timeago"
                                              datetime="March 30, 2023 19:18"
                                              title="March 30, 2023"
                                          >{{$randomRecord->created_at}}</time>
                                        </span>
                                        <span class="post-view-count">

                                          500 view
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @foreach($get4news as $get4new)
                        <div class="col-xs-12">
                            <div class="row small-box post-item">
                                <div class="col-md-4 col-sm-5 p-r-0">
                                    <a class="post" href="/article/archives/139461">
                                        <div class="image-wrapper">
                                            <img
                                                class="image-scale-center"
                                                style="height: 80px; object-fit: cover"
                                                src="{{ asset('http://127.0.0.1:8081/storage/images/' . $get4new->photos) }}"
                                                alt="Untitled 1 recovered recovered recovered"
                                            />
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-8 col-sm-7">
                                    <a class="post" href="/article/archives/139461">
                                        <div class="title">
                                            {{$get4new->title}}
                                        </div>
                                        <div class="post-meta">
                                        <span class="time-ago">
                                          <time
                                              class="timeago"
                                              datetime="January 08, 2023 15:39"
                                              title="January 08, 2023"
                                          >{{$get4new->created_at}}</time>
                                        </span>
                                            <span class="post-view-count">

                                          1084 view
                                        </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="btn-more" href="/categories/local"><span>ទាំងអស់</span> </a>
            </div>

            <div class="col-md-4 match-height-box">
                <div class="heading">
                    <h2>
                        <span>បច្ចេកវិទ្យា</span>
                    </h2>
                    <a class="view-more" href="/categories/local"
                    ><span>ទាំងអស់</span>
                    </a>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row big-box post-item">
                            <div class="col-md-12 col-sm-5 p-r-0">
                                <a class="post" href="/article/archives/139761">
                                    <div class="image-wrapper">
                                        <img
                                            class="image-scale-center card-img-top"
                                            style="height: 200px; object-fit: cover"
                                            src="{{ asset('http://127.0.0.1:8081/storage/images/' . $randomRecord->photos) }}"
                                            alt="Untitled 1 copy"
                                        />
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12 col-sm-7">
                                <a class="post" href="/article/archives/139761">
                                    <div class="title">
                                        {{$randomRecord->title}}
                                    </div>
                                    <div class="post-meta">
                                        <span class="time-ago">
                                          <time
                                              class="timeago"
                                              datetime="March 30, 2023 19:18"
                                              title="March 30, 2023"
                                          >{{$randomRecord->created_at}}</time>
                                        </span>
                                        <span class="post-view-count">

                                          500 view
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @foreach($get4news as $get4new)
                        <div class="col-xs-12">
                            <div class="row small-box post-item">
                                <div class="col-md-4 col-sm-5 p-r-0">
                                    <a class="post" href="/article/archives/139461">
                                        <div class="image-wrapper">
                                            <img
                                                class="image-scale-center"
                                                style="height: 80px; object-fit: cover"
                                                src="{{ asset('http://127.0.0.1:8081/storage/images/' . $get4new->photos) }}"
                                                alt="Untitled 1 recovered recovered recovered"
                                            />
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-8 col-sm-7">
                                    <a class="post" href="/article/archives/139461">
                                        <div class="title">
                                            {{$get4new->title}}
                                        </div>
                                        <div class="post-meta">
                                        <span class="time-ago">
                                          <time
                                              class="timeago"
                                              datetime="January 08, 2023 15:39"
                                              title="January 08, 2023"
                                          >{{$get4new->created_at}}</time>
                                        </span>
                                            <span class="post-view-count">

                                          1084 view
                                        </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="btn-more" href="/categories/local"><span>ទាំងអស់</span> </a>
            </div>

            <div class="col-md-4 match-height-box">
                <div class="heading">
                    <h2>
                        <span>ចំណេះដឹង</span>
                    </h2>
                    <a class="view-more" href="/categories/local"
                    ><span>ទាំងអស់</span>
                    </a>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row big-box post-item">
                            <div class="col-md-12 col-sm-5 p-r-0">
                                <a class="post" href="/article/archives/139761">
                                    <div class="image-wrapper">
                                        <img
                                            class="image-scale-center card-img-top"
                                            style="height: 200px; object-fit: cover"
                                            src="{{ asset('http://127.0.0.1:8081/storage/images/' . $randomRecord->photos) }}"
                                            alt="Untitled 1 copy"
                                        />
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12 col-sm-7">
                                <a class="post" href="/article/archives/139761">
                                    <div class="title">
                                        {{$randomRecord->title}}
                                    </div>
                                    <div class="post-meta">
                                        <span class="time-ago">
                                          <time
                                              class="timeago"
                                              datetime="March 30, 2023 19:18"
                                              title="March 30, 2023"
                                          >{{$randomRecord->created_at}}</time>
                                        </span>
                                        <span class="post-view-count">

                                          500 view
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @foreach($get4news as $get4new)
                        <div class="col-xs-12">
                            <div class="row small-box post-item">
                                <div class="col-md-4 col-sm-5 p-r-0">
                                    <a class="post" href="/article/archives/139461">
                                        <div class="image-wrapper">
                                            <img
                                                class="image-scale-center"
                                                style="height: 80px; object-fit: cover"
                                                src="{{ asset('http://127.0.0.1:8081/storage/images/' . $get4new->photos) }}"
                                                alt="Untitled 1 recovered recovered recovered"
                                            />
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-8 col-sm-7">
                                    <a class="post" href="/article/archives/139461">
                                        <div class="title">
                                            {{$get4new->title}}
                                        </div>
                                        <div class="post-meta">
                                        <span class="time-ago">
                                          <time
                                              class="timeago"
                                              datetime="January 08, 2023 15:39"
                                              title="January 08, 2023"
                                          >{{$get4new->created_at}}</time>
                                        </span>
                                            <span class="post-view-count">

                                          1084 view
                                        </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="btn-more" href="/categories/local"><span>ទាំងអស់</span> </a>
            </div>

            <div class="col-md-4 match-height-box">
                <div class="heading">
                    <h2>
                        <span>Press Release</span>
                    </h2>
                    <a class="view-more" href="/categories/local"
                    ><span>ទាំងអស់</span>
                    </a>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row big-box post-item">
                            <div class="col-md-12 col-sm-5 p-r-0">
                                <a class="post" href="/article/archives/139761">
                                    <div class="image-wrapper">
                                        <img
                                            class="image-scale-center card-img-top"
                                            style="height: 200px; object-fit: cover"
                                            src="{{ asset('http://127.0.0.1:8081/storage/images/' . $randomRecord->photos) }}"
                                            alt="Untitled 1 copy"
                                        />
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12 col-sm-7">
                                <a class="post" href="/article/archives/139761">
                                    <div class="title">
                                        {{$randomRecord->title}}
                                    </div>
                                    <div class="post-meta">
                                        <span class="time-ago">
                                          <time
                                              class="timeago"
                                              datetime="March 30, 2023 19:18"
                                              title="March 30, 2023"
                                          >{{$randomRecord->created_at}}</time>
                                        </span>
                                        <span class="post-view-count">

                                          500 view
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @foreach($get4news as $get4new)
                        <div class="col-xs-12">
                            <div class="row small-box post-item">
                                <div class="col-md-4 col-sm-5 p-r-0">
                                    <a class="post" href="/article/archives/139461">
                                        <div class="image-wrapper">
                                            <img
                                                class="image-scale-center"
                                                style="height: 80px; object-fit: cover"
                                                src="{{ asset('http://127.0.0.1:8081/storage/images/' . $get4new->photos) }}"
                                                alt="Untitled 1 recovered recovered recovered"
                                            />
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-8 col-sm-7">
                                    <a class="post" href="/article/archives/139461">
                                        <div class="title">
                                            {{$get4new->title}}
                                        </div>
                                        <div class="post-meta">
                                        <span class="time-ago">
                                          <time
                                              class="timeago"
                                              datetime="January 08, 2023 15:39"
                                              title="January 08, 2023"
                                          >{{$get4new->created_at}}</time>
                                        </span>
                                        <span class="post-view-count">
                                          1000 view
                                        </span>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="btn-more" href="/categories/local"><span>ទាំងអស់</span> </a>
            </div>
        </div>
    </section>

@endsection
