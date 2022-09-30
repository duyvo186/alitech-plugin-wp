document.addEventListener('DOMContentLoaded', function (e) {
    const showAuthBtn = document.getElementById('alitech-show-auth-form'),
        authContainer = document.getElementById('alitech-auth-container'),
        close = document.getElementById('alitech-auth-close');
    
    showAuthBtn.addEventListener('click', () => {
        authContainer.classList.add('show');        
        showAuthBtn.parentElement.classList.add('hide');
    });

    close.addEventListener('click', () => {
        authContainer.classList.remove('show');
        showAuthBtn.parentElement.classList.remove('hide');
    });
});