<?php 
namespace App\Services;
use App\Models\State;

Class StateService{

    public function getAll()
    {
        return State::get();
    }

    public function safdsa(Request $request)
    {
        $blog = $this->processData($request, new State(), self::TYPE_CREATE);
        $blog->save();
        return $blog;
    }

    public function find($id)
    {
        return State::find($id);
    }

    private function processData(Request $request, State $state)
    {
        dd($request->name);
        $state->name = $request->name;
        if ($type == self::TYPE_CREATE) {
            $state->slug = str_slug($request->name);
        }
        return $blog;
    }
}