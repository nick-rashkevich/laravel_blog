@extends('layout')

@section('content')
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post">
                    <div class="post-thumb">
{{--                        {{dd($post)}}--}}
                        <a href="{{route('post.show', $post->slug)}}"><img src="{{asset('storage/'.$post->image)}}" alt="{{asset('storage/'.$post->image)}}"></a>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            @if($post->category)
                            <h6><a href="{{route('category.show', $post->category->slug)}}"> {{$post->category->title}}</a></h6>
                            @endif
                            <h1 class="entry-title"><a href="{{route('post.show', $post->slug)}}">{{$post->title}}</a></h1>


                        </header>
                        <div class="entry-content">
                            {!! $post->content !!}
                        </div>
                        <div class="decoration">
                        @foreach($post->tags as $tag)
                            <a href="{{route('tag.show', $tag->slug)}}" class="btn btn-default">{{$tag->title}}</a>
                        @endforeach
                        </div>

                        <div class="social-share">
							<span
                                    class="social-share-title pull-left text-capitalize">By {{$post->author->name}} On {{$post->created_at->format('d:m:Y')}}</span>
                            <ul class="text-center pull-right">
                                <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </article>
                <div class="top-comment"><!--top comment-->
                    <img src="/images/comment.jpg" class="pull-left img-circle" alt="">
                    <h4>Rubel Miah</h4>

                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy hello ro mod tempor
                        invidunt ut labore et dolore magna aliquyam erat.</p>
                </div><!--top comment end-->
                <div class="row"><!--blog next previous-->
                    <div class="col-md-6">
                    	@if($post->hasPrevious())
                        <div class="single-blog-box">
                            <a href="{{route('post.show', $post->getPreviousPost()->slug)}}">
                                <img src="{{asset('storage/'.$post->getPreviousPost()->image)}}" alt="">

                                <div class="overlay">

                                    <div class="promo-text">
                                        <p><i class=" pull-left fa fa-angle-left"></i></p>
                                        <h5>{{$post->getPreviousPost()->title}}</h5>
                                    </div>
                                </div>


                            </a>
                        </div>
                        @endif
                    </div>
                    <div class="col-md-6">
                    	@if($post->hasNext())
                        <div class="single-blog-box">
                            <a href="{{route('post.show', $post->getNextPost()->slug)}}">
                                <img src="{{asset('storage/'.$post->getNextPost()->image)}}" alt="">

                                <div class="overlay">
                                    <div class="promo-text">
                                        <p><i class=" pull-right fa fa-angle-right"></i></p>
                                        <h5>{{$post->getNextPost()->title}}</h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                        @endif
                    </div>
                </div><!--blog next previous end-->
                <div class="related-post-carousel"><!--related post carousel-->
                    <div class="related-heading">
                        <h4>You might also like</h4>
                    </div>
                    <div class="items">
                    @foreach($post->related() as $item)
                        <div class="single-item">
                            <a href="{{route('post.show', $item->slug)}}">
                                <img src="{{asset('storage/'.$item->image)}}" alt="">

                                <p>{{$item->title}}</p>
                            </a>
                        </div>
                    @endforeach

                    </div>
                </div><!--related post carousel-->
{{--                @if(!$post->comments->isEmpty())--}}
{{--                    @foreach($post->getComments() as $comment)--}}
{{--                        <div class="bottom-comment"><!--bottom comment-->--}}
{{--                            <div class="comment-img">--}}
{{--                                <img class="img-circle" src="{{$comment->author->getImage()}}" alt="" width="75" height="75">--}}
{{--                            </div>--}}

{{--                            <div class="comment-text">--}}
{{--                                <h5>{{$comment->author->name}}</h5>--}}

{{--                                <p class="comment-date">--}}
{{--                                    {{$comment->created_at->diffForHumans()}}--}}
{{--                                </p>--}}


{{--                                <p class="para">{{$comment->text}}</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                @endif--}}

                <!-- end bottom comment-->

                @if(Auth::check())
                    <div class="leave-comment"><!--leave comment-->
                        <h4>Leave a reply</h4>


                        <form class="form-horizontal contact-form" role="form" method="post" action="/comment">
                        {{csrf_field()}}
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                            <div class="form-group">
                                <div class="col-md-12">
    										<textarea class="form-control" rows="6" name="message"
                                                      placeholder="Write Massage"></textarea>
                                </div>
                            </div>
                            <button class="btn send-btn">Post Comment</button>
                        </form>
                </div><!--end leave comment-->
                @endif
                
            </div>
            @include('pages._sidebar')
        </div>
    </div>
</div>
<!-- end main content-->
@endsection