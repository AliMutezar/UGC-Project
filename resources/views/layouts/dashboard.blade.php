<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @include('includes.admin.style')
    <link rel="icon" href="frontend/img/logo/logo_ugc.jpeg" type="image/gif">
</head>
<body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            @include('includes.admin.sidebar')    


            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
    
                <!-- Main Content -->
                <div id="content">
                    
                    @include('includes.admin.navbar')

                    @yield('content')
                    
                </div>
                <!-- End of Main Content -->
    
                @include('includes.admin.footer')
    
            </div>
            <!-- End of Content Wrapper -->
    
        </div>
        <!-- End of Page Wrapper -->
    
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <form action="{{ url('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    

    @include('includes.admin.script')

    <script>
        $('#tableShipment').DataTable({
            scrollX: true,
            processing: true,
            serverSide: true,
            ajax: '{!! route('admin.shipments.index') !!}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'marking_number', name: 'marking_number'},
                {data: 'service', name: 'service'},
                {data: 'shipper', name: 'shipper'},
                {data: 'consignee', name: 'consignee'},
                {data: 'volume', name: 'volume'},
                {data: 'origin', name: 'origin'},
                {data: 'pickup_date', name: 'pickup_date'},
                {data: 'delivery_date', name: 'delivery_date'},
                {data: 'actual_delivered_date', name: 'actual_delivered_date'},
                {data: 'dimension', name: 'dimension'},
                {data: 'weight', name: 'weight'},
                {data: 'destination', name: 'destination'},
                {data: 'status', name: 'status'},
                {data: 'note', name: 'note'},
                {data: 'updated_at', name: 'updated_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    </script>
</body>
</html>