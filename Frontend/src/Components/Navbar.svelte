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
    color: rgb(255, 255, 255);
  }
  .navbar-brand {
    font-family: dancing script;
    font-size: 30px;
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
    background-color: rgb(201, 71, 39);
    border-radius: 8px;
  }
  .nav-btn2 {
    background-color: rgb(204, 123, 47);
    border-radius: 8px;

    color: paleturquoise;
  }
  .nav-btn3 {
    background-color: rgb(49, 155, 22);
    border-radius: 8px;
  }
  .nav-btn4 {
    background-color: rgb(28, 124, 179);
    border-radius: 8px;
  }

  /* Hover pada tombol navigasi */
  .nav-btn1:hover {
    background-color: rgb(240, 99, 63);
  }
  .nav-btn2:hover {
    background-color: rgb(230, 150, 75);

    color: paleturquoise;
  }
  .nav-btn3:hover {
    background-color: rgb(62, 182, 31);
  }
  .nav-btn4:hover {
    background-color: rgb(35, 154, 223);
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
