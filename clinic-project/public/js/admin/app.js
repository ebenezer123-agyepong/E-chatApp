// dropdown user actions
const toggleCollapseButton = document.querySelector('#toggle-collapse');
const collapse = document.querySelector('#collapse');

toggleCollapseButton.onclick = function() {
  collapse.classList.toggle('main__collapse--show');
}

// side drawer
const sideDrawer = document.querySelector('#side-drawer');
const toggleSideDrawer = document.querySelector('#toggle-side-drawer');

toggleSideDrawer.onclick = function() {
  sideDrawer.classList.toggle('main__side-drawer--show');
}