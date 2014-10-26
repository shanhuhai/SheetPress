@extends('admin._layouts.default')

@section('header')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('packages/pagedown/editor.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('packages/pagedown/editor.css') }}'" />

 <script type="text/javascript" src="{{ URL::asset('packages/pagedown/Markdown.Converter.js') }}"></script>
 <script type="text/javascript" src="{{ URL::asset('packages/pagedown/Markdown.Sanitizer.js') }}"></script>
 <script type="text/javascript" src="{{ URL::asset('packages/pagedown/Markdown.Editor.js') }}"></script>
@stop
 
@section('main')
 
    <h2>编辑文章</h2>

    {{ Notification::showAll() }}
     
    @if ($errors->any())
            <div class="alert alert-error">
                    {{ implode('<br>', $errors->all()) }}
            </div>
    @endif

    {{ Form::model($page, array('method' => 'put', 'route' => array('admin.articles.update', $page->id))) }}

        <div class="control-group">
            {{ Form::label('title', 'Title') }}
            <div class="controls">
                {{ Form::text('title') }}
            </div>
        </div>

        <div class="control-group">
            {{ Form::label('wmd-input', 'Content') }}
            {{--<div class="controls">--}}
                {{--{{ Form::textarea('body') }}--}}
            {{--</div>--}}
            <div class="main-area">
                                           <div id="wmd-button-bar"></div>
                                           {{ Form::textarea('body',null, ['class'=>'wmd-input','id'=>'wmd-input']) }}

                                           <div id="wmd-preview" class="wmd-panel wmd-preview"></div>

                                   </div>

        </div>

        <div class="form-actions">
            {{ Form::submit('更新', array('class' => 'btn btn-success btn-save btn-large')) }}
            <a href="{{ URL::route('admin.articles.index') }}" class="btn btn-large">取消</a>
        </div>

    {{ Form::close() }}
 
@stop

@section('footer')
<script>
    var converter2 = new Markdown.Converter();
    var editor1 = new Markdown.Editor(converter2);
    editor1.run();
</script>
@stop