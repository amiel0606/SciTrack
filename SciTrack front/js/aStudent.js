function toggleSidebar1() {
    const sideBar = document.querySelector('.side-bar');
    const aStudentContainer = document.querySelector('.aStudent-container');
    const sidebarToggleBtn = document.getElementById('sidebarToggleBtn');

    sideBar.classList.toggle('sidebar-collapsed');
    document.querySelectorAll('.menu-admin, .menu-text, .side-bar h1').forEach(function(item) {
        item.classList.toggle('hidden');
    });
    aStudentContainer.classList.toggle('sidebar-collapsed');

    if (sideBar.classList.contains('sidebar-collapsed')) {
        sidebarToggleBtn.classList.add('collapsed');
        localStorage.setItem('sidebarState', 'collapsed');
    } else {
        sidebarToggleBtn.classList.remove('collapsed');
        localStorage.setItem('sidebarState', 'expanded');
    }
}

document.getElementById('sidebarToggleBtn').addEventListener('click', toggleSidebar1);

document.addEventListener('DOMContentLoaded', function() {
    const savedState = localStorage.getItem('sidebarState');
    const mediaQuery768 = window.matchMedia("(min-width: 768px)");

    if (savedState === 'collapsed' && mediaQuery768.matches) {
        toggleSidebar1();
    }
});

function toggleSidebarAndStudent() {
    const sidebarToggleBtn = document.getElementById('sidebarToggleBtn');
    const sidebar = document.querySelector('.side-bar');
    const aStudentContainer = document.querySelector('.aStudent-container');

    sidebarToggleBtn.addEventListener('click', function () {
        sidebar.classList.toggle('active');
        aStudentContainer.classList.toggle('hide');
    });

    sidebar.addEventListener('click', function () {
        sidebar.classList.remove('active');
        aStudentContainer.classList.remove('hide');
    });
}

document.addEventListener('DOMContentLoaded', function () {
    const smallScreenQuery = window.matchMedia('(min-width: 321px) and (max-width: 600px)');
    const mediumScreenQuery = window.matchMedia('(min-width: 601px)');
    const largeScreenQuery = window.matchMedia('(min-width: 768px)');

    function handleScreenSizeChange(screenSize) {
        if (screenSize.matches) {
            if (smallScreenQuery.matches || mediumScreenQuery.matches) {
                toggleSidebarAndStudent();
            }
        } else {
            const sidebarToggleBtn = document.getElementById('sidebarToggleBtn');
            sidebarToggleBtn.removeEventListener('click', toggleSidebarAndStudent);
        }
    }

    handleScreenSizeChange(smallScreenQuery);
    handleScreenSizeChange(mediumScreenQuery);

    smallScreenQuery.addListener(function (event) {
        handleScreenSizeChange(event.target);
    });

    mediumScreenQuery.addListener(function (event) {
        handleScreenSizeChange(event.target);
    });

    if (largeScreenQuery.matches) {
        const savedState = localStorage.getItem('sidebarState');
        if (savedState === 'collapsed') {
            toggleSidebar1();
        }
    }

    largeScreenQuery.addListener(function (event) {
        if (event.matches) {
            const savedState = localStorage.getItem('sidebarState');
            if (savedState === 'collapsed') {
                toggleSidebar1();
            }
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const addNewStudentBtn = document.querySelector('.addNewStudent');
    const bgModal = document.querySelector('.bg-modal');
    const closeBtns = document.querySelectorAll('.close');
    const editBtns = document.querySelectorAll('.box-actions img[alt="edit"]');
    const archiveBtns = document.querySelectorAll('.box-actions img[alt="arc"]');
    const formAddNew = document.querySelector('.form-addNew');
    const formEdit = document.querySelector('.form-edit');
    const formArc = document.querySelector('.form-arc');
    const cancelButton = document.getElementById('cancelButton');
    const archiveButton = document.getElementById('archiveButton');
    const updateButton = document.getElementById('updateButton');


    function showModal(form) {
        bgModal.style.display = 'flex';
        setTimeout(() => {
            form.classList.add('show');
        }, 10);
    }

    function closeModal() {
        formAddNew.classList.remove('show');
        formEdit.classList.remove('show');
        formArc.classList.remove('show');
        setTimeout(() => {
            bgModal.style.display = 'none';
            formAddNew.style.display = 'none';
            formEdit.style.display = 'none';
            formArc.style.display = 'none';
        });
    }

    addNewStudentBtn.addEventListener('click', function() {
        formAddNew.style.display = 'block';
        showModal(formAddNew);
    });

    editBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            formEdit.style.display = 'block';
            showModal(formEdit);
        });
    });

    archiveBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            formArc.style.display = 'block';
            showModal(formArc);
        });
    });

    closeBtns.forEach(btn => {
        btn.addEventListener('click', closeModal);
    });

    window.addEventListener('click', function(event) {
        if (event.target === bgModal) {
            closeModal();
        }
    });
    cancelButton.addEventListener('click', closeModal);
});

document.addEventListener('DOMContentLoaded', function() {
    const uploadButton = document.getElementById('uploadButton');
    const fileInput = document.getElementById('fileInput');

    uploadButton.addEventListener('click', function() {
        fileInput.click();
    });
});

document.getElementById('sidebarToggleBtn').addEventListener('click', toggleSidebar);
