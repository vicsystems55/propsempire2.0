        <!-- JAVASCRIPT -->
        <script src="{{ URL::asset('libs/jquery/jquery.min.js')}}"></script>
        <script src="{{ URL::asset('libs/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{ URL::asset('libs/metismenu/metismenu.min.js')}}"></script>
        <script src="{{ URL::asset('libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ URL::asset('libs/node-waves/node-waves.min.js')}}"></script>
        <!-- <script src="{{ URL::asset('/libs/sweetalert2/sweetalert2.min.js')}}"></script> -->

        @yield('script')

        <!-- App js -->
        <script src="{{ URL::asset('js/app.min.js')}}"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />


        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
       
        <script>

                        
                
                function fetchdata(){
                        $.ajax({
                            url: '/check_notifications',
                            type: 'get',
                        success: function(response){
                        // Perform operation on the return value
                        //     alert(response);
                        //     Swal.fire(
                        //         'Good job!',
                        //         'You clicked the button!',
                        //         'success'
                        //         )
                        var audio = new Audio("/sound/notify.mp3");
                        audio.play();
                        Command: toastr["info"]("Check Message", "New Request")

                                toastr.options = {
                                "closeButton": true,
                                "debug": false,
                                "newestOnTop": false,
                                "progressBar": false,
                                "positionClass": "toast-bottom-right",
                                "preventDuplicates": true,
                                "onclick": null,
                                "showDuration": "3000",
                                "hideDuration": "1000",
                                "timeOut": "5000",
                                "extendedTimeOut": "1000",
                                "showEasing": "swing",
                                "hideEasing": "linear",
                                "showMethod": "fadeIn",
                                "hideMethod": "fadeOut"
                                }


                        }
                        });

                        console.log('hi from here')
                    }

                    $(document).ready(function(){
                    setInterval(fetchdata,8000);
                    });


                </script>

        @yield('script-bottom')