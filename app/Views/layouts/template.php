<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link href="<?= base_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <?= $this->include('layouts/navbar'); ?>
    <?= $this->renderSection('content'); ?>


    <script src="<?= base_url("assets/js/bootstrap.bundle.min.js") ?>"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".delete-button").click(function() {
                if (confirm("Apakah Anda yakin ingin menghapus item ini?")) {
                    var url = $(this).data("url");
                    $.ajax({
                        url: url,
                        type: "DELETE",
                        success: function(response) {
                            // Handle the success response here, for example, you can reload the page
                            // to reflect the changes.
                            location.reload();
                        },
                        error: function(error) {
                            // Handle errors, e.g., show an error message to the user.
                            console.error("Error:", error);
                        }
                    });
                }
            });
        });
    </script>
    <script>
        setTimeout(function() {
            document.getElementById('myAlert').style.display = 'none';
        }, 3000); // Menghilangkan alert setelah 2 detik (2000 milidetik)
    </script>
</body>

</html>