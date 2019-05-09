<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Template;
use App\TemplateItem;

class TemplateController extends Controller
{
    public function index() {
        $templates = Template::orderBy('name')->get();

        return view('templates.index', compact('templates'));
    }

    public function create() {
        return view('templates.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'price' =>'required|numeric',
        ]);

        $template = Template::create($request->all());

        return redirect("/templates/$template->id");
    }

    public function view(Template $template) {
        return view('templates.view', compact('template'));
    }

    public function edit(Template $template) {
        return view('templates.edit', compact('template'));
    }

    public function update(Request $request, Template $template) {
        $this->validate($request, [
            'name' => 'required',
            'price' =>'required|numeric',
        ]);

        $template->update($request->all());

        return redirect("/templates/$template->id");
    }

    public function addItem(Request $request, Template $template) {
        $this->validate($request, [
            'name' => 'required',
            'normal' => 'required'
        ]);

        $item = \App\TemplateItem::create([
            'template_id' => $template->id,
            'name' => $request['name'],
            'normal' => $request['normal'],
            'order' => $template->nextOrder,
        ]);

        return redirect()->back();
    }

    public function removeItem(TemplateItem $item, Request $request) {
        $item = TemplateItem::find($request['id']);
        if($item) {
            $item->delete();
        }

        return redirect()->back();
    }

    public function moveUp(Template $template, Request $request) {
        $item = TemplateItem::find($request['id']);

        if($item->order>1) {
            $pItem = $item->previousItem;

            $previousOrder = $pItem->order;

            $pItem->order = $item->order;
            $item->order = $previousOrder;
            $pItem->save();
            $item->save();
        }

        return redirect()->back();
    }

    public function moveDown(Template $template, Request $request) {
        $item = TemplateItem::find($request['id']);

        if($item->order < $template->nextOrder-1) {
            $nItem = $item->nextItem;

            $nextOrder = $nItem->order;

            $nItem->order = $item->order;
            $item->order = $nextOrder;
            $nItem->save();
            $item->save();
        }

        return redirect()->back();
    }
}
