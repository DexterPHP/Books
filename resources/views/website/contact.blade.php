@include('website.static.header')

<link href="{{asset('css/error_page.css')}}" rel="stylesheet" />
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="big-title">

                </div>
                <div class="form-page">
                    @if(session('Dexter'))
                        <div class="alert alert-success alert-dismissible text-left">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5> Thank You 😍 </h5>
                            The message has been sent correctly. We hope that we will meet your expectations
                        </div>
                    @endif
                    <h3><i class="fa fa-envelope"></i>  Contacts us </h3>

                    <form role="form" method="post" >
                        {{csrf_field()}}

                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="senderName">Full Name <span class="required">*</span></label>
                                    <input type="text" name="msg_sender" class="form-control" value="">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="senderEmail"> E-mail <span class="required">*</span></label>
                                    <input type="email" name="msg_email" class="form-control" value="">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="messageCategory">  Type <span class="required">*</span></label>
                                    <select name="category_id" class="form-control">


                                        <option value="1">Contact </option>


                                        <option value="2" {{ Request::is('suggest') ? 'selected=selected' : '' }}>Suggest</option>


                                        <option value="3" {{ Request::is('report') ? 'selected=selected' : '' }}>Report</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="subject"> Message title <span class="required">*</span></label>
                                    <input type="text" @php if(isset($_GET['reportFor'])){ echo'value=" Report For: '.$_GET['reportFor'].'"';} @endphp name="msg_subject" class="form-control" value="">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="message"> Message text <span class="required">*</span></label>
                                    <textarea name="msg_text" class="form-control"></textarea>
                                </div>
                            </div>


                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="submit" name="sendMessage" value="Send" class="btn btn-primary btn-lg">
                                </div>
                            </div>

                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>

</div>
<title>Pdiles | contact us </title>
@include('website.static.footer')
