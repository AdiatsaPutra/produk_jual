@extends('layouts.home')
@section('content')
<section>
   <div class="container-fluid">
      <div class="row pt-5">
         <div class="col-md-4">
            <div>
               <img class="product-detail" src="{{ $product->image_url }}" alt="">
            </div>
         </div>
         <div class="col-md-4">
            <h3><b>{{ $product->nama }}</b></h3>
            <span class="badge border-rounded-pill bg-danger text-white mb-3">{{ $product->kategori }}</span>
            <h1><b>Rp.{{ number_format($product->harga,2,',','.') }}</b></h1>
            <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
               <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                     type="button" role="tab" aria-controls="home" aria-selected="true">
                     <h5>Home</h5>
                  </button>
               </li>
            </ul>
            <div class="tab-content">
               <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <p class="mt-3">{{ $product->description }}</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem earum error quos
            quisquam
            quasi dolore molestiae excepturi dolores architecto, possimus aspernatur tempora, voluptatibus facere animi
            eaque explicabo ipsum corrupti fugit at. Dignissimos placeat ipsa similique incidunt minima tempore
            obcaecati
            quaerat quo, doloribus et reiciendis beatae autem? Magni aliquam illum quisquam!</div>
      </div>
   </div>
</section>
@endsection