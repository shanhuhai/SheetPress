@extends('admin._layouts.default')

@section('main')

    {{ Notification::showAll() }}

    <a href="{{ URL::route('admin.articles.create') }}" class="btn btn-primary">新建</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>最后修改时间</th>
                <th><i class="icon-cog"></i></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $page)
                <tr>
                    <td>{{ $page->id }}</td>
                    <td><a href="{{ URL::route('admin.articles.edit', $page->id) }}">{{ $page->title }}</a> <a
                            href="{{ URL::route('home.article', $page->id) }}" target="_blank"><button class="btn"> view</button></a></td>
                    <td>{{ $page->updated_at }}</td>
                    <td>
                        <a href="{{ URL::route('admin.articles.edit', $page->id) }}" class="btn btn-success btn-mini pull-left">编辑</a>

                        {{ Form::open(array('route' => array('admin.articles.destroy', $page->id), 'method' => 'delete', 'data-confirm' => 'Are you sure?')) }}
                              <button type="submit" href="{{ URL::route('admin.articles.destroy', $page->id) }}" class="btn btn-danger btn-mini">删除</button>
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop