<!DOCTYPE html>
<html lang="en" data-theme="light" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SciTrack</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/bfc8b900f1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.1/css/bulma.min.css">

</head>
<body>
    <style>

li {
    list-style-type: none;
}

:root {
    --bulma-primary-h: 240deg;
    --bulma-primary-s: 16%;
    --bulma-primary-l: 31%;
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
    height: 267px;
    width: 100%;
}


.table {
    --bulma-table-color: hsl(0, 2%, 58%);
    --bulma-table-background-color: hsl(0, 0%, 93%);
    --bulma-table-head-cell-color: hsl(0, 0%, 100%);
    --bulma-table-cell-text-align: center;
    --bulma-table-head-background-color: hsl(0, 34%, 58%);
    --bulma-table-cell-padding: 5px;
    --bulma-table-row-hover-background-color: hsl(237, 68%, 94%);
    width: 1077px;
}

body::-webkit-scrollbar {
    height: 100vh;
    overflow: hidden;
    display: none;
}

.columns {
    margin-top: 0;
}

body {
    background-color: #F6F4EB;
}



</style>


<div class="columns">
        <aside class="menu has-background-primary">
            <p class="menu-label has-text-white is-size-1 ">LOGO</p>
            <ul class="menu-list">
                <li><p  class="menu-item has-background-primary mb-6 "><i class="fa-regular fa-circle-user fa-4x icon is-large mr-4 has-text-white"></i><span class="text has-text-white is-size-1">Amiel</span></p></li>
                <li><a href="./adminDash.php" class="menu-item has-background-primary mt-6"><i class="fa-solid fa-ranking-star fa-2x icon is-large mr-4 has-text-white"></i><span class="text has-text-white is-size-4">Leaderboards</span></a></li>
                <li><a href="./teacherMonitoring.php" class="menu-item has-background-primary mt-6"><i class="fa-solid fa-chart-area fa-2x icon is-large mr-4 has-text-white"></i><span class="text has-text-white is-size-4">Monitoring</span></a></li>
                <li><a href="#" class="menu-item has-background-primary mt-6"><i class="fa-solid fa-arrow-right-from-bracket fa-2x icon is-large mr-4 has-text-white"></i><span class="text has-text-white is-size-4">Logout</span></a></li>
            </ul>
        </aside>