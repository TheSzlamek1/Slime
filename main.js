const cart = JSON.parse(localStorage.getItem("cart")) || [];

document.querySelectorAll(".add-to-cart").forEach(btn => {
  btn.addEventListener("click", () => {
    const id = btn.parentElement.dataset.id;
    cart.push(id);
    localStorage.setItem("cart", JSON.stringify(cart));
    alert("Dodano do koszyka!");
  });
});
