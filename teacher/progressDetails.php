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

    .progress-box {
        min-height: 350px;
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
    <p class="has-text-primary is-size-2 mt-6 ml-4 mb-6 has-text-weight-semibold">Student Progress</p>
    <div class="box">
        <!-- Student Info -->
        <div class="media mb-5">
            <div class="media-content">
                <p id="s-name" class="title is-4">Mark Nelson Garcia</p>
            </div>
        </div>

        <!-- Progress Sections -->
        <div class="columns is-multiline">
            <!-- Matter Section -->
            <div class="column is-half">
                <div class="box has-background-light progress-box">
                    <div class="columns">
                        <div class="column is-one-third has-text-centered m-auto">
                            <figure class="image is-128x128 mx-auto">
                                <img src="../image/matterTopic.gif" alt="Solid Icon">
                            </figure>
                            <p class="has-text-weight-bold mt-2">Matter</p>
                        </div>
                        <div class="column">
                            <p>Solid</p>
                            <div class="level">
                                <progress id="progress-bar-Solid" class="progress is-primary" value="0"
                                    max="100">0%</progress>
                                <span id="progress-value-Solid" class="ml-2 has-text-weight-semibold">0%</span>
                            </div>
                            <p>Liquid</p>
                            <div class="level">
                                <progress id="progress-bar-Liquid" class="progress is-primary" value="0"
                                    max="100">0%</progress>
                                <span id="progress-value-Liquid" class="ml-2 has-text-weight-semibold">0%</span>
                            </div>
                            <p>Gas</p>
                            <div class="level">
                                <progress id="progress-bar-Gas" class="progress is-primary" value="0"
                                    max="100">0%</progress>
                                <span id="progress-value-Gas" class="ml-2 has-text-weight-semibold">0%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ecosystem Section -->
            <div class="column is-half">
                <div class="box has-background-light progress-box mt-auto">
                    <div class="columns mt-6">
                        <div class="column is-one-third has-text-centered m-auto">
                            <figure class="image is-128x128 mx-auto">
                                <img src="../image/ecosystemTopic1.gif" alt="Ecosystem Icon">
                            </figure>
                            <p class="has-text-weight-bold mt-2">Ecosystem</p>
                        </div>
                        <div class="column">
                            <p>Estuaries</p>
                            <div class="level">
                                <progress id="progress-bar-Estuaries" class="progress is-primary" value="0"
                                    max="100">0%</progress>
                                <span id="progress-value-Estuaries" class="ml-2 has-text-weight-semibold">0%</span>
                            </div>
                            <p>Intertidal Zone</p>
                            <div class="level">
                                <progress id="progress-bar-Intertidal" class="progress is-primary" value="0"
                                    max="100">0%</progress>
                                <span id="progress-value-Intertidal" class="ml-2 has-text-weight-semibold">0%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Motion Section -->
            <div class="column is-half">
                <div class="box has-background-light progress-box mt-auto">
                    <div class="columns mt-6">
                        <div class="column is-one-third has-text-centered m-auto">
                            <figure class="image is-128x128 mx-auto">
                                <img src="../image/motionTopic.gif" alt="Motion Icon">
                            </figure>
                            <p class="has-text-weight-bold mt-2">Motion</p>
                        </div>
                        <div class="column">
                            <p>What is Motion?</p>
                            <div class="level">
                                <progress id="progress-bar-WhatisMotion" class="progress is-primary" value="0"
                                    max="100">0%</progress>
                                <span id="progress-value-WhatisMotion" class="ml-2 has-text-weight-semibold">0%</span>
                            </div>
                            <p>Measuring Distance and Time</p>
                            <div class="level">
                                <progress id="progress-bar-Measuring" class="progress is-primary" value="0"
                                    max="100">0%</progress>
                                <span id="progress-value-Measuring" class="ml-2 has-text-weight-semibold">0%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earth's Surface Section -->
            <div class="column is-half">
                <div class="box has-background-light progress-box mt-auto">
                    <div class="columns mt-6">
                        <div class="column is-one-third has-text-centered m-auto">
                            <figure class="image is-128x128 mx-auto">
                                <img src="../image/surfaceTopic1.gif" alt="Weathering and Erosion Icon">
                            </figure>
                            <p class="has-text-weight-bold mt-2">Weathering and Erosion</p>
                        </div>
                        <div class="column">
                            <p>Weathering and Soil Formation</p>
                            <div class="level">
                                <progress id="progress-bar-Weathering" class="progress is-primary" value="0"
                                    max="100">0%</progress>
                                <span id="progress-value-Weathering" class="ml-2 has-text-weight-semibold">0%</span>
                            </div>
                            <p>Soil Erosion</p>
                            <div class="level">
                                <progress id="progress-bar-Erosion" class="progress is-primary" value="0"
                                    max="100">0%</progress>
                                <span id="progress-value-Erosion" class="ml-2 has-text-weight-semibold">0%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        function getStudentID() {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get('studentID');
        }
        const studentID = getStudentID();
        if (studentID) {
            $.ajax({
                url: './includes/getProgress.php',
                method: 'POST',
                data: {
                    student_id: studentID
                },
                dataType: 'json',
                success: function (response) {
                    const sectionCounts = response.section_counts;

                    // Check if sectionCounts is empty
                    if (!sectionCounts || sectionCounts.length === 0) {
                        $('#s-name').text("Student Does Not Start any lesson yet");
                    } else {
                        sectionCounts.forEach(function (section) {
                            let progressPercentage = 0;
                            if (section.section_name === 'Solid') {
                                progressPercentage = Math.round((section.section_count / 9) * 100);
                            }
                            else if (section.section_name === 'Liquid') {
                                progressPercentage = Math.round((section.section_count / 9) * 100);
                            }
                            else if (section.section_name === 'Gas') {
                                progressPercentage = Math.round((section.section_count / 9) * 100);
                            }
                            else if (section.section_name === 'Estuaries') {
                                progressPercentage = Math.round((section.section_count / 13) * 100);
                            }
                            else if (section.section_name === 'Intertidal') {
                                progressPercentage = Math.round((section.section_count / 16) * 100);
                            }
                            else if (section.section_name === 'WhatisMotion') {
                                progressPercentage = Math.round((section.section_count / 15) * 100);
                            }
                            else if (section.section_name === 'Measuring') {
                                progressPercentage = Math.round((section.section_count / 12) * 100);
                            }
                            else if (section.section_name === 'Weathering') {
                                progressPercentage = Math.round((section.section_count / 10) * 100);
                            }
                            else if (section.section_name === 'Erosion') {
                                progressPercentage = Math.round((section.section_count / 11) * 100);
                            }
                            if (progressPercentage > 0) {
                                $(`#progress-bar-${section.section_name}`).val(progressPercentage);
                                $(`#progress-value-${section.section_name}`).text(progressPercentage + '%');
                            }
                            $('#s-name').text(section.student_name);
                        });
                    }
                },
                error: function (error) {
                    console.error('Error fetching data:', error);
                }
            });
        } else {
            console.warn('studentID not found in URL');
        }
    });
</script>