<h1 class="page-title">Customer Accounts</h1>

<p class="page-description">
    List of registered customer accounts.
</p>

<div class="record-list">

    <?php foreach ($customers as $customer): ?>

        <div class="customer-record">

            <div class="record-main">
                <span class="record-label">Full Name</span>
                <strong><?= $customer['fullname']; ?></strong>
            </div>

            <div class="record-info">
                <span class="record-label">Email Address</span>
                <span><?= $customer['email']; ?></span>
            </div>

            <div class="record-info">
                <span class="record-label">Phone Number</span>
                <span><?= $customer['phone_num']; ?></span>
            </div>

        </div>

    <?php endforeach; ?>

</div>