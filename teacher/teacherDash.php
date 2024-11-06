<?php
    include_once './includes/sidebar.php'
?>
<link rel="stylesheet" href="../css/style.css">
<style>

.container {
    margin: 0;
    width: 2000px;
    max-width: 2000px;
    height: 1000px;
    background-color: #D9D9D9;
}

.navbar {
    width: 1600;
}

.navbar-brand {
    height: 50px;
}

.dash-table {
    width: 700px;
    margin-bottom: 100px;
    background-color: #fff;
    --bulma-table-cell-border-width: 0 0 0px;
}

.is-progress {
    width: 250px;
}

.is-name {
    width: 32px;
}

.image {
    width: 350px ;
    height: 350px;
}

.names {
    width: 150px;
}

.dash-tables {
    width: 100%;
    height: 489px;
}

.image-container {
    width: 100%;
    height: 100%;
}

.select {
    width: 150px;
    padding-left: 6px;
}
</style>
<div class="container is-max-desktop">
    <div class="column ">
            <div class="columns">
                <div class="column is-two-thirds">
                    <div class="box dash has-shadow" >
                        <img class="aas"style="float: right;" src="../image/teach.png" alt="teach1">
                        <p class="has-text-primary is-size-1 has-text-left mt-1 has-text-weight-bold ">Welcome back, Teacher</p>
                        <p class="has-text-primary is-size-3 has-text-left "><span class="has-text-success" >75%</span> of your students completed their task</p>
                        <p class="has-text-primary is-size-3 has-text-left ">Progress is <span class="has-text-success" >very good</span></p>
                    </div>
                </div>
                <div class="column">
                    <div id="calendar" class="box dash has-shadow px-6 pb-6">
                        <div id="calendar-header" class="level">
                            <span id="month-prev" class="level-left button is-small">&lt;</span>
                            <h1 id="month" class="level-item has-text-centered"></h1>
                            <span id="month-next" class="level-right button is-small">&gt;</span>
                        </div>
                        <div id="calendar-body" class="columns is-multiline is-mobile" style="background-color: #fff">
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="column">
    <div class="columns">
        <div class="column is-half">
            <div class="box dash-tables dash has-shadow" style="display: flex; flex-direction: column; justify-content: space-between;">
                <div style="display: flex; justify-content: space-between; width: 100%;">
                    <p class="has-text-primary is-size-3 has-text-weight-bold">Students' Progress</p>
                    <a href="./studentProgress.php" class="has-text-primary">View All</a>
                </div>
                <p>Not yet functional</p>

            <div class="table-container">
            <table class="table dash-table is-hoverable">
                    <tbody class="has-text-centered">
                        <tr>
                            <td class="is-name">
                            <figure class="image is-32x32" style="float: left;">
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                        width="32px" height="32px" viewBox="0 0 72.000000 72.000000"
                                        preserveAspectRatio="xMidYMid meet">
                                        <g transform="translate(0.000000,72.000000) scale(0.100000,-0.100000)"
                                        fill="#000000" stroke="none">
                                        <path d="M265 707 c-109 -37 -187 -104 -231 -201 -30 -65 -45 -188 -25 -200 8
                                        -5 11 8 11 42 0 28 9 80 21 118 18 57 31 77 83 130 53 52 73 65 130 83 85 26
                                        127 26 208 1 72 -22 143 -77 184 -142 27 -42 54 -135 54 -184 0 -38 -35 -152
                                        -54 -176 -12 -16 -16 -15 -54 22 -26 24 -56 42 -78 46 -19 3 -38 13 -41 21 -8
                                        19 27 82 50 89 10 3 26 21 35 40 19 40 9 67 -27 72 -19 3 -21 10 -21 64 0 57
                                        -2 63 -36 94 -19 19 -43 34 -53 34 -36 0 -167 -51 -183 -71 -12 -14 -18 -38
                                        -18 -69 0 -45 -2 -48 -30 -53 -25 -6 -30 -11 -30 -35 0 -31 33 -82 53 -82 14
                                        0 47 -54 47 -76 0 -8 -19 -18 -46 -25 -29 -8 -61 -26 -87 -51 -45 -42 -44 -43
                                        -79 32 -15 31 -22 40 -25 28 -7 -27 45 -114 95 -159 72 -67 141 -94 242 -94
                                        71 0 94 5 142 27 79 37 142 98 180 177 29 58 33 75 33 151 0 72 -4 94 -28 146
                                        -57 123 -177 204 -311 211 -41 1 -88 -3 -111 -10z m181 -89 c38 -30 44 -38 44
                                        -70 l0 -28 -79 0 c-44 0 -83 -4 -86 -10 -4 -6 17 -10 57 -10 96 0 106 -5 111
                                        -54 3 -34 5 -37 11 -18 9 23 30 29 41 12 10 -16 -24 -61 -43 -58 -10 2 -18 -5
                                        -20 -17 -7 -34 -34 -65 -79 -92 l-44 -26 -42 29 c-58 40 -78 84 -75 159 3 54
                                        5 60 26 63 30 5 28 22 -3 22 -17 0 -25 5 -25 18 0 32 24 51 95 76 87 30 77 30
                                        111 4z m-226 -210 l-1 -43 -19 24 c-28 33 -25 61 7 61 9 0 13 -14 13 -42z
                                        m143 -178 c10 0 31 7 47 15 30 15 30 15 30 -14 0 -37 -31 -61 -78 -61 -40 0
                                        -82 38 -82 74 l0 26 33 -20 c17 -11 40 -20 50 -20z"/>
                                        <path d="M285 429 c-10 -15 1 -23 20 -15 9 3 13 10 10 16 -8 13 -22 13 -30 -1z"/>
                                        <path d="M410 425 c0 -8 7 -15 15 -15 8 0 15 7 15 15 0 8 -7 15 -15 15 -8 0
                                        -15 -7 -15 -15z"/>
                                        <path d="M316 353 c-11 -11 16 -33 39 -33 34 0 55 10 55 26 0 17 -5 17 -30 2
                                        -16 -10 -24 -10 -39 -1 -10 7 -22 9 -25 6z"/>
                                        </g>
                                    </svg>
                                </figure>
                            </td>
                            <td>Amiel Carhyl Lapid</td>
                            <td class="is-progress"><progress class="progress is-success is-small" value="15" max="100">15%</progress></td>
                            <td>15%</td>
                        </tr>
                        <tr>
                        <td class="is-name">
                            <figure class="image is-32x32" style="float: left;">
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                        width="32px" height="32px" viewBox="0 0 72.000000 72.000000"
                                        preserveAspectRatio="xMidYMid meet">
                                        <g transform="translate(0.000000,72.000000) scale(0.100000,-0.100000)"
                                        fill="#000000" stroke="none">
                                        <path d="M265 707 c-109 -37 -187 -104 -231 -201 -30 -65 -45 -188 -25 -200 8
                                        -5 11 8 11 42 0 28 9 80 21 118 18 57 31 77 83 130 53 52 73 65 130 83 85 26
                                        127 26 208 1 72 -22 143 -77 184 -142 27 -42 54 -135 54 -184 0 -38 -35 -152
                                        -54 -176 -12 -16 -16 -15 -54 22 -26 24 -56 42 -78 46 -19 3 -38 13 -41 21 -8
                                        19 27 82 50 89 10 3 26 21 35 40 19 40 9 67 -27 72 -19 3 -21 10 -21 64 0 57
                                        -2 63 -36 94 -19 19 -43 34 -53 34 -36 0 -167 -51 -183 -71 -12 -14 -18 -38
                                        -18 -69 0 -45 -2 -48 -30 -53 -25 -6 -30 -11 -30 -35 0 -31 33 -82 53 -82 14
                                        0 47 -54 47 -76 0 -8 -19 -18 -46 -25 -29 -8 -61 -26 -87 -51 -45 -42 -44 -43
                                        -79 32 -15 31 -22 40 -25 28 -7 -27 45 -114 95 -159 72 -67 141 -94 242 -94
                                        71 0 94 5 142 27 79 37 142 98 180 177 29 58 33 75 33 151 0 72 -4 94 -28 146
                                        -57 123 -177 204 -311 211 -41 1 -88 -3 -111 -10z m181 -89 c38 -30 44 -38 44
                                        -70 l0 -28 -79 0 c-44 0 -83 -4 -86 -10 -4 -6 17 -10 57 -10 96 0 106 -5 111
                                        -54 3 -34 5 -37 11 -18 9 23 30 29 41 12 10 -16 -24 -61 -43 -58 -10 2 -18 -5
                                        -20 -17 -7 -34 -34 -65 -79 -92 l-44 -26 -42 29 c-58 40 -78 84 -75 159 3 54
                                        5 60 26 63 30 5 28 22 -3 22 -17 0 -25 5 -25 18 0 32 24 51 95 76 87 30 77 30
                                        111 4z m-226 -210 l-1 -43 -19 24 c-28 33 -25 61 7 61 9 0 13 -14 13 -42z
                                        m143 -178 c10 0 31 7 47 15 30 15 30 15 30 -14 0 -37 -31 -61 -78 -61 -40 0
                                        -82 38 -82 74 l0 26 33 -20 c17 -11 40 -20 50 -20z"/>
                                        <path d="M285 429 c-10 -15 1 -23 20 -15 9 3 13 10 10 16 -8 13 -22 13 -30 -1z"/>
                                        <path d="M410 425 c0 -8 7 -15 15 -15 8 0 15 7 15 15 0 8 -7 15 -15 15 -8 0
                                        -15 -7 -15 -15z"/>
                                        <path d="M316 353 c-11 -11 16 -33 39 -33 34 0 55 10 55 26 0 17 -5 17 -30 2
                                        -16 -10 -24 -10 -39 -1 -10 7 -22 9 -25 6z"/>
                                        </g>
                                    </svg>
                                </figure>
                            </td>
                            <td>Mark Nelson Garcia</td>
                            <td><progress class="progress is-success is-small" value="15" max="100">15%</progress></td>
                            <td>15%</td>
                        </tr>
                        <tr>
                        <td class="is-name">
                            <figure class="image is-32x32" style="float: left;">
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                        width="32px" height="32px" viewBox="0 0 72.000000 72.000000"
                                        preserveAspectRatio="xMidYMid meet">
                                        <g transform="translate(0.000000,72.000000) scale(0.100000,-0.100000)"
                                        fill="#000000" stroke="none">
                                        <path d="M265 707 c-109 -37 -187 -104 -231 -201 -30 -65 -45 -188 -25 -200 8
                                        -5 11 8 11 42 0 28 9 80 21 118 18 57 31 77 83 130 53 52 73 65 130 83 85 26
                                        127 26 208 1 72 -22 143 -77 184 -142 27 -42 54 -135 54 -184 0 -38 -35 -152
                                        -54 -176 -12 -16 -16 -15 -54 22 -26 24 -56 42 -78 46 -19 3 -38 13 -41 21 -8
                                        19 27 82 50 89 10 3 26 21 35 40 19 40 9 67 -27 72 -19 3 -21 10 -21 64 0 57
                                        -2 63 -36 94 -19 19 -43 34 -53 34 -36 0 -167 -51 -183 -71 -12 -14 -18 -38
                                        -18 -69 0 -45 -2 -48 -30 -53 -25 -6 -30 -11 -30 -35 0 -31 33 -82 53 -82 14
                                        0 47 -54 47 -76 0 -8 -19 -18 -46 -25 -29 -8 -61 -26 -87 -51 -45 -42 -44 -43
                                        -79 32 -15 31 -22 40 -25 28 -7 -27 45 -114 95 -159 72 -67 141 -94 242 -94
                                        71 0 94 5 142 27 79 37 142 98 180 177 29 58 33 75 33 151 0 72 -4 94 -28 146
                                        -57 123 -177 204 -311 211 -41 1 -88 -3 -111 -10z m181 -89 c38 -30 44 -38 44
                                        -70 l0 -28 -79 0 c-44 0 -83 -4 -86 -10 -4 -6 17 -10 57 -10 96 0 106 -5 111
                                        -54 3 -34 5 -37 11 -18 9 23 30 29 41 12 10 -16 -24 -61 -43 -58 -10 2 -18 -5
                                        -20 -17 -7 -34 -34 -65 -79 -92 l-44 -26 -42 29 c-58 40 -78 84 -75 159 3 54
                                        5 60 26 63 30 5 28 22 -3 22 -17 0 -25 5 -25 18 0 32 24 51 95 76 87 30 77 30
                                        111 4z m-226 -210 l-1 -43 -19 24 c-28 33 -25 61 7 61 9 0 13 -14 13 -42z
                                        m143 -178 c10 0 31 7 47 15 30 15 30 15 30 -14 0 -37 -31 -61 -78 -61 -40 0
                                        -82 38 -82 74 l0 26 33 -20 c17 -11 40 -20 50 -20z"/>
                                        <path d="M285 429 c-10 -15 1 -23 20 -15 9 3 13 10 10 16 -8 13 -22 13 -30 -1z"/>
                                        <path d="M410 425 c0 -8 7 -15 15 -15 8 0 15 7 15 15 0 8 -7 15 -15 15 -8 0
                                        -15 -7 -15 -15z"/>
                                        <path d="M316 353 c-11 -11 16 -33 39 -33 34 0 55 10 55 26 0 17 -5 17 -30 2
                                        -16 -10 -24 -10 -39 -1 -10 7 -22 9 -25 6z"/>
                                        </g>
                                    </svg>
                                </figure>
                            </td>
                            <td>Joshua Baker</td>
                            <td><progress class="progress is-success is-small" value="15" max="100">15%</progress></td>
                            <td>15%</td>
                        </tr>
                        <tr>
                        <td class="is-name">
                            <figure class="image is-32x32" style="float: left;">
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                        width="32px" height="32px" viewBox="0 0 72.000000 72.000000"
                                        preserveAspectRatio="xMidYMid meet">
                                        <g transform="translate(0.000000,72.000000) scale(0.100000,-0.100000)"
                                        fill="#000000" stroke="none">
                                        <path d="M265 707 c-109 -37 -187 -104 -231 -201 -30 -65 -45 -188 -25 -200 8
                                        -5 11 8 11 42 0 28 9 80 21 118 18 57 31 77 83 130 53 52 73 65 130 83 85 26
                                        127 26 208 1 72 -22 143 -77 184 -142 27 -42 54 -135 54 -184 0 -38 -35 -152
                                        -54 -176 -12 -16 -16 -15 -54 22 -26 24 -56 42 -78 46 -19 3 -38 13 -41 21 -8
                                        19 27 82 50 89 10 3 26 21 35 40 19 40 9 67 -27 72 -19 3 -21 10 -21 64 0 57
                                        -2 63 -36 94 -19 19 -43 34 -53 34 -36 0 -167 -51 -183 -71 -12 -14 -18 -38
                                        -18 -69 0 -45 -2 -48 -30 -53 -25 -6 -30 -11 -30 -35 0 -31 33 -82 53 -82 14
                                        0 47 -54 47 -76 0 -8 -19 -18 -46 -25 -29 -8 -61 -26 -87 -51 -45 -42 -44 -43
                                        -79 32 -15 31 -22 40 -25 28 -7 -27 45 -114 95 -159 72 -67 141 -94 242 -94
                                        71 0 94 5 142 27 79 37 142 98 180 177 29 58 33 75 33 151 0 72 -4 94 -28 146
                                        -57 123 -177 204 -311 211 -41 1 -88 -3 -111 -10z m181 -89 c38 -30 44 -38 44
                                        -70 l0 -28 -79 0 c-44 0 -83 -4 -86 -10 -4 -6 17 -10 57 -10 96 0 106 -5 111
                                        -54 3 -34 5 -37 11 -18 9 23 30 29 41 12 10 -16 -24 -61 -43 -58 -10 2 -18 -5
                                        -20 -17 -7 -34 -34 -65 -79 -92 l-44 -26 -42 29 c-58 40 -78 84 -75 159 3 54
                                        5 60 26 63 30 5 28 22 -3 22 -17 0 -25 5 -25 18 0 32 24 51 95 76 87 30 77 30
                                        111 4z m-226 -210 l-1 -43 -19 24 c-28 33 -25 61 7 61 9 0 13 -14 13 -42z
                                        m143 -178 c10 0 31 7 47 15 30 15 30 15 30 -14 0 -37 -31 -61 -78 -61 -40 0
                                        -82 38 -82 74 l0 26 33 -20 c17 -11 40 -20 50 -20z"/>
                                        <path d="M285 429 c-10 -15 1 -23 20 -15 9 3 13 10 10 16 -8 13 -22 13 -30 -1z"/>
                                        <path d="M410 425 c0 -8 7 -15 15 -15 8 0 15 7 15 15 0 8 -7 15 -15 15 -8 0
                                        -15 -7 -15 -15z"/>
                                        <path d="M316 353 c-11 -11 16 -33 39 -33 34 0 55 10 55 26 0 17 -5 17 -30 2
                                        -16 -10 -24 -10 -39 -1 -10 7 -22 9 -25 6z"/>
                                        </g>
                                    </svg>
                                </figure>
                            </td>
                            <td>Michael Williams</td>
                            <td><progress class="progress is-success is-small" value="15" max="100">15%</progress></td>
                            <td>15%</td>
                        </tr>
                        <tr>
                        <td class="is-name">
                            <figure class="image is-32x32" style="float: left;">
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                        width="32px" height="32px" viewBox="0 0 72.000000 72.000000"
                                        preserveAspectRatio="xMidYMid meet">
                                        <g transform="translate(0.000000,72.000000) scale(0.100000,-0.100000)"
                                        fill="#000000" stroke="none">
                                        <path d="M265 707 c-109 -37 -187 -104 -231 -201 -30 -65 -45 -188 -25 -200 8
                                        -5 11 8 11 42 0 28 9 80 21 118 18 57 31 77 83 130 53 52 73 65 130 83 85 26
                                        127 26 208 1 72 -22 143 -77 184 -142 27 -42 54 -135 54 -184 0 -38 -35 -152
                                        -54 -176 -12 -16 -16 -15 -54 22 -26 24 -56 42 -78 46 -19 3 -38 13 -41 21 -8
                                        19 27 82 50 89 10 3 26 21 35 40 19 40 9 67 -27 72 -19 3 -21 10 -21 64 0 57
                                        -2 63 -36 94 -19 19 -43 34 -53 34 -36 0 -167 -51 -183 -71 -12 -14 -18 -38
                                        -18 -69 0 -45 -2 -48 -30 -53 -25 -6 -30 -11 -30 -35 0 -31 33 -82 53 -82 14
                                        0 47 -54 47 -76 0 -8 -19 -18 -46 -25 -29 -8 -61 -26 -87 -51 -45 -42 -44 -43
                                        -79 32 -15 31 -22 40 -25 28 -7 -27 45 -114 95 -159 72 -67 141 -94 242 -94
                                        71 0 94 5 142 27 79 37 142 98 180 177 29 58 33 75 33 151 0 72 -4 94 -28 146
                                        -57 123 -177 204 -311 211 -41 1 -88 -3 -111 -10z m181 -89 c38 -30 44 -38 44
                                        -70 l0 -28 -79 0 c-44 0 -83 -4 -86 -10 -4 -6 17 -10 57 -10 96 0 106 -5 111
                                        -54 3 -34 5 -37 11 -18 9 23 30 29 41 12 10 -16 -24 -61 -43 -58 -10 2 -18 -5
                                        -20 -17 -7 -34 -34 -65 -79 -92 l-44 -26 -42 29 c-58 40 -78 84 -75 159 3 54
                                        5 60 26 63 30 5 28 22 -3 22 -17 0 -25 5 -25 18 0 32 24 51 95 76 87 30 77 30
                                        111 4z m-226 -210 l-1 -43 -19 24 c-28 33 -25 61 7 61 9 0 13 -14 13 -42z
                                        m143 -178 c10 0 31 7 47 15 30 15 30 15 30 -14 0 -37 -31 -61 -78 -61 -40 0
                                        -82 38 -82 74 l0 26 33 -20 c17 -11 40 -20 50 -20z"/>
                                        <path d="M285 429 c-10 -15 1 -23 20 -15 9 3 13 10 10 16 -8 13 -22 13 -30 -1z"/>
                                        <path d="M410 425 c0 -8 7 -15 15 -15 8 0 15 7 15 15 0 8 -7 15 -15 15 -8 0
                                        -15 -7 -15 -15z"/>
                                        <path d="M316 353 c-11 -11 16 -33 39 -33 34 0 55 10 55 26 0 17 -5 17 -30 2
                                        -16 -10 -24 -10 -39 -1 -10 7 -22 9 -25 6z"/>
                                        </g>
                                    </svg>
                                </figure>
                            </td>
                            <td class="names">Daniel Johnson</td>
                            <td><progress class="progress is-success is-small" value="15" max="100">15%</progress></td>
                            <td>15%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
                
            </div>
        </div>

        <div class="column is-half">
            <div class="box dash-tables dash has-shadow" style="display: flex; flex-direction: column; justify-content: space-between;">
                <p class="has-text-primary is-size-3 has-text-weight-bold has-text-centered mt-2">Lessons</p>
                <div class="image-container" style="display: flex; justify-content: center; align-items: center;">
                    <button class="button is-primary"><i class="fa-solid fa-caret-left"></i></button>
                    <figure class="image mx-4">
                        <img src="../image/matter.png" alt="Centered Image">
                    </figure>
                    <button class="button is-primary"><i class="fa-solid fa-caret-right"></i></button>
                </div>
                <p class="has-text-centered has-text-success is-size-3 has-text-weight-semibold">On going</p>
            </div>
        </div>


    </div>
</div>



</div>



<script>
document.addEventListener('DOMContentLoaded', () => {
    const calendarBody = document.getElementById('calendar-body');
    const monthElement = document.getElementById('month');
    const prevButton = document.getElementById('month-prev');
    const nextButton = document.getElementById('month-next');
    let today = new Date();
    let currentMonth = today.getMonth();
    let currentYear = today.getFullYear();

    const months = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ];

    const daysOfWeek = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

    function generateCalendar(month, year) {
        calendarBody.innerHTML = '';
        monthElement.textContent = `${months[month]} ${year}`;

        // Add days of the week
        daysOfWeek.forEach(day => {
            const dayCell = document.createElement('div');
            dayCell.classList.add('date');
            dayCell.textContent = day;
            calendarBody.appendChild(dayCell);
        });

        const firstDay = new Date(year, month).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();

        for (let i = 0; i < firstDay; i++) {
            const emptyCell = document.createElement('div');
            emptyCell.classList.add('date');
            calendarBody.appendChild(emptyCell);
        }

        for (let day = 1; day <= daysInMonth; day++) {
            const dateCell = document.createElement('div');
            dateCell.classList.add('date');
            dateCell.textContent = day;

            if (day === today.getDate() && month === today.getMonth() && year === today.getFullYear()) {
                dateCell.classList.add('current');
            }

            calendarBody.appendChild(dateCell);
        }
    }

    function changeMonth(direction) {
        currentMonth += direction;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        } else if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        generateCalendar(currentMonth, currentYear);
    }

    prevButton.addEventListener('click', () => changeMonth(-1));
    nextButton.addEventListener('click', () => changeMonth(1));

    generateCalendar(currentMonth, currentYear);
});

</script>