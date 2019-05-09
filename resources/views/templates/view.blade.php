@extends('layouts.main')

@section('sidebar')

<div class="sidebar">
    <h2>Template Menu</h2>
    <a href="{{url('/templates/create')}}">Create New Lab Template</a>
    <a href="{{url('/templates')}}">Lab Templates</a>
    <a href="{{url('/templates/usage')}}">Usage Report</a>
    <a href='{{url("/templates/$template->id/update")}}'>Update Template</a>
</div>

@stop

@section('content')

<div class="content">

    <h1>View Lab Template</h1>

    <div style="display: grid; grid-template-columns: 1fr 2fr; grid-gap: 18px">
        <div style="grid-column: 1/2">
            <h2>Details</h2>
            <table class="w3-table w3-bordered">
                <tr>
                    <th>Name</th><td>{{$template->name}}</td>
                </tr>
                <tr>
                    <th>Price</th><td>{{money_format("PhP %i", $template->price)}}</td>
                </tr>
                <tr>
                    <th>Remarks</th><td>{{$template->remarks}}</td>
                </tr>
            </table>
        </div>

        <div style="grid-column: 2/-1">
            <button class="w3-button w3-green w3-hover-yellow w3-right" title="Add Item" id="add-item">
                <i class="fa fa-plus"></i>
            </button>
            <h2>Items</h2>

            <table class="w3-table w3-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Normal Values</th>
                        <th>*</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($template->orderedItems as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->normal}}</td>
                        <td>
                            <form action='{{url("/templates/$template->id/move-up")}}'
                                        style="display: inline-block"
                                        method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$item->id}}">
                                <button class="w3-button w3-light-blue w3-tiny w3-padding-small">
                                    <i class="fa fa-arrow-up"></i>
                                </button>
                            </form>

                            <form action='{{url("/templates/$template->id/move-down")}}'
                                        style="display: inline-block"
                                        method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$item->id}}">
                                <button class="w3-button w3-light-blue w3-tiny w3-padding-small">
                                    <i class="fa fa-arrow-down"></i>
                                </button>
                            </form>

                            <form action='{{url("/templates/$template->id/remove")}}'
                                        style="display: inline-block"
                                        method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$item->id}}">
                                <button class="w3-button w3-red w3-tiny w3-padding-small remove" type="button">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="add-item-modal" class="w3-modal">
    <div class="w3-modal-content" style="width: 400px">
        <button class="w3-button w3-black w3-tiny w3-right" id="close-modal">x</button>
        <div style="padding: 20px;">
            <h3>Add Item</h3>
            <form action='{{url("/templates/$template->id/add")}}' method="post">
                {{csrf_field()}}
                <p>
                    <label for="name">Item Name</label>
                    <input type="text" name="name" id="name" class="w3-input">
                </p>
                <p>
                    <label for="normal">Normal Values</label>
                    <input type="text" name="normal" id="normal" class="w3-input">
                </p>
                <p>
                    <button class="w3-button w3-teal w3-hover-light-green">Submit</button>
                </p>
            </form>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
    $("#add-item").click(function(){
        $("#add-item-modal").css('display','block');
    })

    $("#close-modal").click(function(){
        $("#add-item-modal").css('display','none');
    })

    $(".remove").click(function(evt){
        if(confirm("Are you sure to remove this item?"))
            evt.currentTarget.parentNode.submit();
    })
})
</script>
@stop
