<div class="modal fade" id="modal" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form method="POST" action="{{ route('products.add') }}">
               @csrf
               <div class="form-group">
                  <label for="namabarang">Nama Barang</label>
                  <input type="text" class="form-control" id="namabarang" name="nama">
               </div>
               <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                  <textarea class="form-control" id="deskripsi" name="description"></textarea>
               </div>
               <div class="form-group">
                  <label for="harga">Harga Barang</label>
                  <input type="text" class="form-control" id="harga" name="harga">
               </div>
               <div class="form-group">
                  <label for="kategori">Kategori Barang</label>
                  <input type="text" class="form-control" id="kategori" name="kategori">
                  {{-- <label for="floatingSelect">Kategori Produk</label>
                  <select class="custom-select">
                     <option selected>-- Pilih Produk --</option>
                     <option value="Makanan">Makanan</option>
                     <option value="Minuman">Minuman</option>
                     <option value="Peralatan">Peralatan</option>
                  </select> --}}
               </div>
               <div class="form-group">
                  <label for="harga">Foto</label>
                  <input type="text" class="form-control" id="harga" name="image_url">
               </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Produk</button>
         </div>
         </form>
      </div>
   </div>
</div>