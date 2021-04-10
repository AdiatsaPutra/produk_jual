<div class="modal fade" id="editModal{{ $product->id }}" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form method="POST" action="/products/{{ $product->id }}/edit">
               @method('PUT')
               @csrf
               <div class="form-group">
                  <label for="namabarang">Nama Barang</label>
                  <input type="text" class="form-control" id="namabarang" name="nama" value="{{ $product->nama }}">
               </div>
               <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                  <input type="text" class="form-control" id="description" name="description"
                     value="{{ $product->description }}">
               </div>
               <div class="form-group">
                  <label for="harga">Harga Barang</label>
                  <input type="text" class="form-control" id="harga" name="harga" value="{{ $product->harga }}">
               </div>
               <div class="form-group">
                  <label for="kategori">Kategori Barang</label>
                  <input type="text" class="form-control" id="kategori" name="kategori"
                     value="{{ $product->kategori }}">
               </div>
               <div class="form-group">
                  <label for="harga">Foto</label>
                  <img src="{{ $product->image_url }}" alt="" width="150px">
                  <input type="text" class="form-control" id="harga" name="image_url" value="{{ $product->image_url }}">
               </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update Produk</button>
         </div>
         </form>
      </div>
   </div>
</div>