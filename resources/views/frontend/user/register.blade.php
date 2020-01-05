@extends('layouts.master')

@section('title')
    register
    @endsection
@section('content')
    <div class="login-account section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <form action="{{route('backend.user.create')}}" class="create-account-form" method="post">
                        <h2 class="heading-title">
                            CREATE AN ACCOUNT
                        </h2>
                        <p class="form-row">
                            <input type="text" placeholder="name" name="name">
                        </p>
                        <p class="form-row">
                            <input type="email" placeholder="Email address" name="email">
                        </p>
                        <p class="form-row">
                            <input type="text" placeholder="Address" name="address">
                        </p>
                        <p class="form-row">
                            <input type="text" placeholder="Phone number" name="phone">
                        </p>
                        <div class="submit">
                            <button name="submitcreate" id="submitcreate" type="submit" class="btn-default">
                                    <span>
                                        <i class="fa fa-user left"></i>
                                        Create an account
                                    </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
