<?php
include("header.php")
?>
       

            <!-- Dashboard Content -->
            <div class="container my-4">
                <h2 class="mb-4">Welcome, Admin</h2>

                <!-- Dashboard Cards -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="dashboard-card p-3">
                            <h5>Total Furniture</h5>
                            <h3>150</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dashboard-card p-3">
                            <h5>Total Categories</h5>
                            <h3>12</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dashboard-card p-3">
                            <h5>Total Orders</h5>
                            <h3>320</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dashboard-card p-3">
                            <h5>Total Users</h5>
                            <h3>78</h3>
                        </div>
                    </div>
                </div>

                <!-- Charts and Tables -->
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="dashboard-card p-3">
                            <h5>Monthly Sales</h5>
                            <canvas id="salesChart"></canvas>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="dashboard-card p-3">
                            <h5>Recent Orders</h5>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Customer</th>
                                        <th>Product</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>John Doe</td>
                                        <td>Wooden Chair</td>
                                        <td>Shipped</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jane Smith</td>
                                        <td>Office Desk</td>
                                        <td>Pending</td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    

    
        <?php
include("footer.php")
?>