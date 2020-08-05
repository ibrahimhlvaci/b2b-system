@extends('layouts.master')
@section('content')
    <div class="navbar-inner">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto text-center mr-xl-5">


                        @foreach($kategoriler as $kategori)
                        <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link" href="/kategoriler/{{$kategori->slug}}">{{$kategori->kategori_adi}}</a>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- banner -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <!-- Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item item1 active">
                <div class="container">
                    <div class="w3l-space-banner">
                        <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                            <p>Get flat
                                <span>10%</span> Cashback</p>
                            <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">The
                                <span>Big</span>
                                Sale
                            </h3>
                            <a class="button2" href="product.html">Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item2">
                <div class="container">
                    <div class="w3l-space-banner">
                        <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                            <p>advanced
                                <span>Wireless</span> earbuds</p>
                            <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Best
                                <span>Headphone</span>
                            </h3>
                            <a class="button2" href="product.html">Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item3">
                <div class="container">
                    <div class="w3l-space-banner">
                        <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                            <p>Get flat
                                <span>10%</span> Cashback</p>
                            <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">New
                                <span>Standard</span>
                            </h3>
                            <a class="button2" href="product.html">Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item4">
                <div class="container">
                    <div class="w3l-space-banner">
                        <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                            <p>Get Now
                                <span>40%</span> Discount</p>
                            <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Today
                                <span>Discount</span>
                            </h3>
                            <a class="button2" href="product.html">Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- //banner -->

    <!-- top Products -->
    <div class="ads-grid py-sm-5 py-4">
        <div class="py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <table id="orders" class="table">
                <thead>
                <tr>

                    <th style="width: 10.66%">Sepet</th>
                    <th style="width: 13.66%">Resim</th>
                    <th style="width: 25.66%">Ürün Adı</th>
                    <th style="width: 16.66%">Marka</th>
                    <th style="width: 16.66%">Stok Kodu</th>
                    <th style="width: 16.66%">Fiyat</th>
                    <th style="width: 16.66%">Ekle</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach($urunler as $urun)
                        <form action="{{route('sepet.ekle')}}" method="post">
                    <td style="">
                        <input style="width: 60%;" name="adet" type="text" class="form-control" id="inputZip">

                    </td>
                    <td>
                        <a href="{{route('urunler',$urun->slug)}}" class="d-flex align-items-center">
                            <img width="40" height="40" src="/upload/urunler/{{$urun->resim}}"
                                 class="rounded mr-3" alt="Vase">

                        </a>
                    </td>
                    <td><a href="{{route('urunler',$urun->slug)}}">{{$urun->urun_adi}}</a></td>
                    <td>{{$urun->marka}}</td>
                    <td>
                        {{$urun->stok_kodu}}
                    </td>
                    <td>{{$urun->fiyati}}</td>
                    <td class="text-right">

                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$urun->id}}">

                            <button style="float: left;" type="submit" name="submit" class="btn btn-primary">Sepete Ekle</button>

                    </td>
                        </form>


                </tr>
                @endforeach

                </tbody>
            </table>
            <!-- //tittle heading -->

        </div>
    </div>
    <!-- //top products -->

    <!-- middle section -->

    <!-- middle section -->

@endsection
