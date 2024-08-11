@extends('layouts.app')

@section('title')
    Eperpus Detail Page
@endsection

@section('content')
    <!-- Page Content -->
    <div class="page-content page-details">
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
                      Product Details
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="store-gallery" id="gallery">
          <div class="container">
            <div class="row">
              <div class="col-lg-8" data-aos="zoom-in">
                <transition name="slide-fade" mode="out-in">
                  <img
                    :key="photos[activePhoto].id"
                    :src="photos[activePhoto].url"
                    class="w-100 main-image"
                    alt=""
                  />
                </transition>
              </div>
              <div class="col-lg-2">
                <div class="row">
                  <div
                    class="col-3 col-lg-12 mt-2 mt-lg-0"
                    v-for="(photo, index) in photos"
                    :key="photo.id"
                    data-aos="zoom-in"
                    data-aos-delay="100"
                  >
                    <a href="#" @click="changeActive(index)">
                      <img
                        :src="photo.url"
                        class="w-100 thumbnail-image"
                        :class="{ active: index == activePhoto }"
                        alt=""
                      />
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="store-details-container" data-aos="fade-up">
          <section class="store-heading">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <h1>Days at morisaki bookshop</h1>
                  <div class="owner">Satoshi Yagisawa</div>
                  <div class="price">$1,409</div>
                </div>
                <div class="col-lg-2" data-aos="zoom-in">
                  <a
                    class="btn btn-success nav-link px-4 text-white btn-block mb-3"
                    href="{{ route('cart') }}"
                    >Add to Cart</a
                  >
                </div>
              </div>
            </div>
          </section>
          <section class="store-description">
            <div class="container">
              <div class="row">
                <div class="col-12 col-lg-8">
                  <p>
                    Satoshi Yagisawa was born in Chiba, Japan, in 1977. He is the international bestselling author of Days at the Morisaki Bookshop, his debut novel, which was originally published in 2009 and won the Chiyoda Literature Prize. More Days at the Morisaki Bookshop is the sequel.
                  </p>
                  <p>
                    In this charming and emotionally resonant follow up to the internationally bestselling Days at the Morisaki Bookshop, Satoshi Yagisawa paints a poignant and thoughtful portrait of life, love, and how much books and bookstores mean to the people who love them.Set again in the beloved Japanese bookshop and nearby coffee shop in the Jimbochi neighborhood of Toyko, More Days at the Morisaki
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section class="store-review">
            <div class="container">
              <div class="row">
                <div class="col-12 col-lg-8 mt-3 mb-3">
                  <h5>Customer Review (3)</h5>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-lg-8">
                  <ul class="list-unstyled">
                    <li class="media">
                      <img
                        src="/images/icon-testimonial-1.png"
                        class="mr-3 rounded-circle"
                        alt=""
                      />
                      <div class="media-body">
                        <h5 class="mt-2 mb-1">Hazza Risky</h5>
                        A beautifully written book. It makes you realize that rather than running away from problems, one should tackle them head on.The character growth throughout the novel is fascinating, as each individual's perception of others changes over time. This reflects the very human tendency to judge based on limited information, it highlights how easily we misinterpret each other and most importantly how a break can heal so many things.
                      </div>
                    </li>
                    <li class="media my-4">
                      <img
                        src="/images/icon-testimonial-2.png"
                        class="mr-3 rounded-circle"
                        alt=""
                      />
                      <div class="media-body">
                        <h5 class="mt-2 mb-1">Anna Sukkirata</h5>
                        The story is written from the perspective of the leading female character by a male author, and the journey from struggles to acceptance is beautifully captured. When you focus on the problems, you see everyone and everything as exhausting and challenging to deal with
                      </div>
                    </li>
                    <li class="media">
                      <img
                        src="/images/icon-testimonial-3.png"
                        class="mr-3 rounded-circle"
                        alt=""
                      />
                      <div class="media-body">
                        <h5 class="mt-2 mb-1">Dakimu Wangi</h5>
                       The author's words are like a warm breeze, making every page a pleasure to read. I particularly loved how they described the Morisaki Bookshop – it felt like stepping into a cozy haven for book lovers.
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
@endSection

@push('addon-script')
<script src="/vendor/vue/vue.js"></script>
<script>
  var gallery = new Vue({
    el: "#gallery",
    mounted() {
      AOS.init();
    },
    data: {
      activePhoto:3,
      photos: [
        {
          id: 1,
          url: "/images/Morisaki.jpg",
        },
        {
          id: 2,
          url: "/images/page1.jpg",
        },
        {
          id: 3,
          url: "/images/morisaki2.jpg",
        },
        {
          id: 4,
          url: "/images/morisaki3.jpg",
        },
      ],
    },
    methods: {
      changeActive(id) {
        this.activePhoto = id;
      },
    },
  });
</script>
@endpush