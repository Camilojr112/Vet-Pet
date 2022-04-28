const open = document.getElementById('open');
const modal = document.getElementById("userMenu");
const close = document.getElementById("list_button--click");

open.addEventListener('click', ()=>{
    modal.classList.add('show');
    alert('prueva');
});
open.addEventListener('click', ()=>{
    modal.classList.remove('show');
});