@extends('layouts.admin')
@section('content')
         <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Publisher List</h4>
                                    <p class="category">Here is a book publisher list</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Name</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $key => $value)
                                            <tr>
                                                <td>{{$value['name']}}</td>
                                                <td><a class="btn btn-warning btn-sm" href="{{route('admin.publisher.edit',['id'=>$value['id']])}}">Edit</a></td>
                                                <td><a class="btn btn-danger btn-sm" href="{{route('admin.publisher.del',['id'=>$value['id']])}}">Delete</a></td>
                                            </tr>
                                            @endforeach
                                          
                                        </tbody>
                                    </table>
                                    {{$data->links()}}
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
@endsection