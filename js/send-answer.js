document.addEventListener("DOMContentLoaded", function(event) {
    document.getElementById('checkButton').onclick = function (e) {
        var pater=document.getElementsByClassName('main-text-only-one')[0].id;
        var title =  parseInt(pater/10);
        var part =pater%10;

        var arr = []
        if(part==0) {
            var name = "selectItem"
            for (var i = 0; i < 6; i++) {
                var elem = document.getElementById(name + i);
                var answ = elem.options[elem.selectedIndex].text;
                arr.push(answ);
            }
        }

        var ajaxurl = 'checkAnswers.php',
            data =  {'title': title,'part':part,'arr':arr};
        $.post(ajaxurl, data, function (response) {
            if(response==6){
                swal("Good job!", "Your Score is 6/6!", "success");
            }else if(response==0){
                swal("Oops!", "Your Score is 0/6!", "error");
            }else{
                swal("Your Score: "+response+"/6!", "", "info");
            }
        });
        e.stopPropagation();
    }
});
