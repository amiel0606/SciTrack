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
<div class="column mt-1 ml-3">
    <p class="has-text-primary is-size-2 mt-6 ml-4 mb-6 has-text-weight-semibold">Archived Accounts</p>
    <div class="columns mb-6">
        <div class="column is-1"></div>
        <div class="select is-primary">
            <select id="role">
                <option selected disabled>Select a Role</option>
                <option value="Teachers">Show Teachers</option>
                <option value="Students">Show Students</option>
            </select>
        </div>
        <div class="column mt-6">
            <div class="table-container">
                <table class="table is-hoverable">
                    <thead id="assessment" class="has-text-centered">
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="has-text-centered" id="results">
                        <tr>
                            <td colspan="4">Please select a role to see results.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#role').change(function () {
            var selectedRole = $(this).val();
            var endpoint = './includes/getArchived.php';
            if (selectedRole) {
                $.ajax({
                    url: endpoint,
                    type: 'POST',
                    data: { role: selectedRole },
                    dataType: 'json',
                    success: function (data) {
                        $('#results').empty();
                        if (data.length > 0) {
                            $.each(data, function (index, item) {
                                var row = '<tr>' +
                                    '<td>' + item.name + '</td>' +
                                    '<td>' + item.username + '</td>' +
                                    '<td>' + selectedRole + '</td>' +
                                    `<td><button class="button is-small" data-id="${item.id}" data-role="${selectedRole}">Activate Account</button></td>` +
                                    '</tr>';
                                $('#results').append(row);
                            });
                        } else {
                            $('#results').append('<tr><td colspan="4">No results found.</td></tr>');
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error("AJAX Error: ", status, error);
                    }
                });
            }
        });

        $(document).on('click', '.button.is-small', function () {
            var accountId = $(this).data('id');
            var selectedRole = $(this).data('role');
            var endpoint = './includes/activateAccount.php';
            $.ajax({
                url: endpoint,
                type: 'POST',
                data: { id: accountId, role: selectedRole },
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        alert('Account activated successfully!');
                        $('#role').change();
                    } else {
                        alert('Failed to activate account: ' + response.message);
                    }
                },
                error: function (xhr, status, error) {
                    console.error("AJAX Error: ", status, error);
                    console.log("Response Text: ", xhr.responseText);  
                    alert('An error occurred while activating the account. Check the console for more details.');
                }
            });
        });
    });
</script>