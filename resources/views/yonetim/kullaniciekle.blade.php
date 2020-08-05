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
                                <h6 class="card-title">Kullanıcı Ekle</h6>
                                <div class="row">
                                    <div class="col-md-8">

                                        <form method="POST" action="{{route('yonetim.kullanicilar.ekle')}}">
                                            {{ csrf_field() }}
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Kullanıcı Adı</label>
                                                    <input name="kullanici_adi" type="text" class="form-control" id="inputEmail4" placeholder="Kullanıcı Adı">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4">Şifre</label>
                                                    <input name="sifre" type="text" class="form-control" id="inputPassword4" placeholder="Şifre">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress">Bayi Adı</label>
                                                <input name="bayi_adi" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress2">Telefon</label>
                                                <input name="telefon" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputCity">Adres</label>
                                                    <input name="adres" type="text" class="form-control" id="inputCity">
                                                </div>


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
