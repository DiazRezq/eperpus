@extends('layouts.app')

@section('title')
    Eperpus Cart Page
@endsection

@section('content')
    <div class="page-content page-cart">
        <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
        >
        <div class="container">
            <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                    Cart
                    </li>
                </ol>
                </nav>
            </div>
            </div>
        </div>
        </section>
        <section class="store-cart">
            <div class="container">
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-12 table-responsive">
                    <table
                    class="table table-borderless table-cart"
                    aria-describedby="Cart"
                    >
                    <thead>
                        <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Books Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Menu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td style="width: 25%">
                            <img
                            src="/images/product-cart-1.jpg"
                            alt=""
                            class="cart-image"
                            />
                        </td>
                        <td style="width: 35%">
                            <div class="product-title">Sofa Ternyaman</div>
                            <div class="product-subtitle">by Andi Sukka</div>
                        </td>
                        <td style="width: 35%">
                            <div class="product-title">$29,112</div>
                            <div class="product-subtitle">USD</div>
                        </td>
                        <td style="width: 20%">
                            <a href="#" class="btn btn-remove-cart"> Remove </a>
                        </td>
                        </tr>
                        <tr>
                        <td style="width: 25%">
                            <img
                            src="/images/product-cart-2.jpg"
                            alt=""
                            class="cart-image"
                            />
                        </td>
                        <td style="width: 25%">
                            <div class="product-title">Sneaker</div>
                            <div class="product-subtitle">by BuildWith Angga</div>
                        </td>
                        <td style="width: 25%">
                            <div class="product-title">$80,309</div>
                            <div class="product-subtitle">USD</div>
                        </td>
                        <td style="width: 25%">
                            <a href="#" class="btn btn-remove-cart"> Remove </a>
                        </td>
                        </tr>
                        <tr>
                        <td style="width: 25%">
                            <img
                            src="/images/product-cart-3.jpg"
                            alt=""
                            class="cart-image"
                            />
                        </td>
                        <td style="width: 25%">
                            <div class="product-title">Coffee Holder</div>
                            <div class="product-subtitle">by Addictex</div>
                        </td>
                        <td style="width: 25%">
                            <div class="product-title">$13,492</div>
                            <div class="product-subtitle">USD</div>
                        </td>
                        <td style="width: 25%">
                            <a href="#" class="btn btn-remove-cart"> Remove </a>
                        </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="200">
                <div class="col-4 col-md-2">
                    <div class="product-title">$10</div>
                    <div class="product-subtitle">Country Tax</div>
                </div>
                <div class="col-4 col-md-3">
                    <div class="product-title">$280</div>
                    <div class="product-subtitle">Membership fee</div>
                </div>

                <div class="col-4 col-md-2">
                    <div class="product-title text-success">$392,409</div>
                    <div class="product-subtitle">Total</div>
                </div>
                <div class="col-8 col-md-3">
                    <a
                    href="{{ route('success') }}"
                    class="btn btn-success mt-4 px-4 btn-block"
                    >
                    Rent Now
                    </a>
                </div>
                </div>
            </div>
        </section>
  </div>
@endsection