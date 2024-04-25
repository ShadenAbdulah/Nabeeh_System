<div class="inner" ng-view>
</div>
<script type="text/javascript" src="{{asset('please-wait.min.js')}}"></script>
<script type="text/javascript">
    window.loading_screen = window.pleaseWait({
        logo: '{{asset("images/simple logo.svg")}}',
        backgroundColor: '#fff',
        loadingHtml: '<div class="spinner"><div class="cube1"></div><div class="cube2"></div> </div>'
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>

@yield('content')

<script src="{{asset('please-wait.min.js')}}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        window.loading_screen.finish();
    });
</script>
