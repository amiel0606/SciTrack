<?php
include_once './includes/sidebar.php';
?>
<style>
    .table-container {
        max-height: 520px;
        overflow-y: auto;
        max-width: 1095px;
        scrollbar-color: hsl(240, 16%, 31%) transparent !important;
        scrollbar-width: thin !important;
    }

    .table-container::-webkit-scrollbar {
        width: 12px !important;
        border-radius: 100px !important;
    }

    .table-container::-webkit-scrollbar-track {
        background: transparent !important;
        border-radius: 100px !important;
    }

    .table-container::-webkit-scrollbar-thumb {
        background: hsl(240, 16%, 31%) !important;
        border: 3px solid transparent !important;
        background-clip: content-box !important;
        border-radius: 100px !important;
    }

    th {
        position: sticky;
        top: 0;
        background: hsl(240, 16%, 31%) !important;
        z-index: 1;
        box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.4) !important;
    }
</style>
<div class="column mt-1 ml-3">
    <p class="has-text-primary is-size-2 mt-6 ml-4 mb-6 has-text-weight-semibold">Students Progress</p>
    <div class="columns mb-6">
        <div class="column is-1"></div>
        <div class="column mt-6">
            <div class="table-container is-scrollable">
                <table class="table is-hoverable is-scrollable">
                    <thead class="has-text-centered">
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Overall Progress</th>
                        </tr>
                    </thead>
                    <tbody class="has-text-centered">
                        <tr>
                            <td>Amiel Carhyl Lapid</td>
                            <td>amiel06</td>
                            <td>69%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $.ajax({
            url: './includes/getProgress.php',
            method: 'POST',
            dataType: 'json',
            success: function (response) {
                const tbody = $('.table tbody');
                tbody.empty();
                const studentProgress = {};
                response.section_counts.forEach(function (entry) {
                    const studentId = entry.id;
                    if (!studentProgress[studentId]) {
                        studentProgress[studentId] = {
                            id: studentId,
                            student_name: entry.student_name,
                            username: entry.username,
                            section_count: 0
                        };
                    }
                    studentProgress[studentId].section_count += entry.section_count;
                });
                const totalSections = 104;
                Object.values(studentProgress).forEach(function (student) {
                    const progressPercentage = Math.round((student.section_count / totalSections) * 100);
                    const row = `
                    <tr class="clickable-row" data-student-id="${student.id}">
                        <td>${student.student_name}</td>
                        <td>${student.username}</td>
                        <td>${progressPercentage}%</td>
                    </tr>
                `;
                    tbody.append(row);
                });
                $('.table tbody').on('click', '.clickable-row', function () {
                    const studentID = $(this).data('student-id');
                    window.location.href = `progressDetails.php?studentID=${studentID}`;
                });
            },
            error: function (error) {
                console.error('Error fetching data:', error);
            }
        });
    });
</script>