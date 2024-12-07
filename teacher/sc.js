$(document).ready(function () {
    $('.notification').hide();
    const currentUrl = window.location.href;
    const url = new URL(currentUrl);
    const params = new URLSearchParams(url.search);
    const lesson = params.get('lesson');
    const type = params.get('type');
    $('#addQuestion').on('click', function () {
        if (type === 'pre') {
        window.location.href= 'addQuizQuestions.php?lesson';
    }
    });
});