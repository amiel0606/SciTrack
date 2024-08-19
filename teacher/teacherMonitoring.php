<?php
    include_once './includes/sidebar.php';
?>
<style>
.large-icon {
    --bulma-icon-dimensions: 15.625rem;
    display: block;
    margin: auto;
}

.box {
    --bulma-box-background-color: hsl(0, 34%, 58%);
}


</style>
<div class="column ">
            <p class="has-text-primary is-size-2 mt-6 ml-4 has-text-weight-semibold">Monitoring</p>
            <div class="columns">
                <div class="column is-half">
                    <a href="./studentProgress.php">
                        <div class="box dash has-background-warning has-shadow" style="padding-bottom: 56.25%;">
                            <p class="has-text-white is-size-1 has-text-centered mt-2">Student Progress</p>
                            <span class="icon large-icon mt-6" >
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="250px" height="250x">
                                    <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zm-312 8l0 64c0 13.3 10.7 24 24 24s24-10.7 24-24l0-64c0-13.3-10.7-24-24-24s-24 10.7-24 24zm80-96l0 160c0 13.3 10.7 24 24 24s24-10.7 24-24l0-160c0-13.3-10.7-24-24-24s-24 10.7-24 24zm80 64l0 96c0 13.3 10.7 24 24 24s24-10.7 24-24l0-96c0-13.3-10.7-24-24-24s-24 10.7-24 24z" fill="white" stroke="black"/>
                                </svg>
                            </span>
                        </div>
                    </a>
                </div>
                <div class="column is-half">
                    <a href="./assessmentResult.php">
                        <div class="box dash has-shadow" style="padding-bottom: 56.25%;">
                        <p class="has-text-white is-size-1 has-text-centered mt-2">Assessment Results</p>
                        <span class="icon large-icon mt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="250px" height="250x">
                                <path d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 125.7-86.8 86.8c-10.3 10.3-17.5 23.1-21 37.2l-18.7 74.9c-2.3 9.2-1.8 18.8 1.3 27.5L64 512c-35.3 0-64-28.7-64-64L0 64zm384 64l-128 0L256 0 384 128zM549.8 235.7l14.4 14.4c15.6 15.6 15.6 40.9 0 56.6l-29.4 29.4-71-71 29.4-29.4c15.6-15.6 40.9-15.6 56.6 0zM311.9 417L441.1 287.8l71 71L382.9 487.9c-4.1 4.1-9.2 7-14.9 8.4l-60.1 15c-5.5 1.4-11.2-.2-15.2-4.2s-5.6-9.7-4.2-15.2l15-60.1c1.4-5.6 4.3-10.8 8.4-14.9z" fill="white" stroke="black"/>
                            </svg>
                        </span>
                        </div>
                    </a>
                </div>
                </div>
        </div>