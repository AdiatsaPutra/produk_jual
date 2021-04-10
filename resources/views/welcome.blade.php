@extends('layouts.home')
@section('content')
<div class="container-fluid">
   <section>
      <div id="carouselExampleCaptions" class="carousel slide mt-4" data-bs-ride="carousel">
         <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
               aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
               aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
               aria-label="Slide 3"></button>
         </div>
         <div class="carousel-inner border-rounded">
            <div class="carousel-item active">
               <img
                  src="https://images.unsplash.com/photo-1460353581641-37baddab0fa2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80"
                  height="500px" class="d-block w-100" alt="..." style="object-fit: cover;">
               <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
               </div>
            </div>
            <div class="carousel-item">
               <img
                  src="https://images.unsplash.com/photo-1460353581641-37baddab0fa2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80"
                  height="500px" class="d-block w-100" alt="..." style="object-fit: cover;">
               <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
               </div>
            </div>
            <div class="carousel-item">
               <img
                  src="https://images.unsplash.com/photo-1460353581641-37baddab0fa2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80"
                  height="500px" class="d-block w-100" alt="..." style="object-fit: cover;">
               <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
               </div>
            </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
         </button>
      </div>
   </section>
   <section>
      <div id="carousel-top" class="carousel-top owl-carousel owl-theme mt-4">
         @foreach ($products->take(5) as $product)
         <div class="product top-product border border-1 border-rounded">
            <img src="{{ $product->image_url }}" alt="" height="300px" style="object-fit: cover; border-top-right-radius: 10px;
            border-top-left-radius: 10px;">
            <div class="p-3">
               <span class="badge my-2 border-rounded-pill bg-danger">{{ $product->kategori }}</span>
               <h5>{{ $product->nama }}</h5>
               <h5>Rp. {{ number_format($product->harga,2,',','.') }}</h5>
               <div class="buy-buttons mt-3">
                  <form action="{{ route('products.detail', ['id'=>$product->id]) }}">
                     <button class="btn btn-dark">Buy Now</button>
                  </form>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </section>
   <section>
      <h5 class="text-dark">Kategori</h5>
      <div id="carousel-category-top" class="carousel-categories owl-carousel owl-theme">
         @foreach ($products as $product)
         <div class="product border border-1 border-rounded">
            <img src="{{ $product->image_url }}" alt="" width="600px" height="300px" style="object-fit: cover; border-top-right-radius: 10px;
            border-top-left-radius: 10px;">
            <div class="p-3">
               <span class="badge my-2 border-rounded-pill bg-warning">{{ $product->kategori }}</span>
               <p>{{ $product->nama }}</p>
               <h5>Rp. {{ number_format($product->harga,2,',','.') }}</h5>
               <div class="buy-buttons mt-3">
                  <form action="{{ route('products.detail', ['id'=>$product->id]) }}">
                     <button class="btn btn-dark">Buy Now</button>
                  </form>
               </div>
            </div>
         </div>
         @endforeach
   </section>
   <section>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
         <li class="nav-item" role="presentation">
            <button class="nav-link active text-dark" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
               type="button" role="tab" aria-controls="home" aria-selected="true">
               <h5>Diskon</h5>
            </button>
         </li>
         <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
               role="tab" aria-controls="profile" aria-selected="false">
               <h5>Anak-Anak</h5>
            </button>
         </li>
         <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
               role="tab" aria-controls="contact" aria-selected="false">
               <h5>Dewasa</h5>
            </button>
         </li>
      </ul>
      <div class="tab-content" id="myTabContent">
         <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="tab1 m-1 mt-5">
               @foreach ($mnmn->take(10) as $product)
               <div class="tab1-product border border-1 border-rounded">
                  <img src="{{ $product->image_url }}" alt="" style="object-fit: cover; border-top-right-radius: 10px;
                  border-top-left-radius: 10px;">
                  <div class="p-3">
                     <span class="badge my-2 border-rounded-pill bg-success">{{ $product->kategori }}</span>
                     <p>{{ $product->nama }}</p>
                     <h5>Rp. {{ number_format($product->harga,2,',','.') }}</h5>
                     <div class="buy-buttons mt-3">
                        <form action="{{ route('products.detail', ['id'=>$product->id]) }}">
                           <button class="btn btn-dark">Buy Now</button>
                        </form>
                        <button class="btn btn-outline-dark">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                              class="bi bi-cart" viewBox="0 0 16 16">
                              <path
                                 d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7h5.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                           </svg>
                           Add To Cart</button>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
         <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="tab1 m-1 mt-5">
               @foreach ($mknn->take(10) as $product)
               <div class="tab1-product border border-1 border-rounded">
                  <img src="{{ $product->image_url }}" alt="" style="object-fit: cover; border-top-right-radius: 10px;
                  border-top-left-radius: 10px;">
                  <div class="p-3">
                     <span class="badge my-2 border-rounded-pill bg-success">{{ $product->kategori }}</span>
                     <p>{{ $product->nama }}</p>
                     <h5>Rp. {{ number_format($product->harga,2,',','.') }}</h5>
                     <div class="buy-buttons mt-3">
                        <form action="{{ route('products.detail', ['id'=>$product->id]) }}">
                           <button class="btn btn-dark">Buy Now</button>
                        </form>
                        <button class="btn btn-outline-dark">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                              class="bi bi-cart" viewBox="0 0 16 16">
                              <path
                                 d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7h5.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                           </svg>
                           Add To Cart</button>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
         <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="tab1 m-1 mt-5">
               @foreach ($mknn->take(10) as $product)
               <div class="tab1-product border border-1 border-rounded">
                  <img src="{{ $product->image_url }}" alt="" style="object-fit: cover; border-top-right-radius: 10px;
                  border-top-left-radius: 10px;">
                  <div class="p-3">
                     <span class="badge my-2 border-rounded-pill bg-danger">{{ $product->kategori }}</span>
                     <p>{{ $product->nama }}</p>
                     <h5>Rp{{ $product->harga }}</h5>
                     <div class="buy-buttons mt-3">
                        <form action="{{ route('products.detail', ['id'=>$product->id]) }}">
                           <button class="btn btn-dark">Buy Now</button>
                        </form>
                        <button class="btn btn-outline-dark">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                              class="bi bi-cart" viewBox="0 0 16 16">
                              <path
                                 d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7h5.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                           </svg>
                           Add To Cart</button>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </section>
</div>
@endsection