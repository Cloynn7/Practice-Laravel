@extends('errors::errorPage')

@section('title', __('Forbidden'))
@section('code', '403')
@section('errrorMessage', __($exception->getMessage() ?: 'Forbidden'))
