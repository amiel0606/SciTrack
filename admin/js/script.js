    document.addEventListener('DOMContentLoaded', () => {
        
        // open close modal functions
        function openModal($el) {
        $el.classList.add('is-active');
        }
    
        function closeModal($el) {
        $el.classList.remove('is-active');
        }

        //close notification
        const deleteButton = document.querySelector('.notification .delete');
        const notification = document.querySelector('.notification');
    
        deleteButton.addEventListener('click', () => {
            notification.classList.toggle('is-invisible');
        });
    
        function closeAllModals() {
        (document.querySelectorAll('.modal') || []).forEach(($modal) => {
            closeModal($modal);
        });
        }
    
        // Add a click event on buttons to open a specific modal
        (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
        const modal = $trigger.dataset.target;
        const $target = document.getElementById(modal);
    
        $trigger.addEventListener('click', () => {
            openModal($target);
        });
        });
    
        // Add a click event on various child elements to close the parent modal
        (document.querySelectorAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || []).forEach(($close) => {
        const $target = $close.closest('.modal');
    
        $close.addEventListener('click', () => {
            closeModal($target);
        });
        });
    
        // Add a keyboard event to close all modals
        document.addEventListener('keydown', (event) => {
        if(event.key === "Escape") {
            closeAllModals();
        }
        });
    });