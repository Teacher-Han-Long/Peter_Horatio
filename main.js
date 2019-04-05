
const modal = document.getElementById('simpleModal');
const modalBtn = document.getElementById('modalBtn');
const closeBtn = document.getElementsByClassName('closeBtn')[0];


modalBtn.addEventListener('click', openModal);
closeBtn.addEventListener('click', closeModal);
modal.addEventListener('click', outsideClick);


function openModal() {
   modal.style.display = 'block';
}

function closeModal() {
   modal.style.display = 'none';
}

function outsideClick(e) {
    if(e.target == modal) {
      modal.style.display = 'none';
       }
}

//AJAX FORM 
$('form').submit(function(evt){
      evt.preventDefault();
    const url = $(this).attr("action");
    const formData = $(this).serialize();
    $.post(url, formData, function(response) {
          $('#ajaxResponse').html("<p>Thanks for you message!</p>");
    });
});