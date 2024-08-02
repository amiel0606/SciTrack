document.addEventListener("DOMContentLoaded", function () {
    const lessonLink = document.querySelector('.choices a img[alt="lesson"]');
    const choicesDiv = document.querySelector('.choices');
    const lessonsDiv = document.querySelector('.lessons');
    const leftButton = document.querySelector('.s-btn img[alt="left"]');

    function toggleView() {
        if (choicesDiv.style.display === 'none') {
            choicesDiv.style.display = 'flex';
            lessonsDiv.style.display = 'none';
        } else {
            choicesDiv.style.display = 'none';
            lessonsDiv.style.display = 'grid';
        }
    }

    lessonLink.addEventListener('click', function (event) {
        event.preventDefault();
        choicesDiv.style.display = 'none';
        lessonsDiv.style.display = 'grid';
    });

    leftButton.addEventListener('click', function (event) {
        event.preventDefault();
        if (lessonsDiv.style.display === 'grid') {
            toggleView();
        } else {
            window.location.href = 'StudentWelcomePage.php';
        }
    });

    lessonsDiv.style.display = 'none';
});