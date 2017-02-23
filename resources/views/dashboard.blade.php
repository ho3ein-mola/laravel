@extends('layouts.master')

@section('title')
    DashBoard
@endsection

@section('content')
    @include('includes.error-message')
   <section class="row new-post">
       <div class="col-md-6 col-md-offset-3">
           <header><h3>What Do You Have To Say..</h3></header>
           <form action="{{ route('createPost') }}" method="POST">
               <div class="form-group">
                   <textarea name="post_body" id="new-post" class="form-control" rows="8">{{ old('post_body') }}</textarea>
                   <hr>
                   <button type="submit" class="btn btn-primary">Add Post</button>
                   {{ csrf_field() }}
               </div>
           </form>
       </div>
   </section>

    @foreach($all_post as $post)
    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What Other Peapole Say..</h3></header>
            <article class="post">
                <p>
                    {{ $post->body }}
                </p>
                <div class="info">
                    Posted By hosein on 12 Feb 2016
                </div>
                <div class="intraction">
                    <a href="">Like</a>|
                    <a href="">Dislike</a>|
                    <a href="">Edit</a>|
                    <a href="">Delete</a>|

                </div>
            </article>
        </div>
    </section>
    @endforeach



@endsection