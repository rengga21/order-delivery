<nav
class="navbar navbar-expand-lg navbar-dark bg-dark shadow pt-4
"
>
  <div class="container">
    <a class="navbar-brand" href="#navbar">Corndog Alle</a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon" />
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto ">
        <a
          class="nav-item nav-link active nav-btn1"
          aria-current="page"
          href="#hot-promo">Promo</a
        >
        <a class="nav-item nav-link nav-btn2" href="#corndog">Corndog</a>
        <a class="nav-item nav-link nav-btn3" href="#snacks">Snacks</a>
        <a class="nav-item nav-link nav-btn4" href="#drinks">Drinks</a>
      </ul>
    </div>
  </div>
</nav>

<style>
  a {
    text-decoration: none;
  }
  .navbar-brand {
    font-family: dancing script;
    font-size: 25px;
    color: rgb(31, 31, 31);
  }

  /* .nav-item a {
color: rgb(31, 31, 31);
font-weight: 400;
}

  .nav-item a:hover {
    color: rgb(255, 255, 255);
  } */

  /* Pilihan jika navbar dengan background */

  .nav-btn1 {
    background-color: rgb(233, 109, 78);
    border-radius: 8px;
  }
  .nav-btn2 {
    background-color: rgb(216, 160, 108);
    border-radius: 8px;

    color: paleturquoise;
  }
  .nav-btn3 {
    background-color: rgb(230, 170, 81);
    border-radius: 8px;
  }
  .nav-btn4 {
    background-color: rgb(47, 202, 169);
    border-radius: 8px;
  }

  /* Destop Version */
  @media (min-width: 992px) {
    .nav-link {
      text-transform: uppercase;
      margin-right: 30px;
      color: rgb(250, 247, 233);
    }
  }

  @media (min-width: 576px) {
    .nav-link {
      margin-right: 30px;
      margin-bottom: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
  }

  @media (min-width: 360px) {
    .nav-link {
      margin-right: 30px;
      margin-bottom: 15px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
  }
</style>
