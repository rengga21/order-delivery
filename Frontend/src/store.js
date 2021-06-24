import { writable, readable} from "svelte/store";

export const products = readable([
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
  ]);