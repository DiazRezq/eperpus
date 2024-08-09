@extends('layouts.app')

@section('title')
  Eperpus homepage
@endsection

@section('content')
     <!-- Page Content -->
  <div class="page-content page-home">
    <section class="store-carousel">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" data-aos="zoom-in">
            <div
              id="storeCarousel"
              class="carousel slide"
              data-ride="carousel"
            >
              <ol class="carousel-indicators">
                <li
                  data-target="#storeCarousel"
                  data-slide-to="0"
                  class="active"
                ></li>
                <li data-target="#storeCarousel" data-slide-to="1"></li>
                <li data-target="#storeCarousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="/images/bannerperpus.svg"
                    class="d-block w-100"
                    alt="Carousel Image"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="/images/bannerperpus.svg"
                    class="d-block w-100"
                    alt="Carousel Image"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="/images/bannerperpus.svg"
                    class="d-block w-100"
                    alt="Carousel Image"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="store-trend-categories">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>Trend Categories</h5>
          </div>
        </div>
        <div class="row">
          <div
            class="col-6 col-md-3 col-lg-2"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <a class="component-categories d-block" href="#">
              <div class="categories-image">
                <img
                  src="/images/categories-gadgets.svg"
                  alt="Gadgets Categories"
                  class="w-100"
                />
              </div>
              <p class="categories-text">Fiction</p>
            </a>
          </div>
          <div
            class="col-6 col-md-3 col-lg-2"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <a class="component-categories d-block" href="#">
              <div class="categories-image">
                <img
                  src="/images/categories-furniture.svg"
                  alt="Furniture Categories"
                  class="w-100"
                />
              </div>
              <p class="categories-text">Poem</p>
            </a>
          </div>
          <div
            class="col-6 col-md-3 col-lg-2"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <a class="component-categories d-block" href="#">
              <div class="categories-image">
                <img
                  src="/images/categories-makeup.svg"
                  alt="Makeup Categories"
                  class="w-100"
                />
              </div>
              <p class="categories-text">Beauty</p>
            </a>
          </div>
          <div
            class="col-6 col-md-3 col-lg-2"
            data-aos="fade-up"
            data-aos-delay="400"
          >
            <a class="component-categories d-block" href="#">
              <div class="categories-image">
                <img
                  src="/images/categories-sneaker.svg"
                  alt="Sneaker Categories"
                  class="w-100"
                />
              </div>
              <p class="categories-text">Bussiness</p>
            </a>
          </div>
          <div
            class="col-6 col-md-3 col-lg-2"
            data-aos="fade-up"
            data-aos-delay="500"
          >
            <a class="component-categories d-block" href="#">
              <div class="categories-image">
                <img
                  src="/images/categories-tools.svg"
                  alt="Tools Categories"
                  class="w-100"
                />
              </div>
              <p class="categories-text">Manga</p>
            </a>
          </div>
          <div
            class="col-6 col-md-3 col-lg-2"
            data-aos="fade-up"
            data-aos-delay="600"
          >
            <a class="component-categories d-block" href="#">
              <div class="categories-image">
                <img
                  src="/images/categories-baby.svg"
                  alt="Baby Categories"
                  class="w-100"
                />
              </div>
              <p class="categories-text">Parenting</p>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="store-new-products">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>New Products</h5>
          </div>
        </div>
        <div class="row">
          <div
            class="col-6 col-md-4 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <a class="component-products d-block" href="/details.html">
              <div class="products-thumbnail">
                <div
                  class="products-image"
                  style="background-image: url('/images/moredays.png')"
                ></div>
              </div>
              <div class="products-text">More days at Morisaki</div>
              <div class="products-price">$890</div>
            </a>
          </div>
          <div
            class="col-6 col-md-4 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <a class="component-products d-block" href="/details.html">
              <div class="products-thumbnail">
                <div
                  class="products-image"
                  style="background-image: url('/images/pattern.png')"
                ></div>
              </div>
              <div class="products-text">Pattern Breaker</div>
              <div class="products-price">$94,509</div>
            </a>
          </div>
          <div
            class="col-6 col-md-4 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <a class="component-products d-block" href="/details.html">
              <div class="products-thumbnail">
                <div
                  class="products-image"
                  style="background-image: url('/images/dracula.png')"
                ></div>
              </div>
              <div class="products-text">Dracula</div>
              <div class="products-price">$1,409</div>
            </a>
          </div>
          <div
            class="col-6 col-md-4 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="400"
          >
            <a class="component-products d-block" href="/details.html">
              <div class="products-thumbnail">
                <div
                  class="products-image"
                  style="background-image: url('/images/grit.png')"
                ></div>
              </div>
              <div class="products-text">Grit</div>
              <div class="products-price">$225</div>
            </a>
          </div>
          <div
            class="col-6 col-md-4 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="500"
          >
            <a class="component-products d-block" href="/details.html">
              <div class="products-thumbnail">
                <div
                  class="products-image"
                  style="background-image: url('/images/dune.png')"
                ></div>
              </div>
              <div class="products-text">Dune</div>
              <div class="products-price">$45,184</div>
            </a>
          </div>
          <div
            class="col-6 col-md-4 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="600"
          >
            <a class="component-products d-block" href="/details.html">
              <div class="products-thumbnail">
                <div
                  class="products-image"
                  style="background-image: url('/images/art.png')"
                ></div>
              </div>
              <div class="products-text">Art of War</div>
              <div class="products-price">$503</div>
            </a>
          </div>
          <div
            class="col-6 col-md-4 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="700"
          >
            <a class="component-products d-block" href="/details.html">
              <div class="products-thumbnail">
                <div
                  class="products-image"
                  style="background-image: url('/images/youdoyou.png')"
                ></div>
              </div>
              <div class="products-text">youdoyou</div>
              <div class="products-price">$70,482</div>
            </a>
          </div>
          <div
            class="col-6 col-md-4 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="800"
          >
            <a class="component-products d-block" href="/details.html">
              <div class="products-thumbnail">
                <div
                  class="products-image"
                  style="background-image: url('/images/kretek.jpg')"
                ></div>
              </div>
              <div class="products-text">Gadis Kretek</div>
              <div class="products-price">$783</div>
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection