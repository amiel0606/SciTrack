function toggleSidebarAndHome() {
    const sidebarToggleBtn = document.getElementById('sidebarToggleBtn');
    const sidebar = document.querySelector('.side-bar');
    const aHomeContainer = document.querySelector('.aHome-container');

    sidebarToggleBtn.addEventListener('click', function () {
        sidebar.classList.toggle('active');
        aHomeContainer.classList.toggle('hide');
    });

    sidebar.addEventListener('click', function () {
        sidebar.classList.remove('active');
        aHomeContainer.classList.remove('hide');
    });
}

function toggleSidebar() {
    const sideBar = document.querySelector('.side-bar');
    const aHomeContainer = document.querySelector('.aHome-container');
    const sidebarToggleBtn = document.getElementById('sidebarToggleBtn');

    sideBar.classList.toggle('sidebar-collapsed');
    document.querySelectorAll('.menu-admin, .menu-text, .side-bar h1').forEach(function(item) {
        item.classList.toggle('hidden');
    });
    aHomeContainer.classList.toggle('sidebar-collapsed');

    if (sideBar.classList.contains('sidebar-collapsed')) {
        sidebarToggleBtn.classList.add('collapsed');
        localStorage.setItem('sidebarState', 'collapsed');
    } else {
        sidebarToggleBtn.classList.remove('collapsed');
        localStorage.setItem('sidebarState', 'expanded');
    }
}

document.getElementById('sidebarToggleBtn').addEventListener('click', toggleSidebar);

document.addEventListener('DOMContentLoaded', function() {
    const savedState = localStorage.getItem('sidebarState');
    const mediaQuery768 = window.matchMedia("(min-width: 768px)");

    if (savedState === 'collapsed' && mediaQuery768.matches) {
        toggleSidebar();
    }
});

function toggleSidebarAndHome() {
    const sidebarToggleBtn = document.getElementById('sidebarToggleBtn');
    const sidebar = document.querySelector('.side-bar');
    const aHomeContainer = document.querySelector('.aHome-container');

    sidebarToggleBtn.addEventListener('click', function () {
        sidebar.classList.toggle('active');
        aHomeContainer.classList.toggle('hide');
    });

    sidebar.addEventListener('click', function () {
        sidebar.classList.remove('active');
        aHomeContainer.classList.remove('hide');
    });
}

document.addEventListener('DOMContentLoaded', function () {
    const smallScreenQuery = window.matchMedia('(min-width: 321px) and (max-width: 600px)');
    const mediumScreenQuery = window.matchMedia('(min-width: 601px)');
    const largeScreenQuery = window.matchMedia('(min-width: 768px)');

    function handleScreenSizeChange(screenSize) {
        if (screenSize.matches) {
            if (smallScreenQuery.matches || mediumScreenQuery.matches) {
                toggleSidebarAndHome();
            }
        } else {
            const sidebarToggleBtn = document.getElementById('sidebarToggleBtn');
            sidebarToggleBtn.removeEventListener('click', toggleSidebarAndHome);
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
            toggleSidebar();
        }
    }

    largeScreenQuery.addListener(function (event) {
        if (event.matches) {
            const savedState = localStorage.getItem('sidebarState');
            if (savedState === 'collapsed') {
                toggleSidebar();
            }
        }
    });
});

document.getElementById('sidebarToggleBtn').addEventListener('click', toggleSidebar);
