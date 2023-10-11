var Sketches = {
    menu: function ()
    {
        API.request('Sketches.Menu', {

        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    }
};