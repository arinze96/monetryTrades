<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    @include('include.a_css')
    <!-- Page Title  -->
    <title>{{ config("app.name") }} Admin</title>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('include.a_sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('include.a_topbar')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Active Children Account Funds Deposit Request</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>This is the list of active Children Account Funds Deposit Request from customers.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-md-12">
                                            {{-- table start --}}
                                            <div class="card card-bordered card-preview">
                                                <div class="card-inner">
                                                    <div class="table-responsive">
                                                        @if (!$child->isEmpty())
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Childs Fullname</th>
                                                                    <th scope="col">Age</th>
                                                                    <th scope="col">Currency</th>
                                                                    <th scope="col">Amount</th>
                                                                    <th scope="col">Duration</th>
                                                                    <th scope="col">Status</th>
                                                                    <th scope="col">Date</th>
                                                                    <th scope="col">Action</th>
                                                                    <th scope="col">Action</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($child as $key => $children)
                                                                <tr>
                                                                    <th scope="row">{{ $key + 1 }}</th>
                                                                    <td>{{ ucwords($children->childs_fullname) }}</td>
                                                                    <td>{{ ucwords($children->childs_age) }}</td>
                                                                    <td>{{ ucwords($children->currency) }}</td>
                                                                    <td>{{ $children->amount }}</td>
                                                                    <td>{{ $children->duration }}</td>
                                                                    <td>{{ $children->status == 0 ? 'unapproved' : 'Approved' }}</td>
                                                                    <td>{{ date("d M,Y",strtotime($children->created_at)) }}</td>
                                                                    <td>
                                                                        <a href="{{ route("admin.child.view",["edit",$children->id]) }}"><em class="icon ni ni-edit"></em></a>
                                                                        <a class="delete_data" href="{{ route("admin.child.view",["delete",$retire->id]) }}" data-type="request" ><em  class="icon ni ni-trash-fill "></em></a>
                                                                        {{-- <a href="{{ route("admin.charity.view",["view",$charity->id]) }}"><em class="icon ni ni-eye-fill"></em></a> --}}
                                                                    </td>
                                                                    <td class="tb-tnx-action">
                                                                      <div class="dropdown">
                                                                          <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                              <ul class="link-list-plain">
                                                                                  
                                                                                  <li><a data-action="approve" data-type="request"  class="decline_approve" href="{{ route("admin.child.view",["approve",$children->id]) }}">Approve</a></li>
                                                                                  <li><a  data-action="decline" data-type="request" class="decline_approve" href="{{ route("admin.child.view",["decline",$children->id]) }}">Decline</a></li>
                                                                                  
                                                                              </ul>
                                                                          </div>
                                                                      </div>
                                                                  </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        @else
                                                            <h4 class="text-center">No Active Children Account deposit requests at the moment</h4>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div><!-- .card-preview -->
                                            {{-- table ends --}}
                                        </div>
                                    </div><!-- .row -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('include.a_footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    @include('include.a_scripts')
</body>

</html>