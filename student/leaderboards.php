<?php
session_start();
include_once('./includes/board.php');
include_once('../admin/includes/dbCon.php');
$name = $_SESSION["firstName"] . " " . $_SESSION["lastName"];
$id = $_SESSION["id"];

// Fetch students with achievements
$query = "SELECT s.name, a.achievement_name, a.image_path 
        FROM tbl_students s
        JOIN tbl_achievements a ON s.id = a.student_id
          ORDER BY s.name"; // No status filter

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
                            $student_achievements = [];

                            // Group achievements by student
                            foreach ($students as $student) {
                                $name = $student['name'];
                                $achievements = explode(',', $student['achievement_name']);
                                $image_paths = explode(',', $student['image_path']);

                                // Initialize an array for storing all images for the student
                                if (!isset($student_achievements[$name])) {
                                    $student_achievements[$name] = [
                                        'achievements' => [],
                                        'place' => $place++
                                    ];
                                }

                                // Add achievements images for this student
                                foreach ($image_paths as $image_path) {
                                    if ($image_path) {
                                        $student_achievements[$name]['achievements'][] = $image_path;
                                    }
                                }
                            }

                            // Display each student's achievements
                            foreach ($student_achievements as $name => $data) {
                                echo "<div class='leaderboard-item'>";
                                echo "<div class='leaderboard-column'>" . $data['place'] . "</div>";
                                echo "<div class='leaderboard-column'>$name</div>";
                                
                                // Display achievements images in a row
                                echo "<div class='leaderboard-column achievements-column'>";
                                if (!empty($data['achievements'])) {
                                    foreach ($data['achievements'] as $image_path) {
                                        echo "<img src='$image_path' alt='Achievement' class='achievement-image'>";
                                    }
                                } else {
                                    echo "No Achievements";
                                }
                                echo "</div>";
                                echo "</div>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>               
</section>
