document.addEventListener("DOMContentLoaded", function(event) {
    document.getElementById('checkButton').onclick = function (e) {
        var pater=document.getElementsByClassName('main-text-only-one')[0].id;
        var title =pater[0];
        var part =pater[1];
        var maxi=[6,7,7];
        var arr = [];
        if(part==0) {
            var name = "selectItem";
            for (var i = 0; i < 6; i++) {
                var elem = document.getElementById(name + i);
                var answ = elem.options[elem.selectedIndex].text;
                arr.push(answ);
            }
        }
        if(part==1){
            var name="inputItem";
            for (var i = 1; i < 7; i++) {
                var elem = document.getElementById(name + i);
                var answ = elem.value;
                arr.push(answ);
            }
        }
        if(part==2){
            var name="radioInput";
            for (var i = 0; i < 7; i++) {
                var added = 0;
                var elem = document.getElementsByName(name + i);
                for(var j = 0; j < 3; j++)
                {
                    if(elem[j].checked)
                    {
                        arr.push(elem[j].value);
                        added = 1;
                    }
                }
                if(added == 0)
                {
                    arr.push("5");
                }
            }
        }
        var ajaxurl = 'checkAnswers.php',
            data =  {'title': title,'part':part,'arr':arr};
        $.post(ajaxurl, data, function (response) {
            if(response==maxi[part]){
                swal("Good job!", "Your Score is "+response+"/"+maxi[part]+"!", "success");
            }else if(response==0){
                swal("Oops!", "Your Score is "+response+"/"+maxi[part]+"!", "error");
            }else{
                swal("Your Score: "+response+"/"+maxi[part]+"!", "", "info");
            }
        });
        e.stopPropagation();
    }
});
