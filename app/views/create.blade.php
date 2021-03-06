@extends('layout')

@section('content')

<div class="page-header">
        <h1>Create Shopping List</h1>
    </div>

   
    {{ Form::open(array('action' => 'ShoppinglistsController@handleCreate')) }}
        <div class="form-group">
		{{ $errors->first('name', '<span class="error">:message</span>') }}	
            {{ Form::label('name', 'List Name') }}
            	{{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
 		{{ Form::label('monday', 'Monday Meals') }}
            	{{ Form::text('monday', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('tuesday', 'Tuesday Meals') }}
            	{{ Form::text('tuesday', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('wednesday', 'Wednesday Meals') }}
            	{{ Form::text('wednesday', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
              {{ Form::label('thursday', 'Thursday Meals') }}
            	{{ Form::text('thursday', null, array('class' => 'form-control')) }}
        
        </div>
        <div class="form-group">
              {{ Form::label('friday', 'Friday Meals') }}
            	{{ Form::text('friday', null, array('class' => 'form-control')) }}
        
        </div>
        <div class="form-group">
             {{ Form::label('saturday', 'Saturday Meals') }}
            	{{ Form::text('saturday', null, array('class' => 'form-control')) }}
        
        </div>
        <div class="form-group">
             {{ Form::label('sunday', 'Sunday Meals') }}
            	{{ Form::text('sunday', null, array('class' => 'form-control')) }}
        
        </div>

	
        <div class="form-group">
              {{ Form::label('fruit', 'Fruits') }}
            	{{ Form::text('fruit', null, array('class' => 'form-control')) }}
        
        </div>
        <div class="form-group">
            {{ Form::label('vegetable', 'Vegetables') }}
            	{{ Form::text('vegetable', null, array('class' => 'form-control')) }}
        
        </div>
        <div class="form-group">
            {{ Form::label('dairy', 'Dairy') }}
            	{{ Form::text('dairy', null, array('class' => 'form-control')) }}
        
        </div>
        <div class="form-group">
           {{ Form::label('meatsub', 'Meat Substitutes') }}
            	{{ Form::text('meatsub', null, array('class' => 'form-control')) }}
        
        </div>
        <div class="form-group">
            {{ Form::label('meat', 'Meats') }}
            	{{ Form::text('meat', null, array('class' => 'form-control')) }}
        
        </div>
        <div class="form-group">
            {{ Form::label('grain', 'Grains') }}
            	{{ Form::text('grain', null, array('class' => 'form-control')) }}
        
        </div>
        <div class="form-group">
            {{ Form::label('drygoods', 'Dry Goods') }}
            	{{ Form::text('drygoods', null, array('class' => 'form-control')) }}
        
        </div>
        <div class="form-group">
           {{ Form::label('other', 'Other') }}
            	{{ Form::text('other', null, array('class' => 'form-control')) }}
        
        </div>
	{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}
        
        <a href="{{ action('ShoppinglistsController@index') }}" class="btn btn-link">Cancel</a>
    </form>

@stop
