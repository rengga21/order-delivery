<script>
  import Nav from "../Components/Nav.svelte";
</script>

<Nav />
<div class="container">
  <div class="row text-center mt-5">
    <div class="col">
      <h2>Informasi Pemesan</h2>
    </div>
  </div>
  <div class="row justify-content-center mt-4">
    <div class="col-md-6">
      <form class="row g-3">
        <div class="col-md-6">
          <label for="name" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="name" />
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" />
        </div>
        <label for="phone" class="form-label">No. Telp</label>
        <div class="input-group mb-3">
          <span class="input-group-text" id="phone ">+62</span>
          <input
            type="text"
            class="form-control"
            aria-label="Username"
            aria-describedby="basic-addon1"
          />
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="inputAddress" />
        </div>

        <div class="col-md-6">
          <label for="inputCity" class="form-label">Kota</label>
          <input type="text" class="form-control" id="inputCity" />
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Provinsi</label>
          <select id="inputState" class="form-select">
            <option selected>Choose...</option>
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
        <div class="col-12 mb-5">
          <button type="submit" class="btn btn-danger">Pesan Sekarang</button>
        </div>
      </form>
    </div>
  </div>
</div>

<style>
  .container {
    background: white;
  }
</style>
