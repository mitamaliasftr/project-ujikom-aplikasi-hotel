<div class="card">
    <div class="card-body">
        <h4 class="card-title">Kamar</h4>
        <p class="card-description"> Data <code> Kamar </code></p>
        <div class="table-responsive">
            <table id="tblKamar" class="table table-hover table-compact">
                <thead>
                    <tr>
                        <th width="10%">No</th>
                        <th width="60%">Tipe Kamar</th>
                        <th width="30%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kamar as $k)
                    <tr>
                        <td>{{ $i = !isset($i)?$i=1:++$i }}</td>
                        <td>{{ $k->tipe_kamar }}</td>
                        <td>
                            <button type="button" class="btn btn-warning" data-toggle="modal"
                                data-target="#modalFormKamar" data-mode="edit" data-id="{{ $k->id }}" data-tipe_kamar="{{ $k->tipe_kamar }}">
                                <i class="mdi mdi-pencil"></i>    
                            </button>
                            <form action="{{ route('kamar.destroy', $k->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger remove" data-toggle="modal"
                                    data-target="#confirmDialog">
                                    <i class="mdi mdi-delete"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="card-footer">
                
            </div>
        </div>
    </div>
</div>
<!-- Konfirmasi Delete -->
<div class="modal fade" id="confirmDialog" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah data <b id="data-delete"></b> akan dihapus?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-primary" id="btn-confirm">Ya, Hapus</button>
            </div>
        </div>
    </div>
</div>