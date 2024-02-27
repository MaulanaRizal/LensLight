@extends('auth.layouts.app')

@push('styles')
<style>
    #dataTable th:nth-child(4), #dataTable td:nth-child(4) {
    min-width: 100px !important; /* Adjust the value based on your content */
    width: 100px !important;
    }

    .btn-create{
        float: right;
        margin-top: -10px;
    }

</style>
    
@endpush

@section('content')
    <div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Users</h3>
                <p class="text-subtitle text-muted">Here you can access and control your user information.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="index.html">Setting</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Users</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Users Table</h4>
            </div>
            <div class="card-body">
                <a href="#" class="btn btn-primary md-2 float-end btn-create" >Create User</a>
                <p>
                    This user management page allows you to view, edit, and delete your user information.
                </p>

                
                <table class="table table-bordered" id="dataTable">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>

            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>

    $(document).ready(function() {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('getuserdata') }}", // Your controller route
            columns: [
                { data: 'id', visible:false, searchable: false },
                { data: 'name' },
                { data: 'phone_number' },
                { data: 'email' },
                { data: 'role' },
                // ... other columns
                { data: 'action', orderable: false, searchable: false },
            ],
            order: [[ 0, "desc" ]],
        });
    });

</script>
@endpush