@extends('layouts.app')

@section('content')


    <div class="panel panel-primary ">
    <div class="panel-heading">Customers</div>
    <div class="panel-body">

    <div class="body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                    <thead>
                        <tr>
                            <th> Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Mobile number</th>
                            <th>Action</th>
                        </tr>
                    </thead>    

    <tbody>
    @foreach($customers as $customer)
    <tr>
                            <td>{{$customer->first_name}} {{$customer->last_name}}</td>
                            <td>{{$customer->gender}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->mobile_number}}</td>
                            <td>
                            <div class="btn-group" role="group">
                                        <button type="button" class="btn bg-blue waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Manage Account
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            
                                            @if($customer->status!="verified" )
                                            <li> 
                                              <a class="waves-effect waves-block" href="/customer/update/verify/{{$customer->id}}">
                                                Verify
                                              </a>
                                            </li>
                                           @endif
                                            @if($customer->status=="verified")
                                            <li> 
                                              <a class="waves-effect waves-block" href="/customer/update/approved/{{$customer->id}}">
                                                View details
                                              </a>
                                            </li>
                                           @endif
                                          

                                            

                                        </ul>
                                    </div>
                                </td>
                           
    @endforeach
    </tbody>
                     <tfoot>
                        <tr>
                            <th> Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Mobile number</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            </div>

     </div>
    </div>


@endsection