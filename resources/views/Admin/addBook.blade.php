@extends('adminlte::page')

@section('title', 'Add New Book')

@section('content_header')
    <h1>Add New Book</h1>
@stop




@section('content')

    <form method="post" dir="rtl" enctype="multipart/form-data">
        {{csrf_field()}}
        @if(session('Greate'))
            <div class="alert alert-success alert-dismissible text-right">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Gerate </h5>
                Add New Book Compleated ....
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
                            <label for="inputName">عنوان الكتاب   </label>
                            <input type="text" name="title" autocomplete="off"  id="inputName" class="form-control text-left"  required>

                        </div>
                        <div class="form-group">
                            <label for="inputName"> عنوان الكتاب بالانكليزي حيث سيظهر بالرابط يجب أن يكون مميز ( غير مكرر )</label>
                            <input type="text" autocomplete="off" name="title_link" id="inputName" class="form-control text-left"  required>
                        </div>
                        <div class="form-group">
                            <label for="inputEstimatedBudget">
                                  الكتاب
                            </label>
                            <input type="file" accept='application/pdf' name="TheBook" id="inputEstimatedBudget" placeholder="fa fa-user" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="inputEstimatedBudget">
                                صورة بوستر الكتاب
                            </label>
                            <input type="file" accept='image/*' name="PdfPoster" id="inputEstimatedBudget" placeholder="fa fa-user" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="inputStatus">التصنيف</label>
                            <select class="form-control custom-select" name="category" required>
                                <option disabled>الرجاء الأختيار</option>
                                @if(isset($cater))
                                    @foreach($cater as $cat) <option value="{{$cat->id}}">{{$cat->title}}</option> @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="inputName"> وصف  عن الكتاب  </label>
                            <textarea name="description" id="inputName" class="form-control text-left" required></textarea>
                        </div>
                        
                         <div class="form-group">
                            <label for="inputName">حجم الكتاب  </label>
                            <input type="text" name="size" id="inputName" class="form-control text-left"  required>
                        </div>

                        <div class="form-group">
                            <label for="inputName">عدد الصفحات</label>
                            <input type="number" name="pages" id="inputName" class="form-control text-left"  required>
                        </div>
                       
                        <div class="form-group">
                            <label for="inputName"> رابط التحميل  </label>
                            <input type="url" name="download_link" value="https://mutaz.site/url/?test" id="inputName" class="form-control text-left" placeholder="shourten link"  required>
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
