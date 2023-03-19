@extends('base.layout')

@push('style')
@endpush

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        {{-- @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif --}}

        @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <button type="button" class="btn btn-info btn-rounded mb-3" data-toggle="modal" data-target="#formGuruModal">
            Tambah Guru
        </button>

        <a href="{{ route('export-guru') }}" class="btn btn-success btn-rounded mb-3">
            Export Guru
        </a>

        <!-- Modal -->
        @include('guru.form')

        <!-- Tabel -->
        @include('guru.data')
    </div>
    @endsection

    @push('script')
    @endpush