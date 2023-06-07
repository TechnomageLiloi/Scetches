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
    const jq_block = $('#algorithm');
    API.request('Mini.Application.Solve', {
        a: jq_block.find('[name=a]').val(),
        b: jq_block.find('[name=b]').val(),
        c: jq_block.find('[name=c]').val()
    }, function (data) {
        $('#solution').html(data.render);
    }, function () {

    });
}