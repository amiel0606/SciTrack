function toggleSidebar2() {
    const sideBar = document.querySelector('.side-bar');
    const aTeacherContainer = document.querySelector('.aTeacher-container');
    const sidebarToggleBtn = document.getElementById('sidebarToggleBtn');

    sideBar.classList.toggle('sidebar-collapsed');
    document.querySelectorAll('.menu-admin, .menu-text, .side-bar h1').forEach(function(item) {
        item.classList.toggle('hidden');
    });
    aTeacherContainer.classList.toggle('sidebar-collapsed');

    if (sideBar.classList.contains('sidebar-collapsed')) {
        sidebarToggleBtn.classList.add('collapsed');
        localStorage.setItem('sidebarState', 'collapsed');
    } else {
        sidebarToggleBtn.classList.remove('collapsed');
        localStorage.setItem('sidebarState', 'expanded');
    }
}

document.getElementById('sidebarToggleBtn').addEventListener('click', toggleSidebar2);

document.addEventListener('DOMContentLoaded', function() {
    const savedState = localStorage.getItem('sidebarState');
    const mediaQuery768 = window.matchMedia("(min-width: 768px)");

    if (savedState === 'collapsed' && mediaQuery768.matches) {
        toggleSidebar2();
    }
});

function toggleSidebarAndTeacher() {
    const sidebarToggleBtn = document.getElementById('sidebarToggleBtn');
    const sidebar = document.querySelector('.side-bar');
    const aTeacherContainer = document.querySelector('.aTeacher-container');

    sidebarToggleBtn.addEventListener('click', function () {
        sidebar.classList.toggle('active');
        aTeacherContainer.classList.toggle('hide');
    });

    sidebar.addEventListener('click', function () {
        sidebar.classList.remove('active');
        aTeacherContainer.classList.remove('hide');
    });
}

document.addEventListener('DOMContentLoaded', function () {
    const smallScreenQuery = window.matchMedia('(min-width: 321px) and (max-width: 600px)');
    const mediumScreenQuery = window.matchMedia('(min-width: 601px)');
    const largeScreenQuery = window.matchMedia('(min-width: 768px)');

    function handleScreenSizeChange(screenSize) {
        if (screenSize.matches) {
            if (smallScreenQuery.matches || mediumScreenQuery.matches) {
                toggleSidebarAndTeacher();
            }
        } else {
            const sidebarToggleBtn = document.getElementById('sidebarToggleBtn');
            sidebarToggleBtn.removeEventListener('click', toggleSidebarAndTeacher);
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
            toggleSidebar2();
        }
    }

    largeScreenQuery.addListener(function (event) {
        if (event.matches) {
            const savedState = localStorage.getItem('sidebarState');
            if (savedState === 'collapsed') {
                toggleSidebar2();
            }
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const addNewTeacherBtn = document.querySelector('.addNewTeacher');
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

    addNewTeacherBtn.addEventListener('click', function() {
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
