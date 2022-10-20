@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
    <div class="container-xl py-3">
        <div class="row">
            <div class="col-md-4 col-xl-3">
                <div>
                    @include('app.filter')
                </div>
            </div>
            <div class="col">
                @forelse($students as $student)
                    @include('app.student')
                @empty
                    <div class="bg-white rounded shadow p-3 mb-3">
                        <div class="h2 text-center mb-0">
                            Not found
                        </div>
                    </div>
                @endforelse
                <div class="d-flex justify-content-end mt-4">
                    {{ $students->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection