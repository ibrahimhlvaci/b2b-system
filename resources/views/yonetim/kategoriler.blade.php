@extends('yonetim.master')
@section('content')
    <div class="content-wrapper">
        <!-- begin::navigation -->

        <!-- end::navigation -->

        <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            <div class="content ">

                <div class="page-header d-md-flex justify-content-between">
                    <div>
                        <h3>Orders</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">E-commerce</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Orders</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="mt-2 mt-md-0">
                        <div class="dropdown">
                            <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-settings mr-2"></i> Seçenekler
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{route('yonetim.kategoriler.ekle')}}">Kategori Ekle</a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Tüm Kategoriler</h6>
                                <div class="table-responsive">
                                    <table id="orders" class="table">
                                        <thead>
                                        <tr>
                                            <th>

                                            </th>
                                            <th>Kategori İD</th>

                                            <th>Kategori Adı</th>
                                            <th>Slug</th>

                                            <th class="text-right">Seçenekler</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($kategoriler as $kategori)
                                        <tr>
                                            <td></td>
                                            <td>
                                                <a href="#">{{$kategori->id}}</a>
                                            </td>

                                            <td>{{$kategori->kategori_adi}}</td>
                                            <td>{{$kategori->slug}}</td>

                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a href="#" data-toggle="dropdown"
                                                       class="btn btn-floating"
                                                       aria-haspopup="true" aria-expanded="false">
                                                        <i class="ti-more-alt"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="{{route('yonetim.kategoriler.duzenle',$kategori->id)}}" class="dropdown-item">Düzenle</a>
                                                        <a href="{{route('yonetim.kategoriler.sil',$kategori->id)}}" class="dropdown-item">Sil</a>

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

            </div>
            <!-- ./ Content -->

            <!-- Footer -->
            <footer class="content-footer">
                <div>© 2020 Gogi - <a href="http://laborasyon.com" target="_blank">Laborasyon</a></div>
                <div>
                    <nav class="nav">
                        <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                        <a href="#" class="nav-link">Change Log</a>
                        <a href="#" class="nav-link">Get Help</a>
                    </nav>
                </div>
            </footer>
            <!-- ./ Footer -->
        </div>
        <!-- ./ Content body -->
    </div>
@endsection
