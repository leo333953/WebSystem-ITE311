
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                </div>

                <?php if($role == "student"): ?>
                    <div class="card-body">
                        <h5 class="mb-4 text-center">Welcome <span class="text-primary"><?= $name ?></span>!</h5>
                        <p class="text-center text-muted">Here you can check your progress and upcoming activities.</p>

                        <div class="row g-3 mt-3">
                            <div class="col-md-6">
                                <div class="card border-primary shadow-sm">
                                    <div class="card-body text-center">
                                        <h6>Quizzes</h6>
                                        <a href="<?= base_url('students') ?>" class="btn btn-sm btn-primary mt-2">Open</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card border-primary shadow-sm">
                                    <div class="card-body text-center">
                                        <h6>Groups</h6>
                                        <a href="<?= base_url('lessons') ?>" class="btn btn-sm btn-primary mt-2">Open</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php elseif($role == "teacher"): ?>
                    <div class="card-body">
                        <h5 class="mb-4 text-center">Welcome <span class="text-primary"><?= $name ?></span>!</h5>
                        <p class="text-center text-muted">Manage your students and teaching resources here.</p>

                        <div class="row g-3 mt-3">
                            <div class="col-md-6">
                                <div class="card border-primary shadow-sm">
                                    <div class="card-body text-center">
                                        <h6>Manage Students</h6>
                                        <a href="<?= base_url('students') ?>" class="btn btn-sm btn-primary mt-2">Open</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card border-primary shadow-sm">
                                    <div class="card-body text-center">
                                        <h6>Upload Lessons</h6>
                                        <a href="<?= base_url('lessons') ?>" class="btn btn-sm btn-primary mt-2">Open</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php elseif($role == "admin"): ?>
                    <div class="card-body">
                        <h5 class="mb-4 text-center">Welcome <span class="text-primary"><?= $name ?></span>!</h5>
                        <p class="text-center text-muted">You have full access to system controls and reports.</p>

                        <div class="row g-3 mt-3">
                            <div class="col-md-6">
                                <div class="card border-primary shadow-sm">
                                    <div class="card-body text-center">
                                        <h6>Manage Users</h6>
                                        <a href="<?= base_url('students') ?>" class="btn btn-sm btn-primary mt-2">Open</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card border-primary shadow-sm">
                                    <div class="card-body text-center">
                                        <h6>Statistics</h6>
                                        <a href="<?= base_url('lessons') ?>" class="btn btn-sm btn-primary mt-2">Open</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
</div>

</body>
</html>