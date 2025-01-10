<?php
session_start();
include_once('./includes/board.php');
include_once('../admin/includes/dbCon.php');
$name = $_SESSION["firstName"] . " " . $_SESSION["lastName"];
$id = $_SESSION["id"];

// Fetch students with achievements count and corresponding lesson names (achievement_name)
$query = "SELECT s.name, COUNT(a.achievement_name) AS badge_count, 
                 GROUP_CONCAT(a.image_path) AS image_paths, 
                 GROUP_CONCAT(DISTINCT a.achievement_name) AS lesson_names
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
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

<button 
    id="saveButton" 
    class="button is-small is-success" 
    style="position: absolute; top: 100px; right: 100px; padding: 15px 30px; font-size: 18px; background-color: #4A90E2; border: none; color: white; border-radius: 8px; cursor: pointer;"
    onmouseover="this.style.backgroundColor='#266BBB'" 
    onmouseout="this.style.backgroundColor='#4A90E2'">
    Print Your Badges
</button>



<script>
 document.getElementById('saveButton').addEventListener('click', function () {
    const { jsPDF } = window.jspdf;

    const studentName = "<?php echo $_SESSION['firstName'] . ' ' . $_SESSION['lastName']; ?>";
    
    // Fetch lesson names (achievement_name) and corresponding badge images (grouped by lesson)
    <?php
    // Fetch lesson names and badge images grouped by lesson
    $query = "
        SELECT a.achievement_name, a.image_path
        FROM tbl_achievements a
        WHERE a.student_id = '$id'
        ORDER BY a.achievement_name";
    
    $result = $conn->query($query);
    $lessonData = [];
    
    while ($row = $result->fetch_assoc()) {
        $lessonData[$row['achievement_name']][] = $row['image_path'];
    }
    ?>
    
    var lessonData = <?php echo json_encode($lessonData); ?>;

    // Loop through each lesson and create a PDF with all badges for that lesson
    Object.keys(lessonData).forEach(function (lessonName) {
        const doc = new jsPDF({ orientation: 'landscape', unit: 'px', format: 'a4' });

        // Page background color
        doc.setFillColor(255, 255, 240);
        doc.rect(0, 0, doc.internal.pageSize.width, doc.internal.pageSize.height, 'F');

        // Header background
        doc.setFillColor(74, 144, 226);
        doc.rect(0, 0, doc.internal.pageSize.width, 80, 'F');

        // Header Text
        doc.setFontSize(36);
        doc.setTextColor(255, 255, 255);
        doc.text("Student Achievement Award", doc.internal.pageSize.width / 2, 50, { align: "center" });

        // Awarded to text
        doc.setFontSize(32);
        doc.setTextColor(0, 0, 0);
        doc.text("Awarded to:", doc.internal.pageSize.width / 2, 120, { align: "center" });

        // Student's Name
        doc.setFontSize(40);
        doc.setFont('times', 'bold');
        doc.text(studentName, doc.internal.pageSize.width / 2, 160, { align: "center" });

        // Lesson Name (achievement_name) - displayed only once as lesson name
        doc.setFontSize(24);
        doc.setFont('times', 'normal');
        doc.text("For Completing the Lesson:", doc.internal.pageSize.width / 2, 210, { align: "center" });
        doc.setFontSize(28);
        doc.setFont('times', 'bold');
        doc.text(lessonName, doc.internal.pageSize.width / 2, 240, { align: "center" });

        // Divider line
        doc.setDrawColor(74, 144, 226);
        doc.setLineWidth(1.5);
        doc.line(30, 250, doc.internal.pageSize.width - 30, 250);

        // Calculate center position for the badge image
        const badgeSize = 80; // Size of the badge
        const xPosition = (doc.internal.pageSize.width - badgeSize) / 2;  // Center horizontally
        let yPosition = 270;  // Start position for the first badge

        // Loop through badges for this lesson and add each badge image
        lessonData[lessonName].forEach(function (imagePath, index) {
            // Add image (badge)
            doc.addImage(imagePath, 'JPEG', xPosition, yPosition, badgeSize, badgeSize);

            // Increment Y position for the next badge
            yPosition += badgeSize + 20; // Adjust this to control the spacing between badges
        });

        // Footer Text
        doc.setFontSize(10);
        doc.setTextColor(100);
        doc.text("Generated by SciTrack", doc.internal.pageSize.width / 2, doc.internal.pageSize.height - 20, { align: "center" });

        // Save the PDF with a unique filename based on the lesson name
        doc.save(studentName + '_certificate_for_' + lessonName + '.pdf');
    });
});


</script>
