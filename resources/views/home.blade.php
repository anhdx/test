@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! - <a href="{{ route('logout') }}"> Log out</a><br>
                    <form action="{{ route('postFile') }}" method="post" accept-charset="utf-8">
                        
                        <input type="file" name="file" class="form-control">
                       <button class="btn btn-primary" type="submit">button</button>
                    </form>
                    @if($posts)


                        @foreach($posts as $post=>$val)
                        <p><h4>#{{ $post +1 }}</h4> title: {{ $val->title }}</p>
                        <p>{{ $user->name }}</p>
                        <p>id :{{ $val->id }}</p>
                        <p>id user: {{ $val->id_user }}</p>
                        
                        
                        <p>content: {{ $val->content }}</p>

                        @endforeach

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
