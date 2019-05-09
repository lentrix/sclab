<p>
    {{Form::label('generic', 'Generic Name')}}
    {{Form::text('generic',null,['class'=>'w3-input'])}}
</p>

<p>
    {{Form::label('brand', 'Brand')}}
    {{Form::text('brand',null,['class'=>'w3-input'])}}
</p>

<p>
    {{Form::label('description', 'Description')}}
    {{Form::text('description',null,['class'=>'w3-input'])}}
</p>

<p>
    {{Form::label('price', 'Price')}}
    {{Form::text('price',null,['class'=>'w3-input'])}}
</p>

<p>
    {{Form::label('qty_stock', 'Qty Stock')}}
    {{Form::text('qty_stock',null,['class'=>'w3-input'])}}
</p>

<p>
    <button type="submit" class="w3-button w3-teal w3-hover-light-green w3-right">Submit</button>
</p>
