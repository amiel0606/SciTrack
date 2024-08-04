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
    --bulma-danger-h: 0deg;
    --bulma-danger-s: 81%;
    --bulma-danger-l: 53%;
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

.table {
    --bulma-table-color: hsl(0, 2%, 58%);
    --bulma-table-background-color: hsl(0, 0%, 93%);
    --bulma-table-cell-heading-color: hsl(0, 2%, 58%);
    --bulma-table-cell-text-align: center;
    --bulma-table-head-background-color: hsl(0, 34%, 58%);
    --bulma-table-cell-padding: 5px;
    --bulma-table-row-hover-background-color: hsla(0deg,49%,28%,1);
    width: 1077px;
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