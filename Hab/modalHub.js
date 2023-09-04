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

if (innerWidth < 1000) {
    let ita_cloud_hub_adaptiv = document.querySelector('.ita_cloud_hub')
    ita_cloud_hub_adaptiv.src = 'img/ita_cloud_hub_adaptiv.svg'
}
