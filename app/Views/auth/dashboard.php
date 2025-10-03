<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --success: #4cc9f0;
            --info: #4895ef;
            --warning: #f72585;
            --light: #f8f9fa;
            --dark: #212529;
            --student: #7209b7;
            --teacher: #f72585;
            --admin: #3a0ca3;
        }
        
        body {
            background-color: #f5f7fb;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .dashboard-card {
            border-radius: 12px;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
            overflow: hidden;
        }
        
        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .card-header-custom {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 12px 12px 0 0 !important;
            padding: 1.5rem;
        }
        
        .stat-card {
            border-left: 4px solid;
            border-radius: 8px;
        }
        
        .stat-card.student {
            border-left-color: var(--student);
        }
        
        .stat-card.teacher {
            border-left-color: var(--teacher);
        }
        
        .stat-card.admin {
            border-left-color: var(--admin);
        }
        
        .progress {
            height: 8px;
            border-radius: 10px;
        }
        
        .quick-action {
            background-color: white;
            border-radius: 10px;
            padding: 1.25rem;
            text-align: center;
            transition: all 0.3s;
            border: 1px solid #eaeaea;
        }
        
        .quick-action:hover {
            background-color: #f0f5ff;
            border-color: var(--primary);
        }
        
        .quick-action i {
            font-size: 1.75rem;
            margin-bottom: 0.75rem;
            color: var(--primary);
        }
        
        .recent-activity {
            max-height: 300px;
            overflow-y: auto;
        }
        
        .activity-item {
            padding: 0.75rem 0;
            border-bottom: 1px solid #eee;
        }
        
        .activity-item:last-child {
            border-bottom: none;
        }
        
        .badge-custom {
            padding: 0.35em 0.65em;
            border-radius: 8px;
        }
        
        .welcome-text {
            color: #6c757d;
            font-size: 1.1rem;
        }
        
        .user-role-badge {
            background-color: rgba(67, 97, 238, 0.1);
            color: var(--primary);
            padding: 0.35rem 0.75rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="dashboard-card">
                    <div class="card-header-custom text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="mb-0">Learning Dashboard</h4>
                                <p class="mb-0 mt-1 opacity-75">Track your progress and manage your activities</p>
                            </div>
                            <div class="user-role-badge">
                                <i class="fas fa-user-circle me-1"></i> <?= ucfirst($role) ?>
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-4">
                        <!-- Welcome Section -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <h3 class="mb-2">Welcome back, <span class="text-primary"><?= $name ?></span>!</h3>
                                <?php if($role == "student"): ?>
                                    <p class="welcome-text">Here you can check your progress, upcoming activities, and learning resources.</p>
                                <?php elseif($role == "teacher"): ?>
                                    <p class="welcome-text">Manage your students, teaching resources, and track class performance.</p>
                                <?php elseif($role == "admin"): ?>
                                    <p class="welcome-text">You have full access to system controls, analytics, and user management.</p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Statistics Section -->
                        <div class="row mb-4">
                            <?php if($role == "student"): ?>
                                <div class="col-md-3 mb-3">
                                    <div class="stat-card student p-3 bg-white">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="text-muted mb-1">Average Score</p>
                                                <h4 class="mb-0">78%</h4>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="fas fa-chart-line fa-2x text-muted"></i>
                                            </div>
                                        </div>
                                        <div class="progress mt-2">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 78%"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 mb-3">
                                    <div class="stat-card student p-3 bg-white">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="text-muted mb-1">Quizzes Taken</p>
                                                <h4 class="mb-0">12</h4>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="fas fa-tasks fa-2x text-muted"></i>
                                            </div>
                                        </div>
                                        <small class="text-muted">+2 this week</small>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 mb-3">
                                    <div class="stat-card student p-3 bg-white">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="text-muted mb-1">Groups</p>
                                                <h4 class="mb-0">3</h4>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="fas fa-users fa-2x text-muted"></i>
                                            </div>
                                        </div>
                                        <small class="text-muted">Active participation</small>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 mb-3">
                                    <div class="stat-card student p-3 bg-white">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="text-muted mb-1">Upcoming</p>
                                                <h4 class="mb-0">2</h4>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="fas fa-calendar-alt fa-2x text-muted"></i>
                                            </div>
                                        </div>
                                        <small class="text-muted">Deadlines this week</small>
                                    </div>
                                </div>

                            <?php elseif($role == "teacher"): ?>
                                <div class="col-md-3 mb-3">
                                    <div class="stat-card teacher p-3 bg-white">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="text-muted mb-1">Students</p>
                                                <h4 class="mb-0">42</h4>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="fas fa-user-graduate fa-2x text-muted"></i>
                                            </div>
                                        </div>
                                        <small class="text-muted">+3 this month</small>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 mb-3">
                                    <div class="stat-card teacher p-3 bg-white">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="text-muted mb-1">Lessons</p>
                                                <h4 class="mb-0">18</h4>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="fas fa-book-open fa-2x text-muted"></i>
                                            </div>
                                        </div>
                                        <small class="text-muted">Created</small>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 mb-3">
                                    <div class="stat-card teacher p-3 bg-white">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="text-muted mb-1">Assignments</p>
                                                <h4 class="mb-0">24</h4>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="fas fa-clipboard-list fa-2x text-muted"></i>
                                            </div>
                                        </div>
                                        <small class="text-muted">To grade: 5</small>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 mb-3">
                                    <div class="stat-card teacher p-3 bg-white">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="text-muted mb-1">Avg. Score</p>
                                                <h4 class="mb-0">82%</h4>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="fas fa-chart-bar fa-2x text-muted"></i>
                                            </div>
                                        </div>
                                        <div class="progress mt-2">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 82%"></div>
                                        </div>
                                    </div>
                                </div>

                            <?php elseif($role == "admin"): ?>
                                <div class="col-md-3 mb-3">
                                    <div class="stat-card admin p-3 bg-white">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="text-muted mb-1">Total Users</p>
                                                <h4 class="mb-0">156</h4>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="fas fa-users fa-2x text-muted"></i>
                                            </div>
                                        </div>
                                        <small class="text-muted">Active: 142</small>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 mb-3">
                                    <div class="stat-card admin p-3 bg-white">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="text-muted mb-1">System Health</p>
                                                <h4 class="mb-0">98%</h4>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="fas fa-heartbeat fa-2x text-muted"></i>
                                            </div>
                                        </div>
                                        <div class="progress mt-2">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 98%"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 mb-3">
                                    <div class="stat-card admin p-3 bg-white">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="text-muted mb-1">Storage</p>
                                                <h4 class="mb-0">64%</h4>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="fas fa-hdd fa-2x text-muted"></i>
                                            </div>
                                        </div>
                                        <div class="progress mt-2">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 64%"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 mb-3">
                                    <div class="stat-card admin p-3 bg-white">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="text-muted mb-1">Active Sessions</p>
                                                <h4 class="mb-0">47</h4>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="fas fa-signal fa-2x text-muted"></i>
                                            </div>
                                        </div>
                                        <small class="text-muted">Peak: 89</small>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Quick Actions and Recent Activity -->
                        <div class="row">
                            <!-- Quick Actions -->
                            <div class="col-md-8 mb-4">
                                <h5 class="mb-3">Quick Actions</h5>
                                <div class="row g-3">
                                    <?php if($role == "student"): ?>
                                        <div class="col-md-6">
                                            <div class="quick-action">
                                                <i class="fas fa-tasks"></i>
                                                <h6>Quizzes & Tests</h6>
                                                <p class="text-muted small">Take quizzes and view results</p>
                                                <a href="<?= base_url('students') ?>" class="btn btn-sm btn-primary">Open</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="quick-action">
                                                <i class="fas fa-users"></i>
                                                <h6>Study Groups</h6>
                                                <p class="text-muted small">Join or create study groups</p>
                                                <a href="<?= base_url('lessons') ?>" class="btn btn-sm btn-primary">Open</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="quick-action">
                                                <i class="fas fa-book-open"></i>
                                                <h6>Learning Materials</h6>
                                                <p class="text-muted small">Access course materials</p>
                                                <a href="#" class="btn btn-sm btn-outline-primary">Browse</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="quick-action">
                                                <i class="fas fa-chart-line"></i>
                                                <h6>Progress Report</h6>
                                                <p class="text-muted small">View your learning progress</p>
                                                <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                            </div>
                                        </div>

                                    <?php elseif($role == "teacher"): ?>
                                        <div class="col-md-6">
                                            <div class="quick-action">
                                                <i class="fas fa-user-graduate"></i>
                                                <h6>Manage Students</h6>
                                                <p class="text-muted small">View and manage student accounts</p>
                                                <a href="<?= base_url('students') ?>" class="btn btn-sm btn-primary">Open</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="quick-action">
                                                <i class="fas fa-upload"></i>
                                                <h6>Upload Lessons</h6>
                                                <p class="text-muted small">Create and share learning materials</p>
                                                <a href="<?= base_url('lessons') ?>" class="btn btn-sm btn-primary">Open</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="quick-action">
                                                <i class="fas fa-clipboard-check"></i>
                                                <h6>Grade Assignments</h6>
                                                <p class="text-muted small">Review and grade student work</p>
                                                <a href="#" class="btn btn-sm btn-outline-primary">Grade</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="quick-action">
                                                <i class="fas fa-chart-pie"></i>
                                                <h6>Class Analytics</h6>
                                                <p class="text-muted small">View class performance metrics</p>
                                                <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                            </div>
                                        </div>

                                    <?php elseif($role == "admin"): ?>
                                        <div class="col-md-6">
                                            <div class="quick-action">
                                                <i class="fas fa-users-cog"></i>
                                                <h6>Manage Users</h6>
                                                <p class="text-muted small">Manage all user accounts</p>
                                                <a href="<?= base_url('students') ?>" class="btn btn-sm btn-primary">Open</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="quick-action">
                                                <i class="fas fa-chart-bar"></i>
                                                <h6>System Statistics</h6>
                                                <p class="text-muted small">View platform analytics</p>
                                                <a href="<?= base_url('lessons') ?>" class="btn btn-sm btn-primary">Open</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="quick-action">
                                                <i class="fas fa-cogs"></i>
                                                <h6>System Settings</h6>
                                                <p class="text-muted small">Configure platform settings</p>
                                                <a href="#" class="btn btn-sm btn-outline-primary">Configure</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="quick-action">
                                                <i class="fas fa-file-export"></i>
                                                <h6>Reports</h6>
                                                <p class="text-muted small">Generate and export reports</p>
                                                <a href="#" class="btn btn-sm btn-outline-primary">Generate</a>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <!-- Recent Activity -->
                            <div class="col-md-4 mb-4">
                                <h5 class="mb-3">Recent Activity</h5>
                                <div class="recent-activity bg-white p-3 rounded">
                                    <?php if($role == "student"): ?>
                                        <div class="activity-item">
                                            <div class="d-flex justify-content-between">
                                                <span>Math Quiz</span>
                                                <span class="badge bg-success badge-custom">Completed</span>
                                            </div>
                                            <small class="text-muted">2 hours ago</small>
                                        </div>
                                        <div class="activity-item">
                                            <div class="d-flex justify-content-between">
                                                <span>Science Assignment</span>
                                                <span class="badge bg-warning badge-custom">Pending</span>
                                            </div>
                                            <small class="text-muted">Yesterday</small>
                                        </div>
                                        <div class="activity-item">
                                            <div class="d-flex justify-content-between">
                                                <span>Group Project</span>
                                                <span class="badge bg-info badge-custom">In Progress</span>
                                            </div>
                                            <small class="text-muted">2 days ago</small>
                                        </div>
                                        <div class="activity-item">
                                            <div class="d-flex justify-content-between">
                                                <span>English Essay</span>
                                                <span class="badge bg-success badge-custom">Graded</span>
                                            </div>
                                            <small class="text-muted">3 days ago</small>
                                        </div>

                                    <?php elseif($role == "teacher"): ?>
                                        <div class="activity-item">
                                            <div class="d-flex justify-content-between">
                                                <span>Graded Math Tests</span>
                                                <span class="badge bg-success badge-custom">Done</span>
                                            </div>
                                            <small class="text-muted">5 hours ago</small>
                                        </div>
                                        <div class="activity-item">
                                            <div class="d-flex justify-content-between">
                                                <span>New Lesson Uploaded</span>
                                                <span class="badge bg-info badge-custom">Published</span>
                                            </div>
                                            <small class="text-muted">Yesterday</small>
                                        </div>
                                        <div class="activity-item">
                                            <div class="d-flex justify-content-between">
                                                <span>Student Query</span>
                                                <span class="badge bg-warning badge-custom">Pending</span>
                                            </div>
                                            <small class="text-muted">2 days ago</small>
                                        </div>
                                        <div class="activity-item">
                                            <div class="d-flex justify-content-between">
                                                <span>Class Performance Report</span>
                                                <span class="badge bg-success badge-custom">Generated</span>
                                            </div>
                                            <small class="text-muted">3 days ago</small>
                                        </div>

                                    <?php elseif($role == "admin"): ?>
                                        <div class="activity-item">
                                            <div class="d-flex justify-content-between">
                                                <span>System Backup</span>
                                                <span class="badge bg-success badge-custom">Completed</span>
                                            </div>
                                            <small class="text-muted">6 hours ago</small>
                                        </div>
                                        <div class="activity-item">
                                            <div class="d-flex justify-content-between">
                                                <span>New User Registrations</span>
                                                <span class="badge bg-info badge-custom">+5</span>
                                            </div>
                                            <small class="text-muted">Yesterday</small>
                                        </div>
                                        <div class="activity-item">
                                            <div class="d-flex justify-content-between">
                                                <span>Security Update</span>
                                                <span class="badge bg-warning badge-custom">Pending</span>
                                            </div>
                                            <small class="text-muted">2 days ago</small>
                                        </div>
                                        <div class="activity-item">
                                            <div class="d-flex justify-content-between">
                                                <span>Monthly Report</span>
                                                <span class="badge bg-success badge-custom">Generated</span>
                                            </div>
                                            <small class="text-muted">3 days ago</small>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>