<?php
    include_once './includes/sidebar.php';
?>
<style>
.sections{
    width: 400px !important;
    height: 328px;
}

.boxing{
    width: 100px !important;
    display: block !important;
}

.section2 {
    background-color: #D98DCD !important;
}

.section3 {
    background-color: #46A750 !important;
}

/* .section4 {
    background-color: #FFC333!important;
} */
</style>


<div class="container">
        <div class="box my-3">
            <p class="has-text-primary is-size-1 title ml-4">Sections</p>
                <div class="columns">
                        <div class="column is-half">
                            <a href="./teacherLessons.php?section=Papaya" class="boxing">
                                <div class="ml-6 box sections is-centered has-background-danger">
                                    <p class="has-text-centered has-text-primary is-size-1 has-text-weight-semibold mt-6">Papaya</p>
                                    <p class="has-text-centered has-text-primary is-size-3 mt-6"><span class="has-text-weight-bold">Students: </span> 15</p>
                                </div>
                            </a>
                            <a href="./teacherLessons.php?section=Sampaloc" class="boxing">
                                <div class="ml-6 box sections is-centered section3 mt-6">
                                    <p class="has-text-centered has-text-primary is-size-1 has-text-weight-semibold mt-6">Sampaloc</p>
                                    <p class="has-text-centered has-text-primary is-size-3 mt-6"><span class="has-text-weight-bold">Students: </span> 15</p>
                                </div>
                            </a>
                        </div>
                        <div class="column is-half">
                            <a href="./teacherLessons.php?section=Mango" class="boxing">
                                <div class="ml-6 box sections is-centered section2">
                                    <p class="has-text-centered has-text-primary is-size-1 has-text-weight-semibold mt-6">Mango</p>
                                    <p class="has-text-centered has-text-primary is-size-3 mt-6"><span class="has-text-weight-bold">Students: </span> 15</p>
                                </div>
                            </a>
                            <a href="./teacherLessons.php?section=Sampaguita" class="boxing">
                                <div class="ml-6 box sections is-centered section4 has-background-warning-light mt-6">
                                    <p class="has-text-centered has-text-primary is-size-1 has-text-weight-semibold mt-6">Sampaguita</p>
                                    <p class="has-text-centered has-text-primary is-size-3 mt-6"><span class="has-text-weight-bold">Students: </span> 15</p>
                                </div>
                            </a>
                        </div>
                </div>
        </div>
</div>