document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.section4-item');
    const modals = document.querySelectorAll('.section4-modal');

    buttons.forEach(function (button) {
        button.addEventListener('click', function () {
            const modalId = button.getAttribute('data-modal');
            const modal = document.getElementById(modalId);
            modal.style.animation = 'fadeIn 1s';
            modal.style.display = 'flex';
        });
    });

    modals.forEach(function (modal) {
        const closeButton = modal.querySelector('.section4-close-button');

        closeButton.addEventListener('click', function () {
            modal.style.opacity = '0';
            setTimeout(function () {
                modal.style.display = 'none';
                modal.style.opacity = '1';
            }, 1000);
        });

        // Add event listener to close modal when clicking outside of it
        modal.addEventListener('click', function (event) {
            if (event.target === modal) {
                modal.style.opacity = '0';
                setTimeout(function () {
                    modal.style.display = 'none';
                    modal.style.opacity = '1';
                }, 1000);
            }
        });
    });
});
