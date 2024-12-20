<?php
session_start();
include_once('./includes/board.php');
include_once('../admin/includes/dbCon.php');
$name = $_SESSION["firstName"] . " " . $_SESSION["lastName"];
$id = $_SESSION["id"];

$scores = [];
$query = "SELECT lesson, quiz_id, score FROM tbl_quiz_scores WHERE student_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

$query = "
    SELECT s.id, s.name, COUNT(a.id) AS achievement_count
    FROM tbl_students s
    JOIN tbl_achievements a ON s.id = a.student_id
    GROUP BY s.id, s.name
    ORDER BY achievement_count DESC
";

$leadResult = $conn->query($query);

$students = [];
if ($leadResult) {
    while ($row = $leadResult->fetch_assoc()) {
        $students[] = $row;  // Add each student with their achievements count to the array
    }
}

while ($row = $result->fetch_assoc()) {
    $scores[] = $row; 
}

$quizMapping = [
    1 => 'Solid',
    2 => 'Liquid',
    3 => 'Gas',
    4 => 'Estuaries',
    5 => 'Intertidal',
    6 => 'What is Motion?',
    7 => 'Measuring Distance/Time',
    8 => 'Weathering and Soil Formation',
    9 => 'Effects of Soil Erosion'
];

$stmt->close();
$conn->close();
?>

<link rel="stylesheet" href="./css/dashboard.css">

<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered"> 
                <div class="column is-full-mobile is-four-fifths-tablet mt-2"> 
                    <div class="box dash has-shadow first-box">
                        <img class="aas" style="float: right;" src="../image/teach.png" alt="teach1">
                        <p class="has-text-primary is-size-1 has-text-left mt-1 has-text-weight-bold">Hello, Student</p>
                        <p class="has-text-primary is-size-3 has-text-left"> Welcome to SciTrack</p>
                        <p class="has-text-primary is-size-3 has-text-left">Get ready to progress you Science knowledge!</span></p>
                    </div>
                </div>                
                <div class="column is-full-mobile is-two-fifths-tablet">
                    <div class="box dash has-shadow second-box has-text-centered">
                        <p class="has-text-primary is-size-3 mt-1 has-text-weight-bold">Leaderboard</p>
                        <div class="small-box">
                <p class="has-text-dark">BOARD LEADERS</p>
                <div class="scrollable-container3">
                                <?php
                                // Displaying top 10 students based on achievement count
                                $rank = 1;  // Start ranking from 1
                                foreach ($students as $student) {
                                    $name = $student['name'];
                                    $achievement_count = $student['achievement_count'];

                                    // Display top 10 leaderboard (you can adjust this number if necessary)
                                    if ($rank <= 10) {
                                        echo "<p class='has-text-dark'>Rank $rank: $name - Medals: $achievement_count</p>";
                                    }
                                    $rank++;
                                }
                                ?>
                            </div>
            </div>
                    </div>
                </div>
            </div>

            <div class="columns is-vcentered">
    <!-- Third Box Column (Lessons Progress) -->
    <div class="column is-full-mobile is-four-fifths-tablet third-box-container mt-5">
        <div class="box dash has-shadow has-text-left third-box">
            <div class="flex-container">
                <p class="has-text-primary is-size-1 has-text-weight-bold">Lessons Progress</p>
                <a href="studentWelcome.php" class="is-size-4">View Lessons</a>
            </div>

            <div class="scrollable-container">
                <!-- Matter Section -->
                <div class="small-box2">
                    <div class="flex-container2">
                        <img src="../image/matterTopic1.gif" class="lessonImage" alt="Matter">
                        <div class="text-container">
                            <p class="subtitle is-size-3 has-text-dark has-text-left secondary-font has-text-weight-bold mt-2">Matter</p>
                            <div class="flex-container3">
                                <?php
                                for ($i = 1; $i <= 3; $i++) {
                                    $progress = '0%';
                                    foreach ($scores as $score) {
                                        if ($score['quiz_id'] == $i) {
                                            $progress = '100%';
                                            break;
                                        }
                                    }
                                    echo "<div class='lesson-item'>
                                        <div class='has-text-dark has-text-left is-size-4'>{$quizMapping[$i]}</div>
                                        <div class='progress-container1'>
                                            <div class='progress-bar' style='width: {$progress};'>{$progress}</div>
                                        </div>
                                    </div>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ecosystem Section -->
                <div class="small-box2">
                    <div class="flex-container2">
                        <img src="../image/ecosystemTopic1.gif" class="lessonImage" alt="Ecosystem">
                        <div class="text-container">
                            <p class="subtitle is-size-3 has-text-dark has-text-left secondary-font has-text-weight-bold mt-2">Ecosystem</p>
                            <div class="flex-container3">
                                <?php
                                for ($i = 4; $i <= 5; $i++) {
                                    $progress = '0%';
                                    foreach ($scores as $score) {
                                        if ($score['quiz_id'] == $i) {
                                            $progress = '100%';
                                            break;
                                        }
                                    }
                                    echo "<div class='lesson-item'>
                                        <div class='has-text-dark has-text-left is-size-4'>{$quizMapping[$i]}</div>
                                        <div class='progress-container2'>
                                            <div class='progress-bar' style='width: {$progress};'>{$progress}</div>
                                        </div>
                                    </div>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Motion Section -->
                <div class="small-box2">
                    <div class="flex-container2">
                        <img src="../image/motionTopicx.gif" class="lessonImage" alt="Motion">
                        <div class="text-container">
                            <p class="subtitle is-size-3 has-text-dark has-text-left secondary-font has-text-weight-bold mt-2">Motion</p>
                            <div class="flex-container3">
                                <?php
                                for ($i = 6; $i <= 7; $i++) {
                                    $progress = '0%';
                                    foreach ($scores as $score) {
                                        if ($score['quiz_id'] == $i) {
                                            $progress = '100%';
                                            break;
                                        }
                                    }
                                    echo "<div class='lesson-item'>
                                        <div class='has-text-dark has-text-left is-size-4'>{$quizMapping[$i]}</div>
                                        <div class='progress-container3'>
                                            <div class='progress-bar' style='width: {$progress};'>{$progress}</div>
                                        </div>
                                    </div>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earth's Surface Section -->
                <div class="small-box2">
                    <div class="flex-container2">
                        <img src="../image/surfaceTopic1.gif" class="lessonImage" alt="Earth's Surface">
                        <div class="text-container">
                            <p class="subtitle is-size-3 has-text-dark has-text-left secondary-font has-text-weight-bold mt-2">Earth's Surface</p>
                            <div class="flex-container3">
                                <?php
                                for ($i = 8; $i <= 9; $i++) {
                                    $progress = '0%';
                                    foreach ($scores as $score) {
                                        if ($score['quiz_id'] == $i) {
                                            $progress = '100%';
                                            break;
                                        }
                                    }
                                    echo "<div class='lesson-item'>
                                        <div class='has-text-dark has-text-left is-size-4'>{$quizMapping[$i]}</div>
                                        <div class='progress-container4'>
                                            <div class='progress-bar' style='width: {$progress};'>{$progress}</div>
                                        </div>
                                    </div>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fourth Box Column (Assessments) -->
    <div class="column is-full-mobile is-two-fifths-tablet fourth-box-container">
        <div class="box dash has-shadow has-text-centered fourth-box">
            <p class="has-text-primary is-size-3 mt-1 has-text-weight-bold">Assessments</p>
            <div class="flex-container">
                <p class="has-text-primary has-text-left is-size-2">Lessons</p>
                <p class="has-text-primary has-text-left is-size-2">Scores</p>
            </div>
            <div class="scrollable-container2">
                <?php
                $groupedScores = [];
                foreach ($scores as $score) {
                    $groupedScores[$score['lesson']][] = $score;
                }

                $allQuizzes = [
                    ['lesson' => 'Solid', 'quiz_id' => 1, 'lesson_name' => 'Solid'],
                    ['lesson' => 'Liquid', 'quiz_id' => 2, 'lesson_name' => 'Liquid'],
                    ['lesson' => 'Gas', 'quiz_id' => 3, 'lesson_name' => 'Gas'],
                    ['lesson' => 'Estuaries', 'quiz_id' => 4, 'lesson_name' => 'Estuaries'],
                    ['lesson' => 'Intertidal', 'quiz_id' => 5, 'lesson_name' => 'Intertidal Zones'],
                    ['lesson' => 'Motion', 'quiz_id' => 6, 'lesson_name' => 'What is Motion?'],
                    ['lesson' => 'Measuring', 'quiz_id' => 7, 'lesson_name' => 'Measuring Distance and Time'],
                    ['lesson' => 'Weathering', 'quiz_id' => 8, 'lesson_name' => 'Weathering and Soil Formation'],
                    ['lesson' => 'Erosion', 'quiz_id' => 9, 'lesson_name' => 'Effects of Soil Erosion'],
                ];

                $quizzesByLesson = [];
                foreach ($allQuizzes as $quiz) {
                    $quizzesByLesson[$quiz['lesson']][] = $quiz;
                }

                foreach ($quizzesByLesson as $lesson => $quizzes) {
                    echo "<p class='has-text-primary has-text-left is-size-3 has-text-weight-bold'>{$lesson}</p>";
                    echo "<div class='small-box3'>";
                    foreach ($quizzes as $quiz) {
                        $score = 'None';
                        if (isset($groupedScores[$lesson])) {
                            foreach ($groupedScores[$lesson] as $sc) {
                                if ($sc['quiz_id'] == $quiz['quiz_id']) {
                                    $score = $sc['score'] !== null ? "{$sc['score']}/10" : 'None';
                                    break;
                                }
                            }
                        }
                        echo "<div class='flex-container'>
                            <p class='has-text-dark has-text-left is-size-4'>Quiz {$quiz['quiz_id']} - {$quiz['lesson_name']}</p>
                            <p class='has-text-dark has-text-right is-size-4'>{$score}</p>
                        </div>";
                    }
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>
</div>