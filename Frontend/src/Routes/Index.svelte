<script>
  import router from "page";
  import Home from "../Pages/Home.svelte";
  import Login from "../Pages/Login.svelte";
  import Checkout from "../Pages/Checkout.svelte";
  import Admin from "../Pages/Admin.svelte";

  let page;

  router("/", () => (page = Home));
  router("/login", () => (page = Login));
  router("/checkout", () => (page = Checkout));
  router("/admin", () => (page = Admin));

  router.start();
</script>

<svelte:component this={page} />

<style>
</style>
