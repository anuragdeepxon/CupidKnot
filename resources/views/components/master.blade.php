    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>

    <!-- Metas -->
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Anurag Deep | https://anuragdeep.com">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="asd" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('images/logo.png') }}" />

    @stack('css')
    <!-- Main Stylesheet -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-multiselect-widget/2.0.2/jquery.multiselect.css" integrity="sha512-5/ZmFY3G32gOBpmU27viayZuf8M2eCcATMNr76kRTF7DdpKm5UGpehrbbq0wbAZ8AIFuPg19RulkOpJ1jw4LLw==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    @stack('scripts')
    <!-- Javascripts -->
    <script src="{{ URL::asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-multiselect-widget/2.0.2/jquery.multiselect.min.js" integrity="sha512-QqGrzYzEBhkUfxEMyo2EFPjhJakTgqAbyGdrwEuGIsrlsG9lwNKace3kRLpVF36kin/BdsBmJLeqIO/TtVZJ+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-multiselect-widget/2.0.2/jquery.multiselect.filter.js" integrity="sha512-08DBcB3Mi0q6gcf+Gs3dJ1ALVz9pr97jLpSUN/ypSetQUclFq+hCTm76CfCIw5VO3nky9KfYCngCxOVEbcGOPw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.jqueryui.min.js"></script>


    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name=asd]').attr('content')
            }
        });
    </script>
