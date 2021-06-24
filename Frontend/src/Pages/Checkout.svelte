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
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">+62</span>
            <input
              type="text"
              class="form-control"
              aria-label="Username"
              aria-describedby="basic-addon1"
            />
          </div>
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Alamat Pengiriman</label>
          <input type="text" class="form-control" id="inputAddress" />
        </div>

        <div class="col-md-6">
          <label for="inputCity" class="form-label">Kota</label>
          <input type="text" class="form-control" id="inputCity" />
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Provinsi</label>
          <select id="inputState" class="form-select">
            <option selected>Pilih...</option>
            <option>...</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Kode Pos</label>
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
          <button type="submit" class="btn btn-primary"
            >Lakukan Pemesanan</button
          >
        </div>
      </form>

      <!-- Informasi Pengiriman -->
      <h2>Informasi Pengiriman</h2>
    </div>

    <!-- Ringkasan Belanja -->
    <div class="col-md-5 col-sm-4">
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
      <div class="form-check">
        <input
          class="form-check-input"
          type="radio"
          name="flexRadioDefault"
          id="flexRadioDefault1"
        />
        <label class="form-check-label" for="flexRadioDefault1">
          BCA Virtual Acoount
        </label>
      </div>
      <div class="form-check">
        <input
          class="form-check-input"
          type="radio"
          name="flexRadioDefault"
          id="flexRadioDefault2"
          checked
        />
        <label class="form-check-label" for="flexRadioDefault2">
          BNI Virtual Account
        </label>
      </div>
    </div>
  </div>
</div>
<Footer />

<style>
  .container {
    background: white;
  }
</style>
