{{-- Struktur data departemen --}}
{{-- modal ubah --}}
@foreach ($dtStruktur as $item)
<div class="modal fade" id="modalUbah{{ $item->id }}" tabindex="-1" aria-labelledby="modalUbah" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-center">Ubah data ini ? </h5>
            </div>
            <div class="modal-body">
                <form action="{{route('strukturupdate', $item->id)}}" method="post">
                    {{ csrf_field() }}
                    {{-- @method('put') --}}
                    <div class="form-group">
                        <label for="">Departemen ID</label>
                        <input type="text" id="akun_no" name="akun_no" autocomplete="off" class="form-control"
                            placeholder="ID Departemen" value="{{$item->akun_no}}">
                    </div>
                    <div class="form-group">
                        <label for="">Nama departemen</label>
                        <input type="text" id="dept_name" name="dept_name" autocomplete="off" class="form-control"
                            placeholder="Nama Departemen" value="{{$item->dept_name}}">
                    </div>
                    {{-- <div class="form-group">
                        <label for="">Nama Kepala Departemen</label>
                        <input type="text" id="dept_head" name="dept_head" autocomplete="off" class="form-control"
                            placeholder="Nama Kepala Departemen">
                    </div> --}}
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <textarea id="deskripsi" name="deskripsi" class="form-control"
                            placeholder="Keterangan">{{$item->deskripsi}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
@endforeach
{{-- endmodal ubah struktur --}}