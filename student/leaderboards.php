<?php
session_start();
include_once('./includes/board.php');
include_once('../admin/includes/dbCon.php');
$name = $_SESSION["firstName"] . " " . $_SESSION["lastName"];
$id = $_SESSION["id"];

// Fetch students with achievements count
$query = "SELECT s.name, COUNT(a.achievement_name) as badge_count, 
          GROUP_CONCAT(a.image_path) as image_paths
          FROM tbl_students s
          LEFT JOIN tbl_achievements a ON s.id = a.student_id
          GROUP BY s.name
          ORDER BY badge_count DESC, s.name ASC"; // Sort by badge count, then name

$result = $conn->query($query);

$students = [];

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
}
?>

<link rel="stylesheet" href="./css/leaderboards.css">

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
                            <?php
                            $place = 1; // Start leaderboard places from 1

                            foreach ($students as $student) {
                                $name = $student['name'];
                                $badge_count = $student['badge_count'];
                                $image_paths = $student['image_paths'] ? explode(',', $student['image_paths']) : [];

                                echo "<div class='leaderboard-item'>";
                                echo "<div class='leaderboard-column'>$place</div>";
                                echo "<div class='leaderboard-column'>$name</div>";
                                
                                // Display achievements images in a row
                                echo "<div class='leaderboard-column achievements-column'>";
                                if (!empty($image_paths)) {
                                    foreach ($image_paths as $image_path) {
                                        echo "<img src='$image_path' alt='Achievement' class='achievement-image'>";
                                    }
                                } else {
                                    echo "No Achievements Yet";
                                }
                                echo "</div>";
                                echo "</div>";

                                $place++;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>               
</section>
