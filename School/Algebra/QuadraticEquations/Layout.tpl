<!DOCTYPE html>
<html lang="en">
    <head>
        <script><?php echo file_get_contents(ROOT_DIR . '/vendor/technomage-liloi/rune-framework/Frontside/Library/Jquery.min.js'); ?></script>
        <script><?php echo file_get_contents(ROOT_DIR . '/vendor/technomage-liloi/rune-framework/Frontside/Library/Underscore.min.js'); ?></script>
        <script><?php echo file_get_contents(ROOT_DIR . '/vendor/technomage-liloi/rune-framework/Frontside/Library/Backbone.min.js'); ?></script>
        <script><?php echo file_get_contents(ROOT_DIR . '/vendor/technomage-liloi/rune-api/Client/API.js'); ?></script>

        <style><?php echo file_get_contents(ROOT_DIR . '/vendor/twbs/bootstrap/dist/css/bootstrap.min.css'); ?></style>
        <script><?php echo file_get_contents(ROOT_DIR . '/vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js'); ?></script>
        <script><?php echo file_get_contents(ROOT_DIR . '/vendor/technomage-liloi/stylo/Source/Stylo.js'); ?></script>

        <script>
            let MiniApplicationSolve = function ()
            {
                const jq_block = $('#algorithm');
                API.request('Sketches.School.Algebra.QuadraticEquations.Solve', {
                    a: jq_block.find('[name=a]').val(),
                    b: jq_block.find('[name=b]').val(),
                    c: jq_block.find('[name=c]').val()
                }, function (data) {
                    $('#solution').html(data.render);
                }, function () {

                });
            }
        </script>

        <title>Quadratic Equations</title>
    </head>
    <body>
        <div id="page">
            <style>
                h1,h3,h6,#algorithm,#signum
                {
                    text-align: center;
                }

                a
                {
                    color: red;
                    text-decoration: none;
                }

                #solution
                {
                    color: red;
                }

                .link
                {
                    border: red 2px solid;
                    padding: 1px;
                }

                img
                {
                    width: 100px;
                }
            </style>
            <div id="signum"><img src="/Signum.png"></div>
            <h1>Quadratic equations</h1>
            <h3>School algorithm</h3>
            <hr/>
            <div id="algorithm">
                Ax^2+Bx+C=0<br/>
                A = <input type="text" name="a" value="1"><br/>
                B = <input type="text" name="b" value="-5"><br/>
                C = <input type="text" name="c" value="6"><br/><br/>
                <a href="javascript:void(0)" onclick="MiniApplicationSolve();" class="link">Solve</a>
                <div id="solution"></div>
            </div>
            <hr/>
            <h6>Anton Moskalenko a.k.a. Technomage Lilôi</h6>
        </div>
    </body>
</html>