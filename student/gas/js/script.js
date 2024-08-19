document.addEventListener('DOMContentLoaded', () => {
    const correctModal = document.getElementById('correctModal');
    const incorrectModal = document.getElementById('incorrectModal');

    const buttons = document.querySelectorAll('.button');

    function showModalsSequentially() {
        let modalToShow = correctModal; 

        modalToShow.classList.add('is-active');
        document.body.style.overflow = 'hidden'; 

        setTimeout(() => {
            modalToShow.classList.remove('is-active');
            if (modalToShow === correctModal) {
                modalToShow.classList.add('is-active');
                setTimeout(() => {
                    modalToShow.classList.remove('is-active');
                    document.body.style.overflow = ''; 
                    window.location.href = 'gasHappen.php'; 
                }, 2500);
            } else {
                document.body.style.overflow = ''; 
                window.location.href = 'gasHappen.php'; 
            }
        }, 2500); 
    }

    buttons.forEach(button => {
        button.addEventListener('click', (e) => {
            const buttonText = e.target.textContent.trim();

            if (buttonText.startsWith('A.')) {
                showModalsSequentially(); 
            } else {
                incorrectModal.classList.add('is-active');
                document.body.style.overflow = 'hidden'; 
                setTimeout(() => {
                    incorrectModal.classList.remove('is-active');
                    document.body.style.overflow = ''; 
                    window.location.href = 'gasHappen.php';
                }, 2000);
            }
        });
    });

    document.querySelectorAll('.modal-close').forEach(closeButton => {
        closeButton.addEventListener('click', () => {
            correctModal.classList.remove('is-active');
            incorrectModal.classList.remove('is-active');
            document.body.style.overflow = ''; 
        });
    });

    document.querySelectorAll('.modal-background').forEach(background => {
        background.addEventListener('click', () => {
            correctModal.classList.remove('is-active');
            incorrectModal.classList.remove('is-active');
            document.body.style.overflow = '';
        });
    });
});
