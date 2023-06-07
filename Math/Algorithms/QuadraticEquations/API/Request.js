let MiniApplicationShow = function ()
{
    API.request('Mini.Application.Show', {

    }, function (data) {
        $('#page').html(data.render);
    }, function () {

    });
}

let MiniApplicationSolve = function ()
{
    API.request('Mini.Application.Solve', {

    }, function (data) {
        $('#page').html(data.render);
    }, function () {

    });
}