@extends('layout.main-template')
@section('linkCSS')
<link href="{{ asset('css/auth/admin-home.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
@endsection
@section('content')
<section class="admin-home">
    <div class="admin-home-wrapper">
        <!-- Title Heading -->
        <div class="title-heading">
            <h1> <span>Admin</span> - Certification Talent Approval </h1>
        </div>
        <!-- End Of Title Heading -->

        <!-- Certification Talent Approval Wrapper -->
        <div class="certification-talent-approval-wrapper">
            <table>
                <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>User Image</th>
                    <th>Certification Status</th>
                    <th>Certification Document</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>

                @foreach($user as $user)
                <tr class="row-content">
                    <td>
                        <h3>{{$user->id}}</h3>
                    </td>
                    <td>
                        <h3>{{$user->name}}</h3>
                    </td>
                    <td>
                        <h3>
                            <div class="user-image-wrapper">
                                @if($user->image == 'no picture')
                                <h2 class="danger">NO PICTURE</h2>
                                @else
                                <div class="picture">
                                    <img src="{{ url('profile/'.$user->image) }}" />
                                </div>
                                @endif
                            </div>
                        </h3>
                    </td>
                    <td>
                        <h3>{{$user->certification_status}}</h3>
                    </td>
                    <td>
                        <div class="certification-document-wrapper">
                            <a href="#">
                                {{$user->certification_document}}
                            </a>
                        </div>

                    </td>
                    <td>
                        <h3>{{$user->role}}</h3>
                    </td>
                    <td>
                        <h3>
                            <a href="/view/edit/{{$user->id}}">Edit</a>
                        </h3>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <!-- Certification Talent Approval Wrapper -->
    </div>

</section>
@endsection