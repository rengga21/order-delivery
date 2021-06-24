<script>
  import AddCart from "../Components/AddCart.svelte";
  import Cart from "../Components/Cart.svelte";
  import Footer from "../Components/Footer.svelte";
  import Jumbotron from "../Components/Jumbotron.svelte";
  import Navbar from "../Components/Navbar.svelte";
  import Promo from "../Menu/Promo.svelte";
  import Corndog from "../Menu/Corndog.svelte";
  import Snacks from "../Menu/Snacks.svelte";
  import Drinks from "../Menu/Drinks.svelte";

  let showCart = false;

  const toggleCart = () => {
    showCart = !showCart;
  };

  export const products = [
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

<!-- <Header /> -->
<Cart {showCart} on:click={toggleCart}>
  <AddCart />
</Cart>
<Navbar />

<Jumbotron />

<Promo />
<div class="container mt-3">
  <div class="row">
    {#each products as menu (menu.id)}
      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6 mt-4">
        <div class="card card-shadow">
          <img src="../img/{menu.gambar}" class="card-img-top" alt="2s" />
          <div class="card-body">
            {#if menu.promo === "yes"}
              <p class="promo">Promo</p>
            {/if}
            <h5 class="card-title">{menu.nama}</h5>
            <p>{menu.harga}</p>
            <button on:click={toggleCart} class="tombol"
              ><i class="bi bi-cart" /></button
            >
          </div>
        </div>
      </div>
    {:else}
      <p class="text-center">There is no menu here..</p>
    {/each}
  </div>
</div>
<Corndog />
<Snacks />
<Drinks />
<Footer />

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

  .card-shadow {
    border-radius: 6px;
    -webkit-box-shadow: 3px 3px 5px 6px #ccc; /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
    -moz-box-shadow: 3px 3px 5px 6px #ccc; /* Firefox 3.5 - 3.6 */
    box-shadow: 3px 3px 5px 6px #ccc; /* Opera 10.5, IE 9, Firefox 4+, Chrome 6+, iOS 5 */
  }

  /* Responsive break points */
  @media (max-width: 540px) {
    .tombol {
      width: 30%;
      display: none;
    }
  }

  @media (max-width: 720px) {
    .tombol {
      width: 35%;
      position: relative;
      bottom: 5px;
      right: 5px;
      display: none;
    }
  }
  @media (max-width: 960px) {
    .tombol {
      width: 30%;
      position: relative;
      bottom: 5px;
      right: 5px;
      display: none;
    }
  }
</style>
