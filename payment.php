<?php include('config.php'); ?>
<?php require_once(ROOT_PATH . '/includes/public_functions.php') ?>
<?php include('includes/registration_login.php'); ?>
<?php include('includes/head_section.php'); ?>

<title>Academics</title>
</head>
<?php
$bank_details = getBankDetails();
?>

<body>
    <!-- navbar -->
    <?php include(ROOT_PATH . '/includes/navbar.php') ?>
    <!-- // navbar -->

    <div class="staff-bar">
        <div class="card">
            <div class="card-header">
                <h2>Bank Account Details</h2>
            </div>
            <table class="table table-hover">
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
    </div>

    <?php include(ROOT_PATH . '/includes/footer.php') ?>