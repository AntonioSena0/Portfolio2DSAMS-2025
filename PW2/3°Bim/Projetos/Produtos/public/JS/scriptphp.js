const closeButton = document.getElementById("close-btn");

closeButton.addEventListener("click", function() {
    window.location.href = "index.php?url=main";
});


document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('modal');
    const closeBtn = document.querySelector('.voltar');
    
    if (closeBtn && modal) {
        closeBtn.addEventListener('click', function() {
            modal.style.display = 'none';
            window.location.href = window.location.pathname;
        });
    }
});