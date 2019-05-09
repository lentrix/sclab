    <p>
        {{Form::label('lname', 'Last Name')}}
        {{Form::text('lname',null, ['class'=>'w3-input'])}}
    </p>

    <p>
        {{Form::label('fname', 'First Name')}}
        {{Form::text('fname',null, ['class'=>'w3-input'])}}
    </p>

    <p>
        {{Form::label('gender', 'Gender')}}
        {{Form::select('gender',['female'=>'Female', 'male'=>'Male'],null, ['class'=>'w3-input'])}}
    </p>

    <p>
        {{Form::label('bdate', 'Birth Date')}}
        {{Form::date('bdate',null,['class'=>'w3-input'])}}
    </p>

    <p>
        {{Form::label('address', 'Address')}}
        {{Form::text('address',null, ['class'=>'w3-input'])}}
    </p>

    <p>
        {{Form::label('phone', 'Phone')}}
        {{Form::text('phone',null, ['class'=>'w3-input'])}}
    </p>

    <p>
        <button class="w3-button w3-teal w3-right">Submit</button>
    </p>

