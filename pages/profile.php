<?php
$email = $_SESSION['email'];
?>

<style>
.profile-card {
    background: white;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0,0,0,.1);
    max-width: 500px;
}

.profile-row {
    margin-bottom: 12px;
}

.profile-row b {
    display: inline-block;
    width: 120px;
}

.profile-actions {
    margin-top: 25px;
    display: flex;
    gap: 10px;
}

.btn-edit {
    background: #2980b9;
}

.btn-password {
    background: #e67e22;
}
</style>

<div class="profile-card">
    <h3>My Profile</h3>
    <hr>

    <div class="profile-row">
        <b>Nama</b>: Admin
    </div>
    <div class="profile-row">
        <b>Email</b>: <?= $email ?>
    </div>
    <div class="profile-row">
        <b>Role</b>: Administrator
    </div>
</div>
