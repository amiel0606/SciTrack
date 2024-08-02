<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SciTrack</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/bfc8b900f1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.1/css/bulma.min.css">

</head>
<body>
    <style>
:root {
    --bulma-primary-h: 0deg;
    --bulma-primary-s: 49%;
    --bulma-primary-l: 28%;
}
.menu {
    position: sticky;
    display: inline-block;
    vertical-align: top;
    min-height: 100vh;
    overflow-y: auto;
    width: 433px;
    top: 0;
    bottom: 0;
    padding: 30px;
}

.dash {
    box-shadow: 10px 10px 14px 0px rgba(0,0,0,0.75);
    height: 200px;
    width: 650px;
}
</style>
<div class="columns">
        <aside class="menu has-background-primary">
            <p class="menu-label has-text-white is-size-1 ">LOGO</p>
            <ul class="menu-list">
                <li><p  class="menu-item has-background-primary mb-6 "><i class="fa-regular fa-circle-user fa-4x icon is-large mr-4 has-text-white"></i><span class="text has-text-white is-size-1">Amiel</span></p></li>
                <li><a href="#" class="menu-item has-background-primary mt-6"><i class="fa-solid fa-house fa-2x icon is-large mr-4 has-text-white"></i><span class="text has-text-white is-size-4">Home</span></a></li>
                <li><a href="#" class="menu-item has-background-primary mt-6"><i class="fa-solid fa-graduation-cap fa-2x icon is-large mr-4 has-text-white"></i><span class="text has-text-white is-size-4">Students</span></a></li>
                <li><a href="#" class="menu-item has-background-primary mt-6"><i class="fa-solid fa-chalkboard-user fa-2x icon is-large mr-4 has-text-white"></i><span class="text has-text-white is-size-4">Teachers</span></a></li>
                <li><a href="#" class="menu-item has-background-primary mt-6"><i class="fa-solid fa-arrow-right-from-bracket fa-2x icon is-large mr-4 has-text-white"></i><span class="text has-text-white is-size-4">Logout</span></a></li>
            </ul>
        </aside>
        <div class="column content">
            <p class="has-text-primary is-size-2 mt-6 ml-4 has-text-weight-semibold">Dashboard</p>

            <div class="columns">
                <div class="column is-half">
                    <div class="box dash has-background-warning has-shadow" style="padding-bottom: 56.25%; background-image: url('');">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="100px" height="100x">
                        <path d="M192 96a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm-8 384l0-128 16 0 0 128c0 17.7 14.3 32 32 32s32-14.3 32-32l0-288 56 0 64 0 16 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-16 0 0-64 192 0 0 192-192 0 0-32-64 0 0 48c0 26.5 21.5 48 48 48l224 0c26.5 0 48-21.5 48-48l0-224c0-26.5-21.5-48-48-48L368 0c-26.5 0-48 21.5-48 48l0 80-76.9 0-65.9 0c-33.7 0-64.9 17.7-82.3 46.6l-58.3 97c-9.1 15.1-4.2 34.8 10.9 43.9s34.8 4.2 43.9-10.9L120 256.9 120 480c0 17.7 14.3 32 32 32s32-14.3 32-32z " fill-opacity="0.5"/>
                    </svg>
                    <p class="has-text-primary is-size-1 has-text-centered mt-1 has-text-weight-bold">2</p>
                    <p class="has-text-primary is-size-1 has-text-centered mt-2">Teachers</p>
                    </div>
                </div>
                <div class="column is-half">
                    <div class="box dash has-background-warning" style="padding-bottom: 56.25%;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="100px" height="100x">
                        <path d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9l0 28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5l0-24.6c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z" fill-opacity="0.5"/>
                    </svg>
                        <p class="has-text-primary is-size-1 has-text-centered mt-1 has-text-weight-bold">500</p>
                        <p class="has-text-primary is-size-1 has-text-centered mt-2">Students</p>
                    </div>
                </div>
                </div>
        </div>
</div>