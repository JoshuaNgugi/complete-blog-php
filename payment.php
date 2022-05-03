<?php include('config.php'); ?>
<?php require_once(ROOT_PATH . '/includes/public_functions.php') ?>
<?php include('includes/registration_login.php'); ?>
<?php include('includes/head_section.php'); ?>

</head>
<?php
$bank_details = getBankDetails();
?>

<body>
    <?php include(ROOT_PATH . '/includes/navbar.php') ?>

    <div class="staff-bar">
        <h2>Bank Account Details</h2>
        <table class="table table-hover table-striped">
            <tr>
                <th scope="col">Bank</th>
                <th scope="col">Account Number</th>
            </tr>
            <?php foreach ($bank_details as $bank) : ?>
                <tr class="card-content">
                    <td>
                        <?php echo $bank['bank'] ?>
                    </td>
                    <td>
                        <?php echo $bank['account_number'] ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>

    <?php include(ROOT_PATH . '/includes/footer.php') ?>