    
    @extends('backend.layout.app')



@section('content')
    

    <!-- mani page content body part -->
    <div id="main-content">
        <div class="container-fluid">
        @if(session()->has('message'))
    <div class="alert alert-success" style="position: absolute;
    z-index: 99999;
    top: 10%;
    left: 30%;
    width: 50%;">
        {{session()->get('message') }}
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
                            <a href="javascript:void(0);" data-toggle="modal"  class="btn btn-primary" data-target="#createmodal" ><i class="fa fa-plus">اضافة عميل</i></a>
                                            
                            </div>
                            <div class="p-2 d-flex">
                                
                            </div>
                        </div>
                    </div>

          
         
            
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2> العملاء</h2>
              
                        </div>
                        <div class="body project_report">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom mb-0">
                                    <thead>
                                        <tr>                                            
                                            <th>اسم المستخدم</th>
                                           
                                            <th> الهاتف</th>
                                            <th> -----</th>
                                            <th>البريد الالكتروني</th>
                                            <th> -----</th>
                                            <th> -----</th>
                                            <th>النوع</th>
                                        
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         
              @foreach ($users as $key => $user)

              <tr>
                                            <td class="project-title">
                                                <h6>{{$user->user_name}}</h6>
                                                <small>{{$user->first_name.' '}}{{$user->last_name}}</small>
                                            </td>
                                            <td>{{$user->mobile}}</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;"></div>                                                
                                                </div>
                                                <small>Completion with: 48%</small>
                                            </td>
                                            <td>{{$user->email}}</td>
                                            <td><img src="{{URL::asset('/assets/images/xs/avatar1.jpg')}}" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="{{URL::asset('/assets/images/xs/avatar1.jpg')}}" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                    <li><img src="{{URL::asset('/assets/images/xs/avatar2.jpg')}}" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                    <li><img src="{{URL::asset('/assets/images/xs/avatar3.jpg')}}" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td><span class="badge badge-success">
                                            @if($user->role==4)
                                            زبون عادي
                                               @elseif   ($user->role==2) 
                                                 وكيل
                                                  @elseif   ($user->role==3)
                                                  صاحب محل
                                                  @else
                                                  مسؤول
                                                  @endif
                                               

                                            </span></td>
                                            <td class="project-actions">
                                                
                            <a href="#defaultModal" data-toggle="modal" data-target="#defaultModal">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#editModal{{$user->id}}" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                                <a  href="javascript:void(0);" data-toggle="modal" data-target="#deleteModal{{$user->id}}" class="btn btn-sm btn-outline-danger" ><i class="icon-trash"></i></a>
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



    <!-------------create--------->
      <!-- Default Size -->
      <div class="modal fade" id="createmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel"></h4>
            </div>
            <div class="modal-body"> 
            <form method="Post"  action="{{ route('user.store') }}" enctype="multipart/form-data">
      

    
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="text" class="form-control" required placeholder=" اسم المستخدم" aria-label="اسم المستخدم"  name ="user_name" aria-describedby="basic-addon1">
                            </div>

                             <div class="input-group mb-3">
                               
                            <select class="custom-select" required name="role" id="role">
                                    <option selected value="2"> نوع العميل </option>
                                    <option value="2">وكيل</option>
                                    <option value="3">صاحب محل</option>
                                    <option value="4">زبون عادي</option>
                                </select>
                              </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="text" class="form-control" required placeholder="الاسم الاول" aria-label="الاسم الأول" name="first_name" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="text" class="form-control" required placeholder=" الكنية" aria-label=" الكنية"name="last_name" -describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" required placeholder="البريد الالكتروني"  name="email" aria-label="'البريد الالكتروني " aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                            <div class="input-group mb-3">
                                  الجنس:
                                    <label class="fancy-radio custom-color-green"><input name="gender3" value="ذكر`" type="radio" checked><span><i></i>Male</span></label>
                                    <label class="fancy-radio custom-color-green"><input name="gender3" value="أنثى" type="radio"><span><i></i>Female</span></label>
                             </div>
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
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="password" class="form-control" required placeholder=" كلمة السر" aria-label=" كلمة السر"name="password" -describedby="basic-addon1">
                            </div>

                                   
                            <div class="input-group mb-3">
                            <select class="custom-select" required  name="code" id="mobs">
                                    <option selected>اختر الرمز</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div class="input-group-prepend">
                                <input type="text" class="form-control" required placeholder=" رقم الهاتف" aria-label=" رقم الهاتف"name="mobile" -describedby="basic-addon1">
                           
                                </div>
                               
                            </div>
                            
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                           
            <div class="modal-footer">   <button type="submit" class="btn btn-primary">حفظ</button>
            <a href="#" class="btn btn-secondary">الغاء الأمر</a>
</form>
               
            </div>
        </div>
    </div>
</div>
</div>
    <!--------------delete -------------->
@foreach ($users as $key => $user)
    <!-- Default Size -->
      <div class="modal fade" id="deleteModal{{$user->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">خل انت بالتاكيد تريد حذذف العميل 
                     {{$user->user_name}}
                    ؟</h4>
            </div>
            <div class="modal-body"> 
            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
  
    @method('DELETE')
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                           
            <div class="modal-footer">   <button type="submit" class="btn btn-primary">نعم</button>
            <a href="#" class="btn btn-secondary">الغاء الأمر</a>
</form>
               
            </div>
        </div>
    </div>
</div>
</div>
@endforeach


<!--------------edit -------------->
    @foreach ($users as $key => $user)
    <!-- Default Size -->
      <div class="modal fade" id="editModal{{$user->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel"> {{$user->user_name}}</h4>
            </div>
            <div class="modal-body"> 
            <form method="POST"  action="{{ route('user.update', ['user' => $user->id]) }}" enctype="multipart/form-data">

@method('PATCH') 

    
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="text" class="form-control" required placeholder=" اسم المستخدم"  value="{{$user->user_name}}" aria-label="اسم المستخدم"  name ="user_name" aria-describedby="basic-addon1">
                            </div>

                             <div class="input-group mb-3">
                               
                            <select class="custom-select" required name="role" id="role{{$user->id}}">
                                   
                                    @if($user->role==2)
                                    <option value="2" selected>وكيل</option>
                                    @else
                                    <option value="2" >وكيل</option>
                                    @endif

                                    @if($user->role==3)
                                    <option value="3" selected>صاحب محل</option>
                                    @else
                                    <option value="3" >صاحب محل</option>
                                    @endif
                                    @if($user->role==4)
                                    <option value="4" selected>زبون</option>
                                    @else
                                    <option value="4" >زبون</option>
                                    @endif
                                </select>
                              </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="text" class="form-control" value="{{$user->first_name}}" required placeholder="الاسم الاول"  aria-label="الاسم الأول" name="first_name" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="text" class="form-control" value="{{$user->last_name}}" required placeholder=" الكنية" aria-label=" الكنية"name="last_name" -describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control"value="{{$user->email}}" required placeholder="البريد الالكتروني"  name="email" aria-label="'البريد الالكتروني " aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                            <div class="input-group mb-3">
                                  الجنس:
                                    <label class="fancy-radio custom-color-green"><input name="gender3" value="ذكر`" type="radio" checked><span><i></i>Male</span></label>
                                    <label class="fancy-radio custom-color-green"><input name="gender3" value="أنثى" type="radio"><span><i></i>Female</span></label>
                             </div>
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
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="password" value="{{$user->password}}" class="form-control" required placeholder=" كلمة السر" aria-label=" كلمة السر"name="password" -describedby="basic-addon1">
                            </div>

                                   
                            <div class="input-group mb-3">
                            <select class="custom-select" required  name="code" id="mobs{{$user->id}}">
                                    <option selected>اختر الرمز</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div class="input-group-prepend">
                                <input type="text" class="form-control" value="{{$user->mobile}}" required placeholder=" رقم الهاتف" aria-label=" رقم الهاتف"name="mobile" -describedby="basic-addon1">
                           
                                </div>
                               
                            </div>
                            
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                           
            <div class="modal-footer">   <button type="submit" class="btn btn-primary">حفظ</button>
            <a href="#" class="btn btn-secondary">الغاء الأمر</a>
</form>
               
            </div>
        </div>
    </div>
</div>
</div>
@endforeach
   @endsection