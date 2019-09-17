@extends('layouts.profile')
@section('title','登録済みのプロフィルの一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>heroku用プロフィール一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\ProfileController@add') }}" role="button" class="btn btn-primary">新規プロフィール作成</a> 
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\ProfileController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">氏名</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_name" value="{{ $cond_name }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value=検索>
                        </div>
                    </div>
                </form>
            </div>
        </div>    
        <div class="row">
            <div class="list-profile col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="20%">氏名</th>
                                <th width="10%">性別</th>
                                <th width="20%">趣味</th>
                                <th width="30%">自己紹介欄</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $profile)
                                <tr>
                                    <th>{{ $profile->name }}</th>
                                    <th>{{ $profile->gender }}</th>
                                    <td>{{ str_limit($profile->hobby, 20)}}</td>
                                    <td>{{ str_limit($profile->introduction, 100)}}</td>
                                    <td>
                                       <div>
                                           <a href="{{ action('Admin\ProfileController@edit', ['id' => $profile->id] )}}">編集</a>
                                       </div>
                                       <div>
                                           <a href="{{ action('Admin\ProfileController@delete', ['id' => $profile->id] )}}">削除</a>
                                       </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection