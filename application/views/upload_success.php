<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Success</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#successModal').modal('show');
        });

        function redirectToResult() {
            window.location.href = '<?php echo base_url('registration_result'); ?>';
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Upload Success</h1>
        <ul>
            <?php foreach ($upload_data as $file): ?>
                <?php foreach ($file as $item => $value): ?>
                <li><?php echo $item; ?>: <?php echo $value; ?></li>
                <?php endforeach; ?>
                <hr>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sistem Pendaftaran Sekolah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Upload berhasil!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="redirectToResult()">OK</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
