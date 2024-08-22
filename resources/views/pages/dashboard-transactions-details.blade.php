@extends('layouts.dashboard')

@section('title')
 Eperpus detail books
 @endsection

@section('content')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">#STORE0839</h2>
    <p class="dashboard-subtitle">
      Transaction Details
    </p>
  </div>
  <div class="dashboard-content" id="transactionDetails">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-md-4">
                <img
                  src="/images/product-details-dashboard.png"
                  alt=""
                  class="w-100 mb-3"
                />
              </div>
              <div class="col-12 col-md-8">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="product-title">Writer Name</div>
                    <div class="product-subtitle">Diaz</div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="product-title">Book Title</div>
                    <div class="product-subtitle">
                      The People's Book
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="product-title">
                      Date Draft Send
                    </div>
                    <div class="product-subtitle">
                      12 Januari, 2020
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="product-title">Status</div>
                    <div class="product-subtitle text-danger" id="publishDetails">
                    Pending
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="product-title">Mobile</div>
                    <div class="product-subtitle">
                      +628 2020 11111
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 mt-4">
                <h5>
                  Publish Informations
                </h5>
                <div class="row">
                  <div class="col-12">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="product-title">Status</div>
                        <select
                          name="status"
                          id="status"
                          class="form-control"
                          v-model="status"
                        >
                          <option value="Draft">Draft</option>
                          <option value="Reviewed">in review</option>
                          <option value="Publised">Published</option>
                        </select>
                      </div>
                      <template v-if="status == 'SHIPPING'">
                        <div class="col-md-3">
                          <div class="product-title">
                            Input Resi
                          </div>
                          <input
                            class="form-control"
                            type="text"
                            name="resi"
                            id="openStoreTrue"
                            v-model="resi"
                          />
                        </div>
                        <div class="col-md-2">
                          <button
                            type="submit"
                            class="btn btn-success btn-block mt-4"
                          >
                            Update Resi
                          </button>
                        </div>
                      </template>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection

@push('addon-script')
<script src="/vendor/vue/vue.js"></script>
<script>
  var publishStatus = new Vue({
    el: "#publishDetails",
    data: {
      status: "Published",
    },
  });
</script>
@endpush