@extends('layout.menu')

@section('title')
    {{ Lang::get('contacts.contact')}}
@stop

@section('subtitle')
    {{ Lang::get('contacts.contact_list')}}
@stop

@section('content')

    {{ Datatable::table()
        ->addColumn('id', 'Name', 'Nif')        // these are the column headings to be shown
        ->setUrl(route('api.contact'))          // this is the route where data will be retrieved
        ->setOptions('paging', true)
        ->render() }}

@stop
