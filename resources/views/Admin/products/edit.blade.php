<x-appadmin-layout>
    <div class="container mt-5">
        <h1>Edit Product</h1>
        <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kode_barang">Kode Barang</label>
                <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="{{ $product->kode_barang }}" required>
            </div>
            <div class="form-group  mt-3">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $product->nama_barang }}" required>
            </div>
            <div class="form-group  mt-3">
                <label for="satuan">Satuan</label>
                <input type="text" class="form-control" id="satuan" name="satuan" value="{{ $product->satuan }}" required>
            </div>
            <div class="form-group  mt-3">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="{{ $product->harga }}" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Update Product</button>
        </form>
    </div>
</x-appadmin-layout>