@extends('admin.layouts.app')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    @include('admin.layouts.pagehead')
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
                
        
        
        <!-- les inputs -->

             <!-- general form elements -->
             <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Admin</h3>
            </div>
            @include('includes.message')
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('user.update',$users->id)}}" method="post">
            {{csrf_field()}}
            {{method_field('PATCH')}}
              <div class="box-body">

              <div class="col-lg-6  col-lg-offset-3">

                  
                  <div class="form-group">
                      <label for="name">User Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="" value=" {{ $users->name }}">
                    </div>
                    
                   
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="" value="{{ $users->email }}">
                    </div>


                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="" value="{{ $users->phone }}">
                    </div>


                      <div class="form-group">
                        <label for="for">Status</label>
                            <div class=" checkbox">
                                <label> <input type="checkbox" name="status" @if($users->status == 1 )
                                checked
                                @endif 
                                
                                style="ml-3" value="1" id="">Status</label>
                            </div>
                      </div>

                   

                    <div class="form-group col-lg-12">
                      <label>Assign Roles</label>
                     <div class="row">
                     @foreach($roles as $role)
                        <div class="checkbox">
                        <div class="col-lg-3">
                        <label for="role"> <input type="checkbox" 
                        
                        @foreach($users->roles as $user_role)
                            @if($user_role->id == $role->id)
                            checked
                            @endif
                        @endforeach
                        
                         name="role[]" value="{{ $role->id }}" id=""> {{ $role->name }} </label>
                        </div>
                        </div>
                        @endforeach
                     </div>
                    </div>
                    
                    <!-- /.box-body -->
      
                    <div class=" form-group">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <a  href="{{ route('user.index') }}" class="btn btn-warning">Back</a>
                    </div>
                </div>

              


            </form>
          </div>
          <!-- /.box -->


        <!-- fin des inputs -->


        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>

@endsection