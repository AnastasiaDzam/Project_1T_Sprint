const modalHub = document.getElementById("modalHub"); // вся модалка
const openModalBtnHub = document.getElementById("openModalHub"); // кнопка открытия
const closeModalBtnHub = document.getElementById("closeModalHub"); // кнопка закрытия

openModalBtnHub.addEventListener("click", openModalHub);

function openModalHub() {
  modalHub.style.display = "flex";

}

closeModalBtnHub.addEventListener("click", closeModalHub);

function closeModalHub() {
  modalHub.style.display = "none";
}
