<?php
session_start();
include_once('./includes/board.php');
include_once('../admin/includes/dbCon.php');
$name = $_SESSION["firstName"] . " " . $_SESSION["lastName"];
$id = $_SESSION["id"];
?>
<style>
    .student-content {
        display: none;
    }
    .student-content-active {
        display: block;
    }
    .hero-body {
        position: relative; 
    }
    .navbar {
        background-color: #4A90E2 !important;
    }
    .navbar-item:hover {
        background-color: #266bbb;
        color: white;
    }
    .large-box {
    min-height: 85vh;
    width: 165%;
    position: relative;
    left: -20%; 
    display: flex;
    flex-direction: column;
    justify-content: flex-start; 
    align-items: center;  
    text-align: center;      
    padding: 20px;
    border-radius: 10px;
}

.leaderboard-row {
    display: flex;
    justify-content: space-evenly;
    width: 100%;
}

.leaderboard-column {
    flex: 1;
    text-align: center;
    font-size: 1.5rem;
    font-weight: bold;
}

.achievements-column {
    flex: 5;
}

.scrollable-container {
    width: 100%;
    max-height: 70vh;
    overflow-y: scroll;
    margin-top: 10px;
}

.leaderboard-item {
    display: flex;
    justify-content: space-evenly;
    padding: 20px 0;
    border-bottom: 1px solid #ccc;
    background-color: #74AFF4;
    border-radius: 10px;
    margin-bottom: 10px;
    color: white;
}

.leaderboard-item:hover {
    background-color: #64A4D8;
}

.leaderboard-column {
    display: flex;
    justify-content: center;
    align-items: center;
}

.achievements-column {
    flex: 5;
}

/* Ensure the columns are properly targeted */
.leaderboard-item .leaderboard-column:nth-child(2) {
    border-right: 2px solid white; /* Divider between Place and Name */
    padding-right: 20px;
    box-sizing: border-box; /* Ensure padding doesn't affect width */
}

.leaderboard-item .leaderboard-column:nth-child(3) {
    border-right: 2px solid white; /* Divider between Name and Achievements */
    padding-right: 20px;
    box-sizing: border-box; /* Ensure padding doesn't affect width */
}



</style>

<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered"> 
                <div class="column is-full-mobile is-four-fifths-tablet"> 
                    <div class="box dash has-shadow first-box large-box">
                        <p class="is-size-1 has-text-left mt-1 has-text-weight-bold">Leaderboards</p>
                        
                        <div class="leaderboard-row">
                            <div class="leaderboard-column">Place</div>
                            <div class="leaderboard-column">Name</div>
                            <div class="leaderboard-column achievements-column">Achievements</div>
                        </div>

                        <div class="scrollable-container">
                            <div class="leaderboard-item">
                                <div class="leaderboard-column">1</div>
                                <div class="leaderboard-column"></div>
                                <div class="leaderboard-column achievements-column"></div>
                            </div>

                            <div class="leaderboard-item">
                                <div class="leaderboard-column">2</div>
                                <div class="leaderboard-column"></div>
                                <div class="leaderboard-column achievements-column"></div>
                            </div>

                            <div class="leaderboard-item">
                                <div class="leaderboard-column">3</div>
                                <div class="leaderboard-column"></div>
                                <div class="leaderboard-column achievements-column"></div>
                            </div>

                            <div class="leaderboard-item">
                                <div class="leaderboard-column">4</div>
                                <div class="leaderboard-column"></div>
                                <div class="leaderboard-column achievements-column"></div>
                            </div>

                            <div class="leaderboard-item">
                                <div class="leaderboard-column">5</div>
                                <div class="leaderboard-column"></div>
                                <div class="leaderboard-column achievements-column"></div>
                            </div>

                            <div class="leaderboard-item">
                                <div class="leaderboard-column">6</div>
                                <div class="leaderboard-column"></div>
                                <div class="leaderboard-column achievements-column"></div>
                            </div>

                            <div class="leaderboard-item">
                                <div class="leaderboard-column">7</div>
                                <div class="leaderboard-column"></div>
                                <div class="leaderboard-column achievements-column"></div>
                            </div>

                            <div class="leaderboard-item">
                                <div class="leaderboard-column">8</div>
                                <div class="leaderboard-column"></div>
                                <div class="leaderboard-column achievements-column"></div>
                            </div>

                            <div class="leaderboard-item">
                                <div class="leaderboard-column">9</div>
                                <div class="leaderboard-column"></div>
                                <div class="leaderboard-column achievements-column"></div>
                            </div>

                            <div class="leaderboard-item">
                                <div class="leaderboard-column">10</div>
                                <div class="leaderboard-column"></div>
                                <div class="leaderboard-column achievements-column"></div>
                            </div>

                            <div class="leaderboard-item">
                                <div class="leaderboard-column">11</div>
                                <div class="leaderboard-column"></div>
                                <div class="leaderboard-column achievements-column"></div>
                            </div>

                            <div class="leaderboard-item">
                                <div class="leaderboard-column">12</div>
                                <div class="leaderboard-column"></div>
                                <div class="leaderboard-column achievements-column"></div>
                            </div>

                            <div class="leaderboard-item">
                                <div class="leaderboard-column">13</div>
                                <div class="leaderboard-column"></div>
                                <div class="leaderboard-column achievements-column"></div>
                            </div>

                            <div class="leaderboard-item">
                                <div class="leaderboard-column">14</div>
                                <div class="leaderboard-column"></div>
                                <div class="leaderboard-column achievements-column"></div>
                            </div>

                            <div class="leaderboard-item">
                                <div class="leaderboard-column">15</div>
                                <div class="leaderboard-column"></div>
                                <div class="leaderboard-column achievements-column"></div>
                            </div>

                            <div class="leaderboard-item">
                                <div class="leaderboard-column">16</div>
                                <div class="leaderboard-column"></div>
                                <div class="leaderboard-column achievements-column"></div>
                            </div>

                            <div class="leaderboard-item">
                                <div class="leaderboard-column">17</div>
                                <div class="leaderboard-column"></div>
                                <div class="leaderboard-column achievements-column"></div>
                            </div>

                            <div class="leaderboard-item">
                                <div class="leaderboard-column">18</div>
                                <div class="leaderboard-column"></div>
                                <div class="leaderboard-column achievements-column"></div>
                            </div>

                            <div class="leaderboard-item">
                                <div class="leaderboard-column">19</div>
                                <div class="leaderboard-column"></div>
                                <div class="leaderboard-column achievements-column"></div>
                            </div>

                            <div class="leaderboard-item">
                                <div class="leaderboard-column">20</div>
                                <div class="leaderboard-column"></div>
                                <div class="leaderboard-column achievements-column"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>               
</section>
