const form = document.querySelector('form');
const r_send = document.getElementsByName("send")[0];
const form_e = document.getElementById("form_e");

form.addEventListener('change', changeFormHandler);

function changeFormHandler() {
  if (form.checkValidity()) {
    r_send.removeAttribute('disabled');
    form_e.setAttribute('hidden', '');
  } 
  else  {
    form_e.removeAttribute('hidden');
    r_send.setAttribute('disabled', '');
  }
}