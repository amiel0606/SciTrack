<?php
session_start();
if ($_SESSION['role'] == 'Admin') {
    include_once './includes/sidebar.php';
} else {
    header("Location: ../index.php");
    exit();
}
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
<!-- ADD SECTION MODAL -->
<div id="addSectionModal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div class="box addSection">
            <p class="has-text-primary is-size-3 has-text-weight-semibold has-text-centered mb-6">Add New Section</p>
            <form action="./includes/addStaff/addSection.php" method="post" id="addSectionForm"
                enctype="multipart/form-data">
                <div class="field">
                    <div class="control mb-5">
                        <input class="input" type="text" name="section" placeholder="Enter Section Name">
                    </div>
                </div>
                <div class="columns mt-6">
                    <div class="column has-background-white">
                        <button class="button is-primary has-text-white" name="submit" type="submit">Confirm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>
<!-- END OF ADD SECTION MODAL -->

<!-- EDIT SECTION MODAL -->
<div id="editSectionModal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div class="box addSection">
            <p class="has-text-primary is-size-3 has-text-weight-semibold has-text-centered mb-6">Edit New Section</p>
            <form action="./includes/editSection.php" method="POST" id="editSectionForm" enctype="multipart/form-data">
                <input class="input" type="hidden" id="sectionID" name="section_id">
                <div class="field">
                    <div class="control mb-5">
                        <input class="input" type="text" id="editSectionInput" name="section"
                            placeholder="Enter Section Name">
                    </div>
                </div>
                <div class="columns mt-6">
                    <div class="column has-background-white">
                        <button class="button is-primary has-text-white" name="submit" type="submit">Confirm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>
<!-- END OF EDIT SECTION MODAL -->

<div class="container">
    <div class="column mt-1 ml-3">
        <p class="has-text-primary is-size-2 mt-6 ml-4 mb-6 has-text-weight-semibold">Sections</p>
        <div class="columns mb-6">
            <div class="column is-1"></div>
            <div class="column mt-6">
                <div class="columns">
                    <div class="column">
                        <button class="button is-success js-modal-trigger" data-target="addSectionModal">
                            <span class="icon is-small">
                                <i class="fa-solid fa-plus"></i>
                            </span>
                            <span class="has-text-weight-semibold">Add New Section</span>
                        </button>
                    </div>
                </div>
                <table id="sections" class="table is-hoverable ">
                    <thead class="has-text-centered has-background-primary">
                        <tr>
                            <th>#</th>
                            <th>Section</th>
                            <th>Teacher</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="sectionBody" class="has-text-centered">
                    </tbody>
                </table>
            </div>
        </div>
        <div class="columns">
            <div class="column is-9"></div>
            <div class="column">
                <div class="<?php echo $notificationClass; ?>">
                    <button class="delete"></button>
                    <?php echo $errorMessage; ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            function openModal(idModal) {
                if (idModal) {
                    $(idModal).addClass('is-active');
                } else {
                    console.error('Modal element not found');
                }
            }

            function closeModal(idModal) {
                idModal.classList.remove('is-active');
            }

            const deleteButton = document.querySelector('.notification .delete');
            const notification = document.querySelector('.notification');

            deleteButton.addEventListener('click', () => {
                notification.classList.toggle('is-invisible');
            });

            function closeAllModals() {
                document.querySelectorAll('.modal').forEach(($modal) => {
                    closeModal($modal);
                });
            }

            document.querySelectorAll('.js-modal-trigger').forEach(($trigger) => {
                const modal = $trigger.dataset.target;
                const $target = document.getElementById(modal);
                $trigger.addEventListener('click', () => {
                    openModal($target);
                });
            });

            document.querySelectorAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button, .modal-off').forEach(($close) => {
                const $target = $close.closest('.modal');

                $close.addEventListener('click', () => {
                    closeModal($target);
                });
            });

            document.addEventListener('keydown', (event) => {
                if (event.key === "Escape") {
                    closeAllModals();
                }
            });
            function fetchSections() {
                $.ajax({
                    url: "./includes/showSections.php",
                    method: "GET",
                    dataType: "json",
                    success: function (data) {
                        $("#sectionBody").empty();
                        if (data.length > 0) {
                            data.forEach((section, index) => {
                                const row = `
                            <tr>
                                <td>${section.section_id}</td>
                                <td>${section.section_name}</td>
                                <td>${section.teacher || "N/A"}</td>
                                <td>
                                    <button data-id="${section.section_id}" class="btn-edit button is-small is-success js-modal-trigger" data-target="editSectionModal">
                                        <span class="icon"><i class="fa-solid fa-pen"></i></span>
                                    </button>
                                    <button data-id="${section.section_id}" class="delete-section button is-small is-danger ">
                                        <span class="icon"><i class="fa-solid fa-trash"></i></span>
                                    </button>
                                </td>
                            </tr>
                        `;
                                $("#sectionBody").append(row);
                            });
                        } else {
                            $("#sectionBody").append('<tr><td colspan="4">No sections found</td></tr>');
                        }
                        $(document).on('click', '.btn-edit', function () {
                            var sectionid = $(this).data('id');
                            $('#sectionID').val(sectionid);
                            $('#editSectionModal').addClass('is-active');
                        });
                    },
                    error: function (xhr, status, error) {
                        console.error("Error fetching sections:", status, error);
                        $("#sectionBody").html('<tr><td colspan="4">Error loading sections</td></tr>');
                    },
                });
            }
            $(document).on('click', '.delete-section', function () {
                const sectionId = $(this).data('id'); 
                if (confirm('Are you sure you want to delete this section?')) {
                    $.ajax({
                        url: './includes/deleteSection.php', 
                        type: 'POST',
                        data: { section_id: sectionId },
                        success: function (response) {
                            const result = JSON.parse(response);
                            if (result.success) {
                                alert('Section deleted successfully!');
                                location.reload();
                            } else {
                                alert('Failed to delete section: ' + result.message);
                            }
                        },
                        error: function () {
                            alert('An error occurred. Please try again.');
                        }
                    });
                }
            });

            fetchSections();
        });
    </script>