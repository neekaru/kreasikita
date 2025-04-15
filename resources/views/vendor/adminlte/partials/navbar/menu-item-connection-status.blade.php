<li class="nav-item">
    <div class="nav-link" style="display: flex; align-items: center; justify-content: center;">
        <span id="connection-status-badge" class="badge badge-success badge-md" style="font-size: 1.2rem; padding: 8px 12px;">Online</span>
    </div>
</li>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const statusBadge = document.getElementById('connection-status-badge');
        
        // Function to update connection status
        function updateConnectionStatus() {
            if (navigator.onLine) {
                statusBadge.className = 'badge badge-success badge-md';
                statusBadge.textContent = 'Online';
            } else {
                statusBadge.className = 'badge badge-danger badge-md';
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