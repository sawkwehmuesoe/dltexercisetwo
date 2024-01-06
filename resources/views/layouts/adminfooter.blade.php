{{-- Start Footer Section  --}}
<footer class="mt-5">
    <div class="row">
        <div class="col-lg-10 col-md-8 ms-auto">
            <div class="row border-top pt-3">

                <div class="col-lg-6 text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item me-2">
                            <a href="#" class="text-dark">Data Land</a>
                        </li>
                        <li class="list-inline-item me-2">
                            <a href="#" class="text-dark">About</a>
                        </li>
                        <li class="list-inline-item me-2">
                            <a href="#" class="text-dark">Contact</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>
{{-- End Footer Section  --}}

{{-- Start Right Navbar  --}}
<div class="right-panels">
    <h6>Custom your template</h6>
    <p class="small">Hifi!! here you can change your theme</p>

    <hr/>

    <div class="themecolors">
        <a href="javascript:void(0);"><i class="fas fa-square text-primary"></i></a>
        <a href="javascript:void(0);"><i class="fas fa-square text-secondary"></i></a>
        <a href="javascript:void(0);"><i class="fas fa-square text-info"></i></a>
        <a href="javascript:void(0);"><i class="fas fa-square text-success"></i></a>
        <a href="javascript:void(0);"><i class="fas fa-square text-warning"></i></a>
        <a href="javascript:void(0);"><i class="fas fa-square text-danger"></i></a>
        <a href="javascript:void(0);"><i class="fas fa-square text-muted"></i></a>
        <a href="javascript:void(0);"><i class="fas fa-square text-white"></i></a>
        <a href="javascript:void(0);"><i class="fas fa-square text-dark"></i></a>
    </div>
</div>

		<!--bootstrap css1 js1-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

        <!--jquery js1-->
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" type="text/javascript"></script>
        
        <!-- juqery ui js1 -->
        <script src="{{asset('assets/libs/jquery-ui-1.13.2.custom/jquery-ui.min.js')}}" type="text/javascript"></script>
        
        <!-- google chart  -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        
        <!-- Chart Js 1 -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        
        <!--custom js 1-->
        <script src="{{asset('assets/dist/js/app.js')}}" type="text/javascript"></script>
        
        <script type="text/javascript" src="path/to/raphael.min.js"></script>
        <script type="text/javascript" src="path/to/justgage.js"></script>
        
        @yield('scripts')        
    </body>
</html>
        
{{-- End Right Navbar  --}}