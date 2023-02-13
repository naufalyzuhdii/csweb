@extends('layout.main-template')
@section('linkCSS')
<link href="{{ asset('css/admin/validation-withdraw/view-validation-withdraw.css') }}" rel="stylesheet">
@endsection
@section('content')
<section class="validation-course">
    <div class="validation-course-wrapper">
        <!-- Title Heading -->
        <div class="title-heading">
            <h1> <span>Admin</span> - Validation Course </h1>
        </div>
        <!-- End Of Title Heading -->

        @if (session('message'))
        <div class="success">
            {{ session('message') }}
        </div>
        @endif

        <div class="validation-skills-content-wrapper">
            <table>
                <tr>
                    <th>UserID</th>
                    <th>Name</th>
                    <th>Balance</th>
                    <th>Withdraw</th>
                    <th>Withdraw Status</th>
                    <th>Edit</th>
                </tr>

                @foreach($user as $user)
                <form action="/update_user" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <tr class="row-content">
                        <td>
                            <h3>
                                <input type="text" name="user_id" value="{{$user->id}}" id="id_input" hidden>
                                <h3>{{$user->id}}</h3>
                                @error('user_id')
                                <div class="danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </h3>
                        </td>
                        <td>
                            <h3>
                                <input type="text" name="name" value="" id="id_input" hidden>
                                <h3>{{$user->name}}</h3>
                                @error('name')
                                <div class="danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </h3>
                        </td>
                        <td>
                            <h3>
                                <input type="text" name="balance" value="{{$user->balance}}" id="id_input">
                                @error('balance')
                                <div class="danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </h3>
                        </td>
                        <td>
                            <h3>
                                <input type="text" name="withdraw" value="{{$user->withdraw}}" id="title_input">
                                @error('withdraw')
                                <div class="danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </h3>
                        </td>
                        <td>
                            <h3>
                                <select name="withdraw_status" id="">
                                    <option disabled hidden>$user->withdraw_status</option>
                                    <option value="1">Waiting result</option>
                                    <option value="2">Approved</option>
                                    <option value="3">Rejected</option>
                                </select>
                                <!-- <input type="text" name="withdraw_status" value="{{$user->withdraw_status}}"
                                    id="title_input" hidden> -->
                                @error('withdraw_status')
                                <div class="danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </h3>
                        </td>
                        <td>
                            <h3>
                                <button type="submit">Update</button>
                            </h3>
                            <h3>
                                <!-- <a href="/delete-course/{{$user->id}}">Delete</a> -->
                            </h3>
                        </td>
                    </tr>
                </form>
                @endforeach

            </table>
        </div>
    </div>

</section>

@endsection