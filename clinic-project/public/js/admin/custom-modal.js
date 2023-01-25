const customModal = document.querySelector('.custom-modal');
const customModalCloseButton = document.querySelector('.custom-modal__close');
const toggleCustomModal = document.querySelector('.toggle-custom-modal');

customModalCloseButton.onclick = function() {
  customModal.classList.remove('custom-modal--show');
}

toggleCustomModal.onclick = function() {
  customModal.classList.add('custom-modal--show');
}