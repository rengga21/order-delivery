<script>
  let menus = [
    {
      nama: "Corndog Mozarella",
      harga: "Rp.20.000",
      gambar: "moza.jpg",
      promo: "yes",
      id: 1,
    },
    {
      nama: "Corndog Dark Choco",
      harga: "Rp.18.000",
      gambar: "dark-choco.jpg",
      promo: "yes",
      id: 2,
    },
    {
      nama: "Hotang Spesial",
      harga: "Rp.16.000",
      gambar: "hotang.jpg",
      promo: "no",
      id: 3,
    },
    {
      nama: "Kentang Goreng",
      harga: "Rp.15.000",
      gambar: "kentang.jpg",
      promo: "no",
      id: 4,
    },
    {
      nama: "Coca Cola",
      harga: "Rp.16.000",
      gambar: "cola.jpg",
      promo: "no",
      id: 5,
    },
    {
      nama: "Teh Pucuk",
      harga: "Rp.17.000",
      gambar: "teh-pucuk.jpg",
      promo: "no",
      id: 6,
    },
  ];
</script>

<div class="container mt-3">
  <div class="row">
    {#each menus as menu (menu.id)}
      <div class="col-md-4 mt-4">
        <div class="card">
          <img src="./img/{menu.gambar}" class="card-img-top" alt="2s" />
          <div class="card-body">
            {#if menu.promo === "yes"}
              <p class="promo">Promo</p>
            {/if}
            <h5 class="card-title">{menu.nama}</h5>
            <p>{menu.harga}</p>
            <button class="tombol"><i class="bi bi-cart" /></button>
          </div>
        </div>
      </div>
    {:else}
      <p class="text-center">There is no menu here..</p>
    {/each}
  </div>
</div>

<style>
  .tombol {
    background-color: rgb(231, 154, 9);
    border-radius: 8px;
    color: white;
    width: 50px;
    float: right;
    position: relative;
    bottom: 25px;
    right: 10px;
  }
  .promo {
    color: rgb(219, 55, 178);
  }
  /* 
  @media (min-width: 576) {
    img {
      width: 20px;
    }
  } */
</style>
