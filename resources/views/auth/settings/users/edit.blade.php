@extends('auth.layouts.app')

@section('content')

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

    .alert-message{
        z-index: 999;
        position: absolute;
        right: 35px;
    }
</style>
    
@endpush

@if (session('error'))

<div class="alert-message">
    <div class="alert alert-danger alert-dismissible show fade">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger alert-dismissible show fade">
        {{ $error }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endforeach
</div>

@endif
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
                        <?= $BreadCrumbs ?>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    
    <section class="section">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit User</h4>
                </div>
                <div class="card-body">
                    <p>
                        Edit a user account with access to the system.
                    </p>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{route('update user',['id'=>$user->id])}}" method="POST">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="first-name-horizontal-icon">Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Name"
                                                    id="first-name-horizontal-icon"
                                                    value="{{ $user->name }}"
                                                    name="name"
                                                    required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="first-name-horizontal-icon">Role</label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="role" class="choices form-select" id="selectRole">
                                                <option {{ $user->role=="USER"?"selected":"" }}  value="USER">USER</option>
                                                <option {{ $user->role=="ADMIN"?"selected":"" }} value="ADMIN">ADMIN</option>
                                                <option {{ $user->role=="LOGISTIC"?"selected":"" }} value="LOGISTIC">LOGISTIC</option>
                                                <option {{ $user->role=="MARKETING"?"selected":"" }} value="MARKETING">MARKETING</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="contact-info-horizontal-icon">Mobile</label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Mobile"
                                                name="phone_number" 
                                                id="contact-info-horizontal-icon"
                                                value="{{ $user->phone_number }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="email-horizontal-icon">Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="position-relative">
                                                <input type="email" class="form-control" 
                                                    placeholder="Email"
                                                    name="email"
                                                    id="email-horizontal-icon" 
                                                    autocomplete="off"
                                                    value="{{ $user->email }}"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <label for="password-horizontal-icon">Password</label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="position-relative">
                                                <input type="password" class="form-control" 
                                                    placeholder="Password" 
                                                    id="userPassword" 
                                                    autocomplete="off"
                                                    disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 offset-md-4">
                                        <div class='form-check'>
                                            <div class="checkbox">
                                                <input type="checkbox" id="showPassword" class='form-check-input'>
                                                <label for="showPassword">Show Password</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" name="change_password" id="changePassword" class='form-check-input'>
                                                <label for="changePassword">I Want To Change Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="offset-md-4 d-flex justify-content-start">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('scripts')
<script>
    $(document).ready(function(){

        $('#selectRole')

        $('#settingMenu').addClass('active');
        $('#settingMenu .submenu').removeClass('submenu-closed').addClass('submenu-open');
        $('#settingMenu #usersMenu').addClass('active');

        $('#showPassword').on('click',function(){
            if(this.checked){
                $('#userPassword').attr('type','text')
            }else{
                $('#userPassword').attr('type','password')
            }
        })

        $('#changePassword').on('click',function(){
            if(this.checked){
                $('#userPassword').attr('disabled',false)
                $('#userPassword').attr('required',true)
            }else{
                $('#userPassword').attr('disabled',true)
                $('#userPassword').attr('required',false)
            }
        })

    })
</script>
@endpush