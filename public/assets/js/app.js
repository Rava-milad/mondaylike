


(function () {
    document.addEventListener("DOMContentLoaded", function (event) {

        const showNavbar = (toggleId, navId, bodyId, headerId) => {
            const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)

            // Validate that all variables exist
            if (toggle && nav && bodypd && headerpd) {
                toggle.addEventListener('click', () => {
                    // show navbar
                    nav.classList.toggle('show')
                    // change icon
                    toggle.classList.toggle('bx-x')
                    // add padding to body
                    bodypd.classList.toggle('body-pd')
                    // add padding to header
                    headerpd.classList.toggle('body-pd')
                })
            }
        }

        showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

        /*===== LINK ACTIVE =====*/
        const linkColor = document.querySelectorAll('.nav_link')

        function colorLink() {
            if (linkColor) {
                linkColor.forEach(l => l.classList.remove('active'))
                this.classList.add('active')
            }
        }
        linkColor.forEach(l => l.addEventListener('click', colorLink))

        // Your code to run since DOM is loaded and ready
    });

    $(document).ready(function(){
        var making = $('#making');
        var some = $('#some');
        var group = '<div class="container mt-5">' +
                        '<div class="row card">' +
                        '<h1 class="text-center card-title mt-2"><b>Making Tasks</b></h1>' +
                            '<div class="col-md-12">' +
                                '<div class="card-body">' +
                                    '<form action="">'+
                                        '<div class="container">'+
                                            '<div class="row">'+
                                                '<div class="col-md-4">' +
                                                    '<div class="form-group">' +
                                                        '<label for="" class="my-2"><b>Task Name :</b> </label>' +
                                                        '<input class="form-control" type="text" placeholder="write your task name..." name="group_title">'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">' +
                                                        '<label for="" class="my-2"><b>Number Of Partners :</b></label>'+
                                                        '<select class="form-control" name="numbers" id="">' +
                                                            '<option>1</option>' +
                                                            '<option>2</option>' +
                                                            '<option>3</option>' +
                                                            '<option>4</option>' +
                                                            '<option>5</option>' +
                                                        '</select>' +
                                                    '</div>' +
                                                '</div>'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="my-2" for=""><b>Date :</b></label>'+
                                                        '<input class="form-control" name="date" type="date">'+
                                                    '</div>'+   
                                                '</div>'+
                                                
                                            '</div>'+
                                        '</div>'+
                                        '<div class="form-group text-center">'+
                                            '<button class="mt-3 text-center btn btn-block btn-outline-primary">Create</button>'+
                                        '</div>'+
                                    '</form>'+
                                '</div>' +                       
                            '</div>' +
                        '</div>' +
                    '</div>';
        making.on('click' , function(){
            some.append(group);
        });
    });
}());
