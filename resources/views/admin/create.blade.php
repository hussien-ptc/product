@extends('layouts.admin')
@section('content')
 <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 m-auto">
                                    <div class="contact-form">
                                        <h1>اضافة منتج جديد</h1>

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach($errors->all as $error)
                                                    <li>{{$error}}</li>
                                                    @endforeach
                                                </ul>

                                            </div>
                                        @endif
                                        <form action="{{url('store')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="name">اسم المنتج</label>
                                                        <input type="text" class="form-control" id="inputFirstName" name="name" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="details">تفاصيل المنتج  </label>
                                                        <input type="textarea" class="form-control" id="inputFirstName" name="details" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="price">سعر المنتج</label>
                                                        <input type="text" class="form-control" id="inputLastName" name="price" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Quantity">كمية المنتج</label>
                                                <input type="text" class="form-control" id="inputEmail" name="Quantity" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="image">صورة المنتج</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>

                                            <input type="submit" class="btn btn-primary" value="اضافة">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>

@endsection
