(function(){

    $(document).ready(function(){
        var test = $('#test');

        test.on('click' , function(){
            $('#main').load('/test');
        });
    });


}());