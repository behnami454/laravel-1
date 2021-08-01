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

                    You are logged in!

                
                </div>
                <div>
                </div>
            </div>
            <div class="btni" style="text-align: center">
                <button style="margin: 20px; color: white; background-color: black;padding: 20px"><a href="pagination-ajax" style="text-decoration: none; color: white">our product page</a></button>
            </div>
            
        </div>
    </div>
</div>
@endsection
