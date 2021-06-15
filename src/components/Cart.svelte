<script>
  export let showCart = true;
  export let isCart = false;
</script>

{#if showCart}
  <div class="backdrop" class:cart={isCart} on:click|self>
    <div class="modal-cart">
      <img src="../img/2s.jpg" alt="gambar" width="100" />
      <h3>Corndog Mozarella</h3>
      <h5>Notes</h5>
      <textarea name="" id="" cols="30" rows="10" placeholder="catatan" />
      <br />
      <button class="btn btn-danger">-</button>
      <button class="btn btn-primary">+</button>
    </div>
  </div>
{/if}

<style>
  .backdrop {
    width: 100%;
    height: 100%;
    position: fixed;
    background: rgba(0, 0, 0, 0.6);
    z-index: 9999;
  }
  .modal-cart {
    padding: 10px;
    width: 400px;
    height: 100vh;
    margin: 10% auto;
    text-align: center;
    background: white;
    position: fixed;
    top: 0;
    right: 0;
    z-index: 2;
  }
  .cart .modal-cart {
    background: crimson;
    color: #eee;
  }
</style>
