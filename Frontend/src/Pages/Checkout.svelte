<script>
  import Footer from "../Components/Footer.svelte";
  import Nav from "../Components/Nav.svelte";
</script>

<Nav />
<div class="container">
  <div class="row mt-4">
    <!-- Informasi Pemesan -->
    <div class="col-md-7">
      <h2>Informasi Pemesanan</h2>
      <form class="row g-3">
        <div class="col-md-6">
          <label for="name" class="form-label">Nama</label>
          <input type="text" class="form-control" id="name" />
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" />
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="inputAddress" />
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label"
            >Kirim ke alamat lain</label
          >
          <input type="text" class="form-control" id="inputAddress2" />
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">City</label>
          <input type="text" class="form-control" id="inputCity" />
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">State</label>
          <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Zip</label>
          <input type="text" class="form-control" id="inputZip" />
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" />
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
      </form>

      <!-- Informasi Pengiriman -->
      <h2>Informasi Pengiriman</h2>
    </div>

    <!-- Ringkasan Belanja -->
    <div class="col-md-5">
      <h2>Ringkasan Belanja</h2>
      <table class="table-warning">
        <th>Produk</th>
        <tr>
          <td>Produk</td>
          <td>Qty</td>
          <td>Harga</td>
        </tr>
      </table>
      <!-- Metode Pembayaran -->
      <h2>Pilih Metode Pembayaran</h2>
    </div>
  </div>
</div>
<Footer />

<style>
  .container {
    background: white;
  }

  .term {
    font-weight: bold;
  }
</style>
