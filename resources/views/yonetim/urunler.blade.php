@extends('yonetim.master')
@section('content')
    <div class="content-wrapper">

        <div class="content-body">
            <!-- Content -->
            <div class="content ">

                <div class="page-header d-md-flex justify-content-between">
                    <div>
                        <h3>Ürünler</h3>

                    </div>
                    <div class="mt-2 mt-md-0">
                        <div class="dropdown">
                            <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-settings mr-2"></i> Seçenekler
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{route('yonetim.urunler.ekle')}}">Ürün Ekle</a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Tüm Ürünler</h6>
                                <div class="table-responsive">
                                    <table id="orders" class="table">
                                        <thead>
                                        <tr>

                                            <th>ID</th>
                                            <th>Ürün İsmi</th>
                                            <th>Stok Kodu</th>
                                            <th>Fiyatı</th>
                                            <th>Marka</th>
                                            <th>Stok</th>

                                            <th class="text-right">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($urunler as $urun)
                                        <tr>
                                            <td>
                                                {{$urun->id}}
                                            </td>
                                            <td>
                                              {{$urun->urun_adi}}
                                            </td>


                                            <td>{{$urun->stok_kodu}}</td>
                                            <td>{{$urun->fiyati}}</td>
                                            <td>{{$urun->marka}}</td>
                                            <td>{{$urun->stok}}</td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a href="#" data-toggle="dropdown"
                                                       class="btn btn-floating"
                                                       aria-haspopup="true" aria-expanded="false">
                                                        <i class="ti-more-alt"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="{{route('yonetim.urunler.duzenle',$urun->id)}}" class="dropdown-item">Düzenle</a>
                                                        <a href="{{route('yonetim.urunler.sil',$urun->id)}}" class="dropdown-item">Sil</a>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div></div>

@endsection
