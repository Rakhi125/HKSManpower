@extends('admin::layouts.content')

@section('page_title')
    {{ __('admin::app.settings.sliders.add-title') }}
@stop


@section('content')

<!--data adding and editing -->

<!--

<form action="{{ url('admin/slider/new_create') }}" method="POST" enctype="multipart/form-data">
@csrf()
<div class="container-fluid">
        <div class="row">
            <div class="col">
                <p>
                <h2 class="url-banner-txt w-100 text-left ml-5 px-4">URL Banner-1<i class="fa fa-times-circle-o"
                        style="margin-left: 5vw; font-size:1.2vw; color:#C4161C;"></i></h2>
                </p>

                <div class="card w-75 text-center p-2"
                    style="background: #F1F1F1; border: 1px solid rgba(0, 0, 0, 0.1);">
                    <div class="">
                    
                    <img src="assets/Rectangle 461.png" class="w-100">
                     
                </div>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col">
                            <input type="file" id="filename1" name="filename1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="heading1"
                                    placeholder="Heading here">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="text1"
                                    placeholder="Alt text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="url1" placeholder="URL">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <button type="submit" class="btn uplode-btn w-50" name='submit1' >Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ---------------------------- URL Banner-2 ----------------------
            <div class="col">
                <p>
                <h2 class="url-banner-txt w-100 text-left ml-5 px-4">URL Banner-2<i class="fa fa-times-circle-o"
                        style="margin-left: 5vw; font-size:1.2vw; color:#C4161C;"></i></h2>
                </p>

                <div class="card w-75 text-center p-2 "
                    style="background: #F1F1F1; border: 1px solid rgba(0, 0, 0, 0.1);">
                    <div class=""><img src="assets/Rectangle 461.png" class="w-100"></div>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col">
                                <button type="button" class="btn uplode-btn w-100 mt-3">Uplode Image</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="heading2"
                                    placeholder="Heading here">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="text2"
                                    placeholder="Alt text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="url" placeholder="URL2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                            <button type="submit" class="btn uplode-btn w-50" name='submit2' >Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
-->
            <!-- <div class="col ">
                <div class="col p-5 text-center">
                    <button type="button" class="btn uplode-btn w-50" style="margin-top: 11rem !important;">Add
                        more</button>
                </div>
            </div> -->
            <!--
            <div class="col">
                <p>
                <h2 class="url-banner-txt w-100 text-left ml-5 px-4">URL Banner-3<i class="fa fa-times-circle-o"
                        style="margin-left: 5vw; font-size:1.2vw; color:#C4161C;"></i></h2>
                </p>

                <div class="card w-75 text-center p-2 "
                    style="background: #F1F1F1; border: 1px solid rgba(0, 0, 0, 0.1);">
                    <div class=""><img src="assets/Rectangle 461.png" class="w-100"></div>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col">
                                <button type="button" class="btn uplode-btn w-100 mt-3">Uplode Image</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="heading3"
                                    placeholder="Heading here">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="text3"
                                    placeholder="Alt text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="url" placeholder="URL3">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <button type="button" class="btn uplode-btn w-50">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    ------------------------------- Discount banner ---------------------------------




    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col">

                <p>
                <h2 class="url-banner-txt w-100 text-left ml-5 px-4">Discount banner-3<i class="fa fa-times-circle-o"
                        style="margin-left: 4vw; font-size:1.2vw; color:#C4161C;"></i></h2>
                </p>

                <div class="card w-50 text-center p-2"
                    style="background: #F1F1F1; border: 1px solid rgba(0, 0, 0, 0.1);">
                    <div class=""><img src="assets/Rectangle 461.png" class="w-100"></div>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col">
                                <button type="button" class="btn uplode-btn w-100 mt-3">Uplode Image</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="heading4"
                                    placeholder="Heading here">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col dropdown mt-3">
                                <button type="button" class="btn add-txt  search-vehicle-btns-lg py-2 w-100"
                                    data-bs-toggle="dropdown">
                                    <table class="w-100">
                                        <tbody>
                                            <tr>
                                                <td class="text-center w-100">
                                                    %off
                                                </td>
                                                <td class="text-right">
                                                    <div class="ml-auto"
                                                        style="height: 5px;width: 5px;border-top: 0.3em solid;border-right: 0.3em solid transparent;border-bottom: 0;border-left: 0.3em solid transparent;">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Link 4</a></li>
                                    <li><a class="dropdown-item" href="#">Link 5</a></li>
                                    <li><a class="dropdown-item" href="#">Link 6</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col dropdown mt-3">
                                <button type="button" class="btn add-txt  search-vehicle-btns-lg py-2 w-100"
                                    data-bs-toggle="dropdown">
                                    <table class="w-100">
                                        <tbody>
                                            <tr>
                                                <td class="text-center w-100">
                                                    Primary Category
                                                </td>
                                                <td class="text-right">
                                                    <div class="ml-auto"
                                                        style="height: 5px;width: 5px;border-top: 0.3em solid;border-right: 0.3em solid transparent;border-bottom: 0;border-left: 0.3em solid transparent;">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Link 4</a></li>
                                    <li><a class="dropdown-item" href="#">Link 5</a></li>
                                    <li><a class="dropdown-item" href="#">Link 6</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col dropdown mt-3">
                                <button type="button" class="btn add-txt  search-vehicle-btns-lg py-2 w-100"
                                    data-bs-toggle="dropdown">
                                    <table class="w-100">
                                        <tbody>
                                            <tr>
                                                <td class="text-center w-100">
                                                    Sub-Category
                                                </td>
                                                <td class="text-right">
                                                    <div class="ml-auto"
                                                        style="height: 5px;width: 5px;border-top: 0.3em solid;border-right: 0.3em solid transparent;border-bottom: 0;border-left: 0.3em solid transparent;">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Link 4</a></li>
                                    <li><a class="dropdown-item" href="#">Link 5</a></li>
                                    <li><a class="dropdown-item" href="#">Link 6</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="text4"
                                    placeholder="Alt text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <button type="button" class="btn uplode-btn w-50">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col ">
                <div class="col p-5 text-center">
                    <button type="button" class="btn uplode-btn w-25" style="margin-top: 11rem !important;">Add
                        more</button>
                </div>
            </div>
        </div>
    </div>



</form>





<div class="container-fluid">
<form name="form1" action="{{ route('admin.sliders.create') }}" method="POST" enctype="multipart/form-data">
                @csrf()
                
        <div class="row">
            <div class="col">
                <p>
                <h2 class="url-banner-txt w-100 text-left ml-5 px-4">URL Banner-1<i class="fa fa-times-circle-o"
                        style="margin-left: 5vw; font-size:1.2vw; color:#C4161C;"></i></h2>
      
                </p>


                <div class="card w-75 text-center p-2"
                    style="background: #F1F1F1; border: 1px solid rgba(0, 0, 0, 0.1);">
                    <div class="col">
                    <div><image-wrapper  button-label="{{ __('admin::app.settings.sliders.image') }}" input-name="image" :multiple="false"></image-wrapper></div>
                    
                    </div><div class="container">
                        <div class="row text-center">

                        <div class="control-group {!! $errors->has('image.*') ? 'has-error' : '' !!}">
                         <label class="required">{{ __('admin::app.catalog.categories.image') }}</label>
                        <span class="control-info mt-10">{{ __('admin::app.settings.sliders.image-size') }}</span> -->
                        
                       <!-- <p style="text-align:centre"> <image-wrapper button-label="{{ __('admin::app.settings.sliders.image') }}" input-name="image" :multiple="false"></image-wrapper></p> 
 
                        <span class="control-error" v-if="{!! $errors->has('image.*') !!}">
                            @foreach ($errors->get('image.*') as $key => $message)
                                @php echo str_replace($key, 'Image', $message[0]); @endphp
                            @endforeach
                        </span>
                    </div>

                     <div class="col">
                                <button type="button" class="btn uplode-btn w-100 mt-3">Uplode Image</button>
                            </div> 

                            <div class="control-group" :class="[errors.has('title') ? 'has-error' : '']">
                        <label for="title" class="required">{{ __('admin::app.settings.sliders.name') }}</label>
                        <input type="text" class="control" name="title" v-validate="'required'" data-vv-as="&quot;{{ __('admin::app.settings.sliders.name') }}&quot;">
                        <span class="control-error" v-if="errors.has('title')">@{{ errors.first('title') }}</span>
                    </div>


                        </div>


                    <div style = "display:none;" class="control-group multi-select" :class="[errors.has('locale[]') ? 'has-error' : '']">
                        <label for="locale">{{ __('admin::app.datagrid.locale') }}</label>
                       
                        <select class="control" id="locale" name="locale[]" data-vv-as="&quot;{{ __('admin::app.datagrid.locale') }}&quot;" value="" v-validate="'required'" multiple>
                           
                        <option selected="selected" value="en">
                                  English
                                </option>
                        
                        @foreach (core()->getAllLocales() as $localeModel)

                                <option value="{{ $localeModel->code }}">
                                    {{ $localeModel->name }}, {{ $localeModel->code }}
                                </option>

                            @endforeach 
                        </select>

                        <span class="control-error" v-if="errors.has('locale[]')">@{{ errors.first('locale[]') }}</span>
                    </div>

                    <div class="control-group" :class="[errors.has('title') ? 'has-error' : '']">
                        <label for="title" class="required">{{ __('admin::app.settings.sliders.name') }}</label> 
                        <input type="text" placeholder="Name here" class="add-txt w-100 py-2 text-center" name="title" v-validate="'required'" data-vv-as="&quot;{{ __('admin::app.settings.sliders.name') }}&quot;">
                        <span class="control-error" v-if="errors.has('title')">@{{ errors.first('title') }}</span>
                    </div>


                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="name" placeholder="Name here">
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="alt_text"
                                    placeholder="Alt text">
                            </div>
                        </div>
                         <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="url" placeholder="URL">
                            </div>
                        </div>

                        <div style="display:none" class="control-group" :class="[errors.has('content') ? 'has-error' : '']">
                        <label for="content">{{ __('admin::app.settings.sliders.content') }}</label>

                        <textarea id="tiny" class="control" id="add_content" name="content" rows="5"></textarea>

                        <span class="control-error" v-if="errors.has('content')">@{{ errors.first('content') }}</span>
                    </div>

                        {!! view_render_event('bagisto.admin.settings.slider.create.after') !!}


                        <div class="row">

                            <div class="col mt-3">
                            <button  form="form1" type="submit" name="slider_1" class="btn btn-lg btn-primary">
                        {{ __('admin::app.settings.sliders.save-btn-title') }}
                    </button>
                            </div>

                        </div>
    
                    </div>
                    
                </div>
            </div>

</form>

<form>




            banner edited 2 
            <div class="container-fluid">
<form  action="{{ route('admin.sliders.create') }}" method="POST" enctype="multipart/form-data">
                @csrf()
                
        <div class="row">
            <div class="col">
                <p>
                <h2 class="url-banner-txt w-100 text-left ml-5 px-4">URL Banner-2<i class="fa fa-times-circle-o"
                        style="margin-left: 5vw; font-size:1.2vw; color:#C4161C;"></i></h2>
      
                </p>


                <div class="card w-75 text-center p-2"
                    style="background: #F1F1F1; border: 1px solid rgba(0, 0, 0, 0.1);">
                    <div class="col">
                    <div><image-wrapper  button-label="{{ __('admin::app.settings.sliders.image') }}" input-name="image" :multiple="false"></image-wrapper></div>
                    
                    </div><div class="container">
                        <div class="row text-center">

                        <div class="control-group {!! $errors->has('image.*') ? 'has-error' : '' !!}">
                         <label class="required">{{ __('admin::app.catalog.categories.image') }}</label>
                        <span class="control-info mt-10">{{ __('admin::app.settings.sliders.image-size') }}</span> -->
                        
                       <!-- <p style="text-align:centre"> <image-wrapper button-label="{{ __('admin::app.settings.sliders.image') }}" input-name="image" :multiple="false"></image-wrapper></p> 
 
                        <span class="control-error" v-if="{!! $errors->has('image.*') !!}">
                            @foreach ($errors->get('image.*') as $key => $message)
                                @php echo str_replace($key, 'Image', $message[0]); @endphp
                            @endforeach
                        </span>
                    </div>

                    <div class="col">
                                <button type="button" class="btn uplode-btn w-100 mt-3">Uplode Image</button>
                            </div> -->
<!--
                            <div class="control-group" :class="[errors.has('title') ? 'has-error' : '']">
                        <label for="title" class="required">{{ __('admin::app.settings.sliders.name') }}</label>
                        <input type="text" class="control" name="title" v-validate="'required'" data-vv-as="&quot;{{ __('admin::app.settings.sliders.name') }}&quot;">
                        <span class="control-error" v-if="errors.has('title')">@{{ errors.first('title') }}</span>
                    </div>


                        </div>


                    <div style = "display:none;" class="control-group multi-select" :class="[errors.has('locale[]') ? 'has-error' : '']">
                        <label for="locale">{{ __('admin::app.datagrid.locale') }}</label>
                       
                        <select class="control" id="locale" name="locale[]" data-vv-as="&quot;{{ __('admin::app.datagrid.locale') }}&quot;" value="" v-validate="'required'" multiple>
                           
                        <option selected="selected" value="en">
                                  English
                                </option>
                        
                       @foreach (core()->getAllLocales() as $localeModel)

                                <option value="{{ $localeModel->code }}">
                                    {{ $localeModel->name }}, {{ $localeModel->code }}
                                </option>

                            @endforeach 
                        </select>

                        <span class="control-error" v-if="errors.has('locale[]')">@{{ errors.first('locale[]') }}</span>
                    </div>

                    <div class="control-group" :class="[errors.has('title') ? 'has-error' : '']">
                         <label for="title" class="required">{{ __('admin::app.settings.sliders.name') }}</label>
                        <input type="text" placeholder="Name here" class="add-txt w-100 py-2 text-center" name="title" v-validate="'required'" data-vv-as="&quot;{{ __('admin::app.settings.sliders.name') }}&quot;">
                        <span class="control-error" v-if="errors.has('title')">@{{ errors.first('title') }}</span>
                    </div>


                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="name" placeholder="Name here">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="alt_text"
                                    placeholder="Alt text">
                            </div>
                        </div>
                       <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="url" placeholder="URL">
                            </div>
                        </div> 

                        <div style="display:none" class="control-group" :class="[errors.has('content') ? 'has-error' : '']">
                        <label for="content">{{ __('admin::app.settings.sliders.content') }}</label>

                        <textarea id="tiny" class="control" id="add_content" name="content" rows="5"></textarea>

                        <span class="control-error" v-if="errors.has('content')">@{{ errors.first('content') }}</span>
                    </div>

                        {!! view_render_event('bagisto.admin.settings.slider.create.after') !!}


                        <div class="row">

                            <div class="col mt-3">
                            <button type="submit" class="btn btn-lg btn-primary">
                        {{ __('admin::app.settings.sliders.save-btn-title') }}
                    </button>
                            </div>

                        </div>
    
                    </div>
                    
                </div>
            </div>
 banner edited 3 
<div class="container-fluid">
<form  action="{{ route('admin.sliders.create') }}" method="POST" enctype="multipart/form-data">
                @csrf()
                
        <div class="row">
            <div class="col">
                <p>
                <h2 class="url-banner-txt w-100 text-left ml-5 px-4">URL Banner-3<i class="fa fa-times-circle-o"
                        style="margin-left: 5vw; font-size:1.2vw; color:#C4161C;"></i></h2>
      
                </p>


                <div class="card w-75 text-center p-2"
                    style="background: #F1F1F1; border: 1px solid rgba(0, 0, 0, 0.1);">
                    <div class="col">
                    <div><image-wrapper  button-label="{{ __('admin::app.settings.sliders.image') }}" input-name="image" :multiple="false"></image-wrapper></div>
                    
                    </div><div class="container">
                        <div class="row text-center">

                        <div class="control-group {!! $errors->has('image.*') ? 'has-error' : '' !!}">
                      <label class="required">{{ __('admin::app.catalog.categories.image') }}</label>
                        <span class="control-info mt-10">{{ __('admin::app.settings.sliders.image-size') }}</span> -->
                        
                       <!-- <p style="text-align:centre"> <image-wrapper button-label="{{ __('admin::app.settings.sliders.image') }}" input-name="image" :multiple="false"></image-wrapper></p> 
 
                        <span class="control-error" v-if="{!! $errors->has('image.*') !!}">
                            @foreach ($errors->get('image.*') as $key => $message)
                                @php echo str_replace($key, 'Image', $message[0]); @endphp
                            @endforeach
                        </span>
                    </div>

                    <div class="col">
                                <button type="button" class="btn uplode-btn w-100 mt-3">Uplode Image</button>
                            </div> -->
<!--
                            <div class="control-group" :class="[errors.has('title') ? 'has-error' : '']">
                        <label for="title" class="required">{{ __('admin::app.settings.sliders.name') }}</label>
                        <input type="text" class="control" name="title" v-validate="'required'" data-vv-as="&quot;{{ __('admin::app.settings.sliders.name') }}&quot;">
                        <span class="control-error" v-if="errors.has('title')">@{{ errors.first('title') }}</span>
                    </div>


                        </div>


                    <div style = "display:none;" class="control-group multi-select" :class="[errors.has('locale[]') ? 'has-error' : '']">
                        <label for="locale">{{ __('admin::app.datagrid.locale') }}</label>
                       
                        <select class="control" id="locale" name="locale[]" data-vv-as="&quot;{{ __('admin::app.datagrid.locale') }}&quot;" value="" v-validate="'required'" multiple>
                           
                        <option selected="selected" value="en">
                                  English
                                </option>
                        
                       @foreach (core()->getAllLocales() as $localeModel)

                                <option value="{{ $localeModel->code }}">
                                    {{ $localeModel->name }}, {{ $localeModel->code }}
                                </option>

                            @endforeach
                        </select>

                        <span class="control-error" v-if="errors.has('locale[]')">@{{ errors.first('locale[]') }}</span>
                    </div>

                    <div class="control-group" :class="[errors.has('title') ? 'has-error' : '']">
                         <label for="title" class="required">{{ __('admin::app.settings.sliders.name') }}</label> 
                        <input type="text" placeholder="Name here" class="add-txt w-100 py-2 text-center" name="title" v-validate="'required'" data-vv-as="&quot;{{ __('admin::app.settings.sliders.name') }}&quot;">
                        <span class="control-error" v-if="errors.has('title')">@{{ errors.first('title') }}</span>
                    </div>


                       <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="name" placeholder="Name here">
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="alt_text"
                                    placeholder="Alt text">
                            </div>
                        </div>
                        
         <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="url" placeholder="URL">
                            </div>
                        </div> 

                        <div style="display:none" class="control-group" :class="[errors.has('content') ? 'has-error' : '']">
                        <label for="content">{{ __('admin::app.settings.sliders.content') }}</label>

                        <textarea id="tiny" class="control" id="add_content" name="content" rows="5"></textarea>

                        <span class="control-error" v-if="errors.has('content')">@{{ errors.first('content') }}</span>
                    </div>

                        {!! view_render_event('bagisto.admin.settings.slider.create.after') !!}


                        <div class="row">

                            <div class="col mt-3">
                            <button type="submit" class="btn btn-lg btn-primary">
                        {{ __('admin::app.settings.sliders.save-btn-title') }}
                    </button>
                            </div>

                        </div>
    
                    </div>
                    
                </div>
            </div>





            <!------------------------------ URL Banner-2 ------------------------>
            <!-- <div class="col">
                <p>
                <h2 class="url-banner-txt w-100 text-left ml-5 px-4">URL Banner-2<i class="fa fa-times-circle-o"
                        style="margin-left: 5vw; font-size:1.2vw; color:#C4161C;"></i></h2>
                </p>

                <div class="card w-75 text-center p-2 "
                    style="background: #F1F1F1; border: 1px solid rgba(0, 0, 0, 0.1);">
                    <div class=""><img src="assets/Rectangle 461.png" class="w-100"></div>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col">
                                <button type="button" class="btn uplode-btn w-100 mt-3">Uplode Image</button>
                            </div>
                           </div>
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="heading"
                                    placeholder="Heading here">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="text"
                                    placeholder="Alt text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="url" placeholder="URL">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <button type="button" class="btn uplode-btn w-50">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <div class="col ">
                <div class="col p-5 text-center">
                    <button type="button" class="btn uplode-btn w-50" style="margin-top: 11rem !important;">Add
                        more</button>
                </div>
            </div>
            <div class="col">
                <p>
                <h2 class="url-banner-txt w-100 text-left ml-5 px-4">URL Banner-3<i class="fa fa-times-circle-o"
                        style="margin-left: 5vw; font-size:1.2vw; color:#C4161C;"></i></h2>
                </p>

                <div class="card w-75 text-center p-2 "
                    style="background: #F1F1F1; border: 1px solid rgba(0, 0, 0, 0.1);">
                    <div class=""><img src="assets/Rectangle 461.png" class="w-100"></div>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col">
                                <button type="button" class="btn uplode-btn w-100 mt-3">Uplode Image</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="heading"
                                    placeholder="Heading here">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="text"
                                    placeholder="Alt text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="url" placeholder="URL">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <button type="button" class="btn uplode-btn w-50">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    
    </form> -->


    <!--------------------------------- Discount banner ----------------------------------->


<!--

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col">

                <p>
                <h2 class="url-banner-txt w-100 text-left ml-5 px-4">Discount banner-3<i class="fa fa-times-circle-o"
                        style="margin-left: 4vw; font-size:1.2vw; color:#C4161C;"></i></h2>
                </p>

                <div class="card w-50 text-center p-2"
                    style="background: #F1F1F1; border: 1px solid rgba(0, 0, 0, 0.1);">
                    <div class=""><img src="assets/Rectangle 461.png" class="w-100"></div>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col">
                                <button type="button" class="btn uplode-btn w-100 mt-3">Uplode Image</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="heading"
                                    placeholder="Heading here">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col dropdown mt-3">
                                <button type="button" class="btn add-txt  search-vehicle-btns-lg py-2 w-100"
                                    data-bs-toggle="dropdown">
                                    <table class="w-100">
                                        <tbody>
                                            <tr>
                                                <td class="text-center w-100">
                                                    %off
                                                </td>
                                                <td class="text-right">
                                                    <div class="ml-auto"
                                                        style="height: 5px;width: 5px;border-top: 0.3em solid;border-right: 0.3em solid transparent;border-bottom: 0;border-left: 0.3em solid transparent;">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Link 4</a></li>
                                    <li><a class="dropdown-item" href="#">Link 5</a></li>
                                    <li><a class="dropdown-item" href="#">Link 6</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col dropdown mt-3">
                                <button type="button" class="btn add-txt  search-vehicle-btns-lg py-2 w-100"
                                    data-bs-toggle="dropdown">
                                    <table class="w-100">
                                        <tbody>
                                            <tr>
                                                <td class="text-center w-100">
                                                    Primary Category
                                                </td>
                                                <td class="text-right">
                                                    <div class="ml-auto"
                                                        style="height: 5px;width: 5px;border-top: 0.3em solid;border-right: 0.3em solid transparent;border-bottom: 0;border-left: 0.3em solid transparent;">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Link 4</a></li>
                                    <li><a class="dropdown-item" href="#">Link 5</a></li>
                                    <li><a class="dropdown-item" href="#">Link 6</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col dropdown mt-3">
                                <button type="button" class="btn add-txt  search-vehicle-btns-lg py-2 w-100"
                                    data-bs-toggle="dropdown">
                                    <table class="w-100">
                                        <tbody>
                                            <tr>
                                                <td class="text-center w-100">
                                                    Sub-Category
                                                </td>
                                                <td class="text-right">
                                                    <div class="ml-auto"
                                                        style="height: 5px;width: 5px;border-top: 0.3em solid;border-right: 0.3em solid transparent;border-bottom: 0;border-left: 0.3em solid transparent;">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Link 4</a></li>
                                    <li><a class="dropdown-item" href="#">Link 5</a></li>
                                    <li><a class="dropdown-item" href="#">Link 6</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="text"
                                    placeholder="Alt text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <button type="button" class="btn uplode-btn w-50">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col ">
                <div class="col p-5 text-center">
                    <button type="button" class="btn uplode-btn w-25" style="margin-top: 11rem !important;">Add
                        more</button>
                </div>
            </div>
        </div>
    </div>
-->
<!-- end adding and editing -->
<!--

    <div class="content">

        <form
            method="POST"
            @submit.prevent="onSubmit"
            enctype="multipart/form-data"
            action="{{ route('admin.sliders.create') }}">

            <div class="page-header">
                <div class="page-title">
                    <h1>
                        <i class="icon angle-left-icon back-link" onclick="window.location = '{{ route('admin.sliders.index') }}'"></i>

                        {{ __('admin::app.settings.sliders.add-title') }}
                    </h1>
                </div>

                <div class="page-action">
                    <button type="submit" class="btn btn-lg btn-primary">
                        {{ __('admin::app.settings.sliders.save-btn-title') }}
                    </button>
                </div>
            </div>

            <div class="page-content">
                <div class="form-container">
                    @csrf()

                    {!! view_render_event('bagisto.admin.settings.slider.create.before') !!}

                     praveen customized part -->

                    
<!--                     
                    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <p>
                <h2 class="url-banner-txt w-100 text-left ml-5 px-4">URL Banner-1<i class="fa fa-times-circle-o"
                        style="margin-left: 5vw; font-size:1.2vw; color:#C4161C;"></i></h2>
      
                </p>


                <div class="card w-75 text-center p-2"
                    style="background: #F1F1F1; border: 1px solid rgba(0, 0, 0, 0.1);">
                    <div class="col">
                    <div><image-wrapper  button-label="{{ __('admin::app.settings.sliders.image') }}" input-name="image" :multiple="false"></image-wrapper></div>
                    
                    </div><div class="container">
                        <div class="row text-center">

                        <div class="control-group {!! $errors->has('image.*') ? 'has-error' : '' !!}">
                        <label class="required">{{ __('admin::app.catalog.categories.image') }}</label>
                        <span class="control-info mt-10">{{ __('admin::app.settings.sliders.image-size') }}</span>
                        
                     <p style="text-align:centre"> <image-wrapper button-label="{{ __('admin::app.settings.sliders.image') }}" input-name="image" :multiple="false"></image-wrapper></p> 
 
                        <span class="control-error" v-if="{!! $errors->has('image.*') !!}">
                            @foreach ($errors->get('image.*') as $key => $message)
                                @php echo str_replace($key, 'Image', $message[0]); @endphp
                            @endforeach
                        </span>
                    </div> -->

                    <!-- <div class="col">
                                <button type="button" class="btn uplode-btn w-100 mt-3">Uplode Image</button>
                            </div> -->
<!--
                            <div class="control-group" :class="[errors.has('title') ? 'has-error' : '']">
                        <label for="title" class="required">{{ __('admin::app.settings.sliders.name') }}</label>
                        <input type="text" class="control" name="title" v-validate="'required'" data-vv-as="&quot;{{ __('admin::app.settings.sliders.name') }}&quot;">
                        <span class="control-error" v-if="errors.has('title')">@{{ errors.first('title') }}</span>
                    </div>

-->
                        <!-- </div>


                    <div style = "display:none;" class="control-group multi-select" :class="[errors.has('locale[]') ? 'has-error' : '']">
                        <label for="locale">{{ __('admin::app.datagrid.locale') }}</label>
                       
                        <select class="control" id="locale" name="locale[]" data-vv-as="&quot;{{ __('admin::app.datagrid.locale') }}&quot;" value="" v-validate="'required'" multiple>
                           
                        <option selected="selected" value="en">
                                  English
                                </option>
                        
                        @foreach (core()->getAllLocales() as $localeModel)

                                <option value="{{ $localeModel->code }}">
                                    {{ $localeModel->name }}, {{ $localeModel->code }}
                                </option>

                            @endforeach 
                        </select>

                        <span class="control-error" v-if="errors.has('locale[]')">@{{ errors.first('locale[]') }}</span>
                    </div>

                    <div class="control-group" :class="[errors.has('title') ? 'has-error' : '']">
                         <label for="title" class="required">{{ __('admin::app.settings.sliders.name') }}</label>
                        <input type="text" placeholder="Name here" class="add-txt w-100 py-2 text-center" name="title" v-validate="'required'" data-vv-as="&quot;{{ __('admin::app.settings.sliders.name') }}&quot;">
                        <span class="control-error" v-if="errors.has('title')">@{{ errors.first('title') }}</span>
                    </div>


                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="name" placeholder="Name here">
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="alt_text"
                                    placeholder="Alt text">
                            </div>
                        </div>
                         <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="url" placeholder="URL">
                            </div>
                        </div> 

                        <div style="display:none" class="control-group" :class="[errors.has('content') ? 'has-error' : '']">
                        <label for="content">{{ __('admin::app.settings.sliders.content') }}</label>

                        <textarea id="tiny" class="control" id="add_content" name="content" rows="5"></textarea>

                        <span class="control-error" v-if="errors.has('content')">@{{ errors.first('content') }}</span>
                    </div>

                        {!! view_render_event('bagisto.admin.settings.slider.create.after') !!}


                        <div class="row">

                            <div class="col mt-3">
                            <button type="submit" class="btn btn-lg btn-primary">
                        {{ __('admin::app.settings.sliders.save-btn-title') }}
                    </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!------------------------------ URL Banner-2 ------------------------>
            <!-- <div class="col">
                <p>
                <h2 class="url-banner-txt w-100 text-left ml-5 px-4">URL Banner-2<i class="fa fa-times-circle-o"
                        style="margin-left: 5vw; font-size:1.2vw; color:#C4161C;"></i></h2>
                </p>

                <div class="card w-75 text-center p-2 "
                    style="background: #F1F1F1; border: 1px solid rgba(0, 0, 0, 0.1);">
                    <div class=""><img src="assets/Rectangle 461.png" class="w-100"></div>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col">
                                <button type="button" class="btn uplode-btn w-100 mt-3">Uplode Image</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="heading"
                                    placeholder="Heading here">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="text"
                                    placeholder="Alt text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="url" placeholder="URL">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <button type="button" class="btn uplode-btn w-50">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col ">
                <div class="col p-5 text-center">
                    <button type="button" class="btn uplode-btn w-50" style="margin-top: 11rem !important;">Add
                        more</button>
                </div>
            </div>
        </div>
    </div>



    ------------------------------- Discount banner ----------------------------------->

    <!-- <form
            method="POST"
            @submit.prevent="onSubmit"
            enctype="multipart/form-data"
            action="{{ route('admin.sliders.create') }}">


    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col">

                <p>
                <h2 class="url-banner-txt w-100 text-left ml-5 px-4">Discount banner-3<i class="fa fa-times-circle-o"
                        style="margin-left: 4vw; font-size:1.2vw; color:#C4161C;"></i></h2>
                </p>

                <div class="page-content">
                <div class="form-container">
                    @csrf()

                    {!! view_render_event('bagisto.admin.settings.slider.create.before') !!}

                     praveen customized part -->

                    
<!--                     
                    <div class="container-fluid">
        <div class="row">
            <div class="col">
                
                <div class="card w-75 text-center p-2"
                    style="background: #F1F1F1; border: 1px solid rgba(0, 0, 0, 0.1);">
                    <div class="col"> --> 
                    
                    
                    <!-- </div><div class="container">
                    <div><image-wrapper  button-label="{{ __('admin::app.settings.sliders.image') }}" input-name="image" :multiple="false"></image-wrapper></div>
                        <div class="row text-center">

                        <div class="control-group {!! $errors->has('image.*') ? 'has-error' : '' !!}">
                        <label class="required">{{ __('admin::app.catalog.categories.image') }}</label>
                        <span class="control-info mt-10">{{ __('admin::app.settings.sliders.image-size') }}</span> -->
                        
                       <!-- <p style="text-align:centre"> <image-wrapper button-label="{{ __('admin::app.settings.sliders.image') }}" input-name="image" :multiple="false"></image-wrapper></p> -->
 
                        <!-- <span class="control-error" v-if="{!! $errors->has('image.*') !!}">
                            @foreach ($errors->get('image.*') as $key => $message)
                                @php echo str_replace($key, 'Image', $message[0]); @endphp
                            @endforeach
                        </span>
                    </div>   -->

                <!-- <div class="card w-50 text-center p-2"
                    style="background: #F1F1F1; border: 1px solid rgba(0, 0, 0, 0.1);">
                    
                    <div class="container">
                       
                    <div class="control-group" :class="[errors.has('title') ? 'has-error' : '']">
    
                        <div class="row">
                            <div class=" col dropdown mt-3">
                                <button type="button" class="btn add-txt  search-vehicle-btns-lg py-2 w-100"
                                    data-bs-toggle="dropdown">
                                    <table class="w-100">
                                        <tbody>
                                            <tr>
                                                <td class="text-center w-100">
                                                    %off
                                                </td>
                                                <td class="text-right">
                                                    <div class="ml-auto"
                                                        style="height: 5px;width: 5px;border-top: 0.3em solid;border-right: 0.3em solid transparent;border-bottom: 0;border-left: 0.3em solid transparent;">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Link 4</a></li>
                                    <li><a class="dropdown-item" href="#">Link 5</a></li>
                                    <li><a class="dropdown-item" href="#">Link 6</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col dropdown mt-3">
                                <button type="button" class="btn add-txt  search-vehicle-btns-lg py-2 w-100"
                                    data-bs-toggle="dropdown">
                                    <table class="w-100">
                                        <tbody>
                                            <tr>
                                                <td class="text-center w-100">
                                                    Primary Category
                                                </td>
                                                <td class="text-right">
                                                    <div class="ml-auto"
                                                        style="height: 5px;width: 5px;border-top: 0.3em solid;border-right: 0.3em solid transparent;border-bottom: 0;border-left: 0.3em solid transparent;">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Link 4</a></li>
                                    <li><a class="dropdown-item" href="#">Link 5</a></li>
                                    <li><a class="dropdown-item" href="#">Link 6</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col dropdown mt-3">
                                <button type="button" class="btn add-txt  search-vehicle-btns-lg py-2 w-100"
                                    data-bs-toggle="dropdown">
                                    <table class="w-100">
                                        <tbody>
                                            <tr>
                                                <td class="text-center w-100">
                                                    Sub-Category
                                                </td>
                                                <td class="text-right">
                                                    <div class="ml-auto"
                                                        style="height: 5px;width: 5px;border-top: 0.3em solid;border-right: 0.3em solid transparent;border-bottom: 0;border-left: 0.3em solid transparent;">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Link 4</a></li>
                                    <li><a class="dropdown-item" href="#">Link 5</a></li>
                                    <li><a class="dropdown-item" href="#">Link 6</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <input class="add-txt w-100 py-2 text-center" type="text" name="text"
                                    placeholder="Alt text">
                            </div>
                        </div>
                        
                        <div class="row">

<div class="col mt-3">
<button type="submit" class="btn btn-lg btn-primary">
{{ __('admin::app.settings.sliders.save-btn-title') }}
</button>
</div>
</div>

                    </div>
                </div>
            </div>
           
        <div class="col ">
                <div class="col p-5 text-center">
                    <button type="button" class="btn uplode-btn w-25" style="margin-top: 11rem !important;">Add
                        more</button>
                </div>
            </div> 
        </div>
    </div>


</form>


                  end customized part -->




                  <div class="content">
        <form
            method="POST"
            @submit.prevent="onSubmit"
            enctype="multipart/form-data"
            action="{{ route('admin.sliders.create') }}">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <div class="page-header">
                <div class="page-title">
                    <h1>
                        <i class="icon angle-left-icon back-link" onclick="window.location = '{{ route('admin.sliders.index') }}'"></i>

                        {{ __('admin::app.settings.sliders.add-title') }}
                        
                    </h1>
                </div>

                <div class="page-action">
                    <button type="submit" class="btn btn-lg btn-primary">
                        {{ __('admin::app.settings.sliders.save-btn-title') }}
                    </button>
                </div>
            </div>

            <div class="page-content">
                <div class="form-container">
                    @csrf()

                    {!! view_render_event('bagisto.admin.settings.slider.create.before') !!}

                    <div class="control-group multi-select" :class="[errors.has('locale[]') ? 'has-error' : '']">
                        <label for="locale">{{ __('admin::app.datagrid.locale') }}</label>

                        <select class="control" id="locale" name="locale[]" data-vv-as="&quot;{{ __('admin::app.datagrid.locale') }}&quot;" value="" v-validate="'required'" multiple>
                            @foreach (core()->getAllLocales() as $localeModel)

                                <option value="{{ $localeModel->code }}">
                                    {{ $localeModel->name }}
                                </option>

                            @endforeach
                        </select>

                        <span class="control-error" v-if="errors.has('locale[]')">@{{ errors.first('locale[]') }}</span>
                    </div>

                    <div class="control-group" :class="[errors.has('title') ? 'has-error' : '']">
                        <label for="title" class="required">{{ __('admin::app.settings.sliders.name') }}</label>
                        <input type="text" class="control" name="title" v-validate="'required'" data-vv-as="&quot;{{ __('admin::app.settings.sliders.name') }}&quot;">
                        <span class="control-error" v-if="errors.has('title')">@{{ errors.first('title') }}</span>
                    </div>

                    <?php $channels = core()->getAllChannels() ?>
                    <div class="control-group" :class="[errors.has('channel_id') ? 'has-error' : '']">
                        <label for="channel_id">{{ __('admin::app.settings.sliders.channels') }}</label>
                        <select class="control" id="channel_id" name="channel_id" v-validate="'required'" data-vv-as="&quot;{{ __('admin::app.settings.sliders.channels') }}&quot;">
                            @foreach ($channels as $channel)
                                <option value="{{ $channel->id }}" @if ($channel->id == old('channel_id')) selected @endif>
                                    {{ __(core()->getChannelName($channel)) }}
                                </option>
                            @endforeach
                        </select>
                        <span class="control-error" v-if="errors.has('channel_id')">@{{ errors.first('channel_id') }}</span>
                    </div>

                    <div class="control-group date">
                        <label for="expired_at">{{ __('admin::app.settings.sliders.expired-at') }}</label>
                        <date>
                            <input type="text" name="expired_at" class="control" value="{{ old('expired_at') }}"/>
                        </date>
                    </div>


                    <div class="control-group">
                        <label for="sort_order">{{ __('admin::app.settings.sliders.sort-order') }}</label>
                        <input type="text" class="control" id="sort_order" name="sort_order" value="{{ old('sort_order') ?? 0 }}"/>
                    </div>

                    <div class="control-group {!! $errors->has('image.*') ? 'has-error' : '' !!}">
                        <label class="required">{{ __('admin::app.catalog.categories.image') }}</label>
                        <span class="control-info mt-10">{{ __('admin::app.settings.sliders.image-size') }}</span>
                        
                        <image-wrapper button-label="{{ __('admin::app.settings.sliders.image') }}" input-name="image" :multiple="false"></image-wrapper>

                        <span class="control-error" v-if="{!! $errors->has('image.*') !!}">
                            @foreach ($errors->get('image.*') as $key => $message)
                                @php echo str_replace($key, 'Image', $message[0]); @endphp
                            @endforeach
                        </span>
                    </div>

                    <div class="control-group" :class="[errors.has('content') ? 'has-error' : '']">
                        <label for="content">{{ __('admin::app.settings.sliders.content') }}</label>

                        <textarea id="tiny" class="control" id="add_content" name="content" rows="5"></textarea>

                        <span class="control-error" v-if="errors.has('content')">@{{ errors.first('content') }}</span>
                    </div>

                    <!-- {!! view_render_event('bagisto.admin.settings.slider.create.after') !!} -->


                   <!-- start banner on page -->
                   <label for="banner-on-page">Banner On Page</label>

<select id="banner-on-page" name="banner-on-page" style="margin:30px" >

<option value="">Select Banner On Page</option>
   <option value="home">Home</option>
   <option value="automotive">Automotive</option>
   <option value="home-and-garden">Home & Garden</option>
   <option value="electronics">Electronics & Computers</option>
   <option value="sports-and-fitness">Sports & Fitness</option>
   
</select>
<br/>



                   <!-- end banner on page -->




                    <!-- Start Banner type -->

                    <label for="banner-type">Banner Type</label>

<select id="banner-type" name="banner-type" onchange="showDiv(this)" style="margin-left:60px">

<option value="">Select Banner Type</option>
   <option value="Simple">Simple</option>
   <option value="Discount">Discount</option>
</select>

<div id="simple_div" style="display:none;">
<!-- {!! view_render_event('bagisto.admin.settings.slider.create.after') !!} -->
</div>

<div id="hidden_div" style="display:none;">

<!-- start discount banner data -->
<div class="container-fluid mt-5">
        <div class="row">
            <div class="col">

                <p>
                <h2 class="url-banner-txt w-100 text-left ml-5 px-4">Discount banner<i class="fa fa-times-circle-o"
                        style="margin-left: 4vw; font-size:1.2vw; color:#C4161C;"></i></h2>
                </p>

                <div class="card w-50 text-center p-2"
                    style="background: #F1F1F1; border: 1px solid rgba(0, 0, 0, 0.1);">
                   
                        <div class="row">
                            <div class=" col dropdown mt-3">
                                
                            <select id="discount" name="discount" style="width:100%" >
                             <option value="" > %off</option>
                             <option value="5">5%</option>
                             <option value="10">10%</option>
                             <option value="15">15%</option>
                             <option value="20">20%</option>
                             </select>
                            
                            
                            </div>
                        </div>
                        <div class="row">
                            <div  class=" col dropdown mt-3">
                            <select id="category" name="category" style="width:100%" >
                             <option value="" > Category</option>
                             <option value="automotive">Automotive</option>
                             <option value="home-and-garden">Home & Garden</option>
                             <option value="electronics-and-computers">Electronics & Computers</option>
                             <option value="sports-and-fitness">Sports & Fitness</option>
                             
                             </select>
                            </div>
                        </div>
                        <div class="row">
                            <div  class=" col dropdown mt-3">
                            <select id="sub-category" name="sub-category" style="width:100%" >
                             <option value=""> Sub-category</option>
                             <option value="automotive">Automotive</option>
                             <option value="body">Body</option>
                             <option value="brake-System">Brake System</option>
                             </select>
                            </div>
                        </div>
                                                
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <div style="margin-left:10px" >
{!! view_render_event('bagisto.admin.settings.slider.create.after') !!}
</div>

<!-- end discount banner data -->

</div>


                </div>
            </div>
        </form>
    </div>
@endsection



@push('scripts')
    @include('admin::layouts.tinymce')

    
    <script type="text/javascript">
function showDiv(select){
   if(select.value=="Discount"){
    document.getElementById('hidden_div').style.display = "block";
   } else{
    document.getElementById('hidden_div').style.display = "none";
   }
   if(select.value=="Simple"){
    document.getElementById('simple_div').style.display = "block";
   } else{
    document.getElementById('simple_div').style.display = "none";
   }


} 
</script>
    

    <script>
        $(document).ready(function () {
            tinyMCEHelper.initTinyMCE({
                selector: 'textarea#tiny',
                height: 200,
                width: "100%",
                plugins: 'image imagetools media wordcount save fullscreen code table lists link hr',
                toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor link hr | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat | code | table',
                image_advtab: true,
                templates: [
                    { title: 'Test template 1', content: 'Test 1' },
                    { title: 'Test template 2', content: 'Test 2' }
                ],
            });
        });
    </script>
@endpush

<!-- add css by praveen -->

@push('css')
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Icopns Search and voice search button-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Poppins Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- Open Sans Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Spares And Wears</title>
    <link rel="stylesheet" href="css/add-slider.css" />
    
@endpush

<!-- end css by praveen -->
