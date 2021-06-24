<script>
  let cart = 0;
  let price = 15;

  $: totalPrice = cart * price;

  const addCart = () => {
    cart += 1;
  };

  const deleteCart = () => {
    cart -= 1;
  };
</script>

<div class="cart">
  <i class="bi bi-x-lg" />
  <img src="../img/2s.jpg" alt="gambar" width="100" class="mt-5" />
  <h3>Corndog Mozarella</h3>
  {price}K
  <p>Notes</p>
  <br />
  Total : {totalPrice}K <br />
  <button on:click={deleteCart}>-</button>
  {cart}
  <button on:click={addCart}>+</button><br /><br />
  <a href="checkout" class="btn btn-danger">Checkout -></a>
</div>

<style>
  a {
    text-decoration: none;
    color: #eee;
  }
  .bi-x-lg {
    float: right;
    position: relative;
    cursor: pointer;
  }
</style>
