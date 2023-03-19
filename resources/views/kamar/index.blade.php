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
        <div class="alert alert-danger alert-dismissable fade show" role="alert">
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
    <button type="button" class="btn btn-info btn-rounded btn-fw mb-3" data-toggle="modal"
        data-target="#modalFormKamar">
        Tambah Kamar
    </button>

    <a href="{{ route('kamar.export') }}" class="btn btn-success btn-rounded mb-3">
        Export <i class="mdi mdi-file-excel"></i>
    </a>

    <button type="button" class="btn btn-warning btn-rounded mb-3" data-toggle="modal" data-target="#formImport">
        IMPORT <i class="mdi mdi-file-excel"></i>
    </button>
    
    <!-- Modal -->
    @include('kamar.form')

    <!-- Tabel -->
    @include('kamar.data')
</div>
@endsection

@push('script')
<script>
    // DATA TABLE SECTION
    $(function(){
        $('#tblKamar').DataTable()
    })
    // EDIT OR UPDATE INPUT
    $('#modalFormKamar').on('show.bs.modal', function (e) {
        const btn = $(e.relatedTarget)
        const modal = $(this)
        const mode = btn.data('mode')
        const id = btn.data('id')
        const tipe_kamar = btn.data('tipe_kamar')
        if (mode == 'edit') {
            modal.find('.modal-title').text('Edit Data')
            modal.find('#tipe_kamar').val(tipe_kamar)
            modal.find('#method').html('@method("PATCH")')
            modal.find('form').attr('action', `{{ url('kamar') }}/${id}`)
        } else {
            modal.find('.modal-title').text('Form Kamar')
            modal.find('#tipe_kamar').val('')
            modal.find('#method').html('')
            modal.find('form').attr('action', '{{ url("kamar") }}')
        }
    })

    // DELETE DATA
    $('.remove').on('click', function () {
        const data = $(this).closest('tr').find('td:eq(1)').text()

        $('#data-delete').text(data)

        const form = $(this).closest('tr').find('form')
        $('#btn-confirm').on('click', function(){
        form.submit()
        })
    })

    $('#modalFormKamar').on('show.bs.modal', function (e) {
        $('#tipe_kamar').delay(1000).focus().select()
    })
</script>
@endpush