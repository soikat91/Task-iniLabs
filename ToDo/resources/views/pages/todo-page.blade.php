@extends('layouts.app')
@section('content')

@include('componants.ToDo.todo-list')
@include('componants.Todo.todo-delete')
@include('componants.Todo.todo-create')
@include('componants.Todo.todo-update')
@endsection