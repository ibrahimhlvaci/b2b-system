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
                                <h6 class="card-title">Kategori Ekle</h6>
                                <div class="row">
                                    <div class="col-md-8">

                                        <form method="POST" action="{{route('yonetim.kategoriler.ekle')}}">
                                            {{ csrf_field() }}


                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Kategori Adı</label>
                                                <input name="kategori_adi"  class="form-control" id="exampleInputEmail1"
                                                       aria-describedby="emailHelp" placeholder="Kategori Adı"value="">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Kategori Slug</label>
                                                <input name="kategori_slug" class="form-control" id="exampleInputPassword1"
                                                       placeholder="Kategori Slug" value="">
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
