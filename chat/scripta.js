// console.log('asd');
const hamburgerMenu = document.querySelector('input#check-icon');
const leftMenu = document.querySelector('.leftMenu') 
hamburgerMenu.addEventListener('input', () => {
   leftMenu.classList.toggle('active')
})


function showPopup(el) {
   document.querySelector(el).style.display = 'block'
}

function hidePopup(el) {
   document.querySelector(el).style.display = 'none'
}

const sendMsgBtn = document.querySelector('#sendMsgBtn')
const msgInp = document.querySelector('#msg') 
console.log(msgInp);

msgInp.addEventListener('keydown', (event) => {
   if (event.key === 'Enter') {
      console.log('jfjf');
   }
})