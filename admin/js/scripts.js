document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("menu-toggle").addEventListener("click", function(e) {
        e.preventDefault();
        document.getElementById("wrapper").classList.toggle("toggled");
    });
});

   
        $(document).ready(function() {
            $('.status-select').on('change', function() {
                var complaintId = $(this).data('id');
                var status = $(this).val();
                
                $.ajax({
                    url: 'update_status.php',
                    type: 'POST',
                    data: {
                        complaint_id: complaintId,
                        status: status
                    },
                    success: function(response) {
                        // Update the status in the table
                        $('#status-' + complaintId).text(status);
                        alert(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
  