</div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Example Chart.js for Sales
        const ctx = document.getElementById('salesChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Sales',
                    data: [1500, 2000, 1800, 2200, 3000, 2500],
                    backgroundColor: 'rgba(128, 0, 0, 0.2)',
                    borderColor: 'rgba(128, 0, 0, 1)',
                    borderWidth: 2
                }]
            }
        });
    </script>
</body>

</html>