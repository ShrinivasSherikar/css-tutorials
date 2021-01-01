const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})

// function ticToe(){
//   location.replace=("www.google.com")
// }
// function myFunction(){
//   location.replace = ("https://www.google.com")
// }
// function myShri(){
//   location.replace = ("./TIC-TAC-TOE/index.html")
// }
// function myOp(){
//   location.reload()
// }
// function lo(){
//   location.reload()
// }
function myFun(){
  location.reload()
}
function ticTO(){
  window.location.replace("./TIC-TAC-TOE/index.html")
}
function snake(){
  window.location.replace("./SNAKE-GAME/index.html")
}
function Snake(){
  window.location.replace("./SNAKE-GAME/code.html")
}
function myReload(){
  location.reload()
}