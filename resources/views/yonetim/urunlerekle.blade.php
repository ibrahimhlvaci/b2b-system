@extends('yonetim.master')
@section('content')
    <div class="content-wrapper">
        <!-- begin::navigation -->

        <!-- end::navigation -->

        <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            <div class="content ">


                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Ürün Ekle</h6>
                                <div class="row">
                                    <div class="col-md-8">

                                        <form method="POST" action="{{route('yonetim.urunler.ekle')}}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Stok Kodu</label>
                                                <input class="form-control" name="stok_kodu"
                                                       placeholder="Urun Stok Kodu" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Ürün Kategorisi</label>
                                                <select id="inputState" class="form-control" name="urun_kategori">
                                                    @foreach($kategoriler as $kategori)
                                                        <option value="{{$kategori->id}}">{{$kategori->kategori_adi}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Ürün Markası</label>
                                                <select id="inputState" class="form-control" name="urun_marka">
                                                    @foreach($markalar as $marka)
                                                        <option value="{{$marka->marka_adi}}">{{$marka->marka_adi}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Ürün Açıklama</label>
                                                <input  class="form-control" name="urun_aciklama"
                                                       placeholder="Urun Açıklaması" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Stok</label>
                                                <input class="form-control" name="stok"
                                                       placeholder="Urun Stoku" value="">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Ürün Adı</label>
                                                <input class="form-control" name="urun_adi"
                                                        placeholder="Ürün Adı"value="">

                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Ürün Fiyatı</label>
                                                <input class="form-control" name="urun_fiyati"
                                                       placeholder="Urun Fiyatı" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Ürün Resim 1 (Gerekli)</label>
                                                <input type="file" class="form-control-file" name="urun_resim_1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Ürün Resim 2</label>
                                                <input type="file" class="form-control-file" name="urun_resim_2">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Ürün Resim 3</label>
                                                <input type="file" class="form-control-file" name="urun_resim_3">
                                            </div>

                                            <button type="submit" class="btn btn-primary">Kaydet</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
            <script>

                CKEDITOR.replace( 'urun_aciklama' );

            </script>
        </div>
        <!-- ./ Content body -->
    </div>


@endsection
