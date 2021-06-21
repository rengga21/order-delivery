<script>
  export let showCart = true;
  export let isCart = false;
</script>

{#if showCart}
  <div class="backdrop" class:cart={isCart} on:click|self>
    <div class="modal-cart vertical-nav">
      <slot />
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
