<h1 class="page-title">User Accounts</h1>

<p class="page-description">
    List of staff accounts authorized to use the system.
</p>
<section class="record-list">

    <?php foreach ($users as $user): ?>

        <article class="user-record role-<?= strtolower($user['role']); ?>">

            <p>
                <small>USERNAME</small>
                <strong><?= $user['username']; ?></strong>
            </p>

            <p>
                <small>FULL NAME</small>
                <strong><?= $user['fullname']; ?></strong>
            </p>

            <p>
                <small>ROLE</small>
                <strong><?= $user['role']; ?></strong>
            </p>

        </article>

    <?php endforeach; ?>

</section>