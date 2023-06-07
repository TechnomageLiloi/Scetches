<!DOCTYPE html>
<html lang="en">
    <head>
        <script><?php echo file_get_contents(ROOT_DIR . '/vendor/technomage-liloi/rune-framework/Frontside/Library/Jquery.min.js'); ?></script>
        <script><?php echo file_get_contents(ROOT_DIR . '/vendor/technomage-liloi/rune-framework/Frontside/Library/Underscore.min.js'); ?></script>
        <script><?php echo file_get_contents(ROOT_DIR . '/vendor/technomage-liloi/rune-framework/Frontside/Library/Backbone.min.js'); ?></script>
        <script><?php echo file_get_contents(ROOT_DIR . '/vendor/technomage-liloi/rune-api/Client/API.js'); ?></script>

        <link href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="/vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

        <script src="/vendor/technomage-liloi/stylo/Source/Stylo.js"></script>

        <title>Application</title>
        <script>
            let getShow = function ()
            {
                API.request('Mini.Application.Show', {

                }, function (data) {
                    $('#page').html(data.render);
                }, function () {

                });
            }
        </script>
    </head>
    <body>
        <div id="page">

        </div>
        <script>
            getShow();
        </script>
    </body>
</html>