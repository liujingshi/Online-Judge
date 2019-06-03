layui.use('element', function(){
    var element = layui.element;

});

function exit() {
    $.post('../api/adminApi.php?order=exit', {}, function (data) {
        if (data.indexOf('yes') >= 0) {
            window.location.href="./login.php";
        }
    })
}

function addProblem() {
    $('#fra').attr('src', './addProblem.php');
}

function problemList() {
    $('#fra').attr('src', './problemList.php');
}