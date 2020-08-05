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
                                <h6 class="card-title">Marka Düzenle</h6>
                                <div class="row">
                                    <div class="col-md-8">

                                        <form method="POST" action="{{route('yonetim.marka.kaydet',@$markalar->id)}}">
                                            {{ csrf_field() }}

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Marka Adı</label>
                                                <input name="marka_adi"  class="form-control" id="exampleInputEmail1"
                                                       aria-describedby="emailHelp" placeholder="Enter email" value="{{$markalar->marka_adi}}">

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
