@extends('adminlte::page')

@section('title', 'Add Category')

@section('content_header')
    <h1>Add Category</h1>
@stop




@section('content')

        <form method="post" dir="rtl" enctype="multipart/form-data">
            {{csrf_field()}}
            @if(session('Greate'))
                <div class="alert alert-success alert-dismissible text-right">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> Gerate </h5>
                   Add New Compleate ....
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title text-right">Basic Information </h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body  text-right">
                            <div class="form-group">
                                <label for="inputName">عنوان التصنيف  </label>
                                <input type="text" name="title"  id="inputName" class="form-control text-right"  required>

                            </div>
                            <div class="form-group">
                                <label for="inputName"> عنوان التصنيف بالانكليزي حيث سيظهر بالرابط يجب أن يكون مميز ( غير مكرر )</label>
                                <input type="text" name="title_link" id="inputName" class="form-control text-left"  required>

                            </div>

                            <div class="form-group">
                                <label for="inputEstimatedBudget">
                                    صورة التصنيف
                                </label>
                                <input type="file" accept='image/*' name="iconx" id="inputEstimatedBudget" placeholder="fa fa-user" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="inputName"> وصف بسيط عن التصنيف  </label>
                                <input type="text" name="description" id="inputName" class="form-control text-right" required>
                            </div>


                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <a href="#" class="btn btn-secondary">إلغاء</a>
                    <input type="submit" value="أضف الآن" class="btn btn-success float-right">

                </div>
            </div>
        </form>

@stop
