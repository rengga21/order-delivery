<script>
  let cart = 0;
  let price = 15000;

  let totalPrice = cart * price;

  function addCart() {
    cart += 1;
  }

  function deleteCart() {
    cart -= 1;
  }
</script>

<div class="cart">
  <img src="../img/2s.jpg" alt="gambar" width="100" />
  <h3>Corndog Mozarella</h3>
  <p>Notes</p>
  <br />
  Total : Rp.{totalPrice} <br />
  <button on:click={deleteCart}>-</button>
  {cart}
  <button on:click={addCart}>+</button>
</div>
