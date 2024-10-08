    
@extends('backend.layout.app')

@section('content')

<!-- main page content body part -->
<div id="main-content">
    <div class="container-fluid">
        @if(session()->has('message'))
        <div class="alert alert-success" 
            style="position: absolute;
            z-index: 99999;
            top: 10%;
            left: 30%;
            width: 50%;">
        {{ session()->get('message') }}
        </div>
        @endif
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>Project Board</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>                            
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Project Board</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="d-flex flex-row-reverse">
                        <div class="page_action">
                            <a href="javascript:void(0);" data-toggle="modal" class="btn btn-primary" data-target="#createmodal" ><i class="fa fa-add">أضف تطبيق جديد</i></a>
                        </div>
                        <div class="p-2 d-flex">
                        </div>
                    </div>
                </div>
            </div>    
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>التطبيقات</h2>
                        </div>
                        <div class="body project_report">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom mb-0">
                                    <thead>
                                        <tr>                                            
                                            <th>اسم التطبيق</th>
                                            <th>رقم اللاعب </th>
                                            <th>السعر</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($apps as $key => $app)
                                        <tr>
                                            <td class="project-title">
                                                <h6>{{$app->name}}</h6>
                                            </td>
                                            <td>{{$app->player_no}}</td>
                                            <td>{{$app->price}}</td>
                                            <td class="project-actions">
                                                <a href="#defaultModal" data-toggle="modal" data-target="#defaultModal">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#editModal{{$app->id}}" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                                <a  href="javascript:void(0);" data-toggle="modal" data-target="#deleteModal{{$app->id}}" class="btn btn-sm btn-outline-danger" ><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-------------create--------->
<div class="modal fade" id="createmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabelcreate">إضافة تطبيق جديد</h4>
            </div>
            <div class="modal-body"> 
                <form method="Post" action="{{ route('app.store') }}" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" required placeholder="الاسم"  name="name" aria-label="name" aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" required placeholder="رقم اللاعب"  name="player_no" aria-label="player_no" aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" required placeholder="السعر"  name="price" aria-label="price" aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">تحميل</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image">
                            <label class="custom-file-label" for="inputGroupFile01">اختر الصورة</label>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="modal-footer">   
                        <button type="submit" class="btn btn-primary">حفظ</button>
                        <a href="#" class="btn btn-secondary">الغاء الأمر</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------delete -------------->
@foreach ($apps as $key => $app)
<div class="modal fade" id="deleteModal{{$app->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabeldelete">هل أنت بالتاكيد تريد الحذف </h4>
            </div>
            <div class="modal-body"> 
            <form action="{{ route('app.destroy', $app->id) }}" method="POST">
               @csrf
               @method('DELETE')
               <input type="hidden" name="_token" value="{{ csrf_token() }}" />
               <div class="modal-footer">
                   <button type="submit" class="btn btn-primary">نعم</button>
                   <a href="#" class="btn btn-secondary">الغاء الأمر</a>
               </div>
            </form>
        </div>
    </div>
</div>
@endforeach

<!--------------edit -------------->
@foreach ($apps as $key => $app)
<div class="modal fade" id="editModal{{$app->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabeledit">تعديل معلومات تطبيق </h4>
            </div>
            <div class="modal-body"> 
                <form method="POST" action="{{ route('app.update', ['app' => $app->id]) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="{{$app->name}}" required placeholder="الاسم" name="name" aria-label="name" aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="{{$app->player_no}}" required placeholder="رقم اللاعب" name="player_no" aria-label="player_no" aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="{{$app->price}}" required placeholder="السعر" name="price" aria-label="price" aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">تحميل</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image">
                            <label class="custom-file-label" for="inputGroupFile01">اختر الصورة </label>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                               
                    <div class="modal-footer"> 
                        <button type="submit" class="btn btn-primary">حفظ</button>
                        <a href="#" class="btn btn-secondary">الغاء الأمر</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach


@endsection