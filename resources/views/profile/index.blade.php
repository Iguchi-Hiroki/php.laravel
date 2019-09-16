@extends('layouts.frontprofile')

@section('content')
   <div class="container">
       <hr color="#c0c0c0">
       @if (!is_null($headline))
          <div class="row">
              <div class="headline col-md-10 mx-auto">
                  <div class="row">
                      <div class="col-md-3">
                        <p>氏名</p>
                      </div>
                      <div class="col-md-6">
                        <p class="mx-auto">{{ str_limit($headline->name, 70) }}</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-3">
                        <p>性別</p>
                      </div>
                      <div class="col-md-6">
                          <p class="gender mx-auto">{{ str_limit($headline->gender, 70) }}</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-3">
                        <p>趣味</p>
                      </div>
                      <div class="col-md-6">
                          <p class="hobby mx-auto">{{ str_limit($headline->hobby, 650) }}</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-3">
                        <p>自己紹介</p>
                      </div>
                      <div class="col-md-6">
                          <p class="introduction mx-auto">{{ str_limit($headline->introduction, 650) }}</p>
                      </div>
                  </div>
              </div>
          </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                   <div class="post">
                       <div class="row">
                           <div class="text col-md-6">
                               <div class="date">
                                   {{ $post->updated_at->format('Y年m月d日') }}
                               </div>
                               <div class="title">
                                   {{ str_limit($post->title, 150) }}
                               </div>
                               <div class="body mt-3">
                                   {{ str_limit($post->body, 1500) }}
                               </div>
                           </div>
                       </div>
                   </div>
                   <hr color="#c0c0c0">
                @endforeach     
            </div>
        </div>
   </div>
@endsection