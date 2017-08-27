document.addEventListener('DOMContentLoaded', function () {
  setUpNavBar()
  setUpFileUpload()
})

function setUpNavBar () {
  var burger = document.getElementById('navbar-burger')
  var menu = document.getElementById('nav-menu')
  burger.addEventListener('click', function () {
    burger.classList.toggle('is-active')
    menu.classList.toggle('is-active')
  })
}

function setUpFileUpload () {
  var fileUpload = document.getElementById('file-upload')
  var fileName = document.getElementById('file-upload-name')
  if (fileUpload !== null) {
    fileUpload.addEventListener('change', function () {
      if (fileUpload.files.length > 0) {
        fileName.innerHTML = fileUpload.files[0].name
        fileName.classList.remove('is-hidden')
      }
    })
  }
}
