const modal = document.querySelector("#modal"); // вся модалка
const openModalBtn = document.getElementById("openModal"); // кнопка открытия
const closeModalBtn = document.getElementById("closeModal"); // кнопка закрытия

openModalBtn.addEventListener("click", openModal);

function openModal() {
  modal.style.display = "flex";
}

closeModalBtn.addEventListener("click", closeModal);

function closeModal() {
  modal.style.display = "none";
}
