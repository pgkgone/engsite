document.addEventListener("DOMContentLoaded", function(event) {
    document.getElementById('checkButton').onclick = function (e) {
        var name="selectItem"
        var arr=[]
        for(var i=0;i<6;i++){
            var elem = document.getElementById(name+i);
            var answ=elem.options[elem.selectedIndex].text;
            arr.push(answ);
        }

        var ajaxurl = 'checkAnswers.php',
            data =  {'title': 0,'part':document.getElementsByClassName('main-text-only-one')[0].id,'arr':arr};
        $.post(ajaxurl, data, function (response) {
            if(response==8){
                swal("Good job!", "Your Score is 8/8!", "success");
            }else if(response==0){
                swal("Oops!", "Your Score is 0/8!", "error");
            }else{
                swal("Your Score: "+response+"/8!", "", "info");
            }
        });
        e.stopPropagation();
    }
});
