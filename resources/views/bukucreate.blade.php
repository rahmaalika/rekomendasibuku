@extends('template')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-mt-5">
                    <div class="card-header text-center">
                        Form Buku
                    </div>
                    <div class="card-body">
                        <form method="post" action="/buku/add" enctype="multipart/form-data">
                        @csrf
                            <div class="form-gruop pt-2">
                                <label for="judul" class="form-label">Judul Buku</label>
                                <input type="text" class="form-control" id="judul" placeholder="Masukan judul buku" name="judul">
                            </div>
                            <div class="form-gruop pt-2">
                                <label for="konten">Isi Buku</label>
                                <textarea name="isi" class="form-control" id="isi" rows="10" placeholder="Masukan Konten Buku" name="isi"></textarea>
                            </div>
                            <div class="form-gruop pt-2">
                                <label for="favorite" class="form-label">Favorite</label>
                                <input type="text" class="form-control" id="favorite" name="favorite">
                            </div>
                            <div class="form-gruop pt-2">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control-file" name="foto" id="image" >
                            </div>
                            <button type="submit" class="btn btn-secondary w-100 btn-block mt-5">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection