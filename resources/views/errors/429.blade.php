@extends('errors::errorPage')

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('errorMessage', __('Too Many Requests'))
