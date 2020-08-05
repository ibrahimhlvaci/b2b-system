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
                                <h6 class="card-title">Urun Düzenle</h6>
                                <div class="row">
                                    <div class="col-md-8">
                                        <form method="POST" action="{{route('yonetim.urunler.duzenle1',@$urunler->id)}}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Stok Kodu</label>
                                                <input class="form-control" name="stok_kodu"
                                                       placeholder="Urun Stok Kodu" value="{{$urunler->stok_kodu}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Ürün Markası</label>
                                                <input class="form-control" name="urun_marka"
                                                       placeholder="Urun Markası" value="{{$urunler->marka}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Ürün Açıklama</label>
                                                <input  class="form-control" name="urun_aciklama"
                                                        placeholder="Urun Açıklaması" value="{{$urunler->aciklama}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Stok</label>
                                                <input class="form-control" name="stok"
                                                       placeholder="Urun Stoku" value="{{$urunler->stok}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Ürün Adı</label>
                                                <input class="form-control" name="urun_adi"
                                                       placeholder="Ürün Adı"value="{{$urunler->urun_adi}}">

                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Ürün Fiyatı</label>
                                                <input class="form-control" name="urun_fiyati"
                                                       placeholder="Urun Fiyatı" value="{{$urunler->fiyati}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Ürün Resim 1 (Gerekli)</label>
                                                <input type="file" class="form-control-file" name="urun_resim_1" >
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
            <!-- ./ Content -->

            <!-- Footer -->

            <!-- ./ Footer -->
        </div>
        <!-- ./ Content body -->
    </div>


@endsection
