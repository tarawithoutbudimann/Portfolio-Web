@extends('auth.layouts')

@section('content')
<div class="flex justify-center mt-5">
    <div class="w-8/12">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @else
                    <div class="alert alert-success">
                        You are logged in!
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
