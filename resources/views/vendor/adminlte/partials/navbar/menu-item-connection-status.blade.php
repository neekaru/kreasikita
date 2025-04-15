<li class="nav-item">
    <div class="nav-link">
        <span id="connection-status-badge" class="badge badge-success">Online</span>
    </div>
</li>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const statusBadge = document.getElementById('connection-status-badge');
        
        // Function to update connection status
        function updateConnectionStatus() {
            if (navigator.onLine) {
                statusBadge.className = 'badge badge-success';
                statusBadge.textContent = 'Online';
            } else {
                statusBadge.className = 'badge badge-danger';
                statusBadge.textContent = 'Offline';
            }
        }
        
        // Initial status check
        updateConnectionStatus();
        
        // Listen for online/offline events
        window.addEventListener('online', updateConnectionStatus);
        window.addEventListener('offline', updateConnectionStatus);
    });
</script>