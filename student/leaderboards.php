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
        const doc = new jsPDF({ orientation: 'landscape', unit: 'px', format: 'a4' });

        const studentName = "<?php echo $_SESSION['firstName'] . ' ' . $_SESSION['lastName']; ?>";

        doc.setFillColor(255, 255, 240);
        doc.rect(0, 0, doc.internal.pageSize.width, doc.internal.pageSize.height, 'F');

        doc.setFillColor(74, 144, 226);
        doc.rect(0, 0, doc.internal.pageSize.width, 80, 'F');
        doc.setFontSize(36);
        doc.setTextColor(255, 255, 255);
        doc.text("Student Achievement Award", doc.internal.pageSize.width / 2, 50, { align: "center" });

        doc.setFontSize(32);
        doc.setTextColor(0, 0, 0);
        doc.text("Awarded to:", doc.internal.pageSize.width / 2, 120, { align: "center" });

        doc.setFontSize(40);
        doc.setFont('times', 'bold');
        doc.text(studentName, doc.internal.pageSize.width / 2, 160, { align: "center" });

        doc.setDrawColor(74, 144, 226);
        doc.setLineWidth(1.5);
        doc.line(30, 170, doc.internal.pageSize.width - 30, 170);

        <?php
        $query = "SELECT image_path FROM tbl_achievements WHERE student_id = '$id'";
        $result = $conn->query($query);
        $imagePaths = [];
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $imagePaths[] = $row['image_path'];
            }
        }
        ?>

        var images = <?php echo json_encode($imagePaths); ?>;
        let yPosition = 180;
        let xPosition = 30;
        let badgeSize = 80;
        let badgesPerRow = 6;

        if (images.length > 0) {
            images.forEach(function (imagePath, index) {
                doc.addImage(imagePath, 'JPEG', xPosition, yPosition, badgeSize, badgeSize);
                xPosition += badgeSize + 20;
                if ((index + 1) % badgesPerRow === 0) {
                    xPosition = 30;
                    yPosition += badgeSize + 20;
                }
            });
        } else {
            doc.setFontSize(16);
            doc.text("No Achievements Earned", 30, yPosition);
        }

        doc.setFontSize(10);
        doc.setTextColor(100);
        doc.text("Generated by SciTrack", doc.internal.pageSize.width / 2, doc.internal.pageSize.height - 20, { align: "center" });

        doc.save(studentName + '_badges.pdf');
    });
</script>
